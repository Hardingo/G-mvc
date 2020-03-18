<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME?></title>
    <script src="https://kit.fontawesome.com/f344d4e75d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo URLROOT ?>"><?php echo SITENAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto" id="navbar-list">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT ?>"><i class="fas fa-home"></i> Home</a>
                </li>
                <?php if(isset($_SESSION["first_name"])):?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'overview' ?>"><i class="fas fa-eye"></i> Overview</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> E-Management <i
                            class="fas fa-angle-left rotate"></i></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'employees/add'?>"><i class="fas fa-user-plus"></i>
                        Add</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'employees/edit'?>"><i class="fas fa-edit"></i>
                        Edit</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'datasets' ?>"><i class="fas fa-database"></i> Data</a>
                </li>
                <?php endif;?>
            </ul>

            <ul class="navbar-nav">
                <?php if(!isset($_SESSION["first_name"])):?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . 'users/register'?>"><i class="fas fa-home"></i>
                        Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . 'users/login'?>"><i class="fas fa-sign-in-alt"></i>
                        Log In</a>
                </li>
                <?php endif;?>
                <?php if(isset($_SESSION["first_name"])):?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . 'users/logout'?>"><i class="fas fa-sign-out-alt"></i>
                        Log Out</a>
                </li>
                <?php endif ;?>
            </ul>
        </div>
    </nav>