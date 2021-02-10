<?php
/**
 * Created by PhpStorm.
 * User: cagat
 * Date: 25.03.2019
 * Time: 22:58
 */

$subject = "<span style='color:red'> Julius Caesar</span>";
$pattern = "/<\/?[^>]+>/";
$replacement = "";

$result = preg_replace($pattern, $replacement, $subject);

echo "Subject : " .$subject;
echo "<br>";
echo "After Replace : ". $result;
echo "<br><br><br> <b>IT ALLOWS TO REMOVE ALL HTML TAGS FROM THE SUBJECT</b>";
