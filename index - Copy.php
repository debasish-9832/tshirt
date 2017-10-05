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
	 <link href="css/style.css" rel="stylesheet">
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	 <script type="text/javascript">
	 </script>
	 <style type="text/css">
		 .footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
			}			
	      body {
	        padding-top: 60px;	        
	      }
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
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="#">Custom T-Shirt</a>
       <div class="nav-collapse" id="main-menu">			
			<ul class="nav" id="main-menu-left">
				<li><a href="case.html">Phone Case</a></li>
			</ul>
       </div>
     </div>
   </div>
 </div>

    <div class="container">
		<section id="typography">
		  <div class="page-header">
		    <h1>Customize T-Shirt</h1>
		  </div>
		
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">			
		    <div class="span3">
		    	
		    	<div class="tabbable  borfer_left">  <!-- Only required for left/right tabs -->
				  <ul class="nav nav-tabs">
				  	<li class="active"><a href="#tab1" data-toggle="tab">T-Shirt Options</a></li>				    
				    <li><a href="#tab2" data-toggle="tab">Gravatar</a></li>
				  </ul>
				  <div class="tab-content">
				     <div class="tab-pane active" id="tab1">
                     	<div class="well">
<!--					      	<h3>Tee Styles</h3>-->
<!--						      <p>-->
						      	<select id="">                        
				                    <option value="1" selected="selected">Short Sleeve Shirts</option>
				                    <option value="2">Long Sleeve Shirts</option>                                        
				                    <option value="3">Hoodies</option>                    
				                    <option value="4">Tank tops</option>
								</select>				
<!--						      </p>-->								
					      </div>
                     <div class="scrollbar" id="style-6">
                     <div class="force-overflow">
                     
					      <div class="well">
							<ul class="nav">
								<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
								<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
								<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
								<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
								<li class="color-preview" title="Black" style="background-color:#222222;"></li>
								<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
								<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
								<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
								<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
								<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
								<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
								<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
								<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
								<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
								<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
								<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>							
								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                                	<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
								<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>							
								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                                
							</ul>
						</div>	
      </div>
    </div>
				     	 <!--<div class="force-overflow">
								
				         <img style="height: 50px;cursor:pointer;" class="img-polaroid" src="img/crew_front.png">
				            <img style="height: 50px;cursor:pointer;" class="img-polaroid" src="img/crew_front.png">
                         
                          

				        </div>-->	      
				     </div>				   
				    <div class="tab-pane" id="tab2">
				    	<div class="well">
				    		<div class="input-append">
							  <input class="span2" id="text-string" type="text" placeholder="add text here..."><button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
							  <hr>
							</div>
							<div id="avatarlist">
                                <div class="scrollbar" id="style-6">
                     <div class="force-overflow">
								<img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
				               <img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
				              <img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
				            <img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
				          <img style="cursor:pointer;" class="img-polaroid" src="img/invisibleman.jpg">
				        </div>
                        </div>
							</div>	
                            
                   
                       	    		
				    	</div>	
                          <div class="force-overflow">
								
				        
                          <button onClick="" style="font-size:24px">Button <i class="fa fa-paint-brush"></i></button>
                          

				        </div>			      
				    </div>
				  </div>
				</div>				
		    </div>		
		    <div class="span6">		    
		    		<div align="center" style="min-height: 32px;">
		    			<div class="clearfix">
							<div class="btn-group inline pull-left" id="texteditor" style="display:none">						  
								<button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>		                      
							    <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
								    <li><a tabindex="-1" href="#" onClick="setFont('Arial');" class="Arial">Arial</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Delicious');" class="Delicious">Delicious</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Verdana');" class="Verdana">Verdana</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Georgia');" class="Georgia">Georgia</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Courier');" class="Courier">Courier</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Impact');" class="Impact">Impact</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Monaco');" class="Monaco">Monaco</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Optima');" class="Optima">Optima</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Plaster');" class="Plaster">Plaster</a></li>
								    <li><a tabindex="-1" href="#" onClick="setFont('Engagement');" class="Engagement">Engagement</a></li>
				                </ul>
							    <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png" height="" width=""></button>
							    <button id="text-italic" class="btn" data-original-title="Italic"><img src="img/font_italic.png" height="" width=""></button>
							    <button id="text-strike" class="btn" title="Strike" style=""><img src="img/font_strikethrough.png" height="" width=""></button>
							 	<button id="text-underline" class="btn" title="Underline" style=""><img src="img/font_underline.png"></button>
							 	<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
						 		<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
								  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>							  
							<div class="pull-right" align="" id="imageeditor" style="display:none">
							  <div class="btn-group">										      
							      <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
							      <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>
							      <button id="flip" type="button" class="btn" title="Show Back View"><i class="icon-retweet" style="height:19px;"></i></button>
							      <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
							  </div>
							</div>			  
						</div>												
					</div>					  		
				<!--	EDITOR      -->		
				
                
						<form method="POST" enctype="multipart/form-data" action="save.php" id="form1">
					<div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
						<img id="tshirtFacing" src="img/crew_front.png"></img>
						
						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					
							<canvas id="tcanvas" width=200 height="400" class="hover" ></canvas>
						</div>
						
						
					</div>
					
					
            <input name="hidden_data" id='hidden_data' type="hidden"/>
			 <input type="button" onClick="capture()" value="Upload" />
			 <input type="button" onClick="brush()" value="brush" />
			 <input type="button" class="btn error" value="clear"
             	onclick="sketcher.clear();" />
        </form>
		 <script>
          function capture() {
		  //alert("hi");
  $('#shirtDiv').html2canvas({
   onrendered: function (canvas) {
                //Set hidden field's value to image data
    $('#hidden_data').val(canvas.toDataURL("image/png"));
                //Submit the form1
    document.getElementById("form1").submit();
   }
  });
 }
        </script>
<!--					<div id="shirtBack" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255); display:none;">-->
<!--						<img src="img/crew_back.png"></img>-->
<!--						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					-->
<!--							<canvas id="backCanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>-->
<!--						</div>-->
<!--					</div>						-->
								
				<!--	/EDITOR		-->
		    </div>
		
		    <div class="span3">
		      <div class="well">
		      	<h3>ORDER INFO</h3>
			      <p>
			      	<table class="table">
                    <tr>
			      			<td>Size</td>
			      			<td align="right">
  <select name="cars">
    <option value="s">s</option>
    <option value="m">m</option>
    <option value="l">l</option>
    <option value="xl">xl</option>
  </select>

</td>
			      		</tr>
			      		<tr>
			      			<td>Cost</td>
			      			<td align="right"><input type="text" id="cost" value="12" readonly></td>
			      		</tr>
			      		<tr>
			      			<td>Qty</td>
			      			<td align="right"> <div class="span3 bold-text left-align padding_adjust_i">          
                <div class="inline">
                  
                       
                            <div class="btn-group number-spinner">
                                <span class="input-prepend data-dwn">
                                    <button class="btn btn-default" data-dir="dwn"><i class="fa_icon icon-minus"></i></button>
                                </span>
                                <input type="text" readonly class="form-control input-box text-center" id="qty" value="1" min="0" max="180" style="max-width:100px;">
                                <span class="input-append data-up">
                                    <button class="btn btn-default" data-dir="up"><i class="fa_icon icon-plus"></i></button>
                                </span>
                            </div> 
                      
                   
                </div>    
     	    </div></td>
			      		</tr>
			      		
			      		<tr>
			      			<td><strong>Total</strong></td>
			      			<td align="right"><strong><input type="text" id="cost2"  value="12" readonly></strong></td>
			      		</tr>
			      	</table>			
			      </p>
					<button type="button" class="btn btn-large btn-block btn-success" name="addToTheBag" id="addToTheBag">CONTINUE</button>
		      </div>		      		       		   
		    </div>
		
		  </div>
		
		</section>
    </div><!-- /container -->
    
<!-- Footer ================================================== -->
      <footer class="footer">      
      	<div class="container">
	        <p class="pull-right"><a href="#">Back to top</a></p>	        
	      </div>       
    </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <script src="js/bootstrap.min.js"></script>    
   
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

  </body>
</html>