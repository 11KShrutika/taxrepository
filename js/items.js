$(document).ready(function() {
//$('#myTable').DataTable();
$('#btn_save_items').click(function() {
		 var id = $('#items_id').val();
		 var bill_id = $('#items_bill_id').val();
		 var particaluar = $('#items_particaluar').val();
		 var amt = $('#items_amt').val();
		 var cgst = $('#items_cgst').val();
		 var igst = $('#items_igst').val();
		 var sgst = $('#items_sgst').val();
		 var cgsta = $('#items_cgsta').val();
		 var igsta = $('#items_igsta').val();
		 var sgsta = $('#items_sgsta').val();
		 var net_amt = $('#items_net_amt').val();
		 var created_at = $('#items_created_at').val();
		 var updated_at = $('#items_updated_at').val();
		 var col_1 = $('#items_col_1').val();
		 var col_2 = $('#items_col_2').val();
		 var col_3 = $('#items_col_3').val();
		 var isdelete = $('#items_isdelete').val();
		 
 var itemsobject = {		id : id,
		bill_id : bill_id,
		particaluar : particaluar,
		amt : amt,
		cgst : cgst,
		igst : igst,
		sgst : sgst,
		cgsta : cgsta,
		igsta : igsta,
		sgsta : sgsta,
		net_amt : net_amt,
		created_at : created_at,
		updated_at : updated_at,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3,
		isdelete : isdelete}
            $.ajax({
                url: "../php/ items.php",
                type: "POST",
                data: {
                    "key":"savedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    items: JSON.stringify(itemsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#items_id').val('');
		$('#items_bill_id').val('');
		$('#items_particaluar').val('');
		$('#items_amt').val('');
		$('#items_cgst').val('');
		$('#items_igst').val('');
		$('#items_sgst').val('');
		$('#items_cgsta').val('');
		$('#items_igsta').val('');
		$('#items_sgsta').val('');
		$('#items_net_amt').val('');
		$('#items_created_at').val('');
		$('#items_updated_at').val('');
		$('#items_col_1').val('');
		$('#items_col_2').val('');
		$('#items_col_3').val('');
		$('#items_isdelete').val('');
		
                   
    
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
$('#btn_update_items').click(function() {
		 var id = $('#items_id').val();
		 var bill_id = $('#items_bill_id').val();
		 var particaluar = $('#items_particaluar').val();
		 var amt = $('#items_amt').val();
		 var cgst = $('#items_cgst').val();
		 var igst = $('#items_igst').val();
		 var sgst = $('#items_sgst').val();
		 var cgsta = $('#items_cgsta').val();
		 var igsta = $('#items_igsta').val();
		 var sgsta = $('#items_sgsta').val();
		 var net_amt = $('#items_net_amt').val();
		 var created_at = $('#items_created_at').val();
		 var updated_at = $('#items_updated_at').val();
		 var col_1 = $('#items_col_1').val();
		 var col_2 = $('#items_col_2').val();
		 var col_3 = $('#items_col_3').val();
		 var isdelete = $('#items_isdelete').val();
		 	
 var itemsobject = {
		id : id,
		bill_id : bill_id,
		particaluar : particaluar,
		amt : amt,
		cgst : cgst,
		igst : igst,
		sgst : sgst,
		cgsta : cgsta,
		igsta : igsta,
		sgsta : sgsta,
		net_amt : net_amt,
		created_at : created_at,
		updated_at : updated_at,
		col_1 : col_1,
		col_2 : col_2,
		col_3 : col_3,
		isdelete : isdelete}
            $.ajax({
                url: "../php/ items.php",
                type: "POST",
                data: {
                    "key":"updatedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    items: JSON.stringify(itemsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);
		$('#items_id').val('');
		$('#items_bill_id').val('');
		$('#items_particaluar').val('');
		$('#items_amt').val('');
		$('#items_cgst').val('');
		$('#items_igst').val('');
		$('#items_sgst').val('');
		$('#items_cgsta').val('');
		$('#items_igsta').val('');
		$('#items_sgsta').val('');
		$('#items_net_amt').val('');
		$('#items_created_at').val('');
		$('#items_updated_at').val('');
		$('#items_col_1').val('');
		$('#items_col_2').val('');
		$('#items_col_3').val('');
		$('#items_isdelete').val('');
	
                   
    
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
$('#btn_delete_items').click(function() {
		 var id = $('#items_id').val();
		 var bill_id = $('#items_bill_id').val();
		 var particaluar = $('#items_particaluar').val();
		 var amt = $('#items_amt').val();
		 var cgst = $('#items_cgst').val();
		 var igst = $('#items_igst').val();
		 var sgst = $('#items_sgst').val();
		 var cgsta = $('#items_cgsta').val();
		 var igsta = $('#items_igsta').val();
		 var sgsta = $('#items_sgsta').val();
		 var net_amt = $('#items_net_amt').val();
		 var created_at = $('#items_created_at').val();
		 var updated_at = $('#items_updated_at').val();
		 var col_1 = $('#items_col_1').val();
		 var col_2 = $('#items_col_2').val();
		 var col_3 = $('#items_col_3').val();
		 var isdelete = $('#items_isdelete').val();
	     var itemsobject = {id : id,
bill_id : bill_id,
particaluar : particaluar,
amt : amt,
cgst : cgst,
igst : igst,
sgst : sgst,
cgsta : cgsta,
igsta : igsta,
sgsta : sgsta,
net_amt : net_amt,
created_at : created_at,
updated_at : updated_at,
col_1 : col_1,
col_2 : col_2,
col_3 : col_3,
isdelete : isdelete}
            $.ajax({
                url: "/phpitems.php",
                type: "POST",
                data: {
                    "key":"deletedata",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    items: JSON.stringify(itemsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#items_id').val('');
		$('#items_bill_id').val('');
		$('#items_particaluar').val('');
		$('#items_amt').val('');
		$('#items_cgst').val('');
		$('#items_igst').val('');
		$('#items_sgst').val('');
		$('#items_cgsta').val('');
		$('#items_igsta').val('');
		$('#items_sgsta').val('');
		$('#items_net_amt').val('');
		$('#items_created_at').val('');
		$('#items_updated_at').val('');
		$('#items_col_1').val('');
		$('#items_col_2').val('');
		$('#items_col_3').val('');
		$('#items_isdelete').val('');
		
		
                   
    
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
$('#btn_load_items').click(function() {  var itemsobject = {id : id}
            $.ajax({
                url: "../php/items.php",
                type: "POST",
                data: {
                    "key":"getone",
                    "password":_AUTH_PASSWORD_,
                    "username":_AUTH_USERNAME_,
                    items: JSON.stringify(itemsobject)
                },
                dataType:"json",
                success: function(data, status, xhr) {
                    console.log(data);$('#items_id').val(data.id);$('#items_bill_id').val(data.bill_id);$('#items_particaluar').val(data.particaluar);$('#items_amt').val(data.amt);$('#items_cgst').val(data.cgst);$('#items_igst').val(data.igst);$('#items_sgst').val(data.sgst);$('#items_cgsta').val(data.cgsta);$('#items_igsta').val(data.igsta);$('#items_sgsta').val(data.sgsta);$('#items_net_amt').val(data.net_amt);$('#items_created_at').val(data.created_at);$('#items_updated_at').val(data.updated_at);$('#items_col_1').val(data.col_1);$('#items_col_2').val(data.col_2);$('#items_col_3').val(data.col_3);$('#items_isdelete').val(data.isdelete);
                   
    
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
        });$('#btn_loadall_items').click(function() { var itemsobject = {}
        $.ajax({
            url: "../php/items.php",
            type: "POST",
            data: {
                "key":"getalldata",
                "password":_AUTH_PASSWORD_,
                "username":_AUTH_USERNAME_,
             },
            dataType:"json",
            success: function(data, status, xhr) {
                console.log(data);$('#items_id').val(data.id);$('#items_bill_id').val(data.bill_id);$('#items_particaluar').val(data.particaluar);$('#items_amt').val(data.amt);$('#items_cgst').val(data.cgst);$('#items_igst').val(data.igst);$('#items_sgst').val(data.sgst);$('#items_cgsta').val(data.cgsta);$('#items_igsta').val(data.igsta);$('#items_sgsta').val(data.sgsta);$('#items_net_amt').val(data.net_amt);$('#items_created_at').val(data.created_at);$('#items_updated_at').val(data.updated_at);$('#items_col_1').val(data.col_1);$('#items_col_2').val(data.col_2);$('#items_col_3').val(data.col_3);$('#items_isdelete').val(data.isdelete);
               

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