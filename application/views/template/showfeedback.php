<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback sheet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">  
        <div class="content-wrapper">            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2" style='margin-top: 15px'>
                            <form method="post">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Type Session ID To see Feedbacks" name="search">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-info" name="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <div class="card" style='margin-top: 15px'>
                                <div class="card-header">
                                    <h3 class="card-title">Feedback sheet</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                    <?php
                                          $servername = "localhost";
                                          $username = "root";
                                          $password = "";
                                          $database = "eatsystem";
                                           //create connection
                                           $connection = new mysqli($servername,$username,$password,$database);

                                           //check connection
                                           if ($connection->connect_error){
                                              die("Connection failed :". $connection->connect_error);
                                           }
                                           
                                        
                                    if (isset($_POST['submit'])){
                                        $search=$_POST['search'];
                                        $sql = "SELECT * FROM feedbacks WHERE SessionID='$search'";
                                        $result = $connection->query($sql);

                                        if ($result){
                                            if(mysqli_num_rows($result)>0){
                                                echo '    <thead>
                                                <tr>
                                                    <th>Service ID</th>
                                                    <th>Answer 1</th>
                                                    <th>Answer 2</th>
                                                    <th>Answer 3</th>
                                                    <th>Answer 4</th>
                                                    <th>Answer 5</th>
                                                    <th>Answer 6</th>
                                                    <th>Answer 7</th>
                                                    <th>Answer 8</th>
                                                    <th>Answer 9</th>
                                                    <th>Suggestions</th>
                                                </tr>
                                                </thead>';

                                                while($row = $result->fetch_assoc()){
                                                    echo"<tbody>
                                                    <tr>
                                                    <td>$row[service_id]</td>
                                                    <td>$row[question_1]</td>
                                                    <td>$row[question_2]</td>
                                                    <td>$row[question_3]</td>
                                                    <td>$row[question_4]</td>
                                                    <td>$row[question_5]</td>
                                                    <td>$row[question_6]</td>
                                                    <td>$row[question_7]</td>
                                                    <td>$row[question_8]</td>
                                                    <td>$row[question_9]</td>
                                                    <td>$row[question_10]</td>
                                                </tr>
                                                </tbody>
                                                    
                                                    ";
                                                 }
                                                 
                                                

                                            }else{
                                                echo
                                                '<h1 class=text-danger> data not found</h1>';
                                             }
                                        }
                                    }
                                
                                        ?>
                                
                                    
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section >
                    </div>
                </div >
            </div >
        </div >
    </div >



</body>
</html>