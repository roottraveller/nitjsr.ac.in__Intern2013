
<?php
error_reporting(0);
$root='../../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="Nishant Kumar" />
<meta http-equiv="contact" content="nishantkumar35@gmail.com" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title>  

<script type="text/javascript">
var idd=1;
var assistvisible=false;
function vsbl(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
var b=document.getElementById("chk_butn"+idd);
var dv1=document.getElementById("chk"+id);
var dv2=document.getElementById("chk"+idd);
dv2.style.visibility='hidden';
dv1.style.visibility='visible';
a.style.background='#4F99C5';
a.style.color='#fff';
b.style.background='#ffffff';
b.style.color='#C02630';
idd=id;
}
}
function btn(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#4F99C5';
}
}
function btn_r(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#C02630';
}
}
function assistants()
{
	if(assistvisible){
		document.getElementById('assist').style.display='none';
		document.getElementById('assist1').style.display='none';
		assistvisible=false;
	}
	else{
		document.getElementById('assist').style.display='table';
		document.getElementById('assist1').style.display='block';
		assistvisible=true;
	}
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">

</head>
<body>
<div class="bg">
<?php include $root.'header.php' ?>
</div>

<div id="wrapper_sec">
<div class="main_content">
<div class="pagecontent"style="width:100%">
<a href="index.php"><img src="images/banner.jpg"/></a>
    
	<!--Click here to view <a href="../governance/dirhistory.php" style="">Previous Directors</a>-->
</p>

</div>
<div class="pagecontent" style="width:73%">
<p><span class="pageheadingimg">Key Note Lectures</span>
</br></br>
	<b>Key Note Lectures</b></br></br>
	<ul>
     <li style="text-align: justify;">Standing ovation for Key note address on "Journey of excellence: Toyota Way", "26th National Convention of Production Engineering &amp; National Seminar on New Vistas in Production Technologies" 07-08 May, 2011, The Institution of Engineers India (Jaipur)</li>
     <li style="text-align: justify;">Key note address on "Development of value stream management process for lean improvements: a case study", 27 National Convention of Mechanical Engineers &amp; National Seminar on "Advances in MEMS &amp; Robotics in Manufacturing Industries", 3-4 September 2011, IEI, Rajasthan State Centre, Jaipur.</li>
     <li style="text-align: justify;">Key note address on "Journey of excellence: Toyota Way", "International Conference on Agile Manufacturing Systems ICAM-2011, December 18-20, 2011, Dayalbagh Educational Institute, Dayalbagh, Agra, India.</li>
</ul>
	
 
 
</br>
</div>
</div>
</div>

 <!--sidetab starts here-->
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>