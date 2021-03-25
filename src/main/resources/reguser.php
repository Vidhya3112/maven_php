<!DOCTYPE html>
<html>
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

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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


html, body {
      min-height: 100%;
      }
      body, div, form, input, select, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622;
      }
      
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 70%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 100px;
      
       
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select{
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
     
      .item:hover p, .item:hover i,  input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
     
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      
      
      
      
      
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      


    </style>
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

 <div class="testbox">
    <form method="post" action="register.php">
      <div class="banner">
        <h1>Certificate Registration Form</h1>
      </div>
      <br/>
      <fieldset>
        <legend>Employee Details</legend>
        <div class="columns">
          <div class="item">
            <label for="fname">Name<span>*</span></label>
            <input id="fname" type="text" name="t1" />
          </div>
          <div class="item">
            <label for="lname">Employee ID<span>*</span></label>
            <input id="lname" type="text" name="t2" />
          </div>
 </fieldset>
      <br/>
      <fieldset>
      <legend>Certification Details</legend>
      <div class="columns">

      <div class="item">
      <p>Certificate Stream </p>
      <select name="s1">
      <option value="" disabled selected>Select </option>
      <option value="1" >GCP</option>
      <option value="2">AWS</option>
      <option value="3">Azure</option>
      </select>
      </div>
<div class="item">
            <label for="fname">Certification Level<span>*</span></label>
            <input id="fname" type="text" name="t3" />
          </div>
        <div class="item">
            <label for="fname">Certification Name<span>*</span></label>
            <input id="fname" type="text" name="t4" />
          </div>
        <div class="item">
            <label for="fname">Certification ID<span>*</span></label>
            <input id="fname" type="text" name="t5" />
          </div>

	 <div class="item">
      <label for="checkindate">Date if Certification <span>*</span></label>
      <input id="checkindate" type="date" name="t6" />
      <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
      <label for="checkoutdate">Expiry Date <span>*</span></label>
      <input id="checkoutdate" type="date" name="t7" />
      <i class="fas fa-calendar-alt"></i>
</div>
        <div class="item">
            <label for="fname">Validity<span>*</span></label>
            <input id="fname" type="text" name="t8" />
          </div>
	<div class="item">
            <label for="fname">Certificate[pdf,jpg]<span>*</span></label>
		<input type="file" name="file"/>
	 </div>

      </fieldset>
      <div class="btn-block">
      <button type="submit" name="sendemail" >Submit</button>
      </div>
    </form>
    </div>
  </body>
</html>

