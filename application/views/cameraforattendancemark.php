<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Webcam</title>

	<style>
	
	body{
	
	font-family: 'Lato' , sans-serif;
	background-color: #736AFF;
	
	}
	
	
	.container{
	
			margin-left: 10px;
			background: #d2def2;
			padding: 20px 30px 20px 30px;
			width: 400px;
			border-radius: 15px;
			float: left;
			position: absolute;
			top: 45%;
			bottom:10;
			left: 49%;
			transform: translate(-50%, -50%);
	
	}
	
	.container button{
			
			width: 100%;
			height: 50px;
			background: blue;
			color:  #fff;
			border: 0;
			outline: 0;
			border-radius: 5px;
			bpx-shadow: 0 10px 10px rgba(0,0,0,0.1);
			cursor: pointer;
			margin: 20px 0;
			font-weight: 500
	}						    
	</style>
</head>
<body onload = "configure();">

	<div class="container">
	<div id="my_camera">


	</div>
	<div id="results" style = "visibility: hidden; positon: absolute;">

	</div>

	<br>

	<button type="button" onclick = "saveSnap();">Capture</button>
</div>

<script type="text/javascript" src = "<?php echo base_url()?>assets/plugins/webcam.min.js"></script>

<script type="text/javascript" src = "<?php echo base_url()?>assets/plugins/sweetalert.min.js">
	swal({
			title: 'Success',
			text: 'Photo uploaded successfully',
			icon: 'success',
			buttons: false,
			closeOnClickOutside: false,
			closeOnEsc: false,
			timer: 2000
			
			})
</script>

<script type="text/javascript" >
	function configure(){
		Webcam.set({

			width:  402,
			height: 360,
			image_format: 'jpeg',
			jpeg_quality: 90

		});

		Webcam.attach('#my_camera');
	
	}
	function saveSnap(){
		Webcam.snap(function(data_uri){
		document.getElementById('results').innerHTML =

		'<img id = "webcam" src="'+data_uri+'">';

	});

	Webcam.reset();
		var base64image = document.getElementById("webcam").src;
		Webcam.upload(base64image,'function.php',function(code,text){
	document.location.href = "index.php"

	});
	}			
</script>

</body>
