<!doctype html>
 <!-- credit has been given to people that create this plugin as this is GNU and CSSL -->
 <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/         -->
 <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
 <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
 <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
 <!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
 <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
 <head>
  <?php
    // Initialize shopping cart
    // If your page calls session_start() be sure to include jcart.php first
    include_once('jcart/jcart.php');
    session_start();    
    
    // if user already login
    if(isset($_SESSION['name']))
     $name = $_SESSION['name'];
    else
     $name = "Guest of Honor";
  ?>
  <meta charset="utf-8" />
  <!-- Use the .htaccess and remove these lines to avoid edge case issues  More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>.: Designing Mode :.</title>
  <meta name="description" content="" />
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/drawme.css" />
  <link rel="stylesheet" href="css/drawing.css" />
  <link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.18.custom.css" />
  <link type="text/css" rel="stylesheet" href="css/jquery.stepy.css" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
  <link rel="stylesheet" type="text/css" href="upload/styles.css" />
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="script/modernizr-2.5.3.min.js"></script>
  <style>
   canvas { border: 1px solid #ccc; }
	
   #accordion { width: 200px; float: left; }
   #accordion2 { width: 200px; float: left; }
   #accordion3 { width: 200px; float: left; }
	
   h2 { clear: both; }

   ul.sel_design { list-style-type: none; margin: 0px; padding: 0px; display: block; clear: both; overflow: hidden; }
   ul.sel_design li { width: 200px; float: left; border: 4px solid #ccc; margin-right: 10px; cursor: pointer; } 
   ul.sel_design li img { opacity:0.7; filter:alpha(opacity=70); }
   ul.sel_design li span { display: block; text-align: center; } 
   ul.sel_design li:hover { border: 4px solid #666; }
   ul.sel_design li:hover img { opacity:1.0; filter:alpha(opacity=100); }
   ul.sel_design li.selected { border: 4px solid #000; }
   ul.sel_design li.selected img { opacity:1.0; filter:alpha(opacity=100); }
   ul.sel_strip { list-style-type: none; margin: 0px; padding: 0px; display: block; clear: both; overflow: hidden; }
   ul.sel_strip li { width: 200px; float: left; border: 4px solid #ccc; margin-right: 10px; cursor: pointer; } 
   ul.sel_strip li img { opacity:0.7; filter:alpha(opacity=70); }
   ul.sel_strip li span { display: block; text-align: center; } 
   ul.sel_strip li:hover { border: 4px solid #666; }
   ul.sel_strip li:hover img { opacity:1.0; filter:alpha(opacity=100); }
   ul.sel_strip li.selected { border: 4px solid #000; }
   ul.sel_strip li.selected img { opacity:1.0; filter:alpha(opacity=100); }

   small { font-weight: normal; font-style: italic; }
	
   fieldset { padding-bottom: 20px; }
	
   .addon_item 
   { width: 250px; 
     padding: 5px; 
     margin-right: 10px; 
     float: left;
	 border: 3px solid #ccc; 
	 height: 330px; 
	 margin-bottom: 10px;
   }
	
   ul#confirmlist { width: 600px; }
   ul#confirmlist, ul#confirmlist ul { list-style-type: none; margin: 0px; padding: 0px; clear: left; }
   ul#confirmlist li { font-size: 14px; font-weight: bold; padding-bottom: 3px; padding-top: 3px; }
   ul#confirmlist > li { border-top: 1px dotted #ccc; }
   ul#confirmlist li li { font-weight: normal; border-top: 1px dotted #ccc; padding-left: 10px; }
   ul#confirmlist li span:first-child { width: 200px; float: left;}
   ul#confirmlist > li span:first-child { width: 200px; margin-right: 10px; float: left;}
   ul#confirmlist li span:nth-child(3){ width: 100px; text-align: right; float: right; font-weight: bold; }
	
   .confirm_thumb { margin-right: 10px; margin-bottom: 10px; border: 4px solid #ccc; }
   .col_thumb { border: 1px solid #ccc; }
	
   .sbox { height: 15px; width: 15px; display: block; float: left; border: 1px solid #ccc; }
  </style>
 </head>
 <body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header></header>
  <div role="main">
   <h1>Custom myShirt Design Arena</h1><div id="cartbar"><div id="jcart"><?php $jcart->display_cart();?></div></div>
   <form id="wizardform" method="post" action="catalog.php">
    <input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
    <?php 
     // This code get value from catalog.html and process which shirt does visitor wants
     $shirt_type = $_POST["shirt_type"];
     
     switch ($shirt_type)
     { case '1'  : print '<input type="hidden" name="inp_selected_design" value="corporate_shirt1">';
                   print '<input type="hidden" name="selected_design" value="Corporate Shirt Type 1">';
                   $link = "images\/drawing\/corporate_shirt1.png";
                   break;
       case '2'  : print '<input type="hidden" name="inp_selected_design" value="corporate_shirt2">';
                   print '<input type="hidden" name="selected_design" value="Corporate Shirt Type 2">';
                   $link = "images\/drawing\/corporate_shirt3.png";
                   break;
       case '3'  : print '<input type="hidden" name="inp_selected_design" value="roundneck_long">';
                   print '<input type="hidden" name="selected_design" value="t-Shirt Long Sleeve Roundneck">';
                   break;
       case '4'  : print '<input type="hidden" name="inp_selected_design" value="roundneck_short">';
                   print '<input type="hidden" name="selected_design" value="t-Shirt Short Sleeve Roundneck">';
                   break;
       //case '5'  : print '<input type="hidden" name="inp_selected_design" value="colarneck_long">';
       //            print '<input type="hidden" name="selected_design" value="t-Shirt Long Sleeve Colarneck">';
       //            break;
     }
          
     print "<input type=\"hidden\" name=\"design_id\" value=\"$shirt_type\">";
    ?>
    <!-- shirt_type 1 and 2 are not available as they are ready made shirt -->
    <!-- shirt_type other than 1 and 2 are available to custom here        -->
    <!-- those shirt can be colored, putting text and image                -->
    <fieldset title="STEP 1">
     <legend>set the design</legend>
     <div id="categories">
      <div id="tabs">
       <ul>
        <li><a href="#tabs-1">Input Color</a></li>
        <li><a href="#tabs-2">Input Texts</a></li>
        <li><a href="#tabs-3">Input Image</a></li>
       </ul>
       <div id="tabs-1"><div id="accordion"></div></div>
       <div id="tabs-2">
        <h2>I like to add word (+ RM8)</h2>
        <h4>Front Design</h4>
        <p><label for="p_scnts"><input type="text" name="front_text" size="20" value="" placeholder="Input Text" /></label><a href="#" id="front_icon_ok"><img id="front_ok_click" src="images/icon/ok.png" /></a><a href="#" id="front_icon_cancel"><img id="front_cancel_click" src="images/icon/cancel.png" /></a></p>
        <hr>
        <h4>Back Design</h4>
        <p><label for="p_scnts"><input type="text" name="back_text" size="20" value="" placeholder="Input Text" /></label><a href="#" id="back_icon_ok"><img id="back_ok_click" src="images/icon/ok.png" /></a><a href="#" id="back_icon_cancel"><img id="back_cancel_click" src="images/icon/cancel.png" /></a></p>
       </div>
       <div id="tabs-3">
        <h2>I like to add logo (+ RM8)</h2>
        <h4>Front Design</h4>
        <div id="front_upload" ><span>Upload File<span></div>
        <p><font color="red">* must be in 640x480 dimension</font></p>
		<input type="hidden" name="front_logo" value="" /><input type="hidden" name="frontlogo_width" value="" /><input type="hidden" name="frontlogo_height" value="" />
        <img id="frontimg_logo" src="" />
		<hr>
        <h4>Back Design</h4>
        <div id="back_upload" ><span>Upload File<span></div><span id="status" ></span>
        <p><font color="red">* must be in 640x480 dimension</font></p>
		<input type="hidden" name="back_logo" value="" /><input type="hidden" name="backlogo_width" value="" /><input type="hidden" name="backlogo_height" value="" />
       </div>
      </div>
     </div>
     <canvas id="front_shirt_canvas" width="660" height="400"></canvas>
     <textarea name="shirt_snapshot"></textarea>
     <div style="clear: both"> </div>
    </fieldset>
    <!-- in this fieldset, users can confirm their shirt and quantity before adding it to the cart -->
    <!-- the page will show initial price per unit and cart will calculate total of the selection  -->
    <!-- after 'add to cart' is clicked, user will be guided back to page catalog to perform more  -->
    <!-- transaction or just click checkout of they are done                                       -->
    <fieldset title="STEP 2">
     <legend>confirm</legend>
     <img src="" id="shirt_thumbnail" width="250" class="confirm_thumb" />
     <p><input type="text" name="quantity" size="12" value="30" /><input type="button" id="calculate" value="Calculate" onclick=calculate_all() />
     <br /><font color="red" size="1">*must above 30 units</font></p>
     <input type="hidden" name="previous_quantity" value="0" /><input type="hidden" name="total" value="0" />
     <ul id="confirmlist">
      <li>
       <span id="shirt_name">Round Neck Shirt Design</span><span></span><span id="shirt_price">RM20</span>
       <ul id="final_panels"></ul>
      </li>
      <li>
       <span>Add-On</span>
       <ul>
        <li><span>Front Text</span><span id="fronttext_option"></span><span id="fronttext_price"></span></li>
        <li><span>Back Text</span><span id="backtext_option"></span><span id="backtext_price"></span></li>
        <li><span>Front Logo</span><span id="frontlogo_option"></span><span id="frontlogo_price"></span></li>
        <li><span>Back Logo</span><span id="backlogo_option"></span><span id="backlogo_price"></span></li>
       </ul>
      </li>
      <li>
       <span></span><span>Total</span><span id="final_total">RM45</span>
       <input type="hidden" name="sum_total" value=0 />
      </li>
     </ul>
    </fieldset>
    <input type="submit" class="finish button tip" name="my-add-button" value="Add to Cart" />
   </form>
  </div>
  <!-- JavaScript at the bottom for fast page loading -->

  <script src="script/jquery-1.8.2.min.js"></script>
  <script src="script/jquery-ui-1.8.custom.js"></script>

  <!-- scripts concatenated and minified via build script -->
  <script type="text/javascript" src="script/plugins.js"></script>
  <script type="text/javascript" src="script/script.js"></script>
  <script type="text/javascript" src="script/jcanvas.min.js"></script>
  <script type="text/javascript" src="script/jquery.stepy.min.js"></script>
  <!-- end scripts -->

  <script type="text/javascript" src="jcart/js/jcart.js"></script>
  <script type="text/javascript" src="script/shirt.js"></script>
  <script type="text/javascript" src="upload/js/ajaxupload.3.5.js" ></script>
  <script>
   // this part is used heavily on jquery and javascript
   // the logic and calculation also applies in this area
   
   // define shirt array for right shirt that has been choose
   var theshirt = shirt['roundneck_long'];
   
   // color and html panel initialization
   var colors = [ '#fff','#fff','#fff','#fff', '#fff','#fff', '#fff','#fff' ];
   var color_panels = [ 8,8,8,8,8,8,8,8];
   var panel_html="";
   
   panel_html += "<h3><a href=\"javascript:void(0)\">Panel 4<img height=\"15\" width=\"15\" id=\"panel3_box\" src=\"images\/drawing\/sel_white.png\" style=\"float: right\"><\/a><\/h3><div><input type=\"hidden\" id=\"panel3\" value=\"8\"><br><img src=\"images\/drawing\/selector.png\" usemap=\"#panel_four\" \/><map name=\"panel_four\" id=\"panel_four\"><area shape=\"rect\" coords=\"37,107,68,138\" href=\"javascript:void(0)\" alt=\"Black\" id=\"panel3_13\" class=\"colorsel\" \/><area shape=\"rect\" coords=\"3,107,34,138\" href=\"javascript:void(0)\" alt=\"Purple\" id=\"panel3_12\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"3,72,34,103\" href=\"javascript:void(0)\" alt=\"White\" id=\"panel3_8\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"37,72,68,103\" href=\"javascript:void(0)\" alt=\"Florescent Pink\" id=\"panel3_9\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"71,72,102,103\" href=\"javascript:void(0)\" alt=\"Orange\" id=\"panel3_10\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"106,72,137,103\" href=\"javascript:void(0)\" alt=\"Spectre Yellow\" id=\"panel3_11\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"106,37,137,68\" href=\"javascript:void(0)\" alt=\"Navy\" id=\"panel3_7\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"71,36,102,67\" href=\"javascript:void(0)\" alt=\"Mustard Yellow\" id=\"panel3_6\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"37,37,68,68\" href=\"javascript:void(0)\" alt=\"Red\" id=\"panel3_5\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"3,37,34,68\" href=\"javascript:void(0)\" alt=\"Florescent Green\" id=\"panel3_4\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"106,3,137,34\" href=\"javascript:void(0)\" alt=\"Grey\" id=\"panel3_3\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"71,3,102,34\" href=\"javascript:void(0)\" alt=\"Classic Blue\" id=\"panel3_2\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"37,3,68,34\" href=\"javascript:void(0)\" alt=\"Green\" id=\"panel3_1\" class=\"colorsel\"\/><area shape=\"rect\" coords=\"3,3,34,34\" href=\"javascript:void(0)\" alt=\"Brown\" id=\"panel3_0\" class=\"colorsel\"\/><\/map><\/div>";

   // calling this function will refresh the shirt setting (eg: color, text and image)
   var set_front_shirt = function()
   { theshirt = shirt[$('input[name=inp_selected_design]').val()];
     draw_front_shirt(theshirt);
   }

   // calculation for bulk order is done here
   var calculate_all = function()
   { var grand_total = 0;
     var current = parseInt($('input[name=quantity]').val(), 10);
     var previous = parseInt($('input[name=previous_quantity]').val(),10);
     var total_value = parseInt($('input[name=total]').val(), 10);
     
     if (current != previous)
     { grand_total = total_value * current;
       $('#final_total').html('RM' + grand_total);
       $('input[name=previous_quantity]').val($('input[name=quantity]').val());
     }
   }
   
   // draw selector is left hand tools to manipulate the shirt at right pane
   var draw_selector = function()
   { var numbers = ['one','two','three','four','five','six','seven','eight','nine','ten'];
     var accordion_html = '';
     
     // cleverly selected how much color panel has in one shirt (if the shirt has more than 1 color)
     // and accordion below will display the color panel
     for( i = 0; i < theshirt.panels.length; i++ )
     { temp = panel_html.replace( /Panel 4/gi, 'Panel '+(i+1));
       temp = temp.replace( /panel3/gi, 'panel'+i );
       temp = temp.replace( /panel_four/gi, 'panel_'+numbers[i] );
       accordion_html += temp;
       colors[i] = '#ffffff';
     }
          
     $("#accordion").html( accordion_html );
     $("#accordion").accordion('destroy').accordion(
      { autoHeight: false,
        collapsible: true
      });
             
     var tabHeight = 395;
     $('#tabs').height(tabHeight);
     $('#tabs').tabs();
   }

   // final price is to calculate how much option has user selected and charge it accordingly
   var final_price = function()
   { var final_total = 0;
     $('#shirt_name').html(shirt_name[$('input[name=inp_selected_design]').val()]);
     $('#shirt_price').html('RM' + shirt_price[$('input[name=inp_selected_design]').val()]);
     
     final_total += shirt_price[$('input[name=inp_selected_design]').val()];
    
 	 var bg = shirt[$('input[name=inp_selected_design]').val()];

     var tmp_panels = '';
     var pname = '';
    
     panels = 0;
     panels = bg.panels.length - 1;
    
     for (i=0; i<panels; i++)
     { var col = $("#panel"+i).val();
       pname = "Panel " + (i+1);
       tmp_panels += "<li><span>"+ pname +"</span> <span><small class=\"sbox\" style=\"background-color:"+ sel_color_code[ color_panels[i] ] +"\"></small> "+ sel_color_name[ color_panels[i] ] +"</span> </li>";
     }
    
     $('#final_panels').html(tmp_panels);
       
     // add-on
     // php will show these lines only when user select shirts other than ready made
     <?php
      switch ($shirt_type)
      { case '1' : break;
        case '2' : break;
        default  : print "if ($('input[name=front_text]').val() != \"\")";
                   print "{ $('#fronttext_option').html('Yes');";
                   print "$('#fronttext_price').html('RM' + addon_price['text']);";
                   print "final_total += addon_price['text'];} else";
                   print "{ $('#fronttext_option').html('No');";
                   print "$('#fronttext_price').html('RM0');}\n";
                   
                   print "if ($('input[name=back_text]').val() != \"\")";
                   print "{ $('#backtext_option').html('Yes');";
                   print "$('#backtext_price').html('RM' + addon_price['text']);";
                   print "final_total += addon_price['text'];} else";
                   print "{ $('#backtext_option').html('No');";
                   print "$('#backtext_price').html('RM0');}\n";
                   
                   print "if ($('input[name=front_logo]').val() != \"\")";
                   print "{ $('#frontlogo_option').html('Yes');";
                   print "$('#frontlogo_price').html('RM' + addon_price['text']);";
                   print "final_total += addon_price['text'];} else";
                   print "{ $('#frontlogo_option').html('No');";
                   print "$('#frontlogo_price').html('RM0');}\n";
                   
                   print "if ($('input[name=back_logo]').val() != \"\")";
                   print "{ $('#backlogo_option').html('Yes');";
                   print "$('#backlogo_price').html('RM' + addon_price['text']);";
                   print "final_total += addon_price['text'];} else";
                   print "{ $('#backlogo_option').html('No');";
                   print "$('#backlogo_price').html('RM0');}\n";
      }
     ?>
     
     var qty = $('#quantity').val();
     $('#final_total').html('RM' + final_total);
     $('#total').val(final_total);
     $('input[name=sum_total]').val(final_total);
   }
   
   var saveshirt_canvas = function()
   { // try save with base64 value with textarea
     $('textarea[name=shirt_snapshot]').val($('#front_shirt_canvas').getCanvasImage("png"));
     
   }
   
   // all setting will be process by HTML when page has been called
   $(document).ready(function()
   { draw_selector();
     set_front_shirt();
	    
 	 $('.colorsel').live('click',function()
 	 { var sel = $(this).attr('id').split('_');
	   $('#'+sel[0]).val(sel[1]);
	   $('#'+sel[0]+'_box').attr('src','images/drawing/' + sel_color_file[parseInt(sel[1])]);
			
	   color_panels[sel[0].substr(-1)] = parseInt(sel[1]);

	   for(i = 0; i < theshirt.panels.length; i++)
	   { c = $('#panel'+i).val();
	     colors[i] = sel_color_code[c];
       }

	   set_front_shirt();
     });

 	 $('#front_upload').live('click', $(function()
 	 { var btnUpload=$('#front_upload');
	   var status=$('#status');
	   new AjaxUpload(btnUpload, 
	   { action: 'upload/upload-file.php',
		 name: 'uploadfile',
		 onSubmit: function(file, ext)
		 { if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext)))
		   { // extension is not allowed 
			 status.text('Only JPG, PNG or GIF files are allowed');
			 return false;
		   }
		   status.text('Uploading...');
		 },
		 onComplete: function(file, response)
		 { //On completion clear the status
		   status.text('');
		   //Add uploaded file to list
		   if(response==="success")
		   { $('input[name=front_logo]').val(file);   
		     $('#frontimg_logo').attr('src','images/drawing/cart/' + file);
		     $('input[name=frontlogo_width]').val($('#frontimg_logo').width());
		     $('input[name=frontlogo_height]').val($('#frontimg_logo').height());
		     $('#frontimg_logo').hide();
		   } 
		   else
		   { $('<li></li>').appendTo('#files').text(file).addClass('error'); }
		   
		   set_front_shirt();
		 }
	   });
 	 }));
     
 	 $('#back_upload').live('click', $(function()
 	 { var btnUpload=$('#back_upload');
	   var status=$('#status');
	   new AjaxUpload(btnUpload, 
	   { action: 'upload/upload-file.php',
		 name: 'uploadfile',
		 onSubmit: function(file, ext)
		 { if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext)))
		   { // extension is not allowed 
			 status.text('Only JPG, PNG or GIF files are allowed');
			 return false;
		   }
		   status.text('Uploading...');
		 },
		 onComplete: function(file, response)
		 { //On completion clear the status
		   status.text('');
		   //Add uploaded file to list
		   if(response==="success")
		   { $('input[name=back_logo]').val(file);  } 
		   else
		   { $('<li></li>').appendTo('#files').text(file).addClass('error'); }
		   
		   set_front_shirt();
		 }
	   });
 	 }));
 	 
     <?php 
      switch($shirt_type)
      { case '1'  : //print nothing
                    break;
        case '2'  : //print nothing
                    break;
        default   : print "$('#front_icon_ok').live('click', function()";
                    print "{ set_front_shirt(); });";
                    
                    print "$('#back_icon_ok').live('click', function()";
                    print "{ set_front_shirt(); });";                    
                    
                    print "$('#logofront_ok').live('click', function()";
                    print "{ upload_file(); set_front_shirt(); });";
                    
                    print "$('#logoback_ok').live('click', function()";
                    print "{ upload_file(); set_front_shirt(); });";
      }                     
     ?>
    
     // hide textarea
     $('textarea[name=shirt_snapshot]').hide();
     
     // steps used to differentiate editing mode (Step1) and pricing mode (Step2)
     $('#wizardform').live('click', function()
     { $('#shirt_thumbnail').attr('src', $('#front_shirt_canvas').getCanvasImage("png"));
       final_price();
       
       <?php
        // try save with base64 value with textarea
        if (($shirt_type == '1') || ($shirt_type == '2'))
         print "$('textarea[name=shirt_snapshot]').val('" .$link. "');\n";
        else
         print "$('textarea[name=shirt_snapshot]').val($('#front_shirt_canvas').getCanvasImage(\"png\"));\n";
       ?>
        
       $('#calculate').live('click', function()
       { calculate_all(); });
     });
        
     $('#wizardform').stepy();
   });
  </script>
 </body>
</html>