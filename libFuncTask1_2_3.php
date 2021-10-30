<?php

$date = date('l jS \of F Y h:i:s A');
echo $date,'<br/>';

$sizeArray1=9;

$arrTask1 = [0];

$arrTask2 = [0][0];

$arrTask3String = [['Hello', 'world'],
    ['Brad', 'Came', 'to', 'dinner', 'with', 'us'],
    ['He', 'loves', 'tacos']];

$arrTask3FormatString = ['LEFT', 'RIGHT', 'LEFT'];

$intTask3LimitVar = 16;

/*
 * @param int
 * @return array
 */
function getArrayOfTask1($x)
{
    $arrTask1 = [$x];
    for ($j = 0; $j < $x; $j++) {
        $arrTask1[$j] = random_int(1, 9);
    }
    return $arrTask1;
}

/*
 * @param int
 * @return arrey
 */
function getArrayOfTask2($x)
{
    $arrTask2 = [3][$x];

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < $x; $j++) {
            $arrTask2[$i][$j] = random_int(1, 9);
        }
    }
    return $arrTask2;
}

/*
 * @param array
 * @return bool
 */
function сomparisonOfJobValuesTask1($x)
{
    $boolResultTask1 = [];
    $сontrolVariable = 0;

    for ($i = 0; $i < count($x); $i++) {

        if ($x[$i] < $x[$i - 1] && $x[$i] < $x[$i + 1]) {
            $boolResultTask1[$сontrolVariable] = 1;
            $сontrolVariable++;
        } elseif ($x[$i] > $x[$i - 1] && $x[$i] > $x[$i + 1]) {
            $boolResultTask1[$сontrolVariable] = 0;
            $сontrolVariable++;
        } else {
            continue;
        }
    }
    return $boolResultTask1;
}
/*
 * @param array
 * @return woid
 */
function showResultTask1($boolResultTask1)
{
    echo 'Результат работы функции в задании №1','<br>';

    foreach ($boolResultTask1 as  $element)
    {
        echo $element;
        echo',';
    }
    echo'<br>';
    echo str_repeat('*', 30), '<br>';
}
/*
 * @param arrey int
 * @return string
 */
function enumerationOfValuesTask2($arrTask2, $sizeArray1)
{

    $resultArrayTask2=[];
    $y = 0;

    for ($i = 0; $i < count($arrTask2); $i++) {

        for ($j = 0; $j < count($arrTask2[$i]); $j++) {
            echo '    ', $arrTask2[$i][$j];
        }
        echo '<br/>';
    }




    do {
        $tempArray = [];
        echo '<br/>';

        for ($i = 0; $i < count($arrTask2); $i++) {

            for ($j = $y; $j < $y + 3; $j++) {
                echo '    ', $arrTask2[$i][$j];
                array_push($tempArray, $arrTask2[$i][$j]);
            }
            echo '<br/>';
        }

        $tempArray = array_unique($tempArray, SORT_NUMERIC);
        $y++;

        if (count($tempArray) === 9) {
            echo ' 1 This arrey сontains all nambers ', '<br/>';
            $resultArrayTask2[$y]='true';
        } else {
            echo ' 0 This arrey is not сontains all nambers  ', '<br/>';
            $resultArrayTask2[$y]='false';
        }

    } while ($y != $sizeArray1);

    return $resultArrayTask2;
}
/*
 * @param array
 * @return woid
 */
function showResultTask2($resultArrayTask2)
{
    echo '<br>';
    echo 'Результат работы функции в задании №2','<br>';

    foreach ($resultArrayTask2 as $element)
    {
        echo $element;
        echo ',';
    }
    echo '<br>';

}

/*
 * @param array, array, int
 * @return array
 */
function formatArrayStringTask3($arrTask3String, $arrTask3FormatString, $intTask3LimitVar)
{
    foreach ($arrTask3String as $key => $str) {
        $str = implode($str, ' ');

        if (strlen($str) > $intTask3LimitVar) {
            $subStringArr = explode(' ', $str, $intTask3LimitVar);
            $str = implode(array_slice($subStringArr, 0, count($subStringArr) / 2, false), ' ');
            $str1 = implode(array_slice($subStringArr, count($subStringArr) / 2, count($subStringArr) / 2, false), ' ');
            array_push($arrayAfterFormatting, $str);
            array_push($arrayAfterFormatting, $str1);
        }
        else {
            $arrayAfterFormatting[] = $str;
        }
    }
    $contrVar = 0;
    do{
        if (strlen($arrTask3FormatString[$contrVar]) == 5) {
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar, ' ', STR_PAD_LEFT);
           $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+2, '"*', STR_PAD_LEFT);
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+5, '*",' );
            ++$contrVar;
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar, ' ', STR_PAD_LEFT);
           $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+2, '"*', STR_PAD_LEFT);
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+5, '*",' );
        }
        else {
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar, ' ' );
            $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+2, '"*', STR_PAD_LEFT);
           $arrayAfterFormatting[$contrVar] = str_pad($arrayAfterFormatting[$contrVar], $intTask3LimitVar+5, '*",' );
            ++$contrVar;
        }

    }while($contrVar!=4);

    return $arrayAfterFormatting;
}
/*
 * @param array
 * @return woid
 */
function showResultTask3($arrayAfterFormatting)
{
    echo 'Результат работы функции в задании №3','<br>';
    var_dump($arrayAfterFormatting);
    echo '[','<br>';
    echo str_repeat('*', 16), '<br>';

    foreach ($arrayAfterFormatting as $element)
    {
        print_r ($element);
       echo '<br>';
    }
    echo str_repeat('*', 16), '<br>';
    echo ']';
}



getArrayOfTask1($sizeArray1);
getArrayOfTask2($sizeArray1);

$boolArrayTask1 = сomparisonOfJobValuesTask1(getArrayOfTask1($sizeArray1));
showResultTask1($boolArrayTask1);

$boolArrayTask2 = enumerationOfValuesTask2(getArrayOfTask2($sizeArray1), $sizeArray1);
showResultTask2($boolArrayTask2);

showResultTask3(formatArrayStringTask3($arrTask3String, $arrTask3FormatString, $intTask3LimitVar));

?>