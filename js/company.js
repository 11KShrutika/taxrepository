$(document).ready(function() {
//$('#myTable').DataTable();
$('#btn_save_company').click(function() {
		 var id = $('#company_id').val();
		 var user_id = $('#company_user_id').val();
		 var regi_id = $('#company_regi_id').val();
	 
		 var company = $('#company_company').val();
		 var email = $('#company_email').val();
		 var mobile = $('#company_mobile').val();
		 var address = $('#company_address').val();
		 var gstno = $('#company_gstno').val();
		 var created_at = $('#company_created_at').val();
		 var updated_at = $('#company_updated_at').val();
		 var isdelete = $('#company_isdelete').val();
		 var col_1 = $('#company_col_1').val();
		 var col_2 = $('#company_col_2').val();
		 var col_3 = $('#company_col_3').val();
		 
 var companyobject = {		id : id,
		user_id : user_id,
		regi_id : regi_id,
		
		company : company,
		email : email,
		mobile : mobile,
		address : address,
		gstno : gstno,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../php/ company.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    company: JSON.stringify(companyobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#company_id').val('');
		$('#company_user_id').val('');
		$('#company_regi_id').val('');
		
		$('#company_company').val('');
		$('#company_email').val('');
		$('#company_mobile').val('');
		$('#company_address').val('');
		$('#company_gstno').val('');
		$('#company_created_at').val('');
		$('#company_updated_at').val('');
		$('#company_isdelete').val('');
		$('#company_col_1').val('');
		$('#company_col_2').val('');
		$('#company_col_3').val('');
		
                   
    
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
$('#btn_update_company').click(function() {
		 var id = $('#company_id').val();
		 var user_id = $('#company_user_id').val();
		 var regi_id = $('#company_regi_id').val();
		
		 var company = $('#company_company').val();
		 var email = $('#company_email').val();
		 var mobile = $('#company_mobile').val();
		 var address = $('#company_address').val();
		 var gstno = $('#company_gstno').val();
		 var created_at = $('#company_created_at').val();
		 var updated_at = $('#company_updated_at').val();
		 var isdelete = $('#company_isdelete').val();
		 var col_1 = $('#company_col_1').val();
		 var col_2 = $('#company_col_2').val();
		 var col_3 = $('#company_col_3').val();
		 	
 var companyobject = {
		id : id,
		user_id : user_id,
		regi_id : regi_id,
		fname : fname,
		mname : mname,
		lname : lname,
		company : company,
		email : email,
		mobile : mobile,
		address : address,
		gstno : gstno,
		created_at : created_at,
		updated_at : updated_at,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../php/ company.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    company: JSON.stringify(companyobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#company_id').val('');
		$('#company_user_id').val('');
		$('#company_regi_id').val('');
		
		$('#company_company').val('');
		$('#company_email').val('');
		$('#company_mobile').val('');
		$('#company_address').val('');
		$('#company_gstno').val('');
		$('#company_created_at').val('');
		$('#company_updated_at').val('');
		$('#company_isdelete').val('');
		$('#company_col_1').val('');
		$('#company_col_2').val('');
		$('#company_col_3').val('');
	
                   
    
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
$('#btn_delete_company').click(function() {
		 var id = $('#company_id').val();
		 var user_id = $('#company_user_id').val();
		 var regi_id = $('#company_regi_id').val();
		
		 var company = $('#company_company').val();
		 var email = $('#company_email').val();
		 var mobile = $('#company_mobile').val();
		 var address = $('#company_address').val();
		 var gstno = $('#company_gstno').val();
		 var created_at = $('#company_created_at').val();
		 var updated_at = $('#company_updated_at').val();
		 var isdelete = $('#company_isdelete').val();
		 var col_1 = $('#company_col_1').val();
		 var col_2 = $('#company_col_2').val();
		 var col_3 = $('#company_col_3').val();
		 var companyobject = {id : id,
user_id : user_id,
regi_id : regi_id,
fname : fname,
mname : mname,
lname : lname,
company : company,
email : email,
mobile : mobile,
address : address,
gstno : gstno,
created_at : created_at,
updated_at : updated_at,
isdelete : isdelete,
col_1 : col_1,
col_2 : col_2,
col_3 : col_3}
            $.ajax({
                url: "/phpcompany.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    company: JSON.stringify(companyobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#company_id').val('');
		$('#company_user_id').val('');
		$('#company_regi_id').val('');
	
		$('#company_company').val('');
		$('#company_email').val('');
		$('#company_mobile').val('');
		$('#company_address').val('');
		$('#company_gstno').val('');
		$('#company_created_at').val('');
		$('#company_updated_at').val('');
		$('#company_isdelete').val('');
		$('#company_col_1').val('');
		$('#company_col_2').val('');
		$('#company_col_3').val('');
		
		
                   
    
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
$('#btn_load_company').click(function() {  var companyobject = {id : id}
            $.ajax({
                url: "../php/company.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    company: JSON.stringify(companyobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#company_id').val(data.id);$('#company_user_id').val(data.user_id);$('#company_regi_id').val(data.regi_id);$('#company_company').val(data.company);$('#company_email').val(data.email);$('#company_mobile').val(data.mobile);$('#company_address').val(data.address);$('#company_gstno').val(data.gstno);$('#company_created_at').val(data.created_at);$('#company_updated_at').val(data.updated_at);$('#company_isdelete').val(data.isdelete);$('#company_col_1').val(data.col_1);$('#company_col_2').val(data.col_2);$('#company_col_3').val(data.col_3);
                   
    
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
        });$('#btn_loadall_company').click(function() { var companyobject = {}
        $.ajax({
            url: "../php/company.php",
            type: "POST",
            data: {
                "key":"getalldata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
             },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log(data);$('#company_id').val(data.id);$('#company_user_id').val(data.user_id);$('#company_regi_id').val(data.regi_id);$('#company_company').val(data.company);$('#company_email').val(data.email);$('#company_mobile').val(data.mobile);$('#company_address').val(data.address);$('#company_gstno').val(data.gstno);$('#company_created_at').val(data.created_at);$('#company_updated_at').val(data.updated_at);$('#company_isdelete').val(data.isdelete);$('#company_col_1').val(data.col_1);$('#company_col_2').val(data.col_2);$('#company_col_3').val(data.col_3);
               

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