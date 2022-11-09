<?php 
include('dbservice.php');
include('utils.php');
 $utils = new Utils();
 $dbservice =new DB();
//if($utils->isvalidUser()){

if($_POST['username']==_AUTH_USERNAME_ && $_POST['password'] ==_AUTH_PASSWORD_){    
switch ($_POST['key']) {
	case _GETALL_:
		fetchAllData($dbservice);
		break;
	case _DELETEDATA_:
		deleteData($dbservice);
		break;
	case _GETONE_:
		fetchoneData($dbservice);
		break;
	case _UPDATEDATA_:
		updateData($dbservice);
		break;
	case _SAVEDATA_:
		saveData($dbservice);
		break;
}
}
else{
    echo('HTTP/1.0 401 Unauthorized');
}
/*}
else{
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo 'Text to send if user hits Cancel button';
	exit;
}*/
function updateData($dbservice)
{

    $tbl_userobject=$_POST['tbl_user']; 			
	//echo $tbl_userobject;
	$tbl_userobjectarray=json_decode($tbl_userobject);
	
	//print_r($tbl_userobjectarray);
	//print($tbl_userobjectarray->name);		$id = $tbl_userobjectarray->id;
		$fname = $tbl_userobjectarray->fname;
		$mname = $tbl_userobjectarray->mname;
		$lname = $tbl_userobjectarray->lname;
		$email_id = $tbl_userobjectarray->email_id;
		$mob_no = $tbl_userobjectarray->mob_no;
		$isdelete = $tbl_userobjectarray->isdelete;
		$col_1 = $tbl_userobjectarray->col_1;
		$col_2 = $tbl_userobjectarray->col_2;
		$col_3 = $tbl_userobjectarray->col_3;
		$primary = $tbl_userobjectarray->primary;
if(!empty($id) &&!empty($fname) &&!empty($mname) &&!empty($lname) &&!empty($email_id) &&!empty($mob_no) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) &&!empty($primary) )

{
$query ="UPDATE `tbl_user` SET `id` = '$id',`fname` = '$fname',`mname` = '$mname',`lname` = '$lname',`email_id` = '$email_id',`mob_no` = '$mob_no',`isdelete` = '$isdelete',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3',PRIMARY = '$primary' where `id` = $id";

$result = $dbservice->executeDbSaveUpdateQuery($query);

		if($result) 

		{

	       
 echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record Added!</div>';
	    }

	    
else
        {
	    	
echo 'BIG ERROR';
	    }

    }
}
function fetchoneData($dbservice)
{
	
	
	
	$q="SELECT * FROM `tbl_user`";
	$mydat=$dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetch(PDO::FETCH_ASSOC);
	if($row)
	{
		echo json_encode($row);
	}
	else
	{
		$data['data']='Not Found';
		echo json_encode($data);
	}


}
function fetchAllData($dbservice)
{
	
	
	$q="SELECT * FROM `tbl_user` where  isdelete ='false'";
	$mydat=$dbservice->executeDbFetchDataQuery($q);
	$row = $mydat->fetchAll(PDO::FETCH_ASSOC);
	if($row)
	{
		echo json_encode($row);
	}
	else
	{
		$data['data']='Not Found';
		echo json_encode($data);
	}
}
function deleteData($dbservice)
{
	
    $tbl_userobject=$_POST['tbl_user_name']; 			
	$tbl_userobjectarray=json_decode($tbl_userobject);
	$id=$tbl_userobjectarray->id;
	if(!empty($id))
		{
			$query ="UPDATE `tbl_user` SET `isdelete`=1  where `id` = $id";
			$result = $dbservice->executeDbSaveUpdateQuery($query); 
			

			if($result>0) 
				{
					$data['data']='true';
					
				echo json_encode($data);
				}
			else
				{
					$data['data']='false';
					
					echo json_encode($data);
				}

    }
}
function saveData($dbservice)
{
	
		$tbl_userobject=$_POST['tbl_user_name']; 			
	
	$tbl_userobjectarray=json_decode($tbl_userobject);

	
		$fname = $tbl_userobjectarray->fname;
		$mname = $tbl_userobjectarray->mname;
		$lname = $tbl_userobjectarray->lname;
		$email_id = $tbl_userobjectarray->email_id;
		$mob_no = $tbl_userobjectarray->mob_no;
		$isdelete = $tbl_userobjectarray->isdelete;
		$col_1 = $tbl_userobjectarray->col_1;
		$col_2 = $tbl_userobjectarray->col_2;
		$col_3 = $tbl_userobjectarray->col_3;	



$query = "INSERT INTO `tbl_user` (`id`,`fname`,`mname`,`lname`,`email_id`,`mob_no`,`isdelete`,`col_1`,`col_2`,`col_3`) VALUES (null,'$fname','$mname','$lname','$email_id','$mob_no','$isdelete','$col_1','$col_2','$col_3');"; 

$result = $dbservice->executeDbSaveUpdateQuery($query);

		if($result) 
		{
			// print_r($result);
			$data['data']='true';
			echo json_encode($data);
	    }
	    
else
        {
	    	$data['data']='false';
			echo json_encode($data);

}


}?>