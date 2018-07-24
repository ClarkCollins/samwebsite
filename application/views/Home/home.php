<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url(); ?>assets/images/E1.jpg" alt="Sam Odoh" style="width:500px; height: 400px;">
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>assets/images/E2.jpg" alt="Sam Odoh" style="width:300px; height: 400px;" >
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>assets/images/E3.jpg" alt="Sam Odoh" style="width:300px; height: 400px;">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>







































