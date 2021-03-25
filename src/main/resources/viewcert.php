<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
	background: #eeeeee;
	font-family: 'Varela Round', sans-serif;
}
.navbar {
	color: #fff;
	background: #926dde !important;
	padding: 10px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 24px;		
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #fff;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}

.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}


.table-title {
	color: #fff;
	background: #4b5366;		
	padding: 16px 25px;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}

.table-filter .filter-group {
	float: right;
	margin-left: 15px;
}
.table-filter input {
	height: 34px;
	border-radius: 3px;
	border-color: #ddd;
	box-shadow: none;
}
.table-filter {
	padding: 5px 0 15px;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 5px;
}

.table-filter label {
	font-weight: normal;
	margin-left: 10px;
}
.table-filter input {
	display: inline-block;
	margin-left: 5px;
}
.table-filter input {
	width: 200px;
	display: inline-block;
}

table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 80px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}



    
</style>
<script>
$(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
});


</script>
</head>
<body>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><i class="fa fa-cube"></i><b>CERTREG</b></a>           
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">                
                
	<div class="navbar-nav ml-auto">
                        <a href="reguser.html" class="nav-item nav-link"><span><b>REGISTER CERTIFICATE</b></span></a>               
                        <a href="viewcert.php" class="nav-item nav-link"><span><b>VIEW CERTIFICATE</b></span></a>
                        
                        <a href="task1login.html" class="nav-item nav-link"><span><b>LOGOUT</b></span></a>

			 </div>
        </div>
</nav>


<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Certificate<b>Details</b></h2>
                    </div>
                   
                </div>
            </div>
<div class="table-filter">
                <div class="row">
       
                    <div class="col-sm-9">
                        
                   
                       
                    </div>
                </div>
            </div>
                 <table class="table table-striped table-hover" id= "myTable">
                <thead>
                    <tr>
                        
                        <th>Employee Name</th>
                        <th>Employee Id</th>
                        <th>CSP</th>  
			<th>Certification Name</th>                                             
                        <th>Certification Level</th>
			<th>Certificate Link</th> 			
                         </tr>
                </thead>
                <tbody>
                    <?php
                      
			session_start();   
                        $dbserver = "34.123.143.241";
                        $dbuser = "root";
                        $dbpassword = "root1234";
                        $database = "certificationregdb";

			$empname = $_SESSION[ 'sname' ];
                        $conn = new mysqli($dbserver, $dbuser, $dbpassword,$database);
                        $result = mysqli_query($conn,"SELECT empname,empid,CSP,cert_name,cert_level,link  FROM register where empname= '$empname' ");

                         while($row = mysqli_fetch_array($result))
                        {

				
				echo "<tr>";
                        echo "<td>" . $row['empname'] . "</td>";
                        echo "<td>" . $row['empid'] . "</td>";
                        echo "<td>" . $row['CSP'] . "</td>";
                        echo "<td>" . $row['cert_name'] . "</td>";
			 echo "<td>" . $row['cert_level'] . "</td>";
                          echo "<td><a href=". $row['link'] .">" . $row['link'] . "</a></td>";
                        
                        echo "</tr>";
                        }
                        ?>

                </tbody>
            </table>
           
</body>
</html>

