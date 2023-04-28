<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Mark Attendance</title>
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "serif";
        }   

        body {
            height: 100vh;
            width: 100%;
            background: rgb(230, 230, 255);
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            justify-content: center;
            background: #fff;

            padding: 10px;
       
            box-shadow: 0 0 8px rgba(69, 206, 41, 0.1);
        }

        video {
            border: 2px solid;
            border-radius: 10px;
            border-color:white;
        }

        button {
            background-color: #a82d2d;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            margin-left:0px;
            width: 100%;
            height: 50px;
            font-size: medium;
        }



        button:hover {
            background-color: #6c1c1c;
        }

        canvas {
            border: 5px solid white;
            border-radius: 5px;
            display: none;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

    </style>
        
</head>

<body>
    <div class='container'>
        <video id="video" width="320" height="240" autoplay></video>
        <div class=btn>
            <button id="capture">Capture Photo</button>
            
        </div>
        <canvas id="canvas" width="320" height="240"></canvas>
        <button id="markatt" style="display:none;">Mark Attendance</button>
        <div>
            <button id="retake" style="display:none;">Retake Photo</button>
        </div>
    </div>

<script>
    let video = document.querySelector("#video");
    let capture_button = document.querySelector("#capture");
    let canvas = document.querySelector("#canvas");
    let retake = document.querySelector("#retake");

    // Start camera stream when page loads
    window.onload = async function() {
        let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        video.srcObject = stream;
    }

    capture_button.addEventListener('click', function() {
        // Hide video element
        video.style.display = "none";

        // Show canvas element
        canvas.style.display = "block";

        markatt.style.display = "inline-block";
        retake.style.display = "inline-block";

        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        let image_data_url = canvas.toDataURL('image/jpeg');

        // data url of the image
        console.log(image_data_url);

        // Hide "Click Photo" button
        capture_button.style.display = "none";
    });

    retake.addEventListener("click", function() {
        location.reload();
    });
</script>



</body>
</html>

