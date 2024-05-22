<!DOCTYPE html>
<!--<html dir="rtl" lang="ar">-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIKAWANKU - <?= esc($title) ?></title>
    <meta name="description" content="Garment Factory Process">
    <meta name="keyword" content="garment,factory,khonkaen,ocomshop">
    <meta name="author" content="ocomshop">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= csrf_meta()?>

    <!-- Google Font: Thai Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('asset/css/adminlte.min.css') ?>"> -->
     <!--<link rel="stylesheet" href="<?php /* echo base_url('asset/css/rtl/adminlte.rtl.min.css') */ ?>"> --> 
	 
    <!-- SweetAlert2 Bootstrap or Dark -->
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2-dark.min.css') ?>">
    <!-- DataTables -->
 	<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css') ;?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/datatablesjs/Responsive-2.2.9/css/responsive.bootstrap5.min.css') ;?>"> 
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatablesjs/StateRestore-1.1.1/css/stateRestore.bootstrap5.min.css') ?>">
    <!-- Dark style -->
    <!--<link rel="stylesheet" href="<?php /* echo base_url('asset/css/dark/adminlte-dark-addon.min.css')*/ ?>">  --> 
</head>