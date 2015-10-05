<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>رایانه فدک</title>
<meta name="keywords" content="فروش کامپیوتر , نرم افزار" />
<meta name="description" content="فروش کامپیوتر , نرم افزار" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript">
$(document).ready(function() {
    $("#SignIn").click(function(){
		 if($("#password").val()=="" || $("#username").val()=="" )
		 {
			$("#alert_msg").css("background-color", "red");
			$("#alert_msg").text("You Must Fill !!!"); 
		 }
		 
		 if($("#username").val()!="" && $("#password").val()!="")
		 {
			loadXMLDoc('SignIn.php?u='+$("#username").val()+'& p='+$("#password").val());
					
		}
	});  
});
</script>


<script type="text/javascript">
$(document).ready(function() {
    $("#register_idea").click(function(){
		 if($("#email").val()=="" || $("#idea").val()=="" )
		 {
			$("#alert_msg2").css("background-color", "red");
			$("#alert_msg2").text("You Must Fill !!!"); 
		 }
		 
		 if($("#email").val()!="" && $("#idea").val()!="")
		 {
			
			loadXMLDoc('registeridea.php?e='+$("#email").val()+'& i='+$("#idea").val());
			$("#alert_msg2").text("نظر شما ثبت شد...");	
			$("#email").val(""); 
			$("#idea").val(""); 	
		}
	});  
});
</script>


<!-- AJAX Function-->

<script>
function loadXMLDoc(url)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
     document.getElementById('main_section').innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST",url,true);
xmlhttp.send();
}
</script>

<!--End of AJAX Function-->
</head>
<body dir="rtl">
        <div id='jqxWidget'>
            <div id='jqxTree' style='float: left; margin-left: 60px;'>
            </div>
    </div>

<div id="templatemo_wrapper">
	<div id="templatemo_top">
        
        <form id="form1" name="form1" method="post" action="">
       
         <label for="username"></label>
       نام کاربری:
       <input type="text" name="username" id="username" />
      
         <label for="password"> رمز عبور:</label>
         <input type="password" name="password" id="password" />
         <input type="button" name="SignIn" id="SignIn" value="ورود" />
		 <span id="alert_msg">   

</span>
       </form>
       
    </div> <!-- end of top -->
    
    <div id="templatemo_header">
    	<div id="site_title"><h1><a >رایانه فدک</a></h1></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="default.php" class="selected">صفحه اصلی</a></li>
                <li><a >آموزش</a>
                    <ul>
						<span class="top"></span><span class="bottom"></span>                   	
                        <li><a onclick="loadXMLDoc('Ajax_training.html')">آموزش Ajax</a></li>
                        <li><a onclick="loadXMLDoc('Jquery_training.html')">آموزش Jquery</a></li>
                       
                    </ul>
                </li>
				
                <li><a onclick="loadXMLDoc('getTypeStore.php')">فروشگاه </a>
              </li>
              <li><a onclick="loadXMLDoc('UserIdea.php')">نظرات ثبت شده</a></li>
              
            </ul>
            <br style="clear: left" />
        </div> <!-- end of menu -->
    </div> <!-- end of header -->
    

    
    
    <div id="templatemo_middle">
    

       <div class="middle_box" dir="rtl" align="right">

		<form dir="rtl" >
    		<p>
    		  <label for="textfield">آدرس ایمیل :</label>
    		  <br />
    		  <input type="text" name="email" id="email" />
    		</p>
    		<p>
    		  <label for="textarea">پیشنهاد و انتقاد خود را بنویسید:</label>
    		  <br />
    		  <textarea name="idea" id="idea" cols="45" rows="5" ></textarea>
    		  <input type="button" name="register_idea" id="register_idea" value="ثبت" >
              		<br /> <span id="alert_msg2"></span>

  		  </p>
		</form>

		
        
	</div>
      <div id="slider-wrapper">
        
          <div id="slider" class="nivoSlider">
                <a ><img src="images/slider/01.jpg" alt="Slider 01" /></a>
                <a ><img src="images/slider/02.jpg" alt="Slider 02"  /></a>
                <a ><img src="images/slider/03.jpg" alt="Slider 03" /></a>
                <a ><img src="images/slider/04.jpg" alt="Slider 04" /></a>
            </div>
         
        </div>
            <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
            
            
            
          <div id="templatemo_main_wrapper"> <span class="top"></span><span class="bottom"></span>  
            <div id="templatemo_main">
           <p>  <span id="main_section"> hello</span></p>
           
    
    </div> <!-- end of middle --><!-- end of main wrapper --></div> <!-- end of wrapper -->
</div>
</div>
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar" dir="ltr">
    	Copyright © 2015 RayaneFadak | Designed by <a href="" target="_parent" dir="rtl">رایانه فدک</a>
    </div>
</div>

</body>
</html>