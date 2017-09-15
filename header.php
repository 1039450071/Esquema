<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba Esquema</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/font/typicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/validar.js"></script>
 
    <?php wp_head(); ?>   
  </head>
  <body onload="mensaje()">

    

    <header>

        <div class="container menu">
          MENU <span class="typcn typcn-th-menu"></span>
          <?php /* wp_nav_menu(array(
            'content' => false,
            'items_wrap' => '<ul id"menu-top">%3$s</ul>',
            'theme location' => 'navegation'

          ));  */?> 

        </div>


        <div class="container content_slogan">
            <div class="slogan">
              <a>ONE PAGE</a> <br>
              <span>MULTI-PURPOSE THEME</span>
            </div>



        </div>

    <div id="carousel" class="container">


        <div id="slides">
          <ul>
            <li class="slide">
              <div class="quoteContainer">
                <p class="quote-phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
              </div>
              <div class="authorContainer">
                <p class="quote-author">Lorem ipsum</p>
              </div>
            </li>
            <li class="slide">
              <div class="quoteContainer">
                <p class="quote-phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
              </div>
              <div class="authorContainer">
                <p class="quote-author">Lorem ipsum</p>
              </div>
            </li>
            <li class="slide">
              <div class="quoteContainer">
                <p class="quote-phrase">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
              </div>
              <div class="authorContainer">
                <p class="quote-author">Lorem ipsum</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="btn-bar">
          <div id="buttons" class="center-block"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
        </div>


</div>

<div class="container boton_header">
   <a href=""><span class="typcn typcn-arrow-down"></span></a>
</div>

  <script type="text/javascript">
      $(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>




    </header>
