<?php 
$host 	= "localhost";
$user 	= "root";
$pass 	= "root";
$db 	= "db_arka";
$conn	= mysqli_connect($host,$user,$pass,$db);

    if ($conn) {
        
    }else{
        echo "error";
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="jumbotron">
        <h1 class="display-4">Nurhadi Aldo</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>Nurhadi-Aldo adalah pasangan calon pemilihan presiden fiktif dengan nomor urutan 10 yang dibuat oleh sekelompok anak muda yang tersebar di berbagai kota di Indonesia.</p>
        <a class="btn btn-dark" href="https://www.linkedin.com/feed/" role="button">Click it</a>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Hobbies</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php 
                            $sql = "SELECT person_id, persons.name , GROUP_CONCAT(hobbies.name separator ', ') AS person_hobbies FROM hobbies INNER JOIN persons ON persons.id=hobbies.person_id GROUP BY persons.id, persons.name  
                                    ORDER BY `persons`.`name` ASC";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                                // echo $row['name']; 
                                // <th scope='col'>" .$row['id']. "</th>
                                echo 
                                "<tr> 
                                    <th scope='row'>". $row['person_id'] ."</th> 
                                    <td>". $row['name'] ."</td>
                                    <td>". $row['person_hobbies'] ."</td>
                                </tr>   
                                ";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>