<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['page-title']; ?></title>
    <link rel="stylesheet" href="<?=ASSETS?>catalog/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>catalog/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>catalog/css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                <?=Website_Title?>
                <?php
                echo isset($_SESSION['user_email'])? "<span style='font-size:14px;'> | Hi, " . $_SESSION['user_email'] . '</span>':"";
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
    <a class="nav-link nav-link-1 <?= ($data['page-title']=='Photos') ? 'active':'' ?>" aria-current="page" href="<?=ROOT?>index">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 <?=($data['page-title']=='Videos') ? 'active':'' ?>" href="<?=ROOT?>videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 <?=($data['page-title']=='About') ? 'active':'' ?>" href="<?=ROOT?>about">About</a>
                </li>
                <li class="nav-item">
    <a class="nav-link nav-link-4 <?=($data['page-title']=='Contact') ? 'active':'' ?>" href="<?=ROOT?>contact">Contact</a>
                </li>
                <li class="nav-item">
    <a class="nav-link nav-link-4 <?=($data['page-title']=='Upload') ? 'active':'' ?>" href="<?=ROOT?>upload/image">Upload Image</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>