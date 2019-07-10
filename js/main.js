$(document).ready(function(){

	$("#form_one").submit(function( event ) {
		event.preventDefault();

    // collect form data

		var fName = $("#fName").val();
		var lName = $("#lName").val();
		var email = $("#email").val();
		var phonNumber = $("#phoneNumber").val();
		var companyName = $("#companyName").val();
		var productQuality = $("#productQuality").val();
		var productQuantity = $("#productQuantity").val();
		var baseMetals      = $("#baseMetal").is(':checked') ? 'Base Metals' : ' ';
		var carbonSteelSelct = $("#carbonSteelSelct").val();
		var carbonSteel     =  $("#carbonSteel").is(':checked') ? carbonSteelSelct : ' ';
		var structuralSections = $("#structuralSections").is(':checked') ? 'Structural Sections' : ' ';
		var northAmericaCanadaSelct = $("#northAmericaCanadaSelct").val();
		var northAmericaCanada = $("#northAmericaCanada").is(':checked') ? northAmericaCanadaSelct : ' ';
		var northAmericaUnitedStatesSelct = $("#northAmericaUnitedStatesSelct").val();
		var northAmericaUnitedStates = $("#northAmericaUnitedStates").is(':checked') ? northAmericaUnitedStatesSelct : ' ';
		var mexico = $("#mexico").is(':checked') ? 'Mexico' : ' ';
		var centralAmerica = $("#centralAmerica").is(':checked') ? 'Central America' : ' ';
		var asiaSelct = $("#asiaSelct").val();
		var asia = $("#asia").is(':checked') ? asiaSelct : ' ';
		var comments = $("#comments").val();

		// store the form data as a object

		var formData = {
            'fName'                    : fName,
            'lName'                    : lName,
            'email'                    : email,
						'phonNumber'               : phonNumber,
						'companyName'              : companyName,
						'productQuality'           : productQuality,
						'productQuantity'          : productQuantity,
						'baseMetals'               : baseMetals,
						'carbonSteel'              : carbonSteel,
						'structuralSections'       : structuralSections,
						'northAmericaCanada'       : northAmericaCanada,
						'northAmericaUnitedStates' : northAmericaUnitedStates,
						'mexico'                   : mexico,
						'centralAmerica'           : centralAmerica,
						'asia'                     : asia,
						'comments'                 : comments
            };

			// send the form data to php file
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'form_submit.php', // the url where we want to POST
            data        : formData, // our data object

        }).done(function(data) {
					if($.trim(data) == "ok"){
						swal("Your Registration has been completed Successfully", "", "success").then(okay => {
					if (okay) {
							window.location.href = "index.php";
					}
			});

				}else{

						swal("Something Wrong", "Please Resubmit the Form", "error").then(okay => {
					if (okay) {
							window.location.href = "index.php";
					}
			});
				};

        });


	});

		 //data filtering start here

		 $('.checked_value').on('change',function(){

			 if(this.checked){
				var action = "data";
	 			var product = get_filter_text('product');
	 			var region = get_filter_text('region');

	 			$.ajax({
	 				url: 'action.php',
	 				method: 'POST',
	 				data: {action: action, product: product, region: region},
	 				success: function(response){
	 					$('#result').html(response);
						$('#myTable2').DataTable({
                      "destroy": true, //use for reinitialize datatable
                   });
						abs();
						bulkSms()
	 				}
	 			});
			}else{
				window.location.href = 'send-mail.php';
			}





		 });

		 function get_filter_text(id){
			 var filterData = [];

			 $('#'+id+':checked').each(function(){
				 filterData.push($(this).val());
			 });

			 return filterData;
		 }

		 //call data dataTables
	 	$('#myTable').DataTable({
	         scrollX:        true,
	         scrollCollapse: true,
	         autoWidth:         true,
	          paging:         true,
	         columnDefs: [
	         { "width": "80px", "targets": [0,1,2,] },
	 				{ "width": "130px", "targets": [3,4,5,6,7,8,9,13] },
	         { "width": "220px", "targets": [10,11] }
	       ]
	     } );

	 		$('#myTable2').DataTable({
	 	        scrollX:        true,
	 	        scrollCollapse: true,
	 	        autoWidth:         true,
	 	         paging:         true,
	 	        columnDefs: [
	 	        { "width": "120px", "targets": [0,1,2,3] },

	 	      ]
	 	    });

function abs(){
	//select all checkbox

	$('#select_all').on('click',function(){
					if(this.checked){
							$('.checkbox').each(function(){
									this.checked = true;
							});
					}else{
							 $('.checkbox').each(function(){
									this.checked = false;
							});
					}
			});

			$('.checkbox').on('click',function(){
					if($('.checkbox:checked').length == $('.checkbox').length){
							$('#select_all').prop('checked',true);
					}else{
							$('#select_all').prop('checked',false);
					}
			});

		 //==========================
}
		 abs();


		 // send mail page activity

function bulkSms(){
	$("#send_mail_a").on('click',function(e){
		//e.preventDefault();
		var email_data = [];
		var emailFrom = $("#emailFrom").val();
		var emailBody = $('#emailBody').val();
		var emailSubject = $('#emailSubject').val();

		$(".checkbox").each(function(){

			email_data.push($(this).data("mail"));

		});

	 var data = {
		 'email_data'   : email_data,
		 'emailFrom'    : emailFrom,
		 'emailBody'    : emailBody,
		 'emailSubject' : emailSubject
	 };

	 $.ajax({
				 type: "POST",
				 url: "template.php",
				 data: data,
				 success: function(data){
					 if(data == 'ok'){
						 alert('x');
					 }else{
						 alert('y');
					 }
						 }
			 });

	});
}

bulkSms();


});
