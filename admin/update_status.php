<?php
require '../config/database.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: index.php');exit;}
$id=(int)($_POST['application_id']??0);$status=$_POST['status']??'Pending';$allowed=['Pending','Shortlisted','Accepted','Rejected'];
if($id&&!in_array($status,$allowed,true))$status='Pending';
$stmt=$conn->prepare("UPDATE applications SET status=?,candidate_response='Waiting' WHERE application_id=?");$stmt->bind_param('si',$status,$id);$stmt->execute();
header('Location: index.php?updated=1');exit;
?>
