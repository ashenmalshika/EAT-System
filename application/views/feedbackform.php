

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	
	<title>language</title>
	<link rel="stylesheet" href="./main.css">
	


	<style>

		body{

			font-family: 'Lato' , sans-serif;
		}


		.form-container{

			margin-left: 10px;
			background: #d2def2;
			padding: 20px 30px 20px 30px;
			width: 850px;
			border-radius: 20px;
			float: left;
			position: absolute;
			top: 225%;
			bottom:10;
			left: 50%;
			transform: translate(-50%, -50%);

		}

		h2{


			color: blue;
			

		}



		p {


 		 	font-weight: bold;
	

		}



		h4{

			color: Blue;
		}
		
		.btn-text-center{

			text-align: center;	

		}



		input[type=text] {

			border: 1px solid blue;
			border-radius: 4px;
			height: 50px;
			weight: 100px;

		}



		input[type='radio']:after {

			width: 10px;
			height: 10px;
			border-radius: 15px;
			background-color: #d1d3d1;
			content: '';
			display: inline-block;
			border: 2px solid blue;

		}

		input[type='radio']:checked:after {

			width: 10px;
			height: 10px;
			border-radius: 15px;
			background-color:brown; /*#ffa500;*/
			content: '';
			display: inline-block;
			border: 2px solid white;

		}


		input{



			margin-bottom: 20px;
			
		}

        button{

          	width: 20%;
	       	height: 30px;
	      	background: blue;
	      	color:  #fff;
	       	border: 0;
	    	outline: 0;
	       	border-radius: 5px;
	       	cursor: pointer;
	       	margin: 20px 0;
	       	font-weight: 500;
		}



		.google_element{
	
		background:#333;	
	
		}

		a{
	
		text-transform: uppercase;
		color: #fff;
		text-decoration: none;
		padding: 0 15px;
		font-weight: bold;
		background: blue;
		font-size: 14px;
		}

		a.active{
	
		background: #f21313;
	
	
		}
		
		

		/* Responsive page for 900px */


		@media screen and (max-width:900px){

		
			body{

				font-family: 'Lato' , sans-serif;
				}


				.form-container{

				margin-left: 10px;
				background: #d2def2;
				padding: 20px 30px 20px 30px;
				width: 400px;
				border-radius: 20px;
				float: left;
				position: absolute;
				top: 240%;
				bottom:10;
				left: 50%;
				transform: translate(-50%, -50%);

				}

				

				h2{


				color: blue;


				}



				p {


				font-weight: bold;
				font-size: 14px;

				}

				h4{

				color: Blue;
				}

				.btn-text-center{

				text-align: center;	

				}



				input[type=text] {

				border: 1px solid blue;
				border-radius: 4px;
				height: 50px;
				weight: 100px;
				width: 100%;

				}



				input[type='radio']:after {

				width: 10px;
				height: 10px;
				border-radius: 15px;
				background-color: #d1d3d1;
				content: '';
				display: inline-block;
				border: 2px solid blue;

				}

				input[type='radio']:checked:after {

				width: 10px;
				height: 10px;
				border-radius: 15px;
				background-color:brown; /*#ffa500;*/
				content: '';
				display: inline-block;
				border: 2px solid white;

				}


				input{



				margin-bottom: 20px;

				}

				button{

				width: 20%;
				height: 30px;
				background: blue;
				color:  #fff;
				border: 0;
				outline: 0;
				border-radius: 5px;
				cursor: pointer;
				margin: 20px 0;
				font-weight: 500;
				}
							
			}



					/* responsive for 600px*/

					
					@media screen and (max-width:600px){

					
					body{

					font-family: 'Lato' , sans-serif;
					}


					.form-container{

					margin-left: 10px;
					background: #d2def2;
					padding: 20px 30px 20px 30px;
					width: 300px;
					border-radius: 20px;
					float: left;
					position: absolute;
					top: 255%;
					bottom:10;
					left: 50%;
					transform: translate(-50%, -50%);

					}

					h2{


					color: blue;


					}



					p {


					font-weight:bold ;


					}

					

					h4{

					color: Blue;
					}

					.btn-text-center{

					text-align: center;	

					}



					input[type=text] {

					border: 1px solid blue;
					border-radius: 4px;
					height: 50px;
					weight: 100px;
					width: 100%;

					}



					input[type='radio']:after {

					width: 10px;
					height: 10px;
					border-radius: 15px;
					background-color: #d1d3d1;
					content: '';
					display: inline-block;
					border: 2px solid blue;

					}

					input[type='radio']:checked:after {

					width: 10px;
					height: 10px;
					border-radius: 15px;
					background-color:brown; /*#ffa500;*/
					content: '';
					display: inline-block;
					border: 2px solid white;

					}


					input{



					margin-bottom: 20px;

					}

					button{

					width: 20%;
					height: 30px;
					background: blue;
					color:  #fff;
					border: 0;
					outline: 0;
					border-radius: 5px;
					cursor: pointer;
					margin: 20px 0;
					font-weight: 500;
					}

				}
				
		

		


	</style>	


</head>
<body>

	<div class="container">
	

		
	<div class="content">
	<div class="form-container">
	<?php echo validation_errors(); ?>
  <?php  $serviceID = $this->uri->segment(4); $sessionID=$this->uri->segment(3);  ?>
        <?php echo form_open('feedbackform/employee/'.$sessionID.'/'.$serviceID); ?>

		    <h2 align="center" class="title">FeedBackForm</h2><br>

		<div align="center" class="langWrap">
		
		<a href="#" language='English' class="active">English</a>
		<a href="#" language='sinhala'>සිංහල</a>
		<a href="#" language='தமிழ்'>தமிழ்</a>

		</div>
		
		
			<br>
			
			
			<?php if ($this->session->flashdata('msg')){

			echo "<h4>".$this->session->flashdata('msg')."</h4>";
			}
			?>

	
	
					
			<p class="qw_1">1. Content of the course was adequate for us to reach expected outcomes.</p><br>
		
			<input type = "radio" name = "question_1" value = "Strongly Disagree" id="question_1">
			<label for="question_1" class="mcq1"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_1" value = "Disagree" id="question_1">
			<label for="question_1" class="mcq2"> Disagree </label><br>

			<input type = "radio" name = "question_1" value = "Niether Agree Nor Disagree" id="question_1">
			<label for="question_1" class="mcq3"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_1" value = "Agree" id="question_1" >
			<label for="question_1" class="mcq4"> Agree </label> <br>

			<input type = "radio" name = "question_1" value = "Strongly Agree" id="question_1">
			<label for="question_1" class="mcq5"> Strongly Agree</label> </br><br></br><br>
			



			<p class="qw_2">2. Trainer’s language was clear and audible. </p><br>
			<input type = "radio" name = "question_2" value = "Strongly Disagree" id="question_2">
			<label for="question_2" class="mcq6"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_2" value = "Disagree" id="question_2">
			<label for="question_2" class="mcq7"> Disagree </label><br>

			<input type = "radio" name = "question_2" value = "Niether Agree Nor Disagree" id="question_2">
			<label for="question_2" class="mcq8"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_2" value = "Agree" id="question_2">
			<label for="question_2" class="mcq9"> Agree </label> <br>

			<input type = "radio" name = "question_2" value = "Strongly Agree" id="question_2">
			<label for="question_2" class="mcq10"> Strongly Agree</label> </br><br></br><br>


			

			<p class="qw_3">3. Trainer encouraged questions and maintained the interest of the participants.</p><br>
			<input type = "radio" name = "question_3" value = "Strongly Disagree" id="question_3">
			<label for="question_3" class="mcq11"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_3" value = "Disagree" id="question_3">
			<label for="question_3" class="mcq12">  Disagree  </label> <br>

			<input type = "radio" name = "question_3" value = "Niether Agree Nor Disagree" id="question_3">
			<label for="question_3" class="mcq13"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_3" value = "Agree" id="question_3">
			<label for="question_3" class="mcq14"> Agree </label> <br>

			<input type = "radio" name = "question_3" value = "Strongly Agree" id="question_3">
			<label for="question_3" class="mcq15"> Strongly Agree </label> </br><br></br><br>


			

			<p class="qw_4">4. There were new learnings from the programmer. </p><br>
			<input type = "radio" name = "question_4" value = "Strongly Disagree" id="question_4">
			<label for="question_4" class="mcq16"> Strongly Disagree </label> <br>


			<input type = "radio" name = "question_4" value = "Disagree" id="question_4">
			<label for="question_4" class="mcq17">  Disagree  </label> <br>

			<input type = "radio" name = "question_4" value = "Niether Agree Nor Disagree" id="question_4">
			<label for="question_4" class="mcq18"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_4" value = "Agree" id="question_4">
			<label for="question_4" class="mcq19"> Agree </label> <br>

			<input type = "radio" name = "question_4" value = "Strongly Agree" id="question_4">
			<label for="question_4" class="mcq20"> Strongly Agree </label> </br><br></br><br>




			<p class="qw_5">5. Course Material was clear, understandable and assisted us to learn better. </p><br>
			<input type = "radio" name = "question_5" value = "Strongly Disagree" id= "question_5">
			<label for="question_5" class="mcq21"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_5" value = "Disagree" id= "question_5"> 
			<label for="question_5" class="mcq22"> Disagree </label> <br>

			<input type = "radio" name = "question_5" value = "Niether Agree Nor Disagree" id= "question_5"> 
			<label for="question_5" class="mcq23"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_5" value = "Agree" id= "question_5">
			<label for="question_5" class="mcq24"> Agree  </label> <br>

			<input type = "radio" name = "question_5" value = "Strongly Agree" id= "question_5">
			<label for="question_5" class="mcq25"> Strongly Agree </label> </br><br></br><br>



			
			<p class="qw_6">6. Are you committed to apply the new knowledge/skills gained in your work place? </p><br>
			<input type = "radio" name = "question_6" value = "Strongly Disagree" id="question_6">
			<label for="question_6" class="mcq26"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_6" value = "Disagree" id="question_6">
			<label for="question_6" class="mcq27"> Disagree </label> <br>

			<input type = "radio" name = "question_6" value = "Niether Agree Nor Disagree" id="question_6">
			<label for="question_6" class="mcq28"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_6" value = "Agree" id="question_6">
			<label for="question_6" class="mcq29"> Agree  </label> <br>

			<input type = "radio" name = "question_6" value = "Strongly Agree" id="question_6">
			<label for="question_6" class="mcq30"> Strongly Agree </label> </br><br></br><br>


			
			<p class="qw_7">7. Are you satisfied with the facilities provided (Online Platform) during training? </p><br>
			<input type = "radio" name = "question_7" value = "Strongly Disagree" id="question_7"> 
			<label for="question_7" class="mcq31"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_7" value = "Disagree" id="question_7"> 
			<label for="question_7" class="mcq32"> Disagree </label> <br>

			<input type = "radio" name = "question_7" value = "Niether Agree Nor Disagree" id="question_7"> 
			<label for="question_7" class="mcq33"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_7" value = "Agree" id="question_7"> 
			<label for="question_7" class="mcq34"> Agree  </label> <br>

			<input type = "radio" name = "question_7" value = "Strongly Agree" id="question_7"> 
			<label for="question_7" class="mcq35"> Strongly Agree </label> </br><br></br><br>

			
			<p class="qw_8">8. The overall programme was up to the standards.</p><br>
			<input type = "radio" name = "question_8" value = "Strongly Disagree" id="question_8">
			<label for="question_8" class="mcq36"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_8" value = "Disagree" id="question_8">
			<label for="question_8" class="mcq37"> Disagree </label> <br>

			<input type = "radio" name = "question_8" value = "Niether Agree Nor Disagree" id="question_8"> 
			<label for="question_8" class="mcq38"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_8" value = "Agree" id="question_8">
			<label for="question_8" class="mcq39"> Agree  </label> <br>


			<input type = "radio" name = "question_8" value = "Strongly Agree" id="question_8"> 
			<label for="question_8" class="mcq40"> Strongly Agree </label> </br><br></br><br>

			
			<p class="qw_9">9. I would recommend this programme to others.</p><br>
			<input type = "radio" name = "question_9" value = "Strongly Disagree" id="question_9"> 
			<label for="question_9" class="mcq41"> Strongly Disagree </label> <br>

			<input type = "radio" name = "question_9" value = "Disagree" id="question_9"> 
			<label for="question_9" class="mcq42"> Disagree </label> <br>

			<input type = "radio" name = "question_9" value = "Niether Agree Nor Disagree" id="question_9"> 
			<label for="question_9" class="mcq43"> Niether Agree Nor Disagree </label> <br>

			<input type = "radio" name = "question_9" value = "Agree" id="question_9"> 
			<label for="question_9" class="mcq44"> Agree </label> <br>

			<input type = "radio" name = "question_9" value = "Strongly Agree" id="question_9"> 
			<label for="question_9" class="mcq45"> Strongly Agree </label> </br><br></br><br>

		


			<p class="qw_10"> 10. Your suggestions for improvements. </p><br>
			<input type = "text" size="122"  name = "question_10">  </br>


			<div class="btn-text-center">
  			<button>Submit</button>
			</div>
			
			
			<?php echo form_close(); ?>
			
			

			</script>
	
	</div>
	</div>

	<script>
	
	const langEl = document.querySelector('.langWrap');
	const link = document.querySelectorAll('a');
	const titleEl = document.querySelector('.title');
	const q1El = document.querySelector('.qw_1');
	const q2El = document.querySelector('.qw_2');
	const q3El = document.querySelector('.qw_3');
	const q4El = document.querySelector('.qw_4');
	const q5El = document.querySelector('.qw_5');
	const q6El = document.querySelector('.qw_6');
	const q7El = document.querySelector('.qw_7');
	const q8El = document.querySelector('.qw_8');
	const q9El = document.querySelector('.qw_9');
	const q10El = document.querySelector('.qw_10');
	const mc1El = document.querySelector('.mcq1');
	const mc2El = document.querySelector('.mcq2');
	const mc3El = document.querySelector('.mcq3');
	const mc4El = document.querySelector('.mcq4');
	const mc5El = document.querySelector('.mcq5');	
	const mc6El = document.querySelector('.mcq6');
	const mc7El = document.querySelector('.mcq7');
	const mc8El = document.querySelector('.mcq8');
	const mc9El = document.querySelector('.mcq9');
	const mc10El = document.querySelector('.mcq10');
	const mc11El = document.querySelector('.mcq11');
	const mc12El = document.querySelector('.mcq12');
	const mc13El = document.querySelector('.mcq13');
	const mc14El = document.querySelector('.mcq14');
	const mc15El = document.querySelector('.mcq15');
	const mc16El = document.querySelector('.mcq16');
	const mc17El = document.querySelector('.mcq17');
	const mc18El = document.querySelector('.mcq18');
	const mc19El = document.querySelector('.mcq19');
	const mc20El = document.querySelector('.mcq20');
	const mc21El = document.querySelector('.mcq21');
	const mc22El = document.querySelector('.mcq22');
	const mc23El = document.querySelector('.mcq23');
	const mc24El = document.querySelector('.mcq24');
	const mc25El = document.querySelector('.mcq25');
	const mc26El = document.querySelector('.mcq26');
	const mc27El = document.querySelector('.mcq27');
	const mc28El = document.querySelector('.mcq28');
	const mc29El = document.querySelector('.mcq29');
	const mc30El = document.querySelector('.mcq30');
	const mc31El = document.querySelector('.mcq31');
	const mc32El = document.querySelector('.mcq32');
	const mc33El = document.querySelector('.mcq33');
	const mc34El = document.querySelector('.mcq34');
	const mc35El = document.querySelector('.mcq35');
	const mc36El = document.querySelector('.mcq36');
	const mc37El = document.querySelector('.mcq37');
	const mc38El = document.querySelector('.mcq38');
	const mc39El = document.querySelector('.mcq39');
	const mc40El = document.querySelector('.mcq40');
	const mc41El = document.querySelector('.mcq41');
	const mc42El = document.querySelector('.mcq42');
	const mc43El = document.querySelector('.mcq43');
	const mc44El = document.querySelector('.mcq44');
	const mc45El = document.querySelector('.mcq45');


	
	

	


	
	link.forEach(el => {
		el.addEventListener('click', () => {
			langEl.querySelector('.active').classList.remove('active');
			
			el.classList.add('active');
			
			const attr =el.getAttribute('language');
			
			
			
			titleEl.textContent = data[attr].title;
			q1El.textContent = data[attr].qw_1;
			q2El.textContent = data[attr].qw_2;
			q3El.textContent = data[attr].qw_3;
			q4El.textContent = data[attr].qw_4;
			q5El.textContent = data[attr].qw_5;
			q6El.textContent = data[attr].qw_6;
			q7El.textContent = data[attr].qw_7;
			q8El.textContent = data[attr].qw_8;
			q9El.textContent = data[attr].qw_9;
			q10El.textContent = data[attr].qw_10;
			mc1El.textContent = data[attr].mcq1;
			mc2El.textContent = data[attr].mcq2;
			mc3El.textContent = data[attr].mcq3;
			mc4El.textContent = data[attr].mcq4;
			mc5El.textContent = data[attr].mcq5;
			mc6El.textContent = data[attr].mcq6;
			mc7El.textContent = data[attr].mcq7;
			mc8El.textContent = data[attr].mcq8;
			mc9El.textContent = data[attr].mcq9;
			mc10El.textContent = data[attr].mcq10;
			mc11El.textContent = data[attr].mcq11;
			mc12El.textContent = data[attr].mcq12;
			mc13El.textContent = data[attr].mcq13;
			mc14El.textContent = data[attr].mcq14;
			mc15El.textContent = data[attr].mcq15;
			mc16El.textContent = data[attr].mcq16;
			mc17El.textContent = data[attr].mcq17;
			mc18El.textContent = data[attr].mcq18;
			mc19El.textContent = data[attr].mcq19;
			mc20El.textContent = data[attr].mcq20;
			mc21El.textContent = data[attr].mcq21;
			mc22El.textContent = data[attr].mcq22;
			mc23El.textContent = data[attr].mcq23;
			mc24El.textContent = data[attr].mcq24;
			mc25El.textContent = data[attr].mcq25;
			mc26El.textContent = data[attr].mcq26;
			mc27El.textContent = data[attr].mcq27;
			mc28El.textContent = data[attr].mcq28;
			mc29El.textContent = data[attr].mcq29;
			mc30El.textContent = data[attr].mcq30;
			mc31El.textContent = data[attr].mcq31;
			mc32El.textContent = data[attr].mcq32;
			mc33El.textContent = data[attr].mcq33;
			mc34El.textContent = data[attr].mcq34;
			mc35El.textContent = data[attr].mcq35;
			mc36El.textContent = data[attr].mcq36;
			mc37El.textContent = data[attr].mcq37;
			mc38El.textContent = data[attr].mcq38;
			mc39El.textContent = data[attr].mcq39;
			mc40El.textContent = data[attr].mcq40;
			mc41El.textContent = data[attr].mcq41;
			mc42El.textContent = data[attr].mcq42;
			mc43El.textContent = data[attr].mcq43;
			mc44El.textContent = data[attr].mcq44;
			mc45El.textContent = data[attr].mcq45;

			
		
			
			
			
				
		});
	});
	
	var data = {
	
	"English":
	{
		
		"title": "FeedBackForm",
		"qw_1":"1. Content of the course was adequate for us to reach expected outcomes.",
		"qw_2":"2. Trainer’s language was clear and audible.",
		"qw_3":"3. Trainer encouraged questions and maintained the interest of the participants.",
		"qw_4":"4. There were new learnings from the programmer quired to answer. Rating.",
		"qw_5":"5. Course Material was clear, understandable and assisted us to learn better.",
		"qw_6":"6. Are you committed to apply the new knowledge/skills gained in your work place? ",
		"qw_7":"7. Are you satisfied with the facilities provided (Online Platform) during training? ",
		"qw_8":"8. The overall programme was up to the standards.",
		"qw_9":"9. I would recommend this programme to others.",
		"qw_10":"10. Your suggestions for improvements.",

		"mcq1":"Strongly Disagree",
		"mcq2":"Disagree",
		"mcq3":"Niether Agree Nor Disagree",
		"mcq4":"Agree",
		"mcq5":"Strongly Agree",

		"mcq6":"Strongly Disagree",
		"mcq7":"Disagree",
		"mcq8":"Niether Agree Nor Disagree",
		"mcq9":"Agree",
		"mcq10":"Strongly Agree",

		"mcq11":"Strongly Disagree",
		"mcq12":"Disagree",
		"mcq13":"Niether Agree Nor Disagree",
		"mcq14":"Agree",
		"mcq15":"Strongly Agree",

		"mcq16":"Strongly Disagree",
		"mcq17":"Disagree",
		"mcq18":"Niether Agree Nor Disagree",
		"mcq19":"Agree",
		"mcq20":"Strongly Agree",

		"mcq21":"Strongly Disagree",
		"mcq22":"Disagree",
		"mcq23":"Niether Agree Nor Disagree",
		"mcq24":"Agree",
		"mcq25":"Strongly Agree",

		"mcq26":"Strongly Disagree",
		"mcq27":"Disagree",
		"mcq28":"Niether Agree Nor Disagree",
		"mcq29":"Agree",
		"mcq30":"Strongly Agree",

		"mcq31":"Strongly Disagree",
		"mcq32":"Disagree",
		"mcq33":"Niether Agree Nor Disagree",
		"mcq34":"Agree",
		"mcq35":"Strongly Agree",

		"mcq36":"Strongly Disagree",
		"mcq37":"Disagree",
		"mcq38":"Niether Agree Nor Disagree",
		"mcq39":"Agree",
		"mcq40":"Strongly Agree",

		"mcq41":"Strongly Disagree",
		"mcq42":"Disagree",
		"mcq43":"Niether Agree Nor Disagree",
		"mcq44":"Agree",
		"mcq45":"Strongly Agree",


	
	},
	
	"sinhala":
	
	{
		"title": "ප්රතිපෝෂණ පෝරමය",
		"qw_1":"1. පිළිතුරු දීමට අවශ්‍ය අපේක්ෂිත ප්‍රතිඵල ළඟා කර ගැනීමට පාඨමාලාවේ අන්තර්ගතය ප්‍රමාණවත් විය.",
		"qw_2":"2. පුහුණුකරුගේ භාෂාව පැහැදිලි සහ ශ්‍රවණය කළ හැකි විය.",
		"qw_3":"3. පුහුණුකරු ප්‍රශ්න දිරිමත් කළ අතර සහභාගිවන්නන්ගේ උනන්දුව පවත්වාගෙන ගියේය.",
		"qw_4":"4. පිළිතුරු දීමට ක්‍රමලේඛකයාගෙන් නව ඉගෙනුම් ඇත.",
		"qw_5":"5. පාඨමාලා ද්‍රව්‍ය පැහැදිලි, තේරුම් ගත හැකි වූ අතර පිළිතුරු දීමට අවශ්‍ය වඩා හොඳින් ඉගෙන ගැනීමට අපට සහාය විය.",
		"qw_6":"6. ඔබ ලබාගත් නව දැනුම/නිපුණතා ඔබේ සේවා ස්ථානයේ යෙදවීමට ඔබ කැපවී සිටිනවාද? ",
		"qw_7":"7. පුහුණුව අතරතුර ලබා දී ඇති (Online Platform) පහසුකම් පිළිබඳව ඔබ සෑහීමකට පත්වේද?",
		"qw_8":"8. සමස්ත වැඩසටහන ප්‍රමිතීන්ට අනුකූල විය.",
		"qw_9":"9. පිළිතුරු දීමට අවශ්‍ය අනෙකුත් අයට මෙම වැඩසටහන මම නිර්දේශ කරමි.",
		"qw_10":"10. වැඩිදියුණු කිරීම් සඳහා ඔබේ යෝජනා.",

		"mcq1":"දැඩි ලෙස එකඟ නොවේ",
		"mcq2":"එකඟ නොවේ",
		"mcq3":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq4":"එකඟයි",
		"mcq5":"තරයේ එකඟයි",

		"mcq6":"දැඩි ලෙස එකඟ නොවේ",
		"mcq7":"එකඟ නොවේ",
		"mcq8":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",																			
		"mcq9":"එකඟයි",																			 
		"mcq10":"තරයේ එකඟයි",

		"mcq11":"දැඩි ලෙස එකඟ නොවේ",
		"mcq12":"එකඟ නොවේ",
		"mcq13":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq14":"එකඟයි",
		"mcq15":"තරයේ එකඟයි",

		"mcq16":"දැඩි ලෙස එකඟ නොවේ",
		"mcq17":"එකඟ නොවේ",
		"mcq18":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq19":"එකඟයි",
		"mcq20":"තරයේ එකඟයි",

		"mcq21":"දැඩි ලෙස එකඟ නොවේ",
		"mcq22":"එකඟ නොවේ",
		"mcq23":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq24":"එකඟයි",
		"mcq25":"තරයේ එකඟයි",

		"mcq26":"දැඩි ලෙස එකඟ නොවේ",
		"mcq27":"එකඟ නොවේ",
		"mcq28":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq29":"එකඟයි",
		"mcq30":"තරයේ එකඟයි",

		"mcq31":"දැඩි ලෙස එකඟ නොවේ",
		"mcq32":"එකඟ නොවේ",
		"mcq33":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq34":"එකඟයි",
		"mcq35":"තරයේ එකඟයි",

		"mcq36":"දැඩි ලෙස එකඟ නොවේ",
		"mcq37":"එකඟ නොවේ",
		"mcq38":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq39":"එකඟයි",
		"mcq40":"තරයේ එකඟයි",

		"mcq41":"දැඩි ලෙස එකඟ නොවේ",
		"mcq42":"එකඟ නොවේ",
		"mcq43":"එකඟ නොවන්නේ හෝ එකඟ නොවන්නේ ය",
		"mcq44":"එකඟයි",
		"mcq45":"තරයේ එකඟයි",
		
	},
	
	
	"தமிழ்":
	
	{
		"title": "மொழியாக்கம் பக்கம்",
		"qw_1":"1. பாடத்தின் உள்ளடக்கம், பதிலளிக்கப்பட வேண்டிய விரும்பிய முடிவுகளை அடைய போதுமானதாக இருந்தது.",
		"qw_2":"2. பயிற்சியாளரின் மொழி தெளிவாகவும் கேட்கக்கூடியதாகவும் இருந்தது.",
		"qw_3":"3. பயிற்சியாளர் கேள்விகளை ஊக்குவித்தார் மற்றும் பங்கேற்பாளர்களை ஆர்வமாக வைத்திருந்தார்.",
		"qw_4":"4. பதிலளிப்பதற்கு புரோகிராமரிடம் இருந்து புதிய கற்றல்கள் உள்ளன.",
		"qw_5":"5. பாடத்திட்டம் தெளிவாகவும், புரிந்துகொள்ளக்கூடியதாகவும் இருந்தது மற்றும் பதில்களை சிறப்பாகக் கற்றுக்கொள்ள எங்களுக்கு உதவியது.",
		"qw_6":"6. நீங்கள் பெற்ற புதிய அறிவு/திறன்களை உங்கள் பணியிடத்தில் பயன்படுத்துவதில் உறுதியாக இருக்கிறீர்களா?",
		"qw_7":"7. பயிற்சியின் போது வழங்கப்படும் (ஆன்லைன் பிளாட்ஃபார்ம்) வசதிகளில் நீங்கள் திருப்தி அடைகிறீர்களா?",
		"qw_8":"8. ஒட்டுமொத்த திட்டம் தரநிலைகளை சந்தித்தது.",
		"qw_9":"9. நான் இந்த திட்டத்தை மற்றவர்களுக்கு பரிந்துரைக்கிறேன்.",
		"qw_10":"10. மேம்பாடுகளுக்கான உங்கள் பரிந்துரைகள்.",

		"mcq1":"முரண்படுகிறோம்",
		"mcq2":"கருத்து வேறுபாடு",
		"mcq3":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq4":"ஒப்புக்கொள்",
		"mcq5":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq6":"முரண்படுகிறோம்",
		"mcq7":"கருத்து வேறுபாடு",
		"mcq8":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq9":"ஒப்புக்கொள்",
		"mcq10":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq11":"முரண்படுகிறோம்",														
		"mcq12":"கருத்து வேறுபாடு",
		"mcq13":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq14":"ஒப்புக்கொள்",
		"mcq15":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq16":"முரண்படுகிறோம்",
		"mcq17":"கருத்து வேறுபாடு",
		"mcq18":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq19":"ஒப்புக்கொள்",
		"mcq20":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq21":"முரண்படுகிறோம்",
		"mcq22":"கருத்து வேறுபாடு",
		"mcq23":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq24":"ஒப்புக்கொள்",
		"mcq25":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq26":"முரண்படுகிறோம்",
		"mcq27":"கருத்து வேறுபாடு",
		"mcq28":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq29":"ஒப்புக்கொள்",
		"mcq30":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq31":"முரண்படுகிறோம்",
		"mcq32":"கருத்து வேறுபாடு",
		"mcq33":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq34":"ஒப்புக்கொள்",
		"mcq35":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq36":"முரண்படுகிறோம்",
		"mcq37":"கருத்து வேறுபாடு",
		"mcq38":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq39":"ஒப்புக்கொள்",
		"mcq40":"உறுதியாக ஒப்புக்கொள்கிறேன்",

		"mcq41":"முரண்படுகிறோம்",
		"mcq42":"கருத்து வேறுபாடு",
		"mcq43":"உடன்படவும் இல்லை, உடன்படவும் இல்லை",
		"mcq44":"ஒப்புக்கொள்",
		"mcq45":"உறுதியாக ஒப்புக்கொள்கிறேன்",
		
		
	}
		
	}
	
	

	
	
	</script>

</body>
</html>

