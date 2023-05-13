<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html-Qrcode Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>

        .log {
            color: rgb(104, 85, 224);
            background-color: rgba(255, 255, 255, 1);
            border: 1px solid rgb(255, 204, 128);
        }

        body {
            background-color: #2E4583;
        }
        
        #video {
            justify-content: center;
        }
        
        .container {
            margin: 60px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card {
            background-color: #3e60c1;
        }
        
        #result {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: large;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
                <a href="<?php echo base_url('index.php/Welcome/Login'); ?>">
                    <button class="btn btn-outline-primary" type="submit">ADMIN LOGIN</button>
                </a>
        </div>
    </nav>
    <div class="container">
        <div class="card mb-3" style="max-width: 22.3rem;">
            <div class="card-body">
                <video id="video" width="320" height="240" autoplay></video>
                <canvas id="canvas" width="320" height="240" style="display: none;"></canvas>
            </div>
        </div>
    </div>
    <div id="result">Scan QR Code</div>


    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
    <script>
        const video = document.getElementById('video');

        navigator.mediaDevices.getUserMedia({
            video: {
                facingMode: "environment"
            }
        })
        .then(stream => {
            video.srcObject = stream;
            video.onloadedmetadata = () => {
                video.play();
            };
        })
        .catch(error => {
            console.error('Unable to access the camera.', error);
        });
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext('2d');

        function captureFrame() {
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
            return imageData;
        }

        function decodeQRCode(imageData) {
            const code = jsQR(imageData.data, imageData.width, imageData.height);
            if (code) {
                return code.data;
            } else {
                return null;
            }
        }

        function scanQRCode() {
            const imageData = captureFrame();
            const code = decodeQRCode(imageData);
            if (code) {
                console.log('QR Code found:', code);
                window.location.href = code;

                document.getElementById('result').innerHTML = '<a id="result" href="' + code + '">' + code + '</a>';


            }
            requestAnimationFrame(scanQRCode);
        }

        requestAnimationFrame(scanQRCode);
    </script>
</body>
</html>
