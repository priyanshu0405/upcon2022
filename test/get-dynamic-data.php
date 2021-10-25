<?php
require ("DBController.php");
$dbController = new DBController();
$query = "SELECT * FROM tbl_modal_content WHERE modal = '" . $_GET["modal"] . "'";
$result = $dbController->runQuery($query);
if(!empty($result)) 
{
?>
<img src='<?php echo $result[0]["image"]?>' />
<div class='modal-text'><?php echo $result[0]["modal_content"]?></div>
<?php 
    }
?>