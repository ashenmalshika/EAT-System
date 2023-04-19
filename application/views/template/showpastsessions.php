<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<head>
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>

<body>

<div class="content-wrapper">
    <section  class="content">
        <div class="container-fluid" >
            <div class="row">
             
                <!-- Table Start -->
                <div class="col-12" style='margin-top: 15px'>   
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Details of Past Sessions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Session ID</th>
                                        <th>Session Name</th>
                                        <th>Date</th>
                                        <th>Lecturer Name</th>                                       
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php foreach($sessions as $row): ?>                                       
                                    <tr >
                                        <td><?php echo $row->SessionID; ?></td>  
                                        <td > <?php echo $row->sessionName; ?></td>
                                        <td> <?php echo $row->sessionDate; ?></td>
                                        <td> <?php echo $row->lecturerName; ?></td>                                                                                                                     
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>                       
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>


<!-- /.card -->

</body>


