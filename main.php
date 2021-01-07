<?php
// EROR ahndler to remove unnecessary notices - all works
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING); 

// input info stays in input field + default values
if(!isset($_POST['submit'])){
  $inp = "101";
  $len = "10";

} else {
  $inp = $_POST['inp_value'];
  $len = $_POST['pwd_lenght'];
} 


// ##### Task 1

  // Provided value if not provided  usign default value (these values are used for tasks 1 and 2)
  if($_POST['inp_value'] ) {
    $num = $_POST['inp_value'];
  } else {
    $num="101";
  }

  $my_var0 = '';
  //generates list of numbers from 1 till provided value (N) 
  for($i = 1; $i <= $num; $i++) {
    $my_var0 .=  "$i ";
  };

  
  // #### task2 - Display Prime numbers  made loop and started with 2
  $my_var = '';

  for( $i = 2; $i <= $num; $i++ )
  {
      for( $k = 2; $k < $i; $k++ )
      {
          if( $i % $k == 0 )
          {
              break;
          }
      }
    if( $k == $i ) 
    {
      $my_var .=  "$i ";
    }
  };


// task 3  Palindroms

  function pol(){
  // for onload values and error handling
    if($num = htmlentities($_POST['inp_value'])) {
      $num = htmlentities($_POST['inp_value']);
    } else {
      $num="101";
    }

    $str = $num;
    $strLen = strlen($str)-1;
    $revStr = '';

      for($a=$strLen; $a>=0; $a--)
      {
          $revStr.=$str[$a];
      }
    if($revStr == $str)
        echo "Palindroms: ", $str  ;
    else
      echo "Palindroms Not Found";
  };

  // task 4 - password
    function primePWD() {

      if($num = htmlentities($_POST['inp_value'])) {
        $num = htmlentities($_POST['inp_value']);
      } else {
        $num="101";
      };

      if($keyLenght = htmlentities($_POST['pwd_lenght'])) {
        $keyLenght = htmlentities($_POST['pwd_lenght']);
      } else {
        $keyLenght="10";
      };

      $my_var = '';
                     // excluded 2 form list (started for loop with 3)
      for( $i = 3; $i <= $num; $i++ )
      {
          for( $k = 2; $k < $i; $k++ )
          {
              if( $i % $k == 0 )
              {
                  break;
              }
          }
      if( $k == $i ) 
        {
          $my_var .=  $i;
        }
      }
      
      // randomizes, suffle string 
      $str = "$my_var";
    
      $randomString = substr(str_shuffle($str), 1, $keyLenght);

      return $randomString;
  };


  
