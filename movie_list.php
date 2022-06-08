<!DOCTYPE html>
<html>
<head>                    
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
	table, th, td {
 	 border: 1px solid white;
	border-collapse: collapse;
	}
	thead, th {
	background-color:#96D4D4;
	}

    </style>
</head>

<body>
    <?php
     $conn = mysqli_connect(
        'localhost',
        'admin',
        'password',
        'moviedb');
    if(!$conn) echo 'connection error.';
    $sql = "SELECT * FROM  note order by id desc";
    $result = mysqli_query($conn, $sql);
	if($result == false){
		echo 'Error to list.';
		error_log(mysqli_error($conn));
	}
     ?>
    <div id= "top">
        <h1>Movie Note <br></h1>
	<h4>Your Movie Memory<br></h4>
	<button type="button" onclick="location.href='movie_form.html'">Add New</button>
    </div>
    <div id="main">
    <table align=center>
        <thead align="center">
            <tr>
                <td width="50" align="center">ID</td>
                <td width="200" align="center">NAME</td>
                <td width="100" align="center">DIRECTOR</td>
                <td width="100" align="center">CAST</td>
                <td width="100" align="center">GENRE</td>
                <td width="500" align="center">REVIEW</td>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
	?>    
            
                    <tr>  
                    <td width="50" align="center"><?php echo $rows['id'] ?></td>
                    <td width="200" align="center"><?php echo $rows['name'] ?></td>
                    <td width="100" align="center"><?php echo $rows['director'] ?></td>
                    <td width="100" align="center"><?php echo $rows['cast'] ?></td>
                    <td width="100" align="center"><?php echo $rows['genre'] ?></td>
                    <td width="500" align="center"><?php echo $rows['review'] ?></td>
                    </tr>
                <?php
            }
                ?>
        </tbody>
    </table>
    </div>
</body>
</html>
