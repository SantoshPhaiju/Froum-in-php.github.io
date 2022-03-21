<?php
 ob_start();

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://kit.fontawesome.com/6debaee035.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>iDiscuss: Coding Forum</title>
    <style>
        .header-admin {
            width: 100%;
            background: #1e90ff;
            text-align: center;
            padding: 15px;
        }

        .logo {
            display: inline-block;
            width: 60%;
        }

        .logo img {
            width: 100%;
        }

        #admin-logout {
            margin: 10px 0;
            display: inline-block;
            text-transform: uppercase;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            font-size: 18px;
        }

        #admin-logout:hover {
            text-decoration: underline;
        }

        #admin-menubar {
            width: 100%;
            background: #f9f9f9;
        }

        #admin-menubar .admin-menu {
            margin-bottom: 0px;
        }

        #admin-menubar li {
            display: inline-block;
            margin: 0 5px 0 0;
        }

        #admin-menubar .admin-menu li a {
            color: #1e90ff;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            padding: 7px 15px;
            display: block;
            transition: all 0.3s;
            cursor: pointer;
        }

        #admin-menubar .admin-menu li a:hover {
            color: #fff;
            background-color: #1e90ff;
        }
        
        .buttonCall {
            width: 250px;
            margin: 0px auto;
            padding: 10px 20px;
            background: #2487ce;
            font-size: 20px;
            border-radius: 5px;
            color: #fff;
            display: flex;
            justify-content: center;
        }

        .buttonCall:hover {
            background: #25a1fa;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER! -->
    <div class="header-admin">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="/forum/admin/upload/logo.png" alt="" class="logo">
                </div>

            </div>
        </div>


    </div>

    <div id="admin-menubar" style="padding: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="admin-menu">
                        <li> <a href="index.php">Home</a> </li>
                        <li> <a href="about.php">About</a> </li>
                        <li> <a href="contact.php">Contact</a> </li>
                        <li> <a data-bs-toggle="modal" data-bs-target="#loginModal">login</a></li>
                        <li><a data-bs-toggle="modal" data-bs-target="#signupModal">signup</a></li>
                        <?php
                        include 'partials/_loginModal.php';
                        include 'partials/_signupModal.php';

                        ?>
                    
                </div>
                <div class="col-md-4">
                <div class="input-group ps-5">
                    <?php
            
            
                    echo '<form action="search.php" method="GET" style="display: inherit;">';
                    
                            echo '<div id="navbar-search" style="height: auto; display: inherit;" class="form-outline">
                                <input name="search" type="search" id="form1" placeholder="Search" class="form-control" />
                            </div>
                            <button type="submit" style="height: 37px;" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>';
                    ?>
                </div>
                </ul>
            </div>
        </div>
    </div>
    </div>