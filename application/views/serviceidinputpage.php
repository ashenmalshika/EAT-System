<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enter Service ID</title>
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
        
        <p class="error"></p>

        <?php echo form_open('Welcome/startcamera/'.$section2); ?>
            <input type="text" placeholder="Enter Service ID" name='serviceid-input' id="in-1">
            <button type='submit' onclick="return validateForm()">Open Camera</button>    
        <?php echo form_close(); ?>
               
    </div>

    <script>
        function validateForm() {
            var serviceId = document.getElementById("in-1").value;
            var errMsg = document.querySelector(".error");
            if (serviceId === "") {
                errMsg.style.display = "inline-block";
                errMsg.textContent = "Service ID is required";
                return false;
            }
            return true;
        }
</script>

</body>
</html>