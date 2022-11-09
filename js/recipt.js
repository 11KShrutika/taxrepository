$(document).ready(function() {
//$('#myTable').DataTable();
$('#btn_save_recipt').click(function() {
		 var id = $('#recipt_id').val();
		 var user_id = $('#recipt_user_id').val();
		 var rec_id = $('#recipt_rec_id').val();
		 var billid = $('#recipt_billid').val();
		 var rec_date = $('#recipt_rec_date').val();
		 var netamt = $('#recipt_netamt').val();
		 var paymode = $('#recipt_paymode').val();
		 var bankname = $('#recipt_bankname').val();
		 var checkdd = $('#recipt_checkdd').val();
		 var checkdate = $('#recipt_checkdate').val();
		 var created_at = $('#recipt_created_at').val();
		 var updated_at = $('#recipt_updated_at').val();
		 var isdelete = $('#recipt_isdelete').val();
		 var col_1 = $('#recipt_col_1').val();
		 var col_2 = $('#recipt_col_2').val();
		 var col_3 = $('#recipt_col_3').val();
	
 var reciptobject = {		id : id,
		user_id : user_id,
		rec_id : rec_id,
		billid : billid,
		rec_date : rec_date,
		netamt : netamt,
		paymode : paymode,
		bankname : bankname,
		checkdd : checkdd,
		checkdate : checkdate,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../../php/recipt.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    recipt: JSON.stringify(reciptobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#recipt_id').val('');
		$('#recipt_user_id').val('');
		$('#recipt_rec_id').val('');
		$('#recipt_billid').val('');
		$('#recipt_rec_date').val('');
		$('#recipt_netamt').val('');
		$('#recipt_paymode').val('');
		$('#recipt_bankname').val('');
		$('#recipt_checkdd').val('');
		$('#recipt_checkdate').val('');
		$('#recipt_created_at').val('');
		$('#recipt_updated_at').val('');
		$('#recipt_isdelete').val('');
		$('#recipt_col_1').val('');
		$('#recipt_col_2').val('');
		$('#recipt_col_3').val('');
		
                   
    
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
$('#btn_update_recipt').click(function() {
		 var id = $('#recipt_id').val();
		 var user_id = $('#recipt_user_id').val();
		 var rec_id = $('#recipt_rec_id').val();
		 var billid = $('#recipt_billid').val();
		 var rec_date = $('#recipt_rec_date').val();
		 var netamt = $('#recipt_netamt').val();
		 var paymode = $('#recipt_paymode').val();
		 var bankname = $('#recipt_bankname').val();
		 var checkdd = $('#recipt_checkdd').val();
		 var checkdate = $('#recipt_checkdate').val();
		 var created_at = $('#recipt_created_at').val();
		 var updated_at = $('#recipt_updated_at').val();
		 var isdelete = $('#recipt_isdelete').val();
		 var col_1 = $('#recipt_col_1').val();
		 var col_2 = $('#recipt_col_2').val();
		 var col_3 = $('#recipt_col_3').val();
			
 var reciptobject = {
		id : id,
		user_id : user_id,
		rec_id : rec_id,
		billid : billid,
		rec_date : rec_date,
		netamt : netamt,
		paymode : paymode,
		bankname : bankname,
		checkdd : checkdd,
		checkdate : checkdate,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../../php/ recipt.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    recipt: JSON.stringify(reciptobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#recipt_id').val('');
		$('#recipt_user_id').val('');
		$('#recipt_rec_id').val('');
		$('#recipt_billid').val('');
		$('#recipt_rec_date').val('');
		$('#recipt_netamt').val('');
		$('#recipt_paymode').val('');
		$('#recipt_bankname').val('');
		$('#recipt_checkdd').val('');
		$('#recipt_checkdate').val('');
		$('#recipt_created_at').val('');
		$('#recipt_updated_at').val('');
		$('#recipt_isdelete').val('');
		$('#recipt_col_1').val('');
		$('#recipt_col_2').val('');
		$('#recipt_col_3').val('');

                   
    
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
$('#btn_delete_recipt').click(function() {
		 var id = $('#recipt_id').val();
		 var user_id = $('#recipt_user_id').val();
		 var rec_id = $('#recipt_rec_id').val();
		 var billid = $('#recipt_billid').val();
		 var rec_date = $('#recipt_rec_date').val();
		 var netamt = $('#recipt_netamt').val();
		 var paymode = $('#recipt_paymode').val();
		 var bankname = $('#recipt_bankname').val();
		 var checkdd = $('#recipt_checkdd').val();
		 var checkdate = $('#recipt_checkdate').val();
		 var created_at = $('#recipt_created_at').val();
		 var updated_at = $('#recipt_updated_at').val();
		 var isdelete = $('#recipt_isdelete').val();
		 var col_1 = $('#recipt_col_1').val();
		 var col_2 = $('#recipt_col_2').val();
		 var col_3 = $('#recipt_col_3').val();
		 var reciptobject = {id : id,
user_id : user_id,
rec_id : rec_id,
billid : billid,
rec_date : rec_date,
netamt : netamt,
paymode : paymode,
bankname : bankname,
checkdd : checkdd,
checkdate : checkdate,
created_at : created_at,
updated_at : updated_at,
isdelete : isdelete,
col_1 : col_1,
col_2 : col_2,
col_3 : col_3S}
            $.ajax({
                url: "/phprecipt.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    recipt: JSON.stringify(reciptobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#recipt_id').val('');
		$('#recipt_user_id').val('');
		$('#recipt_rec_id').val('');
		$('#recipt_billid').val('');
		$('#recipt_rec_date').val('');
		$('#recipt_netamt').val('');
		$('#recipt_paymode').val('');
		$('#recipt_bankname').val('');
		$('#recipt_checkdd').val('');
		$('#recipt_checkdate').val('');
		$('#recipt_created_at').val('');
		$('#recipt_updated_at').val('');
		$('#recipt_isdelete').val('');
		$('#recipt_col_1').val('');
		$('#recipt_col_2').val('');
		$('#recipt_col_3').val('');
	
		
                   
    
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
$('#btn_load_recipt').click(function() { var reciptobject = {id : id}
            $.ajax({
                url: "../../php/recipt.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    recipt: JSON.stringify(reciptobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#recipt_id').val(data.id);$('#recipt_user_id').val(data.user_id);$('#recipt_rec_id').val(data.rec_id);$('#recipt_billid').val(data.billid);$('#recipt_rec_date').val(data.rec_date);$('#recipt_netamt').val(data.netamt);$('#recipt_paymode').val(data.paymode);$('#recipt_bankname').val(data.bankname);$('#recipt_checkdd').val(data.checkdd);$('#recipt_checkdate').val(data.checkdate);$('#recipt_created_at').val(data.created_at);$('#recipt_updated_at').val(data.updated_at);$('#recipt_isdelete').val(data.isdelete);$('#recipt_col_1').val(data.col_1);$('#recipt_col_2').val(data.col_2);$('#recipt_col_3').val(data.col_3);
                   
    
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
        });$('#btn_loadall_recipt').click(function() { var reciptobject = {}
        $.ajax({
            url: "../../php/recipt.php",
            type: "POST",
            data: {
                "key":"getalldata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
             },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log(data);$('#recipt_id').val(data.id);$('#recipt_user_id').val(data.user_id);$('#recipt_rec_id').val(data.rec_id);$('#recipt_billid').val(data.billid);$('#recipt_rec_date').val(data.rec_date);$('#recipt_netamt').val(data.netamt);$('#recipt_paymode').val(data.paymode);$('#recipt_bankname').val(data.bankname);$('#recipt_checkdd').val(data.checkdd);$('#recipt_checkdate').val(data.checkdate);$('#recipt_created_at').val(data.created_at);$('#recipt_updated_at').val(data.updated_at);$('#recipt_isdelete').val(data.isdelete);$('#recipt_col_1').val(data.col_1);$('#recipt_col_2').val(data.col_2);$('#recipt_col_3').val(data.col_3);
               

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
        
    
    }); // document ready close