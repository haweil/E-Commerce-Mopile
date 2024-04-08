<?php
ob_start();
  // include header.php file
    include ('header.php');
?>
<?php
    /* include banner area*/
     include ('Template/_banner-area.php');
    /* include banner area*/

    /* include top-sale */
    include ('Template/_top-sale.php');
    /* include top-sale*/

    /* include Speical-Price*/
    include ('Template/_Special-Price.php');
    /* include Speical-Price*/

    /* include banner ads*/
    include ('Template/_banner-ads.php');
    /* include banner ads*/

    /* include New Phone*/
    include ('Template/_new-phones.php');
    /* include New Phone/

    /* include Blogs*/
    include ('Template/_blogs.php');
    /* include Blogs*/
?>
<?php
 // include footer.php file
    include ('footer.php');
ob_end_flush();
?>