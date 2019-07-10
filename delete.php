<?php
include'db/DbFunction.php';
$id = $_GET['id'];
$result = $db->deleteData($id);
if($result){
  echo"<script>window.location.href = 'all-data.php';</script>";
}

?>
