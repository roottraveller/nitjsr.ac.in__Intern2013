
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
<p><span class="pageheadingimg">R &amp; D Projects</span>
</br></br>
	<b>R &amp; D Projects</b></br></br>
	
 <ul>
<li style="text-align: justify;">"Knowledge-based System for Design of FMS", Project from Department of Science and Technology (DST) under YOUNG SCIENTIST SCHEME, Rs. 1.5 Lakhs, 1993-95, Coordinator.</li>
<li style="text-align: justify;">"Knowledge-based System for Fault Diagnosis and Maintenance of NC Machines", Project from UGC, under UGC Major Research Project Scheme, Rs. 4.86 Lakhs, 1994-1997, Coordinator.</li>
</li><li style="text-align: justify;">Development of Computer Integrated Manufacturing System" Project from All India Council for Technical Education (AICTE), in the area of Technology Forecasting during Eighth Plan Period,       Rs. 2.5 Lakhs, 1995-1997, Coordinator</li>
<li style="text-align: justify;">"Development of Flexible Manufacturing Systems"   Project from All India Council for Technical    Education (AICTE), under the scheme of thrust area programme in Technical Education, Rs. 13.2 Lakhs, the duration is 1995-97, Coordinator.</li>
<li style="text-align: justify;"> "Development  of Knowledge-based Simulator for  Design  of  Flexible Manufacturing Systems" from UGC, under UGC  Major research  project  Scheme,  Rs. 4.19 Lakhs,  November 2000-November 2002, Coordinator</li>
<li style="text-align: justify;"> Enhancement of Laboratory facilities from UGC, under UGC Xth Plan Grant for Mechanical Engineering Group, BITS-Pilani, Rs. 10 Lakhs, 2002-2007, Coordinator.</li>
<li style="text-align: justify;"> Development of Centre (Lab) for World-class Manufacturing" from DST, under the FIST Program of DST, 23 Lakhs, December 2002-2007, Coordinator.
</li>
<li style="text-align: justify;">"University Grants Commission provided assistance of Rs. 40 Lakhs to the Mechanical Engineering Group, Birla Institute of Technology &amp; Science, Pilani for strengthening of Infrastructure for augmenting teaching-learning requirements and upgradation of laboratories and research infrastructure, 2007-09, Coordinator.</li>
<li style="text-align: justify;">  "An Empirical Investigation of Manufacturing Excellence in Indian Industry" from UGC, under UGC Major Research Project Scheme, Rs. 2.72 Lakhs, April 2008-March 2010, Coordinator.</li>
<li style="text-align: justify;"> University Grants Commission provided assistance of Rs. 38 Lakhs for the Mechanical Engineering Group, Birla Institute of Technology &amp; Science, Pilani at the level of DRS-I for 5 Years (from 1/4/2007 to 31/3/2012) under the Special Assistance Programme (SAP) for the following thrust area for research and teaching Innovative Product Design and Development, Coordinator from 1/4/2007 to 31/7/2010.
</li>
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