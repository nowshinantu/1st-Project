<?php
include '../../db/db.php';

$fileName = $_FILES["Symbol"]["name"];
$tmpName = $_FILES["Symbol"]["tmp_name"];
$filetype = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

$movefile = '../../symbols/' . $_POST["CandidateCode"] . '.' . $filetype;

$dbfile = '../symbols/' . $_POST["CandidateCode"] . '.' . $filetype;
  move_uploaded_file($tmpName, $movefile);
$sql = "INSERT INTO `symbols`( `CandidateCode`, `ElectionCode`, `SymbolName`, `SymbolPath`) VALUES ('".$_POST["CandidateCode"]."','".$_POST["ElectionCode"]."','".$_POST["SymbolName"]."','".$dbfile."')";

if($con->query($sql) === TRUE){
    echo 'successful';
}
else{
    echo 'fail';

}
 ?>
