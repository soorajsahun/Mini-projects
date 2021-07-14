<?php
// establish database connection
    include_once("config.php");

    // writing query to get all rthe data in databse
    $result=mysqli_query($mysqli,"SELECT * FROM users ORDER BY id DESC");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        *{
            font-family: 'Sriracha', cursive;
           
        }
        .bg{
            width: 100%;
            height: 100%;
            position:absolute;
            z-index: -1;
            opacity: 0.5;
        }
        .table{
            opacity: 0.7;
        }
    </style>
  </head>
  <body>
      <img src="https://source.unsplash.com/collection/190727/1600x900" alt="CRUD" class="bg">
      <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky">
		<a class="navbar-brand" href="#">CRUD</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="add.html">Add Data<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container my-5">
		<table class="table table-striped table-hover table-light" width='80%' border=0>
            <tr bgcolor='#CCCCCC'>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
                <?php
                // <!-- loop over the rows from the database -->
                while($res=mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>".$res['name']."</td>";
                        echo "<td>".$res['age']."</td>";
                        echo "<td>".$res['email']."</td>";
                        echo "<td><a class='btn btn-danger' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure want to delete?')\">Delete</a></td>";    
                }
                ?>
        </table>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>