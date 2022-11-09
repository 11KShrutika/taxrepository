$(document).ready(function() {
//$('#myTable').DataTable();
$('#btn_save_billdetails').click(function() {
		 var id = $('#billdetails_id').val();
		 var compid = $('#billdetails_compid').val();
		 var date = $('#billdetails_date').val();
		 var net_amt = $('#billdetails_net_amt').val();
		 var paid_amt = $('#billdetails_paid_amt').val();
		 var rem_amt = $('#billdetails_rem_amt').val();
		 var created_at = $('#billdetails_created_at').val();
		 var updated_at = $('#billdetails_updated_at').val();
		 var isdelete = $('#billdetails_isdelete').val();
		 var col_1 = $('#billdetails_col_1').val();
		 var col_2 = $('#billdetails_col_2').val();
		 var col_3 = $('#billdetails_col_3').val();
	
 var billdetailsobject = {		id : id,
		compid : compid,
		date : date,
		net_amt : net_amt,
		paid_amt : paid_amt,
		rem_amt : rem_amt,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3,
		}
            $.ajax({
                url: "../php/billdetails.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    billdetails: JSON.stringify(billdetailsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#billdetails_id').val('');
		$('#billdetails_compid').val('');
		$('#billdetails_date').val('');
		$('#billdetails_net_amt').val('');
		$('#billdetails_paid_amt').val('');
		$('#billdetails_rem_amt').val('');
		$('#billdetails_created_at').val('');
		$('#billdetails_updated_at').val('');
		$('#billdetails_isdelete').val('');
		$('#billdetails_col_1').val('');
		$('#billdetails_col_2').val('');
		$('#billdetails_col_3').val('');
		
                   
    
                },
                error: function() {
                    console.log('<div class="text-center">error here</div>');
                },
                /* beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
                },*/
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        }); // add close
$('#btn_update_billdetails').click(function() {
		 var id = $('#billdetails_id').val();
		 var compid = $('#billdetails_compid').val();
		 var date = $('#billdetails_date').val();
		 var net_amt = $('#billdetails_net_amt').val();
		 var paid_amt = $('#billdetails_paid_amt').val();
		 var rem_amt = $('#billdetails_rem_amt').val();
		 var created_at = $('#billdetails_created_at').val();
		 var updated_at = $('#billdetails_updated_at').val();
		 var isdelete = $('#billdetails_isdelete').val();
		 var col_1 = $('#billdetails_col_1').val();
		 var col_2 = $('#billdetails_col_2').val();
		 var col_3 = $('#billdetails_col_3').val();
		 	
 var billdetailsobject = {
		id : id,
		compid : compid,
		date : date,
		net_amt : net_amt,
		paid_amt : paid_amt,
		rem_amt : rem_amt,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../php/ billdetails.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    billdetails: JSON.stringify(billdetailsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#billdetails_id').val('');
		$('#billdetails_compid').val('');
		$('#billdetails_date').val('');
		$('#billdetails_net_amt').val('');
		$('#billdetails_paid_amt').val('');
		$('#billdetails_rem_amt').val('');
		$('#billdetails_created_at').val('');
		$('#billdetails_updated_at').val('');
		$('#billdetails_isdelete').val('');
		$('#billdetails_col_1').val('');
		$('#billdetails_col_2').val('');
		$('#billdetails_col_3').val('');
                   
    
                },
                error: function() {
                    console.log('<div class="text-center">error here</div>');
                },
                /* beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
                },*/
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        });
$('#btn_delete_billdetails').click(function() {
		 var id = $('#billdetails_id').val();
		 var compid = $('#billdetails_compid').val();
		 var date = $('#billdetails_date').val();
		 var net_amt = $('#billdetails_net_amt').val();
		 var paid_amt = $('#billdetails_paid_amt').val();
		 var rem_amt = $('#billdetails_rem_amt').val();
		 var created_at = $('#billdetails_created_at').val();
		 var updated_at = $('#billdetails_updated_at').val();
		 var isdelete = $('#billdetails_isdelete').val();
		 var col_1 = $('#billdetails_col_1').val();
		 var col_2 = $('#billdetails_col_2').val();
		 var col_3 = $('#billdetails_col_3').val();
		 var billdetailsobject = {id : id,
compid : compid,
date : date,
net_amt : net_amt,
paid_amt : paid_amt,
rem_amt : rem_amt,
created_at : created_at,
updated_at : updated_at,
isdelete : isdelete,
col_1 : col_1,
col_2 : col_2,
col_3 : col_3,
}
            $.ajax({
                url: "/phpbilldetails.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    billdetails: JSON.stringify(billdetailsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#billdetails_id').val('');
		$('#billdetails_compid').val('');
		$('#billdetails_date').val('');
		$('#billdetails_net_amt').val('');
		$('#billdetails_paid_amt').val('');
		$('#billdetails_rem_amt').val('');
		$('#billdetails_created_at').val('');
		$('#billdetails_updated_at').val('');
		$('#billdetails_isdelete').val('');
		$('#billdetails_col_1').val('');
		$('#billdetails_col_2').val('');
		$('#billdetails_col_3').val('');
		
		
                   
    
                },
                error: function() {
                    console.log('<div class="text-center">error here</div>');
                },
                /* beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
                },*/
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        }); 
$('#btn_load_billdetails').click(function() { var billdetailsobject = {id : id}
            $.ajax({
                url: "../php/billdetails.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    billdetails: JSON.stringify(billdetailsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#billdetails_id').val(data.id);$('#billdetails_compid').val(data.compid);$('#billdetails_date').val(data.date);$('#billdetails_net_amt').val(data.net_amt);$('#billdetails_paid_amt').val(data.paid_amt);$('#billdetails_rem_amt').val(data.rem_amt);$('#billdetails_created_at').val(data.created_at);$('#billdetails_updated_at').val(data.updated_at);$('#billdetails_isdelete').val(data.isdelete);$('#billdetails_col_1').val(data.col_1);$('#billdetails_col_2').val(data.col_2);$('#billdetails_col_3').val(data.col_3);
                   
    
                },
                error: function() {
                    console.log('<div class="text-center">error here</div>');
                },
                /* beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
                },*/
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        });$('#btn_loadall_billdetails').click(function() { var billdetailsobject = {}
        $.ajax({
            url: "../php/billdetails.php",
            type: "POST",
            data: {
                "key":"getalldata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
             },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log(data);$('#billdetails_id').val(data.id);$('#billdetails_compid').val(data.compid);$('#billdetails_date').val(data.date);$('#billdetails_net_amt').val(data.net_amt);$('#billdetails_paid_amt').val(data.paid_amt);$('#billdetails_rem_amt').val(data.rem_amt);$('#billdetails_created_at').val(data.created_at);$('#billdetails_updated_at').val(data.updated_at);$('#billdetails_isdelete').val(data.isdelete);$('#billdetails_col_1').val(data.col_1);$('#billdetails_col_2').val(data.col_2);$('#billdetails_col_3').val(data.col_3);
               

            },
            error: function(dara) {
                console.log('<div class="text-center">error'+dara+' here</div>');
            },
           /* beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
            },*/
            complete: function() {
                console.log('<div class="text-center">Compelete here</div>');
            }
        });
    });
        
    
    }); // document ready close