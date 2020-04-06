<?php
include("session.php");
//session_start();
include('dbconnection.php');
//include("checklogin.php");
//check_login();
if(isset($_GET['ID']))
{
$adminid=$_GET['ID'];
$msg=mysqli_query($con,"DELETE FROM `cdetails` WHERE ID='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
if(isset($_POST['csubmit']))
{
		 
		$center = $_POST['center'];
		$report_by = $_POST['report_by'];
		$date_of_entry = $_POST['date_of_entry'];
		$station_of_operation = $_POST['station_of_operation'];
		$challenges = $_POST['challenges'];
		$employee1 = $_POST['employee1'];
		$employee2 = $_POST['employee2'];
		$employee3 = $_POST['employee3'];
		$employee4 = $_POST['employee4'];
		$comment = $_POST['comment'];
		$m_float = $_POST['m_float'];
		$m_cash = $_POST['m_cash'];
		$kcb_float = $_POST['kcb_float'];
		$kcb_cash = $_POST['kcb_cash'];
		$cash = $_POST['cash'];
		$total = $_POST['total'];
		

		//mysqli_query($connection,"insert into sales(center,report_by,date_of_entry, station_of_operation, challenges,employee1,employee2,employee3,employee4,comment,m_float,m_cash,kcb_float,kcb_cash,cash,total)values 											('$center','$report_by','$date_of_entry','$station_of_operation','$challenges','$employee1','$employee2','$employee3','$employee4','$comment','$m_float','$m_cash','$kcb_float','$kcb_cash','$cash','$total',)")or die(mysqli_error());
		

          $msg=mysqli_query($con,"INSERT INTO `sales`(`center`, `report_by`, `date_of_entry`, `station_of_operation`, `challenges`, `employee1`, `employee2`, `employee3`, `employee4`, `comment`, `m_float`, `m_cash`, `kcb_float`, `kcb_cash`, `cash`, `total`) values('$center','$report_by','$date_of_entry','$station_of_operation','$challenges','$employee1','$employee2','$employee3','$employee4','$comment','$m_float','$m_cash','$kcb_float','$kcb_cash','$cash','$total')");
   
$_SESSION['msg']="Daily Report Sent successfylly";

	echo "<script type='text/javascript'>alert('Report submited successfully');</script>";
    header("Location:welcome.php");
}
if(isset($_POST['csubmitx']))
{
    
}
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SKYCORP| Daily Returns</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
	<!-- Bootstrap -->
     		<link href="images/logo1.png" rel="icon" type="image">
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/print.css" rel="stylesheet" media="print">
			<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
			<link href="assets/styles.css" rel="stylesheet" media="screen">
	<!-- wysiwug  -->
		<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link rel="stylesheet" href="default/style.css">
  		<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  		<script src="js/bootstrap.js" type="text/javascript"></script>


		
	    <link href="css/bootstrap.css" rel="stylesheet" />
		
	
</head>
<body>
    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>SKYCORT| DAILY REPORT</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="#"><?php echo $_SESSION['user'];?></a></li>
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#"><img src="admin/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">You are </br></br>loged in as <strong><?php echo $_SESSION['user'];?></strong></h5>
                  
				  <li class="mt">
                      <a href="welcome.php" >
                          <i class="fa fa-home"></i>
                          <span>home</span>
                      </a>
                   
                  </li>  
				  
				  <li class="sub-menu">
                      <a href="daily_report.php" >
                          <i class="fa fa-send"></i>
                          <span>Submit Daily Report</span>
                      </a>
                   
                  </li> 
				  <li class="sub-menu">
                      <a href="view.php" >
                          <i class="fa fa-eye"></i>
                          <span>View Reports Summary</span>
                      </a>
                   
                  </li>
				  
				  <li class="sub-menu">
                      <a href="edit_report.php" >
                          <i class="fa fa-edit"></i>
                          <span>Edit/Update report</span>
                      </a>
                   
                  </li>
				  
				  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class="fa fa-sign-out"></i>
                          <span>logout</span>
                      </a>
                   
                  </li>
              
                 
              </ul>
          </div>
      </aside>
    
    

        <section id="main-content">
          <section class="wrapper">
		  <br>
            <h3><i class="fa fa-angle-right"></i> Daily report</h3>
                
				<div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Daily Report </div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="welcome.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_student" class="form-signin" method="POST" action="daily_report.php" enctype="multipart/form-data">
						<!-- span 4 -->
										<div class="span4">
										
											<label>Center:</label>
											<select name="center" class="span7" required>
													<option>Select Center</option>
													<option value="NANDI HUDUMA">NANDI HUDUMA CENTER</option>
													<option value ="EMBU HUDUMA">EMBU HUDUMA CENTER</option>
													<option value="BOMET HUDUMA">BOMET HUDUMA CENTER</option>
													<option value="NYANDARUA HUDUMA">NYANDARUA HUDUMA CENTER</option>
													<option value ="NAROK HUDUMA">NAROK HUDUMA CENTER</option>
													
												</select>
												<br>
												<br>
																							
												<label>REPORT BY:</label>
												</br>
												
							<input type="text" class="input-block-level"  name="report_by" placeholder="<?php echo $_SESSION['user'];?>" value="<?php echo $_SESSION['user'];?>" readonly>
												
											<label>DATE OF ENTRY:</label>
											<input type="date" class="input-block-level"  name="date_of_entry" placeholder="Date of ENTRY">
											<label>STATION OF OPERATION</label>
												<select name="station_of_operation" class="span7" required>
													<option>Choose Station</option>
													<option value="Center">The Center</option>
													<option value ="Mashinani">Mashinani</option>
												</select>
											<label>Challenges encountered:</label>
							<input type="text" class="input-block-level"  name="challenges" placeholder="Challenges encountered (optional) " >
											
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">
											
											<label>Served by</label><br>
											<label>*Select all available Employees*</label>
											<select name="employee1" class="span7" required>
													<option>Select employee</option>
													<option value="Sammy_Narok">Sammy Narok</option>
													<option value ="Sheillah_Chelagat">Sheilah Jelagat</option>
													<option value="Fredrick_Mulinge">Freddy</option>
													<option value="Sarah_Jeptatui">Sarah Jeptanui</option>
													<option value="Carol_mwiti">Carol Mwiti</option>
													<option value="Amors_Koech">Amors Koech</option>
													<option value="Nyandarua_center">Nyandarua Center</option>
												</select>
												<br>
												<br>
												<select name="employee2" class="span7" >
													<option>Select employee</option>
													<option value="Sammy_Narok">Sammy Narok</option>
													<option value ="Sheillah_Chelagat">Sheilah Jelagat</option>
													<option value="Fredrick_Mulinge">Freddy</option>
													<option value="Sarah_Jeptatui">Sarah Jeptanui</option>
													<option value="Carol_mwiti">Carol Mwiti</option>
													<option value="Amors_Koech">Amors Koech</option>
													<option value="Nyandarua_center">Nyandarua Center</option>
												</select>
												<br>
												<br>
												<select name="employee3" class="span7" >
													<option>Select employee</option>
													<option value="Sammy_Narok">Sammy Narok</option>
													<option value ="Sheillah_Chelagat">Sheilah Jelagat</option>
													<option value="Fredrick_Mulinge">Freddy</option>
													<option value="Sarah_Jeptatui">Sarah Jeptanui</option>
													<option value="Carol_mwiti">Carol Mwiti</option>
													<option value="Amors_Koech">Amors Koech</option>
													<option value="Nyandarua_center">Nyandarua Center</option>
												</select> 	
											
											</select>
							
								
									<br>
									<br>	
									<label>Other Employee :</label>
									<input type="text" Placeholder="Employee Name" name="employee4" class="input-block-level">
									<label>Comment :</label>
									<input type="textarea" Placeholder="comment" name="comment" class="my_message">
									<br>
									<br>
						<div class="sign-up" style="margin-left:100px;">
                                <input type="hidden" name="csubmit"  value="submit">
                                <div class="clear"> </div>
                        </div>
									<!--<button type="submit" class="btn btn-success" name="csubmit" ><i class="icon-save icon-large"></i> Save </button>-->
									<br>
									<br>
											
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
									
							<label>Mpesa Float:</label>
							<input type="text" class="input-block-level" onkeyup="getTotal();"   name="m_float" id="m_float" placeholder="Mpesa Float" required>
							<label>Mpesa Cash:</label>
							<input type="text" class="input-block-level" onkeyup="getTotal();"   name="m_cash" id="m_cash" placeholder="Mpesa Cash" >
							<label>KCB Float:</label>
							<input type="text" class="input-block-level" onkeyup="getTotal();"   name="kcb_float" id="kcb_float"  placeholder="KCB Float" required>
							<label>KCB Cash:</label>
							<input type="text" class="input-block-level" onkeyup="getTotal();"   name="kcb_cash" id="kcb_cash" placeholder="KCB Cash" required>
							<label>Cash at Hand:</label>
							<input type="text" class="input-block-level" onkeyup="getTotal();"    name="cash" id="cash" placeholder="Cash at Hand" required>
							<label>TOTAL AMOUNT:</label>
							<input type="text" class="input-block-level" id="totals"  name="total" placeholder="TOTAL AMOUNT" readonly>
							<center><button type="submit" class="btn btn-success" name="csubmit" ><i class="icon-save icon-large"></i> Save </button></center>
						</div>
						<!--end span 4 -->
						</form>						
			
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div> <!-- end -->
                        <!-- /block -->
                  
                      
                 
              </div>
        </section>
      </section>
      </section>
      


        

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });
function getTotal() {
	 // get values from input controls	 
	 var mpesa_float = document.getElementById('m_float').value;
	 var mpesa_cash = document.getElementById('m_cash').value;
	 var kcb_float = document.getElementById('kcb_float').value;
	 var kcb_cash = document.getElementById('kcb_cash').value;
	  var cash = document.getElementById('cash').value;
	  //convert from string number
	 var a= parseInt(mpesa_float,10);
	 var b= parseInt(mpesa_cash,10);
	 var c= parseInt(kcb_float,10);
	 var d= parseInt(kcb_cash,10);
	 var e= parseInt(cash,10);
 
	 //get sum
	var total = a + b + c  + d + e;
	/* check if it's a number :isNaN is a js ..
	 function that returns true if the argument is not a number */
	 if(!isNaN(total)){

	 	 document.getElementById('totals').value= total;
	 }else{
	 	document.getElementById('totals').value = "";
	 }
}
  </script>
</body>

</html>
