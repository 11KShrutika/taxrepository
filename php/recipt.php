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

    $tbl_reciptobject=$_POST['tbl_recipt']; 			
	//echo $tbl_reciptobject;
	$tbl_reciptobjectarray=json_decode($tbl_reciptobject);
	
	//print_r($tbl_reciptobjectarray);
	//print($tbl_reciptobjectarray->name);		$id = $tbl_reciptobjectarray->id;
		$user_id = $tbl_reciptobjectarray->user_id;
		$rec_id = $tbl_reciptobjectarray->rec_id;
		$billid = $tbl_reciptobjectarray->billid;
		$rec_date = $tbl_reciptobjectarray->rec_date;
		$netamt = $tbl_reciptobjectarray->netamt;
		$paymode = $tbl_reciptobjectarray->paymode;
		$bankname = $tbl_reciptobjectarray->bankname;
		$checkdd = $tbl_reciptobjectarray->checkdd;
		$checkdate = $tbl_reciptobjectarray->checkdate;
		$created_at = $tbl_reciptobjectarray->created_at;
		$updated_at = $tbl_reciptobjectarray->updated_at;
		$isdelete = $tbl_reciptobjectarray->isdelete;
		$col_1 = $tbl_reciptobjectarray->col_1;
		$col_2 = $tbl_reciptobjectarray->col_2;
		$col_3 = $tbl_reciptobjectarray->col_3;
		$primary = $tbl_reciptobjectarray->primary;
if(!empty($id) &&!empty($user_id) &&!empty($rec_id) &&!empty($billid) &&!empty($rec_date) &&!empty($netamt) &&!empty($paymode) &&!empty($bankname) &&!empty($checkdd) &&!empty($checkdate) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) &&!empty($primary) )

{
$query ="UPDATE `tbl_recipt` SET `id` = '$id',`user_id` = '$user_id',`rec_id` = '$rec_id',`billid` = '$billid',`rec_date` = '$rec_date',`netamt` = '$netamt',`paymode` = '$paymode',`bankname` = '$bankname',`checkdd` = '$checkdd',`checkdate` = '$checkdate',`created_at` = '$created_at',`updated_at` = '$updated_at',`isdelete` = '$isdelete',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3',PRIMARY = '$primary' where `id` = $id";

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
	
	
	$q="SELECT * FROM `tbl_recipt`";
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
	
	
	$q="SELECT * FROM `tbl_recipt` where  isdelete ='false'";
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
	
    $tbl_reciptobject=$_POST['tbl_recipt_name']; 			
	//echo $tbl_reciptobject;
	$tbl_reciptobjectarray=json_decode($tbl_reciptobject);
	
	//print_r($tbl_reciptobjectarray);
	//print($$tbl_reciptobjectarray->name);$primary = $tbl_reciptobjectarray->primary;
if(!empty($id) )

{
$query ="UPDATE `tbl_recipt` SET  where `id` = $id";
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
	
		$tbl_reciptobject=$_POST['tbl_recipt_name']; 			
	echo $tbl_reciptobject;
	$tbl_reciptobjectarray=json_decode($tbl_reciptobject);
	
	//print_r($tbl_reciptobjectarray);
	//print($$tbl_reciptobjectarray->name);		$id = $tbl_reciptobjectarray->id;
		$user_id = $tbl_reciptobjectarray->user_id;
		$rec_id = $tbl_reciptobjectarray->rec_id;
		$billid = $tbl_reciptobjectarray->billid;
		$rec_date = $tbl_reciptobjectarray->rec_date;
		$netamt = $tbl_reciptobjectarray->netamt;
		$paymode = $tbl_reciptobjectarray->paymode;
		$bankname = $tbl_reciptobjectarray->bankname;
		$checkdd = $tbl_reciptobjectarray->checkdd;
		$checkdate = $tbl_reciptobjectarray->checkdate;
		$created_at = $tbl_reciptobjectarray->created_at;
		$updated_at = $tbl_reciptobjectarray->updated_at;
		$isdelete = $tbl_reciptobjectarray->isdelete;
		$col_1 = $tbl_reciptobjectarray->col_1;
		$col_2 = $tbl_reciptobjectarray->col_2;
		$col_3 = $tbl_reciptobjectarray->col_3;
		$primary = $tbl_reciptobjectarray->primary;
if(!empty($id) &&!empty($user_id) &&!empty($rec_id) &&!empty($billid) &&!empty($rec_date) &&!empty($netamt) &&!empty($paymode) &&!empty($bankname) &&!empty($checkdd) &&!empty($checkdate) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) &&!empty($primary) )

{

$query = "INSERT INTO `tbl_recipt` (`id`,`user_id`,`rec_id`,`billid`,`rec_date`,`netamt`,`paymode`,`bankname`,`checkdd`,`checkdate`,`created_at`,`updated_at`,`isdelete`,`col_1`,`col_2`,`col_3`,PRIMARY) VALUES ($id,$user_id,$rec_id,$billid,$rec_date,$netamt,$paymode,$bankname,$checkdd,$checkdate,$created_at,$updated_at,$isdelete,$col_1,$col_2,$col_3,$primary)"; 

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