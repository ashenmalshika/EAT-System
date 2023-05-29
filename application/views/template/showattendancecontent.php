

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Attendance sheet</title>
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
                                    <input type="search" class="form-control form-control-lg" placeholder="Type Session ID To see Attendance" name="keyword">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-info" name="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <div class="card" style='margin-top: 15px'>
                                <div class="card-header">
                                    <h3 class="card-title">Attendance sheet</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                   
                                    <?php
                                               
                                               if(isset($_POST['submit'])){

                                                   if($attendance_results->num_rows()>0){
                                                       echo '    
                                                       <tr>
                                                           <th>Service ID</th>
                                                           <th>Photo</th>
                                                       </tr>
                                                       ';
                                                ?>
                                                
                                              
                                               <?php
                                               
                                                 foreach ($attendance_results->result() as $row){ ?>
                                                      
                                              
                                                  
                                                   <tr>
                                                   <td><?php echo $row->service_id; ?></td>
                                                   <td><?php $data=$row->employeephoto; ?>
                                                        <img src="<?php echo $data ?>" alt="image" width="170">
                                                    </td>
                                               
                                                   
                                               </tr>
                                               <?php
                                                   }  }else{
                                                       echo
                                                       '<h4 class=text-danger>  DATA NOT FOUND!</h4>';
                                                    } ;?> 
                                                    <?php } ;?> 
                                                    
                                            
                                    
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