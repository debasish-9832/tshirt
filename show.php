<?php include('customconfig.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
	<script type="text/javascript" src="js/fabric.js"></script>
	<script type="text/javascript" src="js/tshirtEditor.js"></script>
	<script type="text/javascript" src="js/jquery.miniColors.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
	 <script type="text/javascript">
	 </script>
	 <style type="text/css">
		
	  
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {  
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
		    -ms-transform:rotate(90deg);		   
		}		
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}

	 </style>
  </head>

  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">

  <!-- Navbar
    ================================================== -->
 <div class="navbar ">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
     
       <div class="nav-collapse" id="main-menu">			
			<ul class="nav" id="main-menu-left">
				<!--<li><a href="case.html">Phone Case</a></li>-->
			</ul>
       </div>
        
     </div>
   </div>
 </div>
 <div class="logo_area">
 <a class="brand" href="index.php"><img src="img/TS.png"></a>
 </div>
    <div class="container">
		<section id="typography">
		  <div class="page-header">
		    <h1 align="center" style="border-bottom:1px solid #cdd5e3;"></h1>
		  </div>
		
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">			
		<div class="container">
    <div class="row">
        <div class="span12">
		
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
				<?php 
		 $workqry = mysql_query("SELECT * FROM picture");
		 while( $fetchwrk = mysql_fetch_array($workqry))
		 {
		  /*$workqry1 = mysql_query("SELECT * FROM picture  ORDER BY id DESC
LIMIT 3");
		  $fetchwrk1 = mysql_fetch_array($workqry1);*/
		?>
                    <tr>
                        <td class="span8">
                        <div class="media">
                        
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo $fetchwrk['front']?>" style="width: 72px; height: 72px;"> </a>
                         <!--   <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo $fetchwrk1['front']?>" style="width: 72px; height: 72px;"> </a>-->
                            <div class="media-body">
                                <h4 class="media-heading "><a href="#" class="md_left">Product name</a></h4>
                                <h5 class="media-heading" > &nbsp;by <a href="#" >Brand name</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="span1" style="text-align: center">
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_POST['qty']?>">
                        </td>
                        <td class="span1 text-center"><strong><?php echo $_POST['unit']?></strong></td>
                        <td class="span1 text-center"><strong><?php echo $_POST['cost2']?></strong></td>
                        <td class="span1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
						<?php }?>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
		
		  </div>
		
		</section>
    </div><!-- /container -->
    
<!-- Footer ================================================== -->
     <div class="container">
	        <p class="pull-right"><a href="#">Back to top</a></p>	        
	      </div> 
<!-- Footer ================================================== -->
    <footer class="footer">      
    <div class="container">
         <div class="span4 ">
         <h3>our service</h3>
         <p align="justify" class="pd_st">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>


          </div>
          <div class="span4 pd_left">
          <h3>help and support</h3>
          <p>About Us</p>
          <p>FAQ</p>
          <p>Contact Us</p>
          <p>Privacy policy</p>
          </div>
          <div class="span3 ">
           <h3>social links</h3>
         <div class="text-center center-block">
        
            <br />
                <a href="#"><i class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="#"><i class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="#"><i class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="#"><i class="fa fa-envelope-square fa-3x social"></i></a>
</div>
          </div>
        </div> 
    </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <script src="js/bootstrap.min.js"></script>    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639689-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
$(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
	  
	  
	  
</script>
<script>
$(function() {
    var action;
    $(".number-spinner button").mousedown(function () {
        btn = $(this);
        input = btn.closest('.number-spinner').find('input');
        btn.closest('.number-spinner').find('button').prop("disabled", false);

        if (btn.attr('data-dir') == 'up') {
            action = setInterval(function(){
                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                    input.val(parseInt(input.val())+1);
					var element = document.getElementById("cost");
var c = element.value;
var element1 = document.getElementById("qty");
var q = element1.value;
var t= c*q;
document.getElementById('cost2').value=t;
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	} else {
            action = setInterval(function(){
                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                    input.val(parseInt(input.val())-1);
					var element = document.getElementById("cost");
var c = element.value;
var element1 = document.getElementById("qty");
var q = element1.value;
var t= c*q;
/*alert(t);*/
document.getElementById('cost2').value=t;
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	}
    }).mouseup(function(){
        clearInterval(action);
    });
	
});
</script>
<script>
 var el = document.getElementById('tcanvas');
    var ctx = el.getContext('2d');
    ctx.lineJoin = "round"
    ctx.strokeStyle = "#000000"; 
    ctx.globalAlpha = "0.2"; 
    ctx.lineWidth = 30; 
    ctx.globalCompositeOperation = "source-over";

    var isDrawing, lastPoint;

    el.onmousedown = function(e) {
        isDrawing = true;
        lastPoint = { x: e.clientX, y: e.clientY };
    };

    el.onmousemove = function(e) {
    if (!isDrawing) return;

        var currentPoint = { x: e.clientX, y: e.clientY };

        ctx.beginPath();
        ctx.moveTo(lastPoint.x, lastPoint.y);
        ctx.lineTo(currentPoint.x, currentPoint.y);
        ctx.closePath();
        ctx.stroke();

        lastPoint = currentPoint;
    };

    el.onmouseup = function() {
        isDrawing = false;
    };

    function clearit() {
        ctx.clearRect(0,0, 1000, 1000);
    }
</script>
  </body>
</html>