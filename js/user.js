function  updaterecord(id,type){
    console.log(id);
    console.log(type);
    $(document).ready(function() {
             var userobject = {id : id}
            $.ajax({
                url: "../php/user.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    "tbl_user_name": JSON.stringify(userobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
                    var dataTable =$('#myTable').dataTable();
                    dataTable.fnClearTable();
dataTable.fnDraw();
dataTable.fnDestroy();
                   
                    loadAllUser();
		
                   
    
                },
                error: function(data) {
                    console.log('<div class="text-center">error'+data.responseText+' here</div>');
                },
                
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        });
}


function loadAllUser(){
    $.ajax({
        url: "../php/user.php",
        type: "POST",
        data: {
            "key":"getalldata",
            "password":_AUTH_PASSWORD_,
            "username":_AUTH_USERNAME_,
            // user: JSON.stringify(userobject)
        },
        dataType:"json",
        success: function(data, status, xhr) {
            console.log(data.length);$('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
         
            if(data.length>0)
            {
           for(var i=0;i<data.length;i++){
            $('#myTable').append('<tr><td>'+data[i].fname+" "+data[i].mname+" "+data[i].lname  +'</td><td>'+data[i].email_id+'</td><td>'+data[i].mob_no+'</td><td><label class="badge badge-success"  onclick=updaterecord('+data[i].id+',"update") >Update</label></td> <td><label class="badge badge-danger" onclick=updaterecord('+data[i].id+',"delete")>delete</label></td></tr>');
           
           }
        }else{
            // $('#myTable').append('<tr><td>wer</td></tr>');
        }
           
           $('#myTable').dataTable({
            "oLanguage": {
                "sEmptyTable":     "No Record Found"
            },  
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Excel',
                    text:'Export to excel'
                    //Columns to export
                    //exportOptions: {
                   //     columns: [0, 1, 2, 3,4,5,6]
                   // }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'PDF',
                    text: 'Export to PDF'
                    //Columns to export
                    //exportOptions: {
                   //     columns: [0, 1, 2, 3, 4, 5, 6]
                  //  }
                }
            ]
      
        });

        },
        error: function(data) {
            console.log(data.responseText);
            console.log('<div class="text-center">error '+data+'here</div>');
        },
        /* beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
        },*/
        complete: function() {
            console.log('<div class="text-center">Compelete here</div>');
        }
    });
}

$(document).ready(function() {


    console.log("reda");
    loadAllUser();
  
//$('#myTable').DataTable();
$('#btn_save_user').click(function() {
		
		 var fname = $('#user_fname').val();
		 var mname = $('#user_mname').val();
		 var lname = $('#user_lname').val();
		 var email_id = $('#user_email_id').val();
		 var mob_no = $('#user_mob_no').val();
		
	
 var userobject = {	id : 0,
		fname : fname,
		mname : mname,
		lname : lname,
		email_id : email_id,
		mob_no : mob_no,
		isdelete : 0,
		col_1 : '',
		col_2 : '',
		col_3 : ''}
        console.log(userobject);
            $.ajax({
                url: "../php/user.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    "tbl_user_name": JSON.stringify(userobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#user_id').val('');
	
		$('#user_email_id').val('');
		$('#user_mob_no').val('');
		$('#user_isdelete').val('');
		$('#user_col_1').val('');
		$('#user_col_2').val('');
		$('#user_col_3').val('');
		$('#user_primary').val('');
                   
    
                },
                error: function(data) {
                    console.log('<div class="text-center">error '+data.responseText+'here</div>');
                },
                /* beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Basic " + btoa(+_AUTH_USERNAME_ + ":" + _AUTH_PASSWORD_));
                },*/
                complete: function() {
                    console.log('<div class="text-center">Compelete here</div>');
                }
            });
        }); // add close
$('#btn_update_user').click(function() {
		 var id = $('#user_id').val();
		 var fname = $('#user_fname').val();
		 var mname = $('#user_mname').val();
		 var lname = $('#user_lname').val();
		 var email_id = $('#user_email_id').val();
		 var mob_no = $('#user_mob_no').val();
		 var isdelete = $('#user_isdelete').val();
		 var col_1 = $('#user_col_1').val();
		 var col_2 = $('#user_col_2').val();
		 var col_3 = $('#user_col_3').val();
		 var primary = $('#user_primary').val();		
 var userobject = {
		id : id,
		fname : fname,
		mname : mname,
		lname : lname,
		email_id : email_id,
		mob_no : mob_no,
		isdelete : isdelete,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3,
		primary : primary}
            $.ajax({
                url: "../php/ user.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    user: JSON.stringify(userobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#user_id').val('');
		$('#user_fname').val('');
		$('#user_mname').val('');
		$('#user_lname').val('');
		$('#user_email_id').val('');
		$('#user_mob_no').val('');
		$('#user_isdelete').val('');
		$('#user_col_1').val('');
		$('#user_col_2').val('');
		$('#user_col_3').val('');
		$('#user_primary').val('');
                   
    
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
$('#btn_delete_user').click(function() {
		 
        }); 
$('#btn_load_user').click(function() { var id = $('#user_primary').val(); var userobject = {id : id}
            $.ajax({
                url: "../php/user.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    user: JSON.stringify(userobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#user_id').val(data.id);$('#user_fname').val(data.fname);$('#user_mname').val(data.mname);$('#user_lname').val(data.lname);$('#user_email_id').val(data.email_id);$('#user_mob_no').val(data.mob_no);$('#user_isdelete').val(data.isdelete);$('#user_col_1').val(data.col_1);$('#user_col_2').val(data.col_2);$('#user_col_3').val(data.col_3);$('#user_primary').val(data.primary);
                   
    
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
        });$('#btn_loadall_user').click(function() { loadAllUser();
     
    });
        
    
    }); // document ready close