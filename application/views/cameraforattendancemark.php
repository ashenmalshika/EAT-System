
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Mark Attendance</title>
        
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'sans-serif';
        }
        
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 400px;
        }
        
        #capture,
        #retake,
        #markatt {
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 1.2em;
            width: 100%;
            color: #fff;
            background-color: #205c63;
            padding: 14px 20px;
            letter-spacing: 1.0px;
            cursor: pointer;
            transition: opacity 0.4s;
        }
        
        #capture {
            margin-top: 32px;
        }
        
        #markatt {
            margin-bottom: 20px;
            margin-top: 32px;
        }
        
        #video {
            margin-top: 20px;
            width: 100%;
            height: auto;
        }
        
        #canvas {
            display: none;
            border-radius: 5px;
            width: 100%;
            height: auto;
        }
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

        <video id="video" height="auto" autoplay playsinline></video>
        <div class="btn">
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
        document.addEventListener('DOMContentLoaded', function() {
            let video = document.querySelector("#video");
            let capture_button = document.querySelector("#capture");
            let canvas = document.querySelector("#canvas");
            let retake = document.querySelector("#retake");

            window.onload = async function() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
                    video.srcObject = stream;
                } catch (error) {
                    console.error("Error accessing user media:", error);
                }
            }

            capture_button.addEventListener('click', function() {
                video.style.display = "none";
                canvas.style.display = "block";
                markatt.style.display = "inline-block";
                retake.style.display = "inline-block";
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                let image_data_url = canvas.toDataURL('image/jpeg');
                document.getElementById('image-data').value = image_data_url;
                console.log(image_data_url);
                capture_button.style.display = "none";
            });

            retake.addEventListener("click", function() {
                location.reload();
            });
        });
    </script>
</body>

</html>
