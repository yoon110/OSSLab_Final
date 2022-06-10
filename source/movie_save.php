<?php
    $name = $_POST ['name'];
    $director = $_POST ['director'];
    $cast = $_POST ['cast'];
    $genre = $_POST['genre'];
    $review = $_POST['review'];
    $conn = mysqli_connect(
        'localhost',
        'admin',
        'password',
        'moviedb');
    if(!$conn) echo 'connection error.';
    
    $sql = "INSERT INTO note (name, director, cast, genre, review) VALUES ('".$_POST['name']."', '".$_POST['director']."', '".$_POST['cast']."', '".$_POST['genre']."', '".$_POST['review']."')";

      $result = mysqli_query($conn, $sql);
      if($result === false){
        echo 'Error to save.';
        error_log(mysqli_error($conn));
      } else {
        echo 'Finished. <a href="movie_form.html">--save another movie--</a>';
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addToMySql</title>
    <style>
        #top{
            display: block;
            background-color: rgba(73, 155, 255, 0.865);
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        }
        #main{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        #bottom{
            background-color: rgba(73, 155, 255, 0.865);
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
	}
	button{
            display: block;
            position: relative;
            margin-left: auto;
            background-color: #01A9DB;
            padding: 5px;
            color: #ffffff;
            border: white;
	}

    </style>
</head>
<body>
    <div id= "top">
        <h1><?=$name?> is saved. <br></h1>
        <h4>check the movie information <br></h4>
    </div>
    <div id="main">
        <p>
            Movie: <?=$name?> <br>
            Director: <?=$director?> <br>
            Cast: <?=$cast?> <br>
            Genre: <?=$genre?> <br>
            Review: <?=$review?> <br>
        </p>
    </div>
    <div id="bottom">
        <h3>
            This information is saved in movie table in MySql
	<button type="button" onclick="location.href='movie_list.php'">Go Back To List</button>
	</h3>
    </div>

    
</body>
</html>
