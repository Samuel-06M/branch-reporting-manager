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

    
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SKYCORP | EDIT REPORTS</title>
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
            <a href="#" class="logo"><b>SKYCORP | EDIT DAILY REPORTS </b></a>
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
            <h3><i class="fa fa-angle-right"></i> Edit Report </h3>
                <div class="row">
                
                  
                      
                  <div class="col-md-20">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <h4><i class="fa fa-angle-right"></i> All daily Reports </h4>
                              <hr>
                              <thead>
                              <tr>
                                  	<th>No</th>
									<th>Center</th>
									<th>Report By</th>
									<th>Entry Date</th>
									<th>Station of operation </th>
									<th>Challenges</th>
									<th>Employee 1</th>
									<th>Employee 2</th>
									<th>Employee 3</th>
									<th>Employee 4</th>
									<th>Comment</th>
									<th>Mpesa Float</th>
									<th>Mpesa Cash</th>
									<th>KCB Float</th>
									<th>KCB Cash</th>
									<th>Cash</th>
									<th>Total</th>
							  </tr>
                              </thead>
                              <tbody>
                              
                              <?php $ret=mysqli_query($con,"SELECT * FROM `sales`");
                              $cnt=1;
            
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
										<td><?php echo $row['center']; ?></td>
										<td><?php echo $row['report_by']; ?></td>
										<td><?php echo $row['date_of_entry']; ?></td>
										<td><?php echo $row['station_of_operation']; ?></td>
										<td><?php echo $row['challenges']; ?></td>
										<td><?php echo $row['employee1']; ?></td>
										<td><?php echo $row['employee2']; ?></td>
										<td><?php echo $row['employee3']; ?></td>
										<td><?php echo $row['employee4']; ?></td>
										<td><?php echo $row['comment']; ?></td>
										<td><?php echo $row['m_float']; ?></td>
										<td><?php echo $row['m_cash']; ?></td>
										<td><?php echo $row['kcb_float']; ?></td>
										<td><?php echo $row['kcb_cash']; ?></td>
										<td><?php echo $row['cash']; ?></td>
										<td><?php echo $row['total']; ?></td>
                                  <td>
                                     
                                     <a href="update_daily_report.php?uid=<?php echo $row['sales_id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <!--<a href="clientview.php?ID=<?php echo $row['ID'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>-->
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                                           
                              </tbody>
                          </table>
                      </div>
                  </div>
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

  </script>
</body>

</html>
