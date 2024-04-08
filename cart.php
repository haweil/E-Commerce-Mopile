<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
/* include cart_template */
count($product->getData('cart'))? include ('Template/_cart_template.php'):include ('Template/notFound/_cart_notFound.php');
/* include cart */

/* include new phone */
include ('Template/_new-phones.php');
/* include new phone*/

?>
<?php
// include footer.php file
include ('footer.php');
?>
