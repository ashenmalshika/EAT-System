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
        <?php 
            $section2 = $this->uri->segment(2);
        ?>
        <!--showing session time and session name-->
        <?php foreach($sessions as $session) {
            if ($session['SessionID'] == $section2) {
                $sessionName = $session['sessionName'];
                $sessionTime = $session['sessionTime'];
            }    
       
} ?>     
        <p id=subject><?php echo 'Session - '.$sessionName ; ?></p> 
        <p id=time><?php echo ' Starts at : ' . date('h:i A', strtotime($sessionTime)); ?></p>                                                         
        <?php echo form_open('Welcome/addServiceidToDB/'.$section2); ?>
            <input type="text" placeholder="Enter Service ID" name='serviceid-input' id="in-1" required>
            <button type='submit' id='mark-att-btn' name='mark-attendance'> Mark Attendance</button>
        <?php echo form_close(); ?>

        <?php echo form_open('Welcome/startcamera'); ?>
            <button type='submit'>Open Camera</button>    
        <?php echo form_close(); ?>
        
        <a href='#'>
            <button id='feedback-btn'>Feedback Form</button>
        </a>        
    </div>

    <script>
        const button = document.getElementById("feedback-btn");
        
        button.addEventListener("click", function() {
            button.style.backgroundColor = "Orange";
            button.textContent = "Mark Attendance First.";
        
        });
    </script>

</body>
</html>
