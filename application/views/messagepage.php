<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Message</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <style>
      body {
        min-height: 100vh;
        width: 100%;
        display: grid;
        place-items: center;
      }
      
      h1 {
        font-size: 22px;
        text-align: center;
        color: #444444;
        text-shadow: 1px 1px #ffffff;
      }
      
    </style>
  </head>
  <body>
    <h1>
        <?php 
            if ($this->session->flashdata('message')):
                echo $this->session->flashdata('message');
            endif; 
        ?>
    </h1>
  </body>
</html>