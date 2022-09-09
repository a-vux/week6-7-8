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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Link bootstrap icon ở trên -->
    <link rel="stylesheet" href="./source/css/main.css">
    <title>Vux's Web</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Vux's web</a>
            <button 
              class="navbar-toggler" 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button 
                            class="btn btn-dark dropdown-toggle" 
                            type="button" id="account-management" 
                            data-bs-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                                Account management
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="account-management">
                                <a href="./admin/create-user.php" class="dropdown-item">Create account</a>
                                <a href="./admin/delete-user.php" class="dropdown-item">Delete account</a>
                                <a href="./admin/update-user.php" class="dropdown-item">Update account</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button 
                            class="btn btn-dark dropdown-toggle" 
                            type="button" id="file-management" 
                            data-bs-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                                File management
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="file-management">
                                <li class="dropdown-item">Download file</li>
                                <li class="dropdown-item">Delete file</li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#instructors" class="nav-link">Pages</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-5">
        <div class="container">
            <div>
                <div class="d-flex col-md justify-content-center">
                    <div class="card bg-dark text-light" style="width: 18rem;">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <img src="./source/img/flashy-frog.png" alt="">
                            </div>
                            <h6 class="card-title mb-3">
                                Welcome admin!
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"
    ></script>
</body>
</html>