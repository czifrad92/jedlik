<?php 
include 'kimeneti_fuggvenyek.php';
$id = intval($_GET["id"]);
fejlec_letrehozas();
   /* BEGIN CONTENT */
   rolunk_szerkesztese($id);
   /* END CONTENT */

/* BEGIN FOOTER */
lablec_letrehozas();
?>