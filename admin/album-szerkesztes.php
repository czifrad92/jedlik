<?php 
include 'kimeneti_fuggvenyek.php';
$nev = $_GET["name"];
fejlec_letrehozas();
   /* BEGIN CONTENT */
   album_szerkesztese($nev);
   /* END CONTENT */

/* BEGIN FOOTER */
lablec_letrehozas();
?>