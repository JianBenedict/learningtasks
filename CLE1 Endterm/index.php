<?php $page = (isset($_GET ['page']) && $_GET['page'] !='') ? $_GET['page'] : '';?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <style>
        <?php include 'style.css'; ?>
        </style>
        
    </head>
        <header>        
        <div id="navigation">
                <a href="index.php">Home</a>
                <a href="index.php?page=Works">My Portfolio</a>
                <a href="index.php?page=about">About</a> 
                <?php  
                switch($page) {
                case "Works":
                include "Works.php";
                break;
                case "about":
                include "about.php";
               break;
                default:
                include "default.php";
                break;
        }
           ?>            
        </div>
        </header>

</html>