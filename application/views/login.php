<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		<?php include 'login.css'; ?>
	</style>
</head>

<body>
    <div class="center">
        <div class="container">
            <div class="text">
                Login
            </div>
            <img id='image' src="<?php echo base_url('assets/images/admin1.jpg'); ?>" alt="My Image">
            <?php echo form_open('Login/LoginUser'); ?>
                <div class="data">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="data">
                    <input type="password" name="password" class="password" placeholder="Password">
                </div>
                <?php echo validation_errors(); ?>
                <?php if($this->session->flashdata('errormsg')){
                    echo "<h3>".$this->session->flashdata('errormsg')."</h3>";
                }
                ?>
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit">login</button>
                </div>
            <?php form_close(); ?>
        </div>
    </div>
</body>

</html>