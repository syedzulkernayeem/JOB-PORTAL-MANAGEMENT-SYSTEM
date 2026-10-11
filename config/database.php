<?php
$conn=new mysqli('localhost','root','','job_portal_db');
if($conn->connect_error){die('Database connection failed: '.$conn->connect_error);}
$conn->set_charset('utf8mb4');
$conn->query("ALTER TABLE applications ADD COLUMN IF NOT EXISTS candidate_response ENUM('Waiting','Accepted','Declined') NOT NULL DEFAULT 'Waiting' AFTER status");
$conn->query("ALTER TABLE jobs ADD COLUMN IF NOT EXISTS company_name VARCHAR(150) NOT NULL DEFAULT 'Career Hub Company' AFTER category_id");
?>
