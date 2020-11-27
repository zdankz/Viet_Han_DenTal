
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-danger p-3">Login Into System</h3>
                <form action="./controller/role.php" method="POST" class="p-4">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>                        
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>                        
                    </div>
                    <!-- <div class="form-group lead">
                        <label for="userType">I'm a :</label>
                        <input type="radio" name="userType" value="member" class="custom-radio" required>&nbsp;MemberShip  |
                        <input type="radio" name="userType" value="doctor" class="custom-radio" required>&nbsp;
                        Doctor  |
                        <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin  
                    </div> -->
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-danger btn-block">
                    </div>

                </form>
            </div>
        </div>
        
    </div>

</body>
</html>

<?php
class Login{
    function admin(){
        echo "Login with Admin";
    }

    function doctor(){
        echo "Login with Doctor";
    }
    
    function membership($ten,$hanhdong){
        //echo "Login with Membership";
        echo $ten ." - ". $hanhdong;
        
    }
    //

}
?>