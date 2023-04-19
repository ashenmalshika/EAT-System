<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Show Attendance</title>
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
                                    <input type="search" class="form-control form-control-lg" placeholder="Type Session ID To see participations" name="search">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-info" name="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <div class="card" style='margin-top: 15px'>
                                <div class="card-header">
                                    <h3 class="card-title">Attendance Sheet</h3>
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
                                        $sql = "SELECT * FROM employee_attendance WHERE SessionID='$search'";
                                        $result = $connection->query($sql);

                                        if ($result){
                                            if(mysqli_num_rows($result)>0){
                                                echo '    <thead>
                                                <tr>
                                                    <th>Session ID</th>
                                                    <th>Service ID</th>
                                                </tr>
                                                </thead>';

                                                while($row = $result->fetch_assoc()){
                                                    echo"<tbody>
                                                    <tr>
                                                    <td>$row[SessionID]</td>
                                                    <td>$row[service_id]</td>
                                                </tr>
                                                </tbody>
                                                    
                                                    ";
                                                 }
                                                 
                                                

                                            }else{
                                                echo
                                                '<h6 class=text-danger> data not found</h6>';
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