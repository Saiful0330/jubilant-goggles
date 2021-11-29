<?php

require_once "method.php";
$buku = new Buku();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["kode"]))
         {
            $kode=intval($_GET["kode"]);
            $buku->get_buku($kode);
         }
         else
         {
            $buku->get_buku();
         }
         break;
   case 'POST':
         if(!empty($_GET["kode"]))
         {
            $kode=intval($_GET["kode"]);
            $buku->update_buku($kode);
         }
         else
         {
            $buku->insert_buku();
         }     
         break; 
   case 'DELETE':
          $kode=intval($_GET["kode"]);
            $buku->delete_buku($kode);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
}
 
?>