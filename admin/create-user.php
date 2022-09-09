<?php
    @include '../config.php';
    if (isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']); 
        $type = $_POST['type'];

        $select = "SELECT * FROM user_form WHERE username = '$username' OR email = '$email'";
        $result = mysqli_query($conn, $select); 
        if(mysqli_num_rows($result) > 0){
            $select = "SELECT * FROM user_form WHERE username = '$username'";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0){
                $error[] = 'This username has already been used!';
            }
            else{
                $error[] = 'This email has already already been registered!';
            }
        }else{
            $insert = "INSERT INTO user_form(username, email, password, type) VALUES ('$username', '$email', '$pass', '$type')";
            mysqli_query($conn, $insert);
            $success[] = "Successfully registered!";
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
    <title>Create user</title>
</head>
<body>
    <section class="p-5">
        <div class="container">
            <div>
                <div class="d-flex col-md justify-content-center">
                    <div class="card bg-light text-dark" style="width: 50rem;">
                        <div class="card-body text-center">
                            <form class="text-start" method='POST'>
                                <h3 class="text-center">Create user</h3>
                                <?php
                                    if (isset($error)){
                                        foreach($error as $error){
                                            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                                        }
                                    }
                                    if (isset($success)){
                                        foreach($success as $success){
                                            echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
                                        }
                                    }
                                ?>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Enter username:</label>
                                    <input type="text" name='username' class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Enter email:</label>
                                    <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Enter password</label>
                                    <input type="password" name='password' class="form-control">
                                </div>
                                    <label for="utype" class="form-label">Select user type:</label>
                                    <select class="form-select" name='type'>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                <div class="d-flex flex-row-reverse" style="margin-top: 1rem;">
                                    <button type="submit" name='submit' class="btn btn-primary">Create</button>
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