<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link btn btn-success" data-toggle="modal" data-target="#exampleModal" style="color: #FFF" href="#">add</a>
      </li>
  </div>
</nav>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Cashier</th>
      <th scope="col">Product</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pevita Pearce</td>
      <td>Latte</td>
      <td>Drink</td>
      <td>Rp.10.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Raisa Andriana</td>
      <td>Cake</td>
      <td>Food</td>
      <td>Rp.15.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Raisa Andriana</td>
      <td>Fried Rice</td>
      <td>Food</td>
      <td>Rp.30.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Pevita Pearce</td>
      <td>Gudeg</td>
      <td>Food</td>
      <td>Rp.35.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Joko Purwadhi</td>
      <td>Ice Tea</td>
      <td>Drink</td>
      <td>Rp.35.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Rohan</td>
      <td>Bala Bala</td>
      <td>Gorengan</td>
      <td>Rp.15.000</td>
      <td><a  data-toggle="modal" data-target="#edit" href="#">Edit</a>|<a  data-toggle="modal" data-target="#delete" href="#">Delete</a></td>
    </tr>
  </tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control">
		  <option>Default select</option>
		</select>
		<select class="form-control">
		  <option>Default select</option>
		</select>
		<input class="form-control" type="text" placeholder="Default input">
		<input class="form-control" type="text" placeholder="Default input">
		<div align="right">
        <button type="button" class="btn btn-primary">ADD</button>
		</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 align="center">Terhapus</h3>
        <div align="center">
        	<img src="img/ceklis.png">
        </div><br/>
        <h4 align="center">Berhasil Dihapus!</h4>
        <br/>
		</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control">
		  <option>Default select</option>
		</select>
		<select class="form-control">
		  <option>Default select</option>
		</select>
		<input class="form-control" type="text" placeholder="Default input">
		<input class="form-control" type="text" placeholder="Default input">
		<div align="right">
        <button type="button" class="btn btn-primary">Edit</button>
		</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>