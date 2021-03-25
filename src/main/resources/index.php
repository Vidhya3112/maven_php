<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {

        background-size: cover;
        background-color:lightblue;

        font-family: 'Roboto', sans-serif;
}
.form-control {
        font-size: 15px;
}
.form-control, .form-control:focus, .input-group-text {
        border-color: #e1e1e1;
}
.form-control, .btn {
        border-radius: 3px;
}
.signup-form {
        width: 400px;
        margin: 0 auto;
        padding: 70px 0px ;


}
.signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;

}

.h{
        color: #333;
        font-weight: bold;
        margin-top: 0;

}

.signup-form h2 {
        color: #333;
        font-weight: bold;
        margin-top: 0;
}
.signup-form hr {
        margin: 0 -30px 20px;
}

.signup-form .form-group {
        margin-bottom: 20px;

}
.signup-form label {
        font-weight: normal;
        font-size: 15px;
}
.signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
}
.signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
}
.signup-form .btn, .signup-form .btn:active {
        font-size: 16px;
        font-weight: bold;
        background: #19aa8d !important;
        border: none;
        min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
        background: #179b81 !important;
}
.signup-form a {
        color: #fff;
        text-decoration: underline;
}
.signup-form a:hover {
        text-decoration: none;
}
.signup-form form a {
        color: #19aa8d;
        text-decoration: none;
}

.signup-form form a:hover {
        text-decoration: underline;
}
.signup-form .fa {
        font-size: 21px;
}
.signup-form .fa-paper-plane {
        font-size: 18px;
}
.signup-form .fa-check {
        color: #fff;
        left: 17px;
        top: 18px;
        font-size: 7px;
        position: absolute;
}
</style>
<script>
function validateForm()
{
var alphanumberic = /^[a-z0-9]+$/i;
var mailformat = /^w+([.-]?w+)*@w+([[.-]?w+)*(.w{2,3})+$/;
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
var x=document.forms["f1"]["t1"].value;
var y=document.forms["f1"]["t2"].value;
var z=document.forms["f1"]["t3"].value;
var z1= document.forms["f1"]["t4"].value;


if(!x.match(alphanumberic))
{
alert("Please fill out the username in alphanumeric");
return false;
}

if (!z.match(passw))
{
alert("Please enter the password in the given format");
return false;
}

if (z!=z1)
{
alert("password is not same");
return false;
}
Else
{
alert("Successfully registered");

return true;
}
}

</script>
</head>
<body>
        <br><h1 class="h" align="center"><i class="fa fa-cube"></i>CERTREG</h1>
<div class="signup-form">
    <form name="f1" action="task1signup.php" method="post">
                <h2>Create Account</h2>


        <div  class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                                <span class="fa fa-user"></span>
                                        </span>
                                </div>
                                <input type="text" class="form-control" name="t1" placeholder="Username" required="required">
                        </div>
        </div>
<div class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                                <i class="fa fa-paper-plane"></i>
                                        </span>
                                </div>
                                <input type="email" class="form-control" name="t2" placeholder="Email Address" required="required">
                        </div>
        </div>

 <div class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                        </span>
                                </div>
                                <input type="password" class="form-control" name="t3" placeholder="Password" required="required">
                        </div>
        </div>

<div class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                                <i class="fa fa-check"></i>
                                        </span>
                                </div>
                                <input type="password" class="form-control" name="t4" placeholder="Confirm Password" required="required">
                        </div>
        </div>

 <div class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                        </span>
                                </div>
                                        &nbsp&nbsp
                                <input type="radio" id="admin" name="user" value="Admin">&nbsp
                                <label for="admin">Admin</label>
                                &nbsp&nbsp
                                <input type="radio" id="employee" name="user" value="Employee">&nbsp
                                <label for="employee">Employee</label><br>

                        </div>
        </div>
 <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" onclick="validateForm()">Sign Up</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <button type="reset"  class="btn btn-primary btn-lg">Cancel</button>
        </div>
    </form>
        <div class="text-center">Already have an account? <a href="task1login.html">Login here</a></div>
</div>
</body>
</html>

