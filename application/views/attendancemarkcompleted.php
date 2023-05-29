<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback form</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/serviceidinputpage.css">
	
</head>
<body>
    <div class = "container">
        <?php if ($this->session->flashdata('message')): ?>
            <div id="message"><?php echo $this->session->flashdata('message'); ?></div>
        <?php endif; ?>
 
        <?php  $serviceID = $this->uri->segment(4); $sessionID=$this->uri->segment(3);  ?>
        <?php echo form_open() ?>
            <input type="text" placeholder="Enter Service ID" name='serviceid-input' id="in-1"  value="<?php echo $serviceID; ?>">
        <?php echo form_close(); ?>
        <a href='<?php echo base_url('index.php/Welcome/feedbackform/'.$sessionID.'/'.$serviceID);?>'>
            <button >Feedback Form</button>
        </a>      
    </div>
</body>
</html>