<?php
  class  Validator{
    function checkLogin($u,$p,$w){
      include("connection.php");
      $enc=md5($p);
      if($w=="Patient"){
            //**********************************************************************************************
            $check_exist="SELECT FirstName,PatientId from patients where email='$u' && password='$enc'";
            //taking unique id...
            $fetch_id=mysql_query($check_exist);
            $uid_toosee=mysql_fetch_array($fetch_id);
            $user_id=$uid_toosee['PatientId'];
            //creating session...
            if(mysql_num_rows(mysql_query($check_exist,$con))>0){
              session_start();
              $_SESSION['user']=$uid_toosee['FirstName'];
              $_SESSION['user_id']=$user_id;
              $_SESSION['mode']="patient";
              mysql_query("UPDATE patients SET OnlineNow=1 WHERE PatientId='$user_id'",$con);
              // mysql_query("UPDATE persons SET noti_onl=1 WHERE id='$user_id'",$con);
              header("Location: patient_prof.php");
            }
            else{
              echo "Incorrect username or password...";
              //echo $enc;
            }
            mysql_close();
            //**********************************************************************************************
      }elseif($w=="Psychiatrist"){
            //**********************************************************************************************
            $check_exist="SELECT FirstName,PsychiatristId from psychiatrists where email='$u' && password='$enc'";
            //taking unique id...
            $fetch_id=mysql_query($check_exist);
            $uid_toosee=mysql_fetch_array($fetch_id);
            $user_id=$uid_toosee['PsychiatristId'];
            //creating session...
            if(mysql_num_rows(mysql_query($check_exist,$con))>0){
              session_start();
              $_SESSION['user']=$uid_toosee['FirstName'];
              $_SESSION['user_id']=$user_id;
              $_SESSION['mode']="psychiatrist";
              mysql_query("UPDATE psychiatrists SET OnlineNow=1 WHERE PsychiatristId='$user_id'",$con);
              // mysql_query("UPDATE persons SET noti_onl=1 WHERE id='$user_id'",$con);
              header("Location: psy_prof.php");
            }
            else{
              echo "Incorrect username or password...";
              //echo $enc;
            }
            mysql_close();
            //**********************************************************************************************
      }

      

    }
  }
?>