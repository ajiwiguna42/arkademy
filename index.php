<?php

  //koneksi database
  include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Arkademy</title>
</head>
<body>
    <nav class="navbar navbar-light">
        <a class="navbar-brand">
            <img src="img/501011545189495.png" class="img-thumbnail">
        </a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1 bg-warning-warning" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ADD
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="input_product.php">Add Product</a>
                <a class="dropdown-item" href="input_category.php">Add Category</a>
                <a class="dropdown-item" href="input_cashier.php">Add Cashier</a>
              </div>
            </div>
          </div>
        </form>
      </nav>
      <div class="container">
        <h2>TABLE PRODUCT</h2>
        <table class="table" style="margin-bottom: 5rem;">
          <thead class="bg-warning">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">PRICE</th>
              <th scope="col">ID_CATEGORY</th>
              <th scope="col">ID_PRODUCT</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>@twitter</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
          </tbody>
        </table>

        <h2>TABLE CATEGORY</h2>
        <table class="table" style="margin-bottom: 5rem;">
          <thead class="bg-warning">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
          </tbody>
        </table>

        <h2>TABLE CASHIER</h2>
        <table class="table">
          <thead class="bg-warning">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td><a href="#">EDIT</a>|<a href="#">DELETE</a></td>
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html>