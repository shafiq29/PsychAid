<?php
include("connection.php");
session_start();
$u=$_SESSION['user'];
$uid=$_SESSION['user_id'];
$mode=$_SESSION['mode'];
$info="";

if($mode=="patient"){


 $dat=mysql_query("SELECT * from connections where Pat_Id='$uid'");
if(mysql_num_rows($dat)>0){
 	while($row=mysql_fetch_array($dat)){
 		$check=$row['Status'];
 		$check2=$row['New'];
 		if($check=="1" && $check2=="1"){
 			$arrayName = array('update' => true,'respond'=>$info );
 			$test=mysql_query("UPDATE connections set New='0' where Pat_Id='$uid'");

 		}
 	}
 }

}elseif($mode=="psychiatrist") {
	$dat=mysql_query("SELECT * from connections where PsychiatristId='$uid'");
if(mysql_num_rows($dat)>0){
 	while($row=mysql_fetch_array($dat)){
 		$check=$row['Status'];
 		$check2=$row['New'];
 		if($check=="0" && $check2=="1"){
 			$arrayName = array('update' => true,'respond'=>$info );
 			$test=mysql_query("UPDATE connections set New='0' where PsychiatristId='$uid'");

 		}
 	}
 }
}

 echo json_encode($arrayName);
// 		//checking is already friendship status...
// 		$iden=$row['id'];
// 		$col="user_".$uid;
// 		$check=mysql_query("SELECT $col FROM noti_frnd_req WHERE id='$iden' ");
// 		$check_res=mysql_fetch_array($check);

// 		//fetching image...
// 		$imgq=mysql_query("SELECT img_path FROM images WHERE id='$iden' ");
// 		$imgp=mysql_fetch_array($imgq);
// 		$pro=$imgp['img_path'];

// 		if($uid!=$iden){
// 			if($check_res[$col]==0){
						
// 			}
// 			else if($check_res[$col]==2){
// 				$info.=$row['name']." accepted your friendship!";
// 				mysql_query("UPDATE   noti_frnd_req set $col='0' where id='$iden' ");
// 				mysql_query("INSERT INTO all_noti (notice,track) values('$info','$uid') ");
// 				$arrayName = array('update' => true,'respond'=>$info );
// 			}
// 			else if($check_res[$col]==6){
// 				$info.=	"You just requested ".$row['name'];
// 				mysql_query("UPDATE   noti_frnd_req set $col='0' where id='$iden' ");
// 				mysql_query("INSERT INTO all_noti (notice,track) values('$info','$uid') ");
// 				$arrayName = array('update' => true,'respond'=>$info );
// 			}	
// 			else if($check_res[$col]==7){
// 				$info.=	$row['name']." sent a request to you!";
// 				mysql_query("UPDATE   noti_frnd_req set $col='0' where id='$iden' ");
// 				mysql_query("INSERT INTO all_noti (notice,track) values('$info','$uid') ");
// 				$arrayName = array('update' => true,'respond'=>$info );
// 			}
// 		}
	
// 	}
	
			//}
// $arrayName = array('update' => false,'respond'=>$info );
	
//}
?>

