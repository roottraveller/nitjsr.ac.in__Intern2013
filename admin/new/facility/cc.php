<?php
error_reporting(0);
$root='../';
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

</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">

</head>
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >

<div class="main_content">
<div class="pageheading">
  <span>Computer Centre</span>
</div>
<div class="pagecontent">
<img src="<?php echo $root ?>images/cc.jpg" alt="Computer Centre" title="Computer Centre" class="pageimg img" />
<p></br><b> Dr. Tarni Mandal,</b>
</br>Head,</br>Computer Center,
</br>Associate Professor, Department of Mathematics
</br>Contact Number: 0657-2373004 (O), +91-9431752766 (M)</p>
<p>One of the attractions of this campus is the OVAL structure - the Computer Center, which accommodates central computing facilities. There are mainly three types of services viz. computational services, laboratory services and network services. The Center's services are extensively used by the students, faculty and staff members of the Institute. The centre is equipped with IBM-Netfinity 5500, SUN Microsystems Ultra Sparc and HCL Infinity Global Line 2765 XD Servers. Various systems and application softwares are installed and maintained by the center.</p>

<p>
There are three PC Laboratories, which are used for UG/PG classes and one for Internet services. The internet service is available through VSAT on all week days from 08 :00 AM to 10 :00 PM. The network services are limited to the center, but it is to be extended to the whole academic and residential campus shortly. The floor space of the center is being augmented in order to accommodate a Multimedia Laboratory, a CAD Laboratory, a Smart Seminar Room and a Computer Museum.</p>
</div>
</div>

 

</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>