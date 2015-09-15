<?php 
 include 'helper/helper.php';
 $p = 0;
 $id = htmlspecialchars($_GET["page_no"]);
 $p = htmlspecialchars($_GET["p"]);
 if(isset($id))
 {
    fetch_page_data($id, $p);
 }
 ?>



























