<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING MANIPULATION</title>
    <style>
        p
        {
            text-align: center;
        }
        body {
            background-color: antiquewhite;
            display: block;
            position: absolute;
            color: black;
            font-weight: bold;
            font-size: 20px;
            border: 3px solid grey;
            padding: 5px;
            box-shadow: 10px 10px 5px grey;
            left: 30%;
            top: 10%;
        }

        h1 {
            color: black;
            text-shadow: 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class="name">SUBMITTED BY :- TEJENDER UPADHYAY
        <br>
        SUBMITTED TO :- Dr.ASHISH KUMAR TRIPATHI SIR
        <br>
        INSTITUTE ID :- 2020KUCP1019</p>

        <h1>STRING MANIPULATION</h1>
        <?php
        $string = "Mississippi Alabama Texas Massachusetts Kansas";
        $states = explode(' ', $string);
        echo "<h2>Original Array :</h2>";
        foreach ($states as $i => $value)    print("STATES[$i] = $value <br>");
        echo "<p>****************************************************</p>";

        foreach ($states as $state) {
            if (preg_match('/xas$/', ($state)))        $statesArray[0] = ($state);
            if (preg_match('/^k.*s$/i', ($state)))    $statesArray[1] = ($state);
            if (preg_match('/^M.*s$/', ($state)))    $statesArray[2] = ($state);
            if (preg_match('/a$/', ($state)))        $statesArray[3] = ($state);
            if (preg_match('/^M.*i$/', ($state)))     $statesArray[4] = ($state);
        }

        echo "<h2>Manipulated Array :</h2>";
        foreach ($statesArray as $array => $value)
            print("STATES[$array] = $value <br>");
        ?>

    </div>
</body>

</html>