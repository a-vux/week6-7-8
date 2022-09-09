<?php
   @include 'config.php';

   session_start();

   if (isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pass = md5($_POST['password']);

        $select = " SELECT * FROM user_form WHERE username = '$username' && password = '$pass' ";
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if($row['type']=='admin'){
                $_SESSION['admin_name'] = $row['username'];
                header('location:page_admin.php');
            }elseif($row['type']=='user'){
                $_SESSION['user_name'] = $row['username'];
                header('location:page_user.php');
            }
        }else{
            $error[] = 'incorrect mail or password';
        }
   } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
      crossorigin="anonymous">
    <title>Login form</title>
</head>
<body>
    <section class="p-5">
        <div class="container">
            <div>
                <div class="d-flex col-md justify-content-center">
                    <div class="card bg-light text-dark" style="width: 50rem;">
                        <div class="card-body text-center">
                            <form class="text-start" method="post">
                                <h3 class="text-center">Login</h3>
                                <?php
                                if (isset($error)){
                                        foreach($error as $error){
                                            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                                        }
                                    }
                                ?>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Enter username:</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Enter password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="margin-bottom: 0rem">Don't have an account? <a href="register.php">Sign up here</a></p>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>