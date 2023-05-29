

<?php
class FeedbackMod extends CI_Model{
	
	// Count Total List
	
	// Get all list
	function count_list($keyword){
		$this->load->database();
        $this->db->from('feedbacks');
$this->db->where('sessionID', $keyword);
return $this->db->count_all_results();
       
    }
    function a1_disagree($keyword){
     // Load database library
$this->load->database();

// Define columns to filter by
$column1 = 'SessionID';
$column2 = 'question_1';

// Define filter values
$filter1 = $keyword;
$filter2 = 'Disagree';


// Build query using Active Record class
$this->db->select('*');
$this->db->from('feedbacks');
$this->db->where($column1, $filter1);
$this->db->where($column2, $filter2);

// Execute query and fetch data
return $this->db->count_all_results();
    }
    function a1_agree($keyword){
        // Load database library
   $this->load->database();
   
   // Define columns to filter by
   $column1 = 'SessionID';
   $column2 = 'question_1';
   
   // Define filter values
   $filter1 = $keyword;
   $filter2 = 'Agree';
   
   
   // Build query using Active Record class
   $this->db->select('*');
   $this->db->from('feedbacks');
   $this->db->where($column1, $filter1);
   $this->db->where($column2, $filter2);
   
   // Execute query and fetch data
   return $this->db->count_all_results();
       }
       function a1_strongly_agree($keyword){
        // Load database library
   $this->load->database();
   
   // Define columns to filter by
   $column1 = 'SessionID';
   $column2 = 'question_1';
   
   // Define filter values
   $filter1 = $keyword;
   $filter2 = 'Strongly Agree';
   
   
   // Build query using Active Record class
   $this->db->select('*');
   $this->db->from('feedbacks');
   $this->db->where($column1, $filter1);
   $this->db->where($column2, $filter2);
   
   // Execute query and fetch data
   return $this->db->count_all_results();
       }
       function a1_strongly_disagree($keyword){
        // Load database library
   $this->load->database();
   
   // Define columns to filter by
   $column1 = 'SessionID';
   $column2 = 'question_1';
   
   // Define filter values
   $filter1 = $keyword;
   $filter2 = 'Strongly Disagree';
   
   
   // Build query using Active Record class
   $this->db->select('*');
   $this->db->from('feedbacks');
   $this->db->where($column1, $filter1);
   $this->db->where($column2, $filter2);
   
   // Execute query and fetch data
   return $this->db->count_all_results();
       }
       function a1_niether_agree_nor_disagree($keyword){
        // Load database library
   $this->load->database();
   
   // Define columns to filter by
   $column1 = 'SessionID';
   $column2 = 'question_1';
   
   // Define filter values
   $filter1 = $keyword;
   $filter2 = 'Niether Agree Nor Disagree';
   
   
   // Build query using Active Record class
   $this->db->select('*');
   $this->db->from('feedbacks');
   $this->db->where($column1, $filter1);
   $this->db->where($column2, $filter2);
   
   // Execute query and fetch data
   return $this->db->count_all_results();
       }



       //ANSWER 2................................................................................................


       function a2_disagree($keyword){
        // Load database library
   $this->load->database();
   
   // Define columns to filter by
   $column1 = 'SessionID';
   $column2 = 'question_2';
   
   // Define filter values
   $filter1 = $keyword;
   $filter2 = 'Disagree';
   
   
   // Build query using Active Record class
   $this->db->select('*');
   $this->db->from('feedbacks');
   $this->db->where($column1, $filter1);
   $this->db->where($column2, $filter2);
   
   // Execute query and fetch data
   return $this->db->count_all_results();
       }
       function a2_agree($keyword){
           // Load database library
      $this->load->database();
      
      // Define columns to filter by
      $column1 = 'SessionID';
      $column2 = 'question_2';
      
      // Define filter values
      $filter1 = $keyword;
      $filter2 = 'Agree';
      
      
      // Build query using Active Record class
      $this->db->select('*');
      $this->db->from('feedbacks');
      $this->db->where($column1, $filter1);
      $this->db->where($column2, $filter2);
      
      // Execute query and fetch data
      return $this->db->count_all_results();
          }
          function a2_strongly_agree($keyword){
           // Load database library
      $this->load->database();
      
      // Define columns to filter by
      $column1 = 'SessionID';
      $column2 = 'question_2';
      
      // Define filter values
      $filter1 = $keyword;
      $filter2 = 'Strongly Agree';
      
      
      // Build query using Active Record class
      $this->db->select('*');
      $this->db->from('feedbacks');
      $this->db->where($column1, $filter1);
      $this->db->where($column2, $filter2);
      
      // Execute query and fetch data
      return $this->db->count_all_results();
          }
          function a2_strongly_disagree($keyword){
           // Load database library
      $this->load->database();
      
      // Define columns to filter by
      $column1 = 'SessionID';
      $column2 = 'question_2';
      
      // Define filter values
      $filter1 = $keyword;
      $filter2 = 'Strongly Disagree';
      
      
      // Build query using Active Record class
      $this->db->select('*');
      $this->db->from('feedbacks');
      $this->db->where($column1, $filter1);
      $this->db->where($column2, $filter2);
      
      // Execute query and fetch data
      return $this->db->count_all_results();
          }
          function a2_niether_agree_nor_disagree($keyword){
           // Load database library
      $this->load->database();
      
      // Define columns to filter by
      $column1 = 'SessionID';
      $column2 = 'question_2';
      
      // Define filter values
      $filter1 = $keyword;
      $filter2 = 'Niether Agree Nor Disagree';
      
      
      // Build query using Active Record class
      $this->db->select('*');
      $this->db->from('feedbacks');
      $this->db->where($column1, $filter1);
      $this->db->where($column2, $filter2);
      
      // Execute query and fetch data
      return $this->db->count_all_results();
          }


             //ANSWER 3................................................................................................
	
             function a3_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_3';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a3_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_3';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a3_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_3';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a3_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_3';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a3_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_3';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
         //ANSWER 4................................................................................................

         
         function a4_disagree($keyword){
            // Load database library
       $this->load->database();
       
       // Define columns to filter by
       $column1 = 'SessionID';
       $column2 = 'question_4';
       
       // Define filter values
       $filter1 = $keyword;
       $filter2 = 'Disagree';
       
       
       // Build query using Active Record class
       $this->db->select('*');
       $this->db->from('feedbacks');
       $this->db->where($column1, $filter1);
       $this->db->where($column2, $filter2);
       
       // Execute query and fetch data
       return $this->db->count_all_results();
           }
           function a4_agree($keyword){
               // Load database library
          $this->load->database();
          
          // Define columns to filter by
          $column1 = 'SessionID';
          $column2 = 'question_4';
          
          // Define filter values
          $filter1 = $keyword;
          $filter2 = 'Agree';
          
          
          // Build query using Active Record class
          $this->db->select('*');
          $this->db->from('feedbacks');
          $this->db->where($column1, $filter1);
          $this->db->where($column2, $filter2);
          
          // Execute query and fetch data
          return $this->db->count_all_results();
              }
              function a4_strongly_agree($keyword){
               // Load database library
          $this->load->database();
          
          // Define columns to filter by
          $column1 = 'SessionID';
          $column2 = 'question_4';
          
          // Define filter values
          $filter1 = $keyword;
          $filter2 = 'Strongly Agree';
          
          
          // Build query using Active Record class
          $this->db->select('*');
          $this->db->from('feedbacks');
          $this->db->where($column1, $filter1);
          $this->db->where($column2, $filter2);
          
          // Execute query and fetch data
          return $this->db->count_all_results();
              }
              function a4_strongly_disagree($keyword){
               // Load database library
          $this->load->database();
          
          // Define columns to filter by
          $column1 = 'SessionID';
          $column2 = 'question_4';
          
          // Define filter values
          $filter1 = $keyword;
          $filter2 = 'Strongly Disagree';
          
          
          // Build query using Active Record class
          $this->db->select('*');
          $this->db->from('feedbacks');
          $this->db->where($column1, $filter1);
          $this->db->where($column2, $filter2);
          
          // Execute query and fetch data
          return $this->db->count_all_results();
              }
              function a4_niether_agree_nor_disagree($keyword){
               // Load database library
          $this->load->database();
          
          // Define columns to filter by
          $column1 = 'SessionID';
          $column2 = 'question_4';
          
          // Define filter values
          $filter1 = $keyword;
          $filter2 = 'Niether Agree Nor Disagree';
          
          
          // Build query using Active Record class
          $this->db->select('*');
          $this->db->from('feedbacks');
          $this->db->where($column1, $filter1);
          $this->db->where($column2, $filter2);
          
          // Execute query and fetch data
          return $this->db->count_all_results();
              }

//ANSWER 5................................................................................................
              
             function a5_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_5';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a5_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_5';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a5_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_5';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a5_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_5';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a5_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_5';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }

//ANSWER 6................................................................................................
                  
             function a6_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_6';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a6_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_6';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a6_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_6';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a6_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_6';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a6_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_6';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }


//ANSWER 7...............................................................................................
                  
             function a7_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_7';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a7_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_7';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a7_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_7';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a7_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_7';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a7_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_7';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }


//ANSWER 8................................................................................................
                  
             function a8_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_8';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a8_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_8';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a8_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_8';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a8_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_8';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a8_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_8';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }

//ANSWER 9................................................................................................

                  
             function a9_disagree($keyword){
                // Load database library
           $this->load->database();
           
           // Define columns to filter by
           $column1 = 'SessionID';
           $column2 = 'question_9';
           
           // Define filter values
           $filter1 = $keyword;
           $filter2 = 'Disagree';
           
           
           // Build query using Active Record class
           $this->db->select('*');
           $this->db->from('feedbacks');
           $this->db->where($column1, $filter1);
           $this->db->where($column2, $filter2);
           
           // Execute query and fetch data
           return $this->db->count_all_results();
               }
               function a9_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_9';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a9_strongly_agree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_9';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Agree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a9_strongly_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_9';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Strongly Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
                  function a9_niether_agree_nor_disagree($keyword){
                   // Load database library
              $this->load->database();
              
              // Define columns to filter by
              $column1 = 'SessionID';
              $column2 = 'question_9';
              
              // Define filter values
              $filter1 = $keyword;
              $filter2 = 'Niether Agree Nor Disagree';
              
              
              // Build query using Active Record class
              $this->db->select('*');
              $this->db->from('feedbacks');
              $this->db->where($column1, $filter1);
              $this->db->where($column2, $filter2);
              
              // Execute query and fetch data
              return $this->db->count_all_results();
                  }
}
	

?>