<?php
error_reporting(0);
$root='../../../';
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

<div id="bg" >

<?php include '../../../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>	NSS TEAM STRUCTURE </span>
</div> 

<div class="pagecontent">

<?php $i=0;?>
<table class="pagetablecontent_new" border="0"height="450px" align="center" width="100%">
	<tr class="tablehead">
            <td>Sl. No.</td>
            <td>Name</td>	
            <td> Will serve as </td>
            <td>Contact </td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>1.</td>
            <td> Dr. Naresh Prasad  </td>
            <td> Coordinator</td>
            <td>09431380751   </td>
    </tr>
    
</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>2.</td>
            <td> K.D. Anand </td>
            <td>  President </td>
            <td>9386919926</td>
    </tr>

<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>3.</td>
            <td > Prof. B.K. Singh</td>
            <td>  Co Coordinator </td>
            <td>9534127676  </td>
 </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>4.</td>
            <td>Divyanshu Singh </td>
            <td>  Vice President </td>
            <td>9470575214</td>
 </tr>
                           
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>5.</td>
            <td > Dr. S.B. Prasad </td>
            <td>  Program Officer </td>
            <td>9470391007   </td>
 </tr>
                              

                                                 
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>6.</td>
            <td>    Dr. A.K.Sinha </td>
            <td>  Program Officer </td>
            <td>9534127676  </td>
 </tr>
                                    
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>7.</td>
            <td> Tejwinder Singh  </td>
            <td> General Secretary </td>
            <td>9546461080</td>
 </tr>
                       
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>8.</td>
            <td>Dr. S.K. Prasad </td>
            <td> Program Officer  </td>
            <td> 9006932214</td>
 </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>9.</td>
            <td> Vikrant Kumar </td>
            <td> Sr. Group Leader </td>
            <td>9471328927</td>
 </tr>	
</tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>10.</td>
            <td>    Prof. RashmiSinha </td>
            <td> Program Officer    </td>
            <td>Email-rsinha.ece@nitjsr.ac.in</td>
 </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>11.</td>
            <td> Prof. B.N.S Munda </td>
            <td>  Program Officer    </td>
            <td>9472786704
</td>
 </tr>	
             <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>12.</td>
            <td> KumariNamrata </td>
            <td> Program Officer    </td>
            <td>9973511078
</td>
 </tr>	
                                   
</Table>
</div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../../../sidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../../../footer.php' ?>
<!-- footer ends here -->

</body></html>
