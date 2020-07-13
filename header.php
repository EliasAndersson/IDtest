<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- TODO: make content dynamic -->
    <title>ID kommunikation test theme</title>
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site container-fluid no-padding">
    <header class="main-header row">
        <!-- TODO: make content dynamic -->
        <h1 class="col-12">Lg-o</h1>
    </header>

	<div id="content" class="site-content">