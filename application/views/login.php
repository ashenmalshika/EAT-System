<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Login Page</title>
    <style>
        <?php include 'logins.css'; ?>
    </style>
</head>
<body>
    <div class="back-image">
       <img src="<?php echo base_url('assets/images/bk.png'); ?>" alt="background image">
    </div>
    <section class="left">
        <section class="side login">  
            <div class="box">
                <img id="logo" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt=" " width="140px">
            </div>
            <p class="title">Employees Attendance Tracking System</p>
            <br>
            <img src="<?php echo base_url('assets/images/mobile.png'); ?>" alt=" ">
            
        </section>
    </section>

    <section class="right">
        <section class="main login">
            <div class="container">               
                <p class="title">Login</p>
                <?php echo form_open('Login/LoginUser'); ?>
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        <i class="fas fa-unlock"></i>
                    </div>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="error"><?php echo $this->session->flashdata('error'); ?></div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('errormsg')){
                        echo "<p class='error'>".$this->session->flashdata('errormsg')."</p>";
                        }
                    ?>
                    <button type="submit" class="submit">Login</button>
                <?php form_close(); ?>
            </div>
        </section>

    </section>
    
</body>
</html>


