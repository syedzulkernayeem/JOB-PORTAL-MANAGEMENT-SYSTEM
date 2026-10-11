<?php
require 'config/database.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: tracking.php');exit;}
$id=(int)($_POST['application_id']??0);$decision=$_POST['decision']??'';$allowed=['Accepted','Declined'];
if(!$id||!in_array($decision,$allowed,true)){header('Location: tracking.php?id='.$id);exit;}
$stmt=$conn->prepare("UPDATE applications SET candidate_response=? WHERE application_id=? AND status='Accepted'");$stmt->bind_param('si',$decision,$id);$stmt->execute();
header('Location: tracking.php?id='.$id.'&response=1');exit;
?>
