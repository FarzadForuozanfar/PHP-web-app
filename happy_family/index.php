<?php
    include "database.php";
    
    $messages = mysqli_query($connection, "SELECT * FROM messages");
    
    
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="image/png" sizes="96x96" rel="icon" href="https://img.icons8.com/emoji/48/000000/family-.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Happy Family">
    <meta name="keywords" content="html, css, bootstrap5, js, php, sql, database, chatApp">
    <meta name="author" content="farzad foroozanfar">
    <title>Happy Family</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: whitesmoke;">
    <div class="container">
        
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark  mt-2 rounded-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/family.png" width="45px" alt="logo"></a>
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div class="row mt-2">
            <div class="col">
                <ul class="list-group ">
                    <?php foreach($messages as $messag): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $messag["name"]; ?></div>
                                <?php echo $messag["text_message"]; ?>
                            </div>
                            <span class="badge bg-primary rounded-pill"><?php echo $messag["time"]; ?></span>
                        </li>
                        
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        
        
        
            
                <div class="d-flex justify-content-end px-3">
                    
                    <button type="button" id="new-message" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-vector-pen"></i>
                    </button>
                    
                    
                </div>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="new_message.php" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                                                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Message text</label>
                                            <textarea class="form-control" name="message_text" id="exampleFormControlTextarea1" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
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