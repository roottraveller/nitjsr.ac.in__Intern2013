<?php
error_reporting(0);
$root='../';
?>
<?php
error_reporting(0);
$dbhost='localhost';
					$dbuser='root';
					$dbpass='1234';
					$obj=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
					mysql_select_db('nit', $obj);
					if(!$obj)
					{
						echo "an error occured while connecting";
						exit;
					}
$DEPT=$_GET['DEPT'];

$objResult = sprintf("select * from contact_directory where DEPT='$DEPT'",
    		mysql_real_escape_string($dept));
			$result=mysql_query($objResult);
			while($row = mysql_fetch_array($result))
			{
				$DEPT=$row['DEPT'];
                                
				
				
			}
$objResult = sprintf("select * from contact_directory where DEPT='$DEPT' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql1=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='$DEPT' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql2=mysql_query($objResult);
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
  <span><?php echo $DEPT;?></span>
</div>
<div class="pagecontent">


<?php $i=0; $j=0; $k=0;?>

<?php  while ($row = mysql_fetch_array($sql1) ){?>

<?php
$j++;
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span>   Name   </span></td>');
        echo('<td>Contacts</td>');
    echo('</tr>');
}

if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><span>   <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>   </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql2) ){?>

<?php
$k++;
if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span>   Name   </span></td>');
        echo('<td>Contacts</td>');
    echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><span>   <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>   </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>

	
    
    
    </table>
<span class="backbtn"><a href="<?php echo $root;?>contact/"> &lt;&ndash; Go Back</a></span>    


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