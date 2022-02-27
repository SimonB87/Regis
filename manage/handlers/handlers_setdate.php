<?php 
$previewdate = (isset($_POST["previewdate"])) ? mysqli_real_escape_string($connector, $_POST["previewdate"]) : null;

$eventDataPreviewDate = (isset($previewdate)) ? $previewdate : null;

?>