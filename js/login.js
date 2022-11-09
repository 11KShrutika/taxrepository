$(document).ready(function() {
//$('#myTable').DataTable();
$('#btn_save_login').click(function() {
		 var id = $('#login_id').val();
		 var user_id = $('#login_user_id').val();
		 var password = $('#login_password').val();
		 var delete_at = $('#login_delete_at').val();
		 var col_1 = $('#login_col_1').val();
		 var col_2 = $('#login_col_2').val();
		 var col_3 = $('#login_col_3').val();
 var loginobject = {		id : id,
		user_id : user_id,
		password : password,
		delete_at : delete_at,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../php/ login.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    login: JSON.stringify(loginobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#login_id').val('');
		$('#login_user_id').val('');
		$('#login_password').val('');
		$('#login_delete_at').val('');
		$('#login_col_1').val('');
		$('#login_col_2').val('');
		$('#login_col_3').val('');
                   
    
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
$('#btn_update_login').click(function() {
		 var id = $('#login_id').val();
		 var user_id = $('#login_user_id').val();
		 var password = $('#login_password').val();
		 var delete_at = $('#login_delete_at').val();
		 var col_1 = $('#login_col_1').val();
		 var col_2 = $('#login_col_2').val();
		 var col_3 = $('#login_col_3').val();		
 var loginobject = {
		id : id,
		user_id : user_id,
		password : password,
		delete_at : delete_at,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3}
            $.ajax({
                url: "../php/ login.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    login: JSON.stringify(loginobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#login_id').val('');
		$('#login_user_id').val('');
		$('#login_password').val('');
		$('#login_delete_at').val('');
		$('#login_col_1').val('');
		$('#login_col_2').val('');
		$('#login_col_3').val('');
                   
    
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
$('#btn_delete_login').click(function() {
		 var id = $('#login_id').val();
		 var user_id = $('#login_user_id').val();
		 var password = $('#login_password').val();
		 var delete_at = $('#login_delete_at').val();
		 var col_1 = $('#login_col_1').val();
		 var col_2 = $('#login_col_2').val();
		 var col_3 = $('#login_col_3').val(); var loginobject = {id : id,
user_id : user_id,
password : password,
delete_at : delete_at,
col_1 : col_1,
col_2 : col_2,
col_3 : col_3}
            $.ajax({
                url: "/phplogin.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    login: JSON.stringify(loginobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#login_id').val('');
		$('#login_user_id').val('');
		$('#login_password').val('');
		$('#login_delete_at').val('');
		$('#login_col_1').val('');
		$('#login_col_2').val('');
		$('#login_col_3').val('');
		
                   
    
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
$('#btn_load_login').click(function() { var id = $('#login_col_3').val(); var loginobject = {id : id}
            $.ajax({
                url: "../php/login.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    login: JSON.stringify(loginobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#login_id').val(data.id);$('#login_user_id').val(data.user_id);$('#login_password').val(data.password);$('#login_delete_at').val(data.delete_at);$('#login_col_1').val(data.col_1);$('#login_col_2').val(data.col_2);$('#login_col_3').val(data.col_3);
                   
    
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
        });$('#btn_loadall_login').click(function() { var loginobject = {}
        $.ajax({
            url: "../php/login.php",
            type: "POST",
            data: {
                "key":"getalldata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
             },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log(data);$('#login_id').val(data.id);$('#login_user_id').val(data.user_id);$('#login_password').val(data.password);$('#login_delete_at').val(data.delete_at);$('#login_col_1').val(data.col_1);$('#login_col_2').val(data.col_2);$('#login_col_3').val(data.col_3);
               

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