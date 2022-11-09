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

    $tbl_companyobject=$_POST['tbl_company']; 			
	//echo $tbl_companyobject;
	$tbl_companyobjectarray=json_decode($tbl_companyobject);
	
	//print_r($tbl_companyobjectarray);
	//print($tbl_companyobjectarray->name);		$id = $tbl_companyobjectarray->id;
		$user_id = $tbl_companyobjectarray->user_id;
		$regi_id = $tbl_companyobjectarray->regi_id;
		
		$company = $tbl_companyobjectarray->company;
		$email = $tbl_companyobjectarray->email;
		$mobile = $tbl_companyobjectarray->mobile;
		$address = $tbl_companyobjectarray->address;
		$gstno = $tbl_companyobjectarray->gstno;
		$created_at = $tbl_companyobjectarray->created_at;
		$updated_at = $tbl_companyobjectarray->updated_at;
		$isdelete = $tbl_companyobjectarray->isdelete;
		$col_1 = $tbl_companyobjectarray->col_1;
		$col_2 = $tbl_companyobjectarray->col_2;
		$col_3 = $tbl_companyobjectarray->col_3;
		
if(!empty($id) &&!empty($user_id) &&!empty($regi_id)  &&!empty($company) &&!empty($email) &&!empty($mobile) &&!empty($address) &&!empty($gstno) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3) )

{
$query ="UPDATE `tbl_company` SET `id` = '$id',`user_id` = '$user_id',`regi_id` = '$regi_id',`company` = '$company',`email` = '$email',`mobile` = '$mobile',`address` = '$address',`gstno` = '$gstno',`created_at` = '$created_at',`updated_at` = '$updated_at',`isdelete` = '$isdelete',`col_1` = '$col_1',`col_2` = '$col_2',`col_3` = '$col_3' where `id` = $id";

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
	
	
	$q="SELECT * FROM `tbl_company`";
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
	
	
	$q="SELECT * FROM `tbl_company` where  isdelete ='false'";
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
	
    $tbl_companyobject=$_POST['tbl_company_name']; 			
	//echo $tbl_companyobject;
	$tbl_companyobjectarray=json_decode($tbl_companyobject);
	
	//print_r($tbl_companyobjectarray);
	//print($$tbl_companyobjectarray->name);$primary = $tbl_companyobjectarray->primary;
if(!empty($id) )

{
$query ="UPDATE `tbl_company` SET  where `id` = $id";
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
	
		$tbl_companyobject=$_POST['tbl_company_name']; 			
	echo $tbl_companyobject;
	$tbl_companyobjectarray=json_decode($tbl_companyobject);
	
	//print_r($tbl_companyobjectarray);
	//print($$tbl_companyobjectarray->name);		$id = $tbl_companyobjectarray->id;
		$user_id = $tbl_companyobjectarray->user_id;
		$regi_id = $tbl_companyobjectarray->regi_id;
		
		$company = $tbl_companyobjectarray->company;
		$email = $tbl_companyobjectarray->email;
		$mobile = $tbl_companyobjectarray->mobile;
		$address = $tbl_companyobjectarray->address;
		$gstno = $tbl_companyobjectarray->gstno;
		$created_at = $tbl_companyobjectarray->created_at;
		$updated_at = $tbl_companyobjectarray->updated_at;
		$isdelete = $tbl_companyobjectarray->isdelete;
		$col_1 = $tbl_companyobjectarray->col_1;
		$col_2 = $tbl_companyobjectarray->col_2;
		$col_3 = $tbl_companyobjectarray->col_3;

if(!empty($id) &&!empty($user_id) &&!empty($regi_id) &&!empty($fname) &&!empty($mname) &&!empty($lname) &&!empty($company) &&!empty($email) &&!empty($mobile) &&!empty($address) &&!empty($gstno) &&!empty($created_at) &&!empty($updated_at) &&!empty($isdelete) &&!empty($col_1) &&!empty($col_2) &&!empty($col_3)  )

{

$query = "INSERT INTO `tbl_company` (`id`,`user_id`,`regi_id`,`fname`,`mname`,`lname`,`company`,`email`,`mobile`,`address`,`gstno`,`created_at`,`updated_at`,`isdelete`,`col_1`,`col_2`,`col_3`,PRIMARY) VALUES ($id,$user_id,$regi_id,$company,$email,$mobile,$address,$gstno,$created_at,$updated_at,$isdelete,$col_1,$col_2,$col_3)"; 

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