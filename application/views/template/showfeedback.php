<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback sheet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">  
        <div class="content-wrapper">            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2" style='margin-top: 15px'>
                            <form method="post">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Type Session Name To see Feedbacks" name="keyword">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-info" name="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                        <div class="col-12">
                            <div class="card" style='margin-top: 15px'>
                                <div class="card-header">
                                    <h3 class="card-title">Feedback data</h3>
                                </div>
                                
                                <!-- /.card-header -->
                               
                                <div class="card-body">
                                  
                                 
                                                    
                                                    <?php $num1 = array($a1_disagree,$a1_agree,$a1_strongly_agree,$a1_strongly_disagree,$a1_niether_agree_nor_disagree);
                                                          $num3 = array($a2_disagree,$a2_agree,$a2_strongly_agree,$a2_strongly_disagree,$a2_niether_agree_nor_disagree);
                                                          $num4 = array($a3_disagree,$a3_agree,$a3_strongly_agree,$a3_strongly_disagree,$a3_niether_agree_nor_disagree);
                                                          $num5 = array($a4_disagree,$a4_agree,$a4_strongly_agree,$a4_strongly_disagree,$a4_niether_agree_nor_disagree);
                                                          $num6 = array($a5_disagree,$a5_agree,$a5_strongly_agree,$a5_strongly_disagree,$a5_niether_agree_nor_disagree);
                                                          $num7 = array($a6_disagree,$a6_agree,$a6_strongly_agree,$a6_strongly_disagree,$a6_niether_agree_nor_disagree);
                                                          $num8 = array($a7_disagree,$a7_agree,$a7_strongly_agree,$a7_strongly_disagree,$a7_niether_agree_nor_disagree);
                                                          $num9 = array($a8_disagree,$a8_agree,$a8_strongly_agree,$a8_strongly_disagree,$a8_niether_agree_nor_disagree);
                                                          $num10 = array($a9_disagree,$a9_agree,$a9_strongly_agree,$a9_strongly_disagree,$a9_niether_agree_nor_disagree);
                                                          $num2 = $count;
                                                          
                                                            
                                                        if($count>0){
                                                          
                                                        
                                                         // ANSWER 1................................................................................................
                                                          $a1_avg1 = round(($num1[0] /$num2)*100);
                                                          $a1_avg2 = round(($num1[1] /$num2)*100);
                                                          $a1_avg3 = round(($num1[2] /$num2)*100);
                                                          $a1_avg4 = round(($num1[3] /$num2)*100);
                                                          $a1_avg5 = round(($num1[4] /$num2)*100);
                                                      //ANSWER 2................................................................................................-->
                                                          $a2_avg1 = round(($num3[0] /$num2)*100);
                                                          $a2_avg2 = round(($num3[1] /$num2)*100);
                                                          $a2_avg3 = round(($num3[2] /$num2)*100);
                                                          $a2_avg4 = round(($num3[3] /$num2)*100);
                                                          $a2_avg5 = round(($num3[4] /$num2)*100);

                                                          //ANSWER 3................................................................................................-->
                                                          $a3_avg1 = round(($num4[0] /$num2)*100);
                                                          $a3_avg2 = round(($num4[1] /$num2)*100);
                                                          $a3_avg3 = round(($num4[2] /$num2)*100);
                                                          $a3_avg4 = round(($num4[3] /$num2)*100);
                                                          $a3_avg5 = round(($num4[4] /$num2)*100);
                                                        //ANSWER 4.............................................................................................
                                                          $a4_avg1 = round(($num5[0] /$num2)*100);
                                                          $a4_avg2 = round(($num5[1] /$num2)*100);
                                                          $a4_avg3 = round(($num5[2] /$num2)*100);
                                                          $a4_avg4 = round(($num5[3] /$num2)*100);
                                                          $a4_avg5 = round(($num5[4] /$num2)*100);
                                                      //ANSWER 5.............................................................................................

                                                          $a5_avg1 = round(($num6[0] /$num2)*100);
                                                          $a5_avg2 = round(($num6[1] /$num2)*100);
                                                          $a5_avg3 = round(($num6[2] /$num2)*100);
                                                          $a5_avg4 = round(($num6[3] /$num2)*100);
                                                          $a5_avg5 = round(($num6[4] /$num2)*100);
                                                        //ANSWER 6.............................................................................................
                                                          $a6_avg1 = round(($num7[0] /$num2)*100);
                                                          $a6_avg2 = round(($num7[1] /$num2)*100);
                                                          $a6_avg3 = round(($num7[2] /$num2)*100);
                                                          $a6_avg4 = round(($num7[3] /$num2)*100);
                                                          $a6_avg5 = round(($num7[4] /$num2)*100);
                                                       //ANSWER 7.............................................................................................
                                                          $a7_avg1 = round(($num8[0] /$num2)*100);
                                                          $a7_avg2 = round(($num8[1] /$num2)*100);
                                                          $a7_avg3 = round(($num8[2] /$num2)*100);
                                                          $a7_avg4 = round(($num8[3] /$num2)*100);
                                                          $a7_avg5 = round(($num8[4] /$num2)*100);
                                                       //ANSWER 8.............................................................................................
                                                          $a8_avg1 = round(($num9[0] /$num2)*100);
                                                          $a8_avg2 = round(($num9[1] /$num2)*100);
                                                          $a8_avg3 = round(($num9[2] /$num2)*100);
                                                          $a8_avg4 = round(($num9[3] /$num2)*100);
                                                          $a8_avg5 = round(($num9[4] /$num2)*100);
                                                        //ANSWER 9.............................................................................................
                                                          $a9_avg1 = round(($num10[0] /$num2)*100);
                                                          $a9_avg2 = round(($num10[1] /$num2)*100);
                                                          $a9_avg3 = round(($num10[2] /$num2)*100);
                                                          $a9_avg4 = round(($num10[3] /$num2)*100);
                                                          $a9_avg5 = round(($num10[4] /$num2)*100);
                                                         
                                                        
                                                            ?>
                                                    
                                                     
                                    </table>

                                    <style>
                                                 .grid-container {
                                                           display: grid;
                                                           grid-template-columns: repeat(2, 1fr);
                                                           
                                                       }

                                                 .column1 {
                                                        grid-column: 1 / 2;
                                                   }

                                                 .column2 {
                                                        grid-column: 2 / 3;
                                                        }
                                                 .column3 {
                                                        grid-column: 1 / 2;
                                                   }

                                                 .column4 {
                                                        grid-column: 2 / 3;
                                                        }
                                                 .column5 {
                                                        grid-column: 1 / 2;
                                                   }

                                                 .column6 {
                                                        grid-column: 2 / 3;
                                                        }
                                                 .column7 {
                                                        grid-column: 1 / 2;
                                                   }

                                                 .column8 {
                                                        grid-column: 2 / 3;
                                                        }
                                                 .column9 {
                                                        grid-column: 1 / 2;
                                                        
                                                   }
                                                   .progress-bar{
                                                    animation: progress  0.9s ease-in-out forwards;
                                                    opacity:0;
                                                   }
                                                   @keyframes progress{
                                                                0%{
                                                                      width:0%;
                                                                     opacity:0;
                                                                  }
                                                             100%{
                                                                 opacity: 1;
                                                                 }
                                                            }                
                                    </style>

                                  <div class="grid-container">
                                  <div class="column1">
                                    <div style=" margin-top:10px; margin-right:70px; ">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 01<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a1_avg2}%; '" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a1_avg2."%"?></div>
                              </div>
                                </div>
                                
                                
                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a1_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a1_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a1_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a1_avg3."%"?></div>
                              </div>
                                </div>

                                <div style="margin-top:20px;margin-right:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a1_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a1_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px;margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a1_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a1_avg5."%"?></div>
                              </div>
                                </div>
                                </div>

                                <!-- ANSWER 2................................................................................................-->
                                <div class="column2">
                                <div style=" margin-top:10px; margin-left:70px">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 02<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a2_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a2_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style="margin-top:20px; margin-left:70px ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a2_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a2_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a2_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a2_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a2_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a2_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a2_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a2_avg5."%"?></div>
                              </div>
                                </div>
                                </div>

                                <!-- ANSWER 3................................................................................................-->
                                <div class="column3">
                                <div style=" margin-top:80px; margin-right:70px; ">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 03<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a3_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a3_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px; margin-right:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a3_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a3_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a3_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a3_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a3_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a3_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a3_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a3_avg5."%"?></div>
                              </div>
                                </div>
                                </div>
                        <!-- ANSWER 4................................................................................................-->
                                <div class="column4">
                                <div style=" margin-top:80px; margin-left:70px; ">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 04<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a4_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a4_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px; margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a4_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a4_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a4_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a4_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a4_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a4_avg4."%"?></div>
                              </div>
                                </div>

                                <div style="; margin-top:20px; margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a4_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a4_avg5."%"?></div>
                              </div>
                                </div>
                                </div>
                          <!-- ANSWER 5................................................................................................-->
                          <div class="column5">
                                <div style=" margin-top:80px;  margin-right:70px;">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 05<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a5_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a5_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a5_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a5_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a5_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a5_avg3."%"?></div>
                              </div>
                                </div>

                                <div style="margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a5_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a5_avg4."%"?></div>
                              </div>
                                </div>

                                <div style="margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a5_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a5_avg5."%"?></div>
                              </div>
                                </div>
                                </div>
                         <!-- ANSWER 6................................................................................................-->
                            <div class="column6">
                                <div style=" margin-top:80px; margin-left:70px;">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 06<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a6_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a6_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px; margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a6_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a6_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a6_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a6_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a6_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a6_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a6_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a6_avg5."%"?></div>
                              </div>
                                </div>
                                </div>

                           <!-- ANSWER 7................................................................................................-->
                           <div class="column7">
                                <div style="margin-top:80px; margin-right:70px;">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 07<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a7_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a7_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a7_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a7_avg1."%"?></div>
                              </div>
                                </div>

                                <div style="margin-top:20px; margin-right:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a7_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a7_avg3."%"?></div>
                              </div>
                                </div>

                                <div style="margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a7_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a7_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a7_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a7_avg5."%"?></div>
                              </div>
                                </div>
                                </div>
                          <!-- ANSWER 8................................................................................................-->
                          <div class="column8">
                                <div style=" margin-top:80px; margin-left:70px;">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 08<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a8_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a8_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px;  margin-left:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a8_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a8_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px;  margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a8_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a8_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px;  margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a8_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a8_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px;  margin-left:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a8_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a8_avg5."%"?></div>
                              </div>
                                </div>
                                </div>

                        <!-- ANSWER 9................................................................................................-->
                        <div class="column9">
                                <div style=" margin-top:80px;  margin-right:70px;">
                                <span style="font-size:25px; font-weight:bold;">QUESTION 09<span><br>
                                <span style="font-size:17px;">students who selected "AGREE" <span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a9_avg2}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a9_avg2."%"?></div>
                              </div>
                                </div>
                                
                                <div style=" margin-top:20px;margin-right:70px; ">
                                <span style="font-size:17px; font-weight:bold;">students who selected "DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar " role="progressbar" <?php echo "style='width: {$a9_avg1}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a9_avg1."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY AGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a9_avg3}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a9_avg3."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "STRONGLY DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a9_avg4}%;'" ?>  aria-valuemin="0" aria-valuemax="100"><?php echo $a9_avg4."%"?></div>
                              </div>
                                </div>

                                <div style=" margin-top:20px; margin-right:70px; margin-bottom:20px;">
                                <span style="font-size:17px; font-weight:bold;">students who selected "NIETHER AGREE NOR DISAGREE"<span>
                            <div class="progress" style="margin-top:10px;">
                                <div class="progress-bar" role="progressbar" <?php echo "style='width: {$a9_avg5}%;'" ?> aria-valuemin="0" aria-valuemax="100"><?php echo $a9_avg5."%"?></div>
                              </div>
                              </div>
                                </div>
  
                                <!-- /.container -->
                                   </div>
                                    <?php }
                                     else{  echo'<span>.<span>';}?>
                                        <table id="example1" class="table table-bordered table-striped"  >
                                   
                                   <?php
                                               
                                               if(isset($_POST['submit'])){

                                                   if($results->num_rows()>0){
                                                       echo '    
                                                       <tr>
                                                           <th>session</th>
                                                           <th>Service ID</th>
                                                           <th>Answer 1</th>
                                                           <th>Answer 2</th>
                                                           <th>Answer 3</th>
                                                           <th>Answer 4</th>
                                                           <th>Answer 5</th>
                                                           <th>Answer 6</th>
                                                           <th>Answer 7</th>
                                                           <th>Answer 8</th>
                                                           <th>Answer 9</th>
                                                           <th>Suggestions</th>
                                                       </tr>
                                                       ';
                                                ?>
                                                
                                              
                                               <?php
                                               
                                                 foreach ($results->result() as $row){ ?>
                                                      
                                              
                                                  
                                                   <tr>
                                                   <td><?php echo $row->SessionID; ?></td>
                                                   <td><?php echo $row->service_id; ?></td>
                                                   <td><?php echo $row->question_1; ?></td>
                                                   <td><?php echo $row->question_2; ?></td>
                                                   <td><?php echo $row->question_3; ?></td>
                                                   <td><?php echo $row->question_4; ?></td>
                                                   <td><?php echo $row->question_5; ?></td>
                                                   <td><?php echo $row->question_6; ?></td>
                                                   <td><?php echo $row->question_7; ?></td>
                                                   <td><?php echo $row->question_8; ?></td>
                                                   <td><?php echo $row->question_9; ?></td>
                                                   <td><?php echo $row->question_10; ?></td>
                                                   
                                               </tr>
                                               <?php
                                                   }  }else{
                                                       echo
                                                       '<h1 class=text-danger>  DATA NOT FOUND!</h1>';
                                                    } ;?> 
                                                    <?php } ;?> 
                                                    
                                </div>
                                <!-- /.card-body -->
                            </div>
           
                            <!-- /.card -->   
                        </section >
                         
                        
                    </div>
                </div >
            </div >
        </div >
    </div >



</body>
</html>