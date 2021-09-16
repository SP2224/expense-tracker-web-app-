<?php
require('config.php');
if(isset($_REQUEST['name'])) {
    if($_REQUEST['password'] == $_REQUEST['confirmpassword']){
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con,$name);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $phonenumber = stripslashes($_REQUEST['phonenumber']);
        $phonenumber = mysqli_real_escape_string($con,$phonenumber);
        $usertype = stripslashes($_REQUEST['usertype']);
        $usertype = mysqli_real_escape_string($con,$usertype);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (name,email,phonenumber,usertype,password,trn_date) VALUES ('$name','$email','$phonenumber','$usertype','" . md5($password) . "','$trn_date)";
        
        $result = mysqli_query($con,$query);
        
        
        if($result){
            header("Location: signin.php");
        }
    }
        else{
            echo("ERROR: Please check your password");
        
    }


}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style2.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <title>Signup Template</title>
</head>

<body class="text-center">
    <div class="container cscon">
        <main class="form-signin cscon2">
            <div class="card bg-light card-width">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Create Account</h4>
                    <p class="text-center">Get started with your free account</p>
                    <p>
                        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via
                            Twitter</a>
                        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                            facebook</a>
                    </p>
                    <p class="divider-text">
                        <span class="bg-light">OR</span>
                    </p>
                    <form>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full name" type="text" required="required">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email" required="required">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" style="max-width: 80px;">
                                <option selected="">+91</option>
                                <option value="1">+1</option>
                                <option value="2">+198</option>
                                <option value="3">+</option>
                            </select>
                            <input name="phonenumber" class="form-control" placeholder="Phone number" type="text" required="required"> 
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <select class="form-control" name="usertype" required="required">
                                <option selected=""> Select user type</option>
                                <option>front-end Designer</option>
                                <option>Back-end Designer</option>
                                <option>Full-stack Developer</option>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="password"class="form-control" placeholder="Create password" type="password" required="required">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="confirmpassword" class="form-control" placeholder="Repeat password" type="password" required="required">
                        </div>
                        <div class="form-group">
                            <button name="ca" type="submit" class="btn btn-primary btn-block"> Create Account </button>
                        </div>
                        <p class="text-center">Have an account? <a href="./signin.php">Log In</a> </p>
                    </form>
                </article>
            </div>

        </main>





        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </div>
</body>

</html>