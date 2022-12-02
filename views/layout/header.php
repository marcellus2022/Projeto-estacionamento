<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php if (isset($titulo)): ?>
            <title><?php echo 'Park Now |&nbsp;' . $titulo ?></title>
        <?php else: ?>
            <title>Park Now | Seu veículo em boas mãos</title>
        <?php endif; ?>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAZER O FAVICON -->
        <link rel="icon" href="<?php echo base_url('public/src/img/favicon.ico'); ?>" type="image/x-icon" />

        <!--<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">-->

        <link rel="stylesheet" href="<?php echo base_url('public/plugins/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/fontawesome-free/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/icon-kit/dist/css/iconkit.min.css'); ?>">
        <!--<link rel="stylesheet" href="<?php echo base_url('public/plugins/ionicons/dist/css/ionicons.min.css'); ?>">-->
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>">



        <?php if (isset($styles)): ?>

            <?php foreach ($styles as $style): ?>

                <link rel="stylesheet" href="<?php echo base_url('public/' . $style); ?>">

            <?php endforeach; ?>

        <?php endif; ?>

        <!--
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/jvectormap/jquery-jvectormap.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/weather-icons/css/weather-icons.min.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/c3/c3.min.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/owl.carousel/dist/assets/owl.carousel.min.css'); ?>">
                <link rel="stylesheet" href="<?php echo base_url('public/plugins/owl.carousel/dist/assets/owl.theme.default.min.css'); ?>">
        -->


        <link rel="stylesheet" href="<?php echo base_url('public/dist/css/theme.min.css'); ?>">
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">

            <?php $this->load->view('layout/navbar'); ?>