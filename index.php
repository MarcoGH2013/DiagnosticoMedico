<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html>
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Salud 24/7</title>
<meta name="description" content="Servicios Medicos en linea">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.js"></script>

<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
<style>
<!--
#col1{
	height: 410px;	
	width:250px;
	background:#FFFFFF;
	float:left
}	
#col2{
	height: 267px;	
	background:#CCB18E;
	width:600px;
	float:left
}	

</style>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js" type='text/javascript'> </script> 
	<script src="js/easy-slider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/easy-slider-css.css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->

</script>	
</head>

<body>
<div id="content">
  <?php	include('header.php');?>
  <?php	include('menu.php');?>	 
<p>&nbsp;</p>
<section>
<aside id="col1" ><img src="images/chat.png" width="254" height="137">
<p align="center" style="font-family: verdana,arial; color: #ff8c00; font-size: 1.00em; font-weight:bold;">&nbsp;</p>
<p align="center" style="font-family: verdana,arial; color: #ff8c00; font-size: 1.00em; font-weight:bold;">Acceso Pacientes</p>
<p align="center" style="font-family: verdana,arial; color: #ff8c00; font-size: 1.00em; font-weight:bold;"><span>Ingresa c&eacute;dula y contrase&ntilde;a </span></p>
<div>
   <div>
        <div align="left">
          <style type="text/css" scoped>
		td { text-align:left; font-family: verdana,arial; color: #064073; font-size: 1.00em; }
		input { border: 1px solid #CCCCCC; border-radius: 5px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 80%; }
		input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; margin-top: 10px; }
		table.center { margin-left:auto; margin-right:auto; }
		.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
		</style>
          <input type="hidden" name="hide" value="">
          <table width="253" height="141" class='center'>
              <tr><td width="238" height="61"><p align="center">&nbsp;
                </p>
                  <p align="center">
                    <input type="text" name="login" placeholder= "Cédula">
                  </p></td>
              </tr>
              <tr>
                <td height="29"><p align="center">
                  <input type="password" name="password" placeholder= "Contraseña">
                  </p>                </td>
              </tr>
              <tr>
                <td height="41" align="center">                  <div >
                  <p align="center">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="139" height="36" align="absmiddle">
                      <param name="BGCOLOR" value="">
                      <param name="movie" value="button1.swf">
                      <param name="quality" value="high">
                      <embed src="button1.swf" width="139" height="36" align="absmiddle" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" ></embed>
                    </object>
</p>
                  <p align="center">&nbsp;</p>
				<div class="alert alert-success">
	              <div align="left" class="title">
	                <div align="center"><strong>O</strong><span class="title"><strong>lvido su contraseña ingrese a <a href="#" class="alert-link">aqui</a></strong></span></div>
	              </div>			
				</div>				  
                  <p align="center"><a href="registro.html"><strong> </strong></a><span class="title"><strong>No tiene usuario ingrese a <a href="#" class="alert-link">aqui</a></strong></span></p>
                </div></td>
				  
              </tr>
          </table>
        </div>
  </div>
</div>
</aside></section>

<section><article id = "col2">
      <div id="slider">
          <div class="slidesContainer">
		  <div class="slide"><img src="images/carrusel.png" alt="Imagen 01" width="945" height="400">
		    </div>
              <div class="slide"><img src="images/doctores1.png" alt="Imagen 02" width="945" height="400">
            </div>
              <div class="slide"><img src="images/talk.png" alt="Imagen 01" width="945" height="400">
            </div>
             
          </div> <!-- /slidesContainer -->

      </div> <!-- /slider -->
 </article>
</section>
</div>
</body>
<footer></footer>
</html>
