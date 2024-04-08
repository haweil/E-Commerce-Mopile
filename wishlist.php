<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
/* include wishlist_template */
count($product->getData('wishlist'))? include ('Template/_wishlist_template.php'):include ('Template/notFound/_wishlist_notFound.php');
/* include wishlist_template */

/* include top-sale */
include ('Template/_top-sale.php');
/* include top-sale*/

?>
<?php
// include footer.php file
include ('footer.php');
?>
