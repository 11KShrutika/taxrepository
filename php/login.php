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

    $tbl_loginobject=$_POST['tbl_login']; 			
	//echo $tbl_loginobject;
	$tbl_loginobjectarray=json_decode($tbl_loginobject);
	
	//print_r($tbl_loginobjectarray);
	//print($tbl_loginobjectarray->name);		$id = $tbl_loginobjectarray->id;
		$user_id = $tbl_loginobjectarray->user_id;
		$password = $tbl_loginobjectarray->password;
		$delete_at = $tbl_loginobjectarray->delete_at;
		$col_1 = $tbl_loginobjectarray->col_1;
		$col_2 = $tbl_loginobjectarray->col_2;
		$col_3 = $tbl_loginobjectarray->col_3;
if(!empty($id) &&!empty($user_id) &&!empty($password) &&!empty($delete_at) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) )

{
$query ="UPDATE `tbl_login` SET `id` = '$id',`user_id` = '$user_id',`password` = '$password',`delete_at` = '$delete_at',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3' where `id` = $id";

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
	$id=$_POST['id'];
	
	
	$q="SELECT * FROM `tbl_login`";
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
	
	
	$q="SELECT * FROM `tbl_login` where  isdelete ='false'";
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
	
    $tbl_loginobject=$_POST['tbl_login_name']; 			
	//echo $tbl_loginobject;
	$tbl_loginobjectarray=json_decode($tbl_loginobject);
	
	//print_r($tbl_loginobjectarray);
	//print($$tbl_loginobjectarray->name);$col_3 = $tbl_loginobjectarray->col_3;
if(!empty($id) )

{
$query ="UPDATE `tbl_login` SET  where `id` = $id";
$result = $dbservice->executeDbSaveUpdateQuery($query)

;if($result) 
	{
		echo "record  Deleted";
	}
	else
		echo "Record NOT Deleted";

    }
}
function saveData($dbservice)
{
	
		$tbl_loginobject=$_POST['tbl_login_name']; 			
	echo $tbl_loginobject;
	$tbl_loginobjectarray=json_decode($tbl_loginobject);
	
	//print_r($tbl_loginobjectarray);
	//print($$tbl_loginobjectarray->name);		$id = $tbl_loginobjectarray->id;
		$user_id = $tbl_loginobjectarray->user_id;
		$password = $tbl_loginobjectarray->password;
		$delete_at = $tbl_loginobjectarray->delete_at;
		$col_1 = $tbl_loginobjectarray->col_1;
		$col_2 = $tbl_loginobjectarray->col_2;
		$col_3 = $tbl_loginobjectarray->col_3;
if(!empty($id) &&!empty($user_id) &&!empty($password) &&!empty($delete_at) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) )

{

$query = "INSERT INTO `tbl_login` (`id`,`user_id`,`password`,`delete_at`,`col_1`,`col_2`,`col_3`) VALUES ($id,$user_id,$password,$delete_at,$col_1,$col_2,$col_3)"; 

$result = $dbservice->executeDbSaveUpdateQuery($query);

		if($result) 
		{
	       
 echo '<div class=""col-md-offset-4 col-md-5 text-center alert alert-success"">1 Record Added!</div>';
	    }
	    
else
        {
	    	
echo "BIG ERROR";
	}

}}?>