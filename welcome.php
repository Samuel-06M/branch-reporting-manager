<?php
include("session.php");
//session_start();
include('dbconnection.php');
//include("session.php");
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

                        //require_once 'validate.php'; $query= mysqli_query($connection,"select * from employees where user_id = '$session_id'")or die(mysql_error());
						//$row = mysqli_fetch_array($query);
						
					
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SKYCORP | HOME REPORTS</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>SKYCORP | DAILY REPORTS </b></a>
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
                  <h5 class="centered"> you are </br></br>loged in as <?php echo $_SESSION['user'];?></h5>
                    
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
            
			<h3><i class="fa fa-home"></i>Home</h3>
                <div class="row">
                
                  
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i> Choose a task </h4>
                              <hr>
                            
							<div class="row text-center pad-top" align="center">
                 
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
									<div class="div-square">
									<a href="daily_report.php" >
									<i class="fa fa-send fa-5x"></i>
									<h4>Submit Daily returns</h4>
									</a>
								</div>
								</div>
							
							<div class="row text-center pad-top">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="div-square">
									<a href="edit_report.php" >
									<i class="fa fa-edit fa-5x"></i>
									<h4>Edit/Update Reports </h4>
									</a>
								</div>
                     
                     
								</div> 
							
							<div class="row text-center pad-top">
                 
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
									<div class="div-square">
									<a href="view.php" >
									<i class="fa fa-eye fa-5x"></i>
									<h4>View Reports Summary</h4>
									</a>
								</div>
								</div>
								
							<!--<div class="row text-center pad-top">
                 
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
									<div class="div-square">
									<a href="daily_report.php" >
									<i class="fa fa-send fa-5x"></i>
									<h4>Submit Daily returns</h4>
									</a>
								</div>
								</div>-->
								
								
							<div class="row text-center pad-top">
                 
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
									<div class="div-square">
									<a href="logout.php" >
									<i class="fa fa-power-off fa-5x"></i>
									<h4>Log out</h4>
									</a>
								</div>
								</div>
                              
                          </table>
                      </div>
                  </div>
              </div>
        </section>
      </section>
      </section>
      


        

    <script src="admin/assets/js/jquery.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
</body>

</html>
