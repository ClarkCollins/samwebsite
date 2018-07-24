<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samuel Odoh Ministries</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/header.css"  />
    <link rel="icon" type="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico"  />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Footer-with-social-icons.css" type="text/css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
        .modal-dialog {
          width: 350px;
        }
        /*-----------------------back to top css -----------------------------*/
        #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: yellow;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
        width:50px;
        height: 50px
    }

    #myBtn:hover {
        background-color: #555;
    }

    /*/---------------dropdown------------------------/*/
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #15212A;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: whitesmoke;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: ghostwhite;
    color:black;
}

.dropdown:hover .dropdown-content {
    display: block;
}



/*////Corousel//////////*/
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 20px;
}
#searchbox{
    padding-top: 6px;
    margin: auto;
    border: 3px;
}
    </style>
</head>
<body style="padding:0px; margin:0px;background-color: #F5F5F5; font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    
    <nav class="navbar-inverse">
        <div class="menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div id="searchbox" class="search-container">
                        <form action="https://www.google.com/search" method="get" name="searchform" target="_blank">
                            <input style="width: 250px; float: left" id="searchbtn" required type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index.php/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<!--                        <li class="dropdown"><a href="#"> Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="dropdown-content">
                                <a href="#">Cert. Enterprise</a>
                                <a href="#">Cert. Management</a>
                            </div>
                        </li>-->
                        <li><a href="<?php echo base_url(); ?>index.php/home/about"> About</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/contact"> Contact</a></li>
                        <li><a href="#"> Archive </a></li>
                     
                    </ul>
                </div>
            </div>
        </div>
    </nav>

        <br />
        <br />
        
        <hr />






































































