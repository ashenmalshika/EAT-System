
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FeedbackForm</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		<?php include 'feedbackform.css'; ?>
	</style>
</head>

<body>
    <div class="form-container">
        <?php echo validation_errors(); ?>

        <?php  $serviceID = $this->uri->segment(4); $sessionID=$this->uri->segment(3);  ?>
        <?php echo form_open('feedbackform/employee/'.$sessionID.'/'.$serviceID); ?>


        <h2 align="center">FeedbackForm</h2><br>
        <div id="google_element"> Choose Language</div>
			  <br>
        <?php 
          if ($this->session->flashdata('msg')){
          echo "<h4>".$this->session->flashdata('msg')."</h4>";
        }?>
          
                
        <p> 1. Content of the course was adequate for us to reach expected outcomes.</p><br>
        <input type = "radio" name = "question_1" value = "Strongly Disagree"> Strongly Disagree </br>
        <input type = "radio" name = "question_1" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_1" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_1" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_1" value = "Strongly Agree"> Strongly Agree </br><br></br><br>
        

        <p>	2. Trainer’s language was clear and audible. </p><br>
        <input type = "radio" name = "question_2" value = "Strongly Disagree"> Strongly Disagree </br>
        <input type = "radio" name = "question_2" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_2" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_2" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_2" value = "Strongly Agree"> Strongly Agree </br><br></br><br>

        <p>	3. Trainer encouraged questions and maintained the interest of the participants.</p><br>
        <input type = "radio" name = "question_3" value = "Strongly Disagree "> Strongly Disagree  </br>
        <input type = "radio" name = "question_3" value = "Disagree"> Disagree  </br>
        <input type = "radio" name = "question_3" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_3" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_3" value = "Strongly Agree"> Strongly Agree </br></br><br></br>
        

        <p>	4. There were new learnings from the programmer. </p><br>
        <input type = "radio" name = "question_4" value = "Strongly Disagree"> Strongly Disagree </br>
        <input type = "radio" name = "question_4" value = "Disagree"> Disagree  </br>
        <input type = "radio" name = "question_4" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_4" value = "Agree">  Agree  </br>
        <input type = "radio" name = "question_4" value = "Good"> Strongly Agree  </br></br><br></br>

        <p>	5. Course Material was clear, understandable and assisted us to learn better. </p><br>
        <input type = "radio" name = "question_5" value = "Strongly Disagree"> Strongly Agree </br>
        <input type = "radio" name = "question_5" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_5" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_5" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_5" value = "Strongly Agree"> Strongly Agree </br></br></br><br>

        
        <p>	6. Are you committed to apply the new knowledge/skills gained in your work place?   </p><br>
        <input type = "radio" name = "question_6" value = "Strongly Disagree"> Strongly Agree </br>
        <input type = "radio" name = "question_6" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_6" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_6" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_6" value = "Strongly Agree"> Strongly Agree </br></br></br><br>
        
        <p>	7. Are you satisfied with the facilities provided (Online Platform) during training?   </p><br>
        <input type = "radio" name = "question_7" value = "Strongly Disagree"> Strongly Agree </br>
        <input type = "radio" name = "question_7" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_7" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_7" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_7" value = "Strongly Agree"> Strongly Agree </br></br></br><br>
        
        <p>	8. The overall programme was up to the standards. </p><br>
        <input type = "radio" name = "question_8" value = "Strongly Disagree"> Strongly Agree </br>
        <input type = "radio" name = "question_8" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_8" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_8" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_8" value = "Strongly Agree"> Strongly Agree </br></br></br><br>
        
        <p>	9. I would recommend this programme to others.  </p><br>
        <input type = "radio" name = "question_9" value = "Strongly Disagree"> Strongly Agree </br>
        <input type = "radio" name = "question_9" value = "Disagree"> Disagree </br>
        <input type = "radio" name = "question_9" value = "Niether Agree Nor Disagree"> Niether Agree Nor Disagree </br>
        <input type = "radio" name = "question_9" value = "Agree"> Agree </br>
        <input type = "radio" name = "question_9" value = "Strongly Agree"> Strongly Agree </br></br></br><br>



        <p> 10. Your suggestions for improvements. </p><br>
        <input type = "text" size="122"  name = "question_10">  </br></br></br></br></br>

        <div class="btn-text-center">
        <button>Submit</button>
    </div>
    <?php echo form_close(); ?>
    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
			
			<script>

function loadGoogleTranslate(){
    new google.translate.TranslateElement({
        pageLanguage: 'en', 
        includedLanguages: 'en,si,ta', 
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_element');
}



			</script>
</body>

</html>
