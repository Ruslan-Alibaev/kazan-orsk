<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>

<form action="mailto:you@yourdmainhere.com" method="post" enctype="text/plain">
    FirstName:<input type="text" name="FirstName">
    Email:<input type="text" name="Email">
    <input type="submit" name="submit" value="Submit">
</form>

<?php get_footer(); ?>