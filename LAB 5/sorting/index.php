<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORTING TECHNIQUES</title>
</head>



<style>
    p
    {
        color: black;
        font-size: 30px;
        font-weight: 100px;
    }
    .container
    {
        text-align: center;
        background-color: aqua;
        display: block;
        margin: 0;
        padding: 0;
    }
</style>

<body>
    <div class="container">
        <?php
        echo "<p>SUBMITTED BY :- TEJENDER UPADHYAY 
        <br>
        SUBMITTED TO :- Dr.ASHISH KUMAR TRIPATHI SIR
        <br>
        2020KUCP1019 C.S.E
        </p>";
        
        // Bubble Sort
        function Bubble_sort($str)
        {
            do {
                $swapped = false;
                for ($i = 0, $c = count($str) - 1; $i < $c; $i++) {
                    if ($str[$i] > $str[$i + 1]) {
                        list($str[$i + 1], $str[$i]) =
                            array($str[$i], $str[$i + 1]);
                        $swapped = true;
                    }
                }
            } while ($swapped);
            return $str;
        }
        $array = array(15, -8, 2, 34, 12, -10, 9);
        echo "<h1>";
        echo 'Bubble Sort using Bubble_sort($str) :';
        echo "</h1>";
        echo "<br>";
        echo "<h2>";
        echo "Original Array :\n";
        echo implode(', ', $array);
        echo "<br>";
        echo "No of Iteration : ";
        print_r((count($array) - 1));
        echo "<br>";
        echo "\nSorted Array\n:";
        echo implode(', ', Bubble_sort($array)) . PHP_EOL;
        echo "</h2>";
        echo "<h3>*************************************************************************************************************************</h3>";




        // Insertion Sort
        function Insertion_sort($str_1)
        {
            for ($i = 0; $i < count($str_1); $i++) {
                $val = $str_1[$i];
                $j = $i - 1;
                while ($j >= 0 && $str_1[$j] > $val) {
                    $str_1[$j + 1] = $str_1[$j];
                    $j--;
                }
                $str_1[$j + 1] = $val;
            }
            return $str_1;
        }
        $array_1 = array(15, -8, 2, 34, 12, -10, 9);
        
        echo "<h1>";
        echo 'Insertion Sort using Insertion_sort($str_1) :';
        echo "</h1>";
        echo "<br>";
        echo "<h2>";
        echo "Original Array :\n";
        echo implode(', ', $array_1);
        echo "<br>";
        echo "No of Iteration : ";
        print_r((count($array) - 1));
        echo "<br>";
        echo "\nSorted Array :\n";
        print_r(Insertion_sort($array_1));
        echo "<br>";
        echo "</h2>";
        echo "<h3>*************************************************************************************************************************</h3>";




        // Selection Sort
        function selection_sort($str_2)
        {
            for ($i = 0; $i < count($str_2) - 1; $i++) {
                $min = $i;
                for ($j = $i + 1; $j < count($str_2); $j++) {
                    if ($str_2[$j] < $str_2[$min]) {
                        $min = $j;
                    }
                }
                $str_2 = swap_positions($str_2, $i, $min);
            }
            return $str_2;
        }

        function swap_positions($str_2_1, $left, $right)
        {
            $backup_old_data_right_value = $str_2_1[$right];
            $str_2_1[$right] = $str_2_1[$left];
            $str_2_1[$left] = $backup_old_data_right_value;
            return $str_2_1;
        }
        $array_2 = array(15, -8, 2, 34, 12, -10, 9);
        
        echo "<h1>";
        echo 'Selection Sort using selection_sort($str_2) :';
        echo "</h1>";
        echo "<br>";
        echo "<h2>";
        echo "Original Array :\n";
        echo implode(', ', $array_2);
        echo "<br>";
        echo "No of Iteration : ";
        print_r(4 * (count($array) - 1));
        echo "<br>";
        echo "\nSorted Array :\n";
        echo implode(', ', selection_sort($array_2)) . PHP_EOL;
        echo "</h2>";
        echo "<h3>*************************************************************************************************************************</h3>";

        ?>
    </div>


</body>

</html>