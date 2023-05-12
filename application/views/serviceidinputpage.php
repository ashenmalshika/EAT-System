<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<title>Enter Service ID</title>
	<style>
	    <?php include 'serviceidinputpage.css'; ?>	
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