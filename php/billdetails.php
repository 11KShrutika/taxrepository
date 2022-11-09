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

    $tbl_bill_detailsobject=$_POST['tbl_bill_details']; 			
	//echo $tbl_bill_detailsobject;
	$tbl_bill_detailsobjectarray=json_decode($tbl_bill_detailsobject);
	
	//print_r($tbl_bill_detailsobjectarray);
	//print($tbl_bill_detailsobjectarray->name);		$id = $tbl_bill_detailsobjectarray->id;
		$compid = $tbl_bill_detailsobjectarray->compid;
		$date = $tbl_bill_detailsobjectarray->date;
		$net_amt = $tbl_bill_detailsobjectarray->net_amt;
		$paid_amt = $tbl_bill_detailsobjectarray->paid_amt;
		$rem_amt = $tbl_bill_detailsobjectarray->rem_amt;
		$created_at = $tbl_bill_detailsobjectarray->created_at;
		$updated_at = $tbl_bill_detailsobjectarray->updated_at;
		$isdelete = $tbl_bill_detailsobjectarray->isdelete;
		$col_1 = $tbl_bill_detailsobjectarray->col_1;
		$col_2 = $tbl_bill_detailsobjectarray->col_2;
		$col_3 = $tbl_bill_detailsobjectarray->col_3;
	
if(!empty($id) &&!empty($compid) &&!empty($date) &&!empty($net_amt) &&!empty($paid_amt) &&!empty($rem_amt) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3))

{
$query ="UPDATE `tbl_bill_details` SET `id` = '$id',`compid` = '$compid',`date` = '$date',`net_amt` = '$net_amt',`paid_amt` = '$paid_amt',`rem_amt` = '$rem_amt',`created_at` = '$created_at',`updated_at` = '$updated_at',`isdelete` = '$isdelete',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3' where `id` = $id";

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
	
	
	$q="SELECT * FROM `tbl_bill_details`";
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
	
	
	$q="SELECT * FROM `tbl_bill_details` where  isdelete ='false'";
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
	
    $tbl_bill_detailsobject=$_POST['tbl_bill_details_name']; 			
	
	$tbl_bill_detailsobjectarray=json_decode($tbl_bill_detailsobject);
	
if(!empty($id) )

{
$query ="UPDATE `tbl_bill_details` SET  where `id` = $id";
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
	
		$tbl_bill_detailsobject=$_POST['tbl_bill_details_name']; 			
	echo $tbl_bill_detailsobject;
	$tbl_bill_detailsobjectarray=json_decode($tbl_bill_detailsobject);
	
		$compid = $tbl_bill_detailsobjectarray->compid;
		$date = $tbl_bill_detailsobjectarray->date;
		$net_amt = $tbl_bill_detailsobjectarray->net_amt;
		$paid_amt = $tbl_bill_detailsobjectarray->paid_amt;
		$rem_amt = $tbl_bill_detailsobjectarray->rem_amt;
		$created_at = $tbl_bill_detailsobjectarray->created_at;
		$updated_at = $tbl_bill_detailsobjectarray->updated_at;
		$isdelete = $tbl_bill_detailsobjectarray->isdelete;
		$col_1 = $tbl_bill_detailsobjectarray->col_1;
		$col_2 = $tbl_bill_detailsobjectarray->col_2;
		$col_3 = $tbl_bill_detailsobjectarray->col_3;
		
if(!empty($id) &&!empty($compid) &&!empty($date) &&!empty($net_amt) &&!empty($paid_amt) &&!empty($rem_amt) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) )

{

$query = "INSERT INTO `tbl_bill_details` (`id`,`compid`,`date`,`net_amt`,`paid_amt`,`rem_amt`,`created_at`,`updated_at`,`isdelete`,`col_1`,`col_2`,`col_3`) VALUES ($id,$compid,$date,$net_amt,$paid_amt,$rem_amt,$created_at,$updated_at,$isdelete,$col_1,$col_2,$col_3)"; 

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