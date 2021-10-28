<?php
$data = date('l jS \of F Y h:i:s A');
$sizeArrey1 = $_REQUEST['sizeArrey1'];
echo $sizeArrey1;
echo '<br/>';
//********************************************************************
$arrTask1 = [0];
//********************************************************************
$arrTask2 = [0][0];
//********************************************************************
$arrTask3String = [["Hello", "world"],
    ["Brad", "Came", "to", "dinner", "with", "us"],
    ["He", "loves", "tacos"]];
$arrTask3FormatString = ["LEFT", "RIGHT", "LEFT",];
$intTask3LimitVar = 16;
//********************************************************************

function getArreyOfTask1($x)
{
    $arrTask1 = [$x];
    for ($j = 0; $j < $x; $j++) {
        $arrTask1[$j] = random_int(1, 9);
    }
    return $arrTask1;
}

function getArreyOfTask2($x)
{
    $arrTask2 = [3][$x];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < $x; $j++) {
            $arrTask2[$i][$j] = random_int(1, 9);
        }
    }
    return $arrTask2;
}

function сomparisonOfJobValues($x)
{
    $boolResultTask1 = [];
    $сontrolVariable = 0;
    var_dump($x);
    echo '  <br/>';
    for ($i = 0; $i < count($x); $i++) {
//         var_dump($boolResultTask1);
//        echo '  <br/>';
//        echo $boolResultTask1[$сontrolVariable];
        if ($x[$i] < $x[$i - 1] && $x[$i] < $x[$i + 1]) {
            $boolResultTask1[$сontrolVariable] = '1';
            $сontrolVariable++;
        } elseif ($x[$i] > $x[$i - 1] && $x[$i] > $x[$i + 1]) {
            $boolResultTask1[$сontrolVariable] = '0';
            $сontrolVariable++;
        } else
            continue;
    }
    return $boolResultTask1;
}

function enumerationOfValuesTask2($arrTask2, $sizeArrey1)
{
//                  var_dump($x);
    echo '<br/>';
//                                           echo $x+'<br/>';
    for ($i = 0; $i < count($arrTask2); $i++) {
        for ($j = 0; $j < count($arrTask2[$i]); $j++) {
            echo '    ', $arrTask2[$i][$j];
        }
        echo '<br/>';
    }
//    echo '<br/><br/>';
    $y = 0;
    do {
        $tempArrey = [];
        echo '<br/>';
        for ($i = 0; $i < count($arrTask2); $i++) {
            for ($j = $y; $j < $y + 3; $j++) {
                echo '    ', $arrTask2[$i][$j];
                array_push($tempArrey, $arrTask2[$i][$j]);
            }
            echo '<br/>';
        }
        $tempArrey = array_unique($tempArrey, SORT_NUMERIC);
//        var_dump($tempArrey);
        $y++;
        if (count($tempArrey) === 9)
            echo ' 1 This arrey сontains all nambers ', '<br/>';
        else
            echo ' 0 This arrey is not сontains all nambers  ', '<br/>';
    } while ($y != $sizeArrey1);
}

function showResultTask3($arrTask3String, $arrTask3FormatString, $intTask3LimitVar)
{
    var_dump($arrTask3String);
    echo str_repeat("*", $intTask3LimitVar), "*<br>";
    foreach ($arrTask3String as $key => $str) {
        echo "*", implode($str," " ), "*<br>";
        $str=implode($str," " );
//        echo strlen($str),"*<br>";// убрать в будущем



        if(strlen($str)>$intTask3LimitVar){
            $subStringArr=explode(' ',$str,$intTask3LimitVar);

            echo $str ,"<br>";

var_dump($subStringArr);

        }
//        foreach ($str as $key => $str1)

//            echo "*", print($key), printf("[%s]\n", $str), "*<br>";
    }
    echo str_repeat("*", 16), "<br>";
}


//getArreyOfTask1($sizeArrey1);
//getArreyOfTask2($sizeArrey1);
//$boolArrey = сomparisonOfJobValues(getArreyOfTask1($sizeArrey1));
//var_dump($boolArrey);
//enumerationOfValuesTask2(getArreyOfTask2($sizeArrey1), $sizeArrey1);

showResultTask3($arrTask3String, $arrTask3FormatString, $intTask3LimitVar);

?>