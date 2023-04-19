<!DOCTYPE html>
<html>
<head>
	<title>Mark Attendance</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    <?php include 'attendancemark.css'; ?>	
	</style>	
</head>
<body>
    <div class = "container">
        <?php  $serviceID = $this->uri->segment(4); $sessionID=$this->uri->segment(3);  ?>
        <?php echo form_open() ?>
            <input type="text" placeholder="Enter Service ID" name='serviceid-input' id="in-1"  value="<?php echo $serviceID; ?>">
            <p id='marked-att-btn'>Attendance Marked</p>
        <?php echo form_close(); ?>
        <a href='<?php echo base_url('index.php/Welcome/feedbackform/'.$sessionID.'/'.$serviceID);?>'>
            <button >Feedback Form</button>
        </a>      
    </div>
</body>
</html>