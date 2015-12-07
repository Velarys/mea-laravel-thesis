<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">



</head>

<body>
    
    
    <!--BLUR-->
    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12-centered text-center jumbotron">
    </div>
    
    
    
  <!--FOOTER-->  
    
   <div class="modal1">
       
      
       
<button id="btn1" type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-1-modal-lg">
  <strong>ABOUT</strong>
</button>

<!-- Modal -->
<div class="modal fade bs-1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel"><u>ABOUT</u></h4>
      </div>
      <div class="modal-body">
  
      </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
       
       
    
       
       ||
       
       <button id="btn1" type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-2-modal-lg">
           <strong>FEATURES</strong>
</button>

<!-- Modal -->
<div class="modal fade bs-2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel"><u>FEATURES</u></h4>
      </div>
      <div class="modal-body">
  
      </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
       
       
       ||
       
       
    
       
       
       <button id="btn1" type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-3-modal-lg">
           <strong>CONTACT</strong>
</button>

<!-- Modal -->
<div class="modal fade bs-3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel"><u>CONTACT</u></h4>
      </div>
      <div class="modal-body">
  
      </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
       
       
       
       
        
</div>
    
    
<div class="overlay">
   
    <!--<a href=""><strong>About</strong></a>
    ||
    <a href=""><strong>Features</strong></a>
    ||
    <a href=""><strong>Contact</strong></a>-->
    
    <p align="center" style="color:#4a89dc"><strong>2015 MEA</strong></p>
</div>
    


    <!--FORM AND TEXT-->
    
<div class="row">
    <div id="text" class="col-md-3 col-lg-3 visible-lg visible-md hidden-sm hidden-xs col-md-offset-3 col-lg-offset-3">
    <h1><strong><u>Welcome to MEA</u></strong><br/><small style="font-size:50%; color:#383838;">MEA is a mobile application that<br/>allows users to complete and<br/>submit the Edmonton Symptom<br/>Assessment System form that<br/>allows effortless access by<br/>healthcare personnel or their<br/>primary physician.</small></h1>
    </div>

    <div class="col-md-4 col-lg-4">
    <form id="form" method="POST" action="/auth/login">
    {!! csrf_field() !!}
    <h2 class="title"><strong>LOGIN</strong></h2>
        <br/>
        <br/>
  <div class="group">
    <input type="email" name="email" value="{{ old('email') }}"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password" name="password" id="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form> 
   </div>
    
    </div>  

   <!--CAROUSEL-->

      <div id="carousel_fade" class="carousel slide carousel-fade navbar-fixed-top ">
            
        <div class="carousel-inner">
            
            <div class="item active">
               
                <div class="fill" style="background-image:url('images/1.jpg');"></div>
            </div>
            
            <div class="item">
                
                <div class="fill" style="background-image:url('images/2.jpg');"></div>
            </div>
            
            <div class="item">
                
                <div class="fill" style="background-image:url('images/3.jpg');"></div>
            </div>
            

             <div class="item">
                
                <div class="fill" style="background-image:url('images/4.jpg');"></div>
            </div>
            
        
        
        </div>

    </div>
    
    
<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/bootstrap.min.js"></script>

    <script>
    <!-- Script to Activate the Carousel -->    
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    
    
    /*-----------------------------------------------*/
    
    
    $(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });

});
    

        
        
  
         
        
    </script>

</body>
</html>
