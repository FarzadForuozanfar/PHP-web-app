<?php
    include "database.php";
    
    $users = mysqli_query($connection, "SELECT * FROM users");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phone Book">
    <meta name="keywords" content="html, css, bootstrap5, js, php, sql, database, phone book, contacts">
    <meta name="author" content="farzad foroozanfar">
    <title>Phone Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark   rounded-3">

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Contacts <i class="bi bi-person-rolodex"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <!-- Button trigger modal -->
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    
    
        <div class="row mt-2">
            <div class="col">
                <ul class="list-group">
                <?php foreach($users as $user): ?>
                        <li class="list-group-item d-flex justify-content-center" style="padding-left: 0px !important;">
                            <div class=" ">
                                <?php if($user["gender"] == 1)
                                    echo "<img class=border-end border-dark src=img/man.png width=55px class=rounded>";
                                    else
                                        echo "<img class=border-end border-dark src=img/woman.png width=55px class=rounded>";
                                ?>
                            </div>
                            <div class="ps-3 ">
                                <div class="fw-bold ">First Name:
                                </div>
                                    <?php echo $user["first_name"]; ?>
                                    
                            </div>
                            <div class="m-auto ">
                                <div class="fw-bold">Last Name:
                                </div>
                                <?php echo $user["last_name"]; ?>
                                    
                            </div>
                            <div class="m-auto ">
                                <div class="fw-bold">Phone:
                                </div>
                                <?php echo $user["phone"]; ?>
                                    
                            </div>
                            <div class="m-auto">
                                <div class="fw-bold">Email:
                                </div>
                                <?php echo $user["gmail"]; ?>
                                    
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center " >
            <button type="button" id="new-user" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus"></i>
                    </button>
            <form method="post" action="delete.php" >
                
                <button name="delete" id="delete" type="submit"  class="btn btn-danger mx-5">
                    <i class="bi bi-trash"></i>
                </button>
            </form>    
  
                
 
                    
                    
                    
                    
                </div>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Users</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="new_users.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="firstname" id="floatingInput" placeholder="First Name">
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="lastname" id="floatingInput" placeholder="Last Name">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="phonenumber" id="floatingInput" placeholder="Phone Number">
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-check" >
                                            <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1"checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2" >
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                female
                                            </label>
                                        </div>
                                        <div class="">
                                            <button style="width: 100% !important;" type="submit" class="btn btn-primary mt-2">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            
                            </div>
                        
                    </div>
                </div>
            
        
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>