<? php 
defined("lab2") or die('Access denied');
?>

<?php require_once 'inc/header.php'; ?>

<div id="contentwrapper">
<?php require_once 'inc/leftbar.php'; ?>
<?php require_once 'inc/rightbar.php'; ?>

<?php  require_once $view.'.php' ?>

</div>

<div class="clr"> </div>

<?php require_once 'inc/footer.php' ?>
