
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .card {
            background-color: #f5f5f5;
        }
        .top-right-button {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #205c63;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        body {
            background-color: white;
        }
        #video {
            width: 100%; 
            height: auto; 
        }
        .container {
            margin: 80px auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        #result {
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: large;
        }
        @media (max-width: 600px) {
            .top-right-button {
                top: 10px;
                right: 10px;
                font-size: 14px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
</head>
<body>
    <nav>
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <a href="<?php echo base_url('Welcome/Login'); ?>">
                <button class="top-right-button" type="submit">ADMIN LOGIN</button>
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <video id="video" autoplay playsinline></video>
                <canvas id="canvas" style="display: none;"></canvas>
            </div>
        </div>
    </div>
    <div id="result">Scan QR Code</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>
</body>
</html>
