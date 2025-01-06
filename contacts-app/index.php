<?php

$contacts = [
  ["name" => "Pepe", "phone_number" => "2132139"],
  ["name" => "Antonio", "phone_number" => "982392"],
  ["name" => "Nate", "phone_number" => "534654"],
  ["name" => "Rodrigo", "phone_number" => "645645"],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/darkly/bootstrap.min.css" integrity="sha512-HDszXqSUU0om4Yj5dZOUNmtwXGWDa5ppESlX98yzbBS+z+3HQ8a/7kcdI1dv+jKq+1V5b01eYurE7+yFjw6Rdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contacts App</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bold" href="#">
            <img class="mr-2" src="./static/img/logo.png"/>
            ContactsApp
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./add.html">Add Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <main>
        <div class="container pt-4 p-3">
          <div class="row">

            <?php foreach ($contacts as $contact) : ?>
              <div class="col-md-4 mb-3">
                <div class="card text-center">
                  <div class="card-body">
                    <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
                    <p class="m-2"><?= $contact["phone_number"] ?></p>
                    <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                    <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>
    </main> 
</body>
</html>