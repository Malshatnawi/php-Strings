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























