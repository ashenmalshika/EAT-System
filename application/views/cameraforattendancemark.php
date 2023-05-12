<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Mark Attendance</title>
    <style>
	    <?php include 'camerapage.css'; ?>	
	</style>
        
</head>

<body>
    <div class='container'>
        <?php 
            $sessionID = $this->uri->segment(3);
        ?>
        <?php 
            $serviceID = $this->uri->segment(4);
        ?>

        
        <video id="video" width="320" height="240" autoplay></video>
        <div class=btn>
            <button id="capture">Capture Photo</button>
            
        </div>
        <canvas id="canvas" width="320" height="240"></canvas>

        <?php echo form_open('Welcome/addServiceidToDB/'.$sessionID); ?>
            <input type="hidden" name="serviceid-input" value="<?php echo $serviceID; ?>">
            <input type="hidden" name="image_data" id="image-data">   
            <button id="markatt" style="display:none;">Mark Attendance</button>
        <?php echo form_close(); ?>

        <div>
            <button id="retake" style="display:none;">Retake Photo</button>
        </div>
    </div>

<script>
    let video = document.querySelector("#video");
    let capture_button = document.querySelector("#capture");
    let canvas = document.querySelector("#canvas");
    let retake = document.querySelector("#retake");

 
    window.onload = async function() {
        let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        video.srcObject = stream;
    }

    capture_button.addEventListener('click', function() {
       
        video.style.display = "none";

        canvas.style.display = "block";

        markatt.style.display = "inline-block";
        retake.style.display = "inline-block";

        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        let image_data_url = canvas.toDataURL('image/jpeg');

        document.getElementById('image-data').value = image_data_url;

        console.log(image_data_url);

        capture_button.style.display = "none";
    });

    retake.addEventListener("click", function() {
        location.reload();
    });
</script>



</body>
</html>

