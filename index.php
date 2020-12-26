<?php


$myString="hello WORLD";
echo "EXERCISE 1: "."<br>"."MY STRING IS:  ".$myString;


echo "<table style='width:90%' border='2'>";
echo "<tr>";
echo "<th>Exercise NO</th>";
echo "<th>Used Function</th>";
echo "<th>"."Output"."</th>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Exercise 1.a"."</td>";
echo "<td>"."strtoupper"."</td>";
echo "<td>".strtoupper($myString)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Exercise 1.b"."</td>";
echo "<td>"."strtolower"."</td>";
echo "<td>".strtolower($myString)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Exercise 1.c"."</td>";
echo "<td>"."ucfirst"."</td>";
echo "<td>".ucfirst($myString)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Exercise 1.d"."</td>";
echo "<td>"."ucwords"."</td>";
echo "<td>".ucwords($myString)."</td>";
echo "</tr>";
echo "</table";

// $sampleString="082307";
// echo strlen($sampleString);


?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 2: "."<br>";
echo "<br>";
$sampleString="082307";
$modifiedString=chunk_split($sampleString,2,":");
$updatedString= rtrim($modifiedString,":");
echo $updatedString;

?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 3: "."<br>";
echo "<br>";
$statementString="The quick brown fox jumps over the lazy dog";
$findMe="jumps";
$position=strpos($statementString,$findMe);
if($position===false){
    echo "The string '$findMe' is not found in the sentence '$statementString' ";
}
else{
    echo "The string '$findMe' is found in the sentence '$statementString' and its position is '$position'";

}

?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 4: "."<br>";
echo "<br>";
$var = 15;
$stringVar= strval($var);
echo is_string($stringVar);

?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 5: "."<br>";
echo "<br>";
$path = "www.example.com/public_html/index.html";
$filename= substr(strrchr($path , "/"),1 );
echo $filename;

?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 6: "."<br>";
echo "<br>";
$email ="ayham@example.com";
$username = strstr($email,"@",true);
echo $username;

?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 7: "."<br>";
echo "<br>";
$randomString="HelloFolks";
$last3characters=substr($randomString, -3);
echo $last3characters;

?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 8: "."<br>";
echo "<br>";
$firstValue=65.45;
$secondValue=104.35;
$total=$firstValue+$secondValue;
$totalModified=number_format($total,2);
echo $totalModified;

?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 9: "."<br>";
echo "<br>";
$characters ="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$randomPassword=substr(str_shuffle($characters),0,8);
echo $randomPassword;
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE 10: "."<br>";
echo "<br>";
$theWord="the";
$sampleSentence="the quick brown fox jumps over the lazy dog.";
$replacedSentence=preg_replace('/the/', 'that', $sampleSentence, 1);
// $replacedSentence = substr_replace($sampleSentence,"that",1);
echo $replacedSentence;
?>



<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE pass/fail: "."<br>";
echo "<br>";

$x =88;
if ($x>90){
    echo "A";
}elseif ($x>80 && $x<89){
    echo "B";
}elseif ($x>70 && $x<79){
    echo "c";
}elseif ($x>60 && $x<69){
    echo "D";
}else{
    echo "failed";
}
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE11: "."<br>";
echo "<br>";
$string1="football";
$string2= substr_replace("$string1","o",5,1);
echo $string2;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE12: "."<br>";
echo "<br>";
$songlyrics="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$lyricsparts = explode("\n", $songlyrics);
var_dump($lyricsparts);
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE13: "."<br>";
echo "<br>";
$website="https://www.orange.com/index.php";
$namewithextension= substr(strrchr($website , "/"),1 );
$extension= substr(strrchr($website , "."),0 );
$namewithoutextension=rtrim($namewithextension,$extension);
echo $namewithoutextension;
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE14: "."<br>";
echo "<br>";
$allcharacters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$char="Z";
$charPosition=strpos($allcharacters,$char);
if (($charPosition+1)>= strlen($allcharacters)){
    echo "a";
}
else{
    echo $allcharacters[$charPosition + 1];
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE15: "."<br>";
echo "<br>";
$exampleEmail="rayy@example.com";
$lastPart = strstr($exampleEmail,"@",false);
$modified=ltrim($lastPart,"@");
echo $modified;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE16: "."<br>";
echo "<br>";
$rayyemail="rayy@example.com";
$hexEmail=bin2hex($rayyemail);
echo $hexEmail;
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE17: "."<br>";
echo "<br>";
$originalString="The brown fox";
$addedPortion="quick ";
$theNewString = substr_replace($originalString, $addedPortion,4,0);
echo $theNewString;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE18: "."<br>";
echo "<br>";
$originalSentence="The quick brown fox";
$firstWord=strstr($originalSentence," ",true);
echo $firstWord;
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE19: "."<br>";
echo "<br>";
$numberedString="000547023.24";
while($numberedString[0]== 0){
    $numberedString=ltrim($numberedString,"0");
}
echo $numberedString;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE20: "."<br>";
echo "<br>";
$sentence="The quick brown fox jumps over the lazy dog";
$foxposition=strpos($sentence,"fox");
$trimmedSentence=substr_replace($sentence,"",$foxposition,3);
echo $trimmedSentence;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE21: "."<br>";
echo "<br>";
$sentence="The quick brown fox jumps over the lazy dog///";
$sentenceLength=strlen($sentence);
$n=1;
while($sentence[$sentenceLength-$n]=="/"){
    $sentence = rtrim($sentence,"/");;
    $n++;
}
echo $sentence;
?>

<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE22: "."<br>";
echo "<br>";
$exampleURL="https://www.example.com/5478631";
$lastPart = substr(strrchr($exampleURL,"/"),1);
echo $lastPart;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE23: "."<br>";
echo "<br>";
$stringwithcharacters='\"\1+2/3*2:2-3/4*3';
$toberemoved=  array ( '/' ,'+' , '*' , ':' , '-', '\"', '\\');
$stringwithoutcharacters = str_replace($toberemoved," ",$stringwithcharacters);
echo $stringwithoutcharacters;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE24: "."<br>";
echo "<br>";
$oursentence ="The quick brown fox jumps over the lazy dog.";
$generatedArray =explode(" ", $oursentence);
$slicedArray = array_slice($generatedArray,0,5);
$firstfivewords=implode(" ",$slicedArray);
echo $firstfivewords;
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE25: "."<br>";
echo "<br>";
$stringNumber="2,543.12";
$formatedNumber=str_replace(",","",$stringNumber);
echo $formatedNumber;

?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE26: "."<br>";
echo "<br>";
for ($char="a";$char<="z";$char++){
    
    echo $char ."\n"; 
    if ($char=="z"){
    break;
    }
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE letters pattern: "."<br>";
echo "<br>";
echo "<table style='width:90%' border='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>LETTERS</th>";
echo "<th>"."PATTERN"."</th>";
echo "</tr>";
$x=1;
for ($n="A"; $n<="Z" ; $n++){
echo "<tr>";
echo "<td>".$x."</td>";
echo "<td>".$n."</td>";
echo "<td>".(str_repeat("$x",$x)).(str_repeat("$n",$x))."</td>";
echo "</tr>";
$x++;
if($n=="Z"){
break;
}


}
echo "</table>";
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE stars pattern 1: "."<br>";
echo "<br>";
$n=1;
for($i=0;$i<=5;$i++){
    echo str_repeat("*",$n) ."<br>";
    $n++;
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE stars pattern 2: "."<br>";
echo "<br>";
$n=5;
$z=1;
for($i=0; $i<=5; $i++){
    echo str_repeat('&nbsp;',$n).str_repeat("*",$z) ."<br>";
    $n--;
    $z++;
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "EXERCISE stars pattern 2 (another_way): "."<br>";
echo "<br>";
for($n=0;$n<=5;$n++){
    for($i=5-$n;$i>=0;$i--){
        echo "&nbsp;";
    }
    echo str_repeat("*",$n+1)."<br>";
}
?>





<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #1: "."<br>";
echo "<br>";
for($n=1;$n<=9;$n++){
    echo $n."-";
}
echo 10;


?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #2: "."<br>";
echo "<br>";
$total=0;
for($n=0;$n<=30;$n++){
    $total=$total+$n;
}
echo $total;

?>



<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #3c: "."<br>";
echo "<br>";
$x="A";
for($n=1; $n<=5;$n++){
    for($i=5-$n;$i>=1;$i--){
        echo " A ";
    }
    echo str_repeat(" $x ",$n)."<br>";
    $x++;
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #3b: "."<br>";
echo "<br>";
$x="1";
for($n=1; $n<=5;$n++){
    for($i=5-$n;$i>=1;$i--){
        echo " 1 ";
    }
    echo str_repeat(" $x ",$n)."<br>";
    $x++;
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #4: "."<br>";
echo "<br>";
for($x=1; $x<=5; $x++){
    for($i=$x-1; $i>0; $i--){
        echo " 0 ";
    }
    echo " $x ";
    for($n=5-$x; $n>0;$n--){
        echo " 0 ";
    }
    echo "<br>";
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #5: "."<br>";
echo "<br>";
$factorial=1;
$n=5;
for($i=$n; $i>=1 ; $i--){
    $factorial*=$i;
}
if($n==0){
    $factorial=1;
}

echo $factorial;
?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #6: "."<br>";
echo "<br>";
$Fibonacci=1;
$lastFibonacci=0;
echo $lastFibonacci.", ".$Fibonacci.", ";
for($x=1;$x<=9;$x++){
    $z=$Fibonacci;
    $Fibonacci=$Fibonacci+$lastFibonacci;
    $lastFibonacci=$z;
    echo $Fibonacci.", ";
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #7: "."<br>";
echo "<br>";
$orangestring="OrangeAcademy";
$x=0;
$stringLength=strlen($orangestring);
for($n=0; $n<$stringLength; $n++){
    if($orangestring[$n]=="c"){
        $x=$x+1;
    }
}

echo $x;
?>




<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #8: "."<br>";
echo "<br>";
$x=1;
echo "<table style='width:30%' border='2' cellpadding='3px' and cellspacing='0px'>";
for ($n=1; $n<=6 ; $n++){
    echo "<tr>";
    echo "<td>"."$n*$x =".$n*$x."</td>";
    $x++;
    echo "<td>"."$n*$x =".$n*$x."</td>";
    $x++;
    echo "<td>"."$n*$x =".$n*$x."</td>";
    $x++;
    echo "<td>"."$n*$x =".$n*$x."</td>";
    $x++;
    echo "<td>"."$n*$x =".$n*$x."</td>";
    $x=1;
    }
echo "</table>";
?>





<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #9: "."<br>";
echo "<br>";
$x=1;
echo "<table style='width:270px' border='1'>";
for ($n=1; $n<=8 ; $n++){
    if($n%2==1){
        echo "<tr>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "</tr>";
    }
    else{
        echo "<tr>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "<td style='height:30px;width:30px;background-color:white'></td>";
        echo "<td style='height:30px;width:30px;background-color:black'></td>";
        echo "</tr>";
    }
    
    }
    echo "</table>"
    

?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #10: "."<br>";
echo "<br>";
$x=1;
echo "<table style='width:30%' border='2' cellpadding='3px' and cellspacing='0px'>";
for ($n=1; $n<=10 ; $n++){
    echo "<tr>";
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x++;
    echo "<td>".$n*$x."</td>";
    $x=1;
    }
echo "</table>";
?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #11: "."<br>";
echo "<br>";
for($n=1;$n<=50;$n++){
    if($n%5==0 && $n%3==0){
        echo "FizzBuzz"."<br>";
    }
    elseif($n%5==0){
        echo "Buzz"."<br>";
    }
    elseif($n%3==0){
        echo "Fizz"."<br>";
    }
    else{
        echo "$n"."<br>"; 
    }
    if($n==50){
    break;
    }
}

?>



<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #12a: "."<br>";
echo "<br>";
$z=1;
for($i=1; $i<=5; $i++){
    for($n=$z;$n<=15;$n++){
        $toString.="$i";
        echo $n;
        if(strlen($toString)==$i){
        echo "<br>";
        $toString="";
        $z=$n;
        $z++;
        break;

    }
    }
}
?>


<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #12b: "."<br>";
echo "<br>";
$z=1;
for($i=1; $i<=9; $i++){
    for($n=$z;$n<=65;$n++){
        $toString.="$i";
        echo $n;
        if(strlen($toString)==$i){
        echo "<br>";
        $toString="";
        $z=$n;
        $z++;
        break;
    }
    }
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "For Loop Exercises #13: "."<br>";
echo "<br>";
for($n=1;$n<=9;$n++){
    if($n==9){
    break;
    }
    if($n==1){
        echo "***"."<br>";
    }
    elseif($n==4){
        echo "*****"."<br>";
    }
    else{
        echo "*"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."*"."<br>";
    }
}

?>



<!-- <?php

// $multi = array( array("lujian",27,'amman'),
// 			    array("laith",26,'amman'),
// 				array("hamzeh",26,"Irbid")
//             );
// $names=array();
// $ages=array();
// $address=array();

//     foreach($multi as $key => $value){
//         $names =$value[]
//     }

// }      

// print_r($names);





?> -->





<!-- <?php
// $cars = array (
//     "websites"=> array (
//         "search" => "google",
//         "social" => "fb",
//         "news" => "NY times"
//     ),
//     "friends"=> array(
//         "search",
//         "social",
//         "news" 
//     )
  
// );

// echo $cars["friends"][2];

// $brands=array(); 
// for ($row = 0; $row < 4; $row++) {
//     for($col =0; $col<4; $col++){
//         $brands[].=$cars[][];  
//     }
    
// }
// echo "<pre>";
// print_r ($brands);
// echo "</pre>";

?> -->


<!-- <?php

// $array_name=array(1,2,"ok",3);
// $array_name[2]="any";
// print_r($array_name);

?> -->



<?php 
$marks= array(
    "name"=>array(
        "lujain",
        "Hamzeh",
        "Laith"),
    "age"=>array(
        27,
        26,
        26),
    "Address" => array(
        "Amman",
        "Irbid",
        "Amman")
    
    
    
    );

echo "<pre>";
print_r($marks);
echo "</pre>";



foreach($marks as $key => $value){
    echo "$key >>";
    foreach($value as $key1 => $value1){
        echo $key1.":".$value1."//";
    }
    echo "<br>";
}
?>




<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #1: "."<br>";
echo "<br>";
$year=2000;
if($year%4==0){
    echo "Leap Year";
}
else{
    echo "Not a Leap Year";
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #2: "."<br>";
echo "<br>";
$temp=18;
if($temp<20){
    echo "We are in Winter";
}
else{
    echo "We are in Summer";
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #3: "."<br>";
echo "<br>";
$firstInteger=4;
$secondInteger=4;
function total($x,$y){
    $total=$x+$y;
    if($x==$y){
        return (3*$total);
    }
    else{
        return ($total);
    }
}

echo total($firstInteger,$secondInteger);

?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #4: "."<br>";
echo "<br>";
$n=34;
function the_total($x){
    if($x>100){
        return (3*($x-100));
    }
    else{
        return (100-$x);
    }
}
echo the_total($n);
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #5: "."<br>";
echo "<br>";

$firstNo=10;
$secondNo=30;
function check_function($n,$m){
    $sum1=$n+$m;
    if($sum1 ==30 || $n==30 || $m ==30){
        return true;
    }
}

echo check_function($firstNo,$secondNo);

?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #6: "."<br>";
echo "<br>";
$x=108;
if(190 <= $x && $x <= 210){
    echo $x;
}
elseif(90 <= $x && $x <= 110){
    echo $x;
}
else{
    echo "Not within the range";
}

?>


<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #7: "."<br>";
echo "<br>";
$x=109;
if($x%7 ==0 || $x%3==0){
    echo "yes, it is a multiple of 3 or a multiple of 7";
}
else{
    echo "no, it is not a multiple of 3 or a multiple of 7";
}

?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #8: "."<br>";
echo "<br>";
$anyString="if not hello folks";
$arr1 = explode(' ',($anyString));
if($arr1[0]=="if"){
    echo $anyString;
}
else{
    $ifString="if ";
    $ifString=$ifString.$anyString;
    echo $ifString;
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #9: "."<br>";
echo "<br>";
$thestring="I want to remove this a from the string";
$pos = strpos($thestring, " a ");
echo substr_replace($thestring,"",21,2);
?>


<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #12: "."<br>";
echo "<br>";
$x=3;
$y=1;
$z=-22;

if($x>=$y){
    if($x>=$z){
        echo $x;
    }
    else{
        echo $z;
    }
}
elseif($y>$x){
    if($y>=$z){
        echo $y;
    }
    else{
        echo $z;
    }

}
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #13: "."<br>";
echo "<br>";
$x=101;
$y=99;
$total1=100-$x;
$total2=100-$y;
if($total1<0){
    $total1=-1*$total1;
}
if($total2<0){
    $total2=-1*$total2;
}

if($total1>$total2){
    echo "Y IS CLOSER TO 100";
}
elseif($total2>$total1){
    echo "X IS CLOSER TO 100";
}
else{
    echo "0";
}
?>



<?php
echo "<br>";
echo "<hr>";
echo "Operators Exercises #14: "."<br>";
echo "<br>";
$x=5;
$y=9;

if($x>$y){
    $subtract=$x-$y;
}
else{
    $subtract=$x-$y;
}


if($x ==5 || $y == 5){
    echo 1;
}
elseif($x+$y==5){
    echo 1;
}
elseif($subtract==5){
    echo 1;
}
else{

    echo "All conditions are not applied";
}

?>



