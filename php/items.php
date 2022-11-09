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

    $tbl_itemsobject=$_POST['tbl_items']; 			
	//echo $tbl_itemsobject;
	$tbl_itemsobjectarray=json_decode($tbl_itemsobject);
	
	//print_r($tbl_itemsobjectarray);
	//print($tbl_itemsobjectarray->name);		$id = $tbl_itemsobjectarray->id;
		$bill_id = $tbl_itemsobjectarray->bill_id;
		$particaluar = $tbl_itemsobjectarray->particaluar;
		$amt = $tbl_itemsobjectarray->amt;
		$cgst = $tbl_itemsobjectarray->cgst;
		$igst = $tbl_itemsobjectarray->igst;
		$sgst = $tbl_itemsobjectarray->sgst;
		$cgsta = $tbl_itemsobjectarray->cgsta;
		$igsta = $tbl_itemsobjectarray->igsta;
		$sgsta = $tbl_itemsobjectarray->sgsta;
		$net_amt = $tbl_itemsobjectarray->net_amt;
		$created_at = $tbl_itemsobjectarray->created_at;
		$updated_at = $tbl_itemsobjectarray->updated_at;
		$col_1 = $tbl_itemsobjectarray->col_1;
		$col_2 = $tbl_itemsobjectarray->col_2;
		$col_3 = $tbl_itemsobjectarray->col_3;
		$isdelete = $tbl_itemsobjectarray->isdelete;
		$primary = $tbl_itemsobjectarray->primary;
if(!empty($id) &&!empty($bill_id) &&!empty($particaluar) &&!empty($amt) &&!empty($cgst) &&!empty($igst) &&!empty($sgst) &&!empty($cgsta) &&!empty($igsta) &&!empty($sgsta) &&!empty($net_amt) &&!empty($created_at) &&!empty($updated_at) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) &&!empty($isdelete) &&!empty($primary) )

{
$query ="UPDATE `tbl_items` SET `id` = '$id',`bill_id` = '$bill_id',`particaluar` = '$particaluar',`amt` = '$amt',`cgst` = '$cgst',`igst` = '$igst',`sgst` = '$sgst',`cgsta` = '$cgsta',`igsta` = '$igsta',`sgsta` = '$sgsta',`net_amt` = '$net_amt',`created_at` = '$created_at',`updated_at` = '$updated_at',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3',`isdelete` = '$isdelete',PRIMARY = '$primary' where `id` = $id";

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
	
	
	$q="SELECT * FROM `tbl_items`";
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
	
	
	$q="SELECT * FROM `tbl_items` where  isdelete ='false'";
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
	
    $tbl_itemsobject=$_POST['tbl_items_name']; 			
	//echo $tbl_itemsobject;
	$tbl_itemsobjectarray=json_decode($tbl_itemsobject);
	
	//print_r($tbl_itemsobjectarray);
	//print($$tbl_itemsobjectarray->name);$primary = $tbl_itemsobjectarray->primary;
if(!empty($id) )

{
$query ="UPDATE `tbl_items` SET  where `id` = $id";
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
	
		$tbl_itemsobject=$_POST['tbl_items_name']; 			
	echo $tbl_itemsobject;
	$tbl_itemsobjectarray=json_decode($tbl_itemsobject);
	
	//print_r($tbl_itemsobjectarray);
	//print($$tbl_itemsobjectarray->name);		$id = $tbl_itemsobjectarray->id;
		$bill_id = $tbl_itemsobjectarray->bill_id;
		$particaluar = $tbl_itemsobjectarray->particaluar;
		$amt = $tbl_itemsobjectarray->amt;
		$cgst = $tbl_itemsobjectarray->cgst;
		$igst = $tbl_itemsobjectarray->igst;
		$sgst = $tbl_itemsobjectarray->sgst;
		$cgsta = $tbl_itemsobjectarray->cgsta;
		$igsta = $tbl_itemsobjectarray->igsta;
		$sgsta = $tbl_itemsobjectarray->sgsta;
		$net_amt = $tbl_itemsobjectarray->net_amt;
		$created_at = $tbl_itemsobjectarray->created_at;
		$updated_at = $tbl_itemsobjectarray->updated_at;
		$col_1 = $tbl_itemsobjectarray->col_1;
		$col_2 = $tbl_itemsobjectarray->col_2;
		$col_3 = $tbl_itemsobjectarray->col_3;
		$isdelete = $tbl_itemsobjectarray->isdelete;
		$primary = $tbl_itemsobjectarray->primary;
if(!empty($id) &&!empty($bill_id) &&!empty($particaluar) &&!empty($amt) &&!empty($cgst) &&!empty($igst) &&!empty($sgst) &&!empty($cgsta) &&!empty($igsta) &&!empty($sgsta) &&!empty($net_amt) &&!empty($created_at) &&!empty($updated_at) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) &&!empty($isdelete) &&!empty($primary) )

{

$query = "INSERT INTO `tbl_items` (`id`,`bill_id`,`particaluar`,`amt`,`cgst`,`igst`,`sgst`,`cgsta`,`igsta`,`sgsta`,`net_amt`,`created_at`,`updated_at`,`col_1`,`col_2`,`col_3`,`isdelete`,PRIMARY) VALUES ($id,$bill_id,$particaluar,$amt,$cgst,$igst,$sgst,$cgsta,$igsta,$sgsta,$net_amt,$created_at,$updated_at,$col_1,$col_2,$col_3,$isdelete,$primary)"; 

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