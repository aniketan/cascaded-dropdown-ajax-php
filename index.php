<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Buffer Now | Cacaded Select Box</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<p>
<b>Countries:</b>&nbsp;<select name="countries" id="countries" >
<option value="">Please select:</option></select>&nbsp;
<b>States: </b>&nbsp;<select name="states" id="states"  >
<option value="">Please select:</option></select>&nbsp;
<b>Cities:</b>&nbsp;<select name="city" id="city" >
<option value="">Please select:</option></select>
</p>
</body>
<script>
$( document ).ready(function() {

	pupulate("countries.php",{},"countries");

	
	$('#countries').change(function () {
		 let data = {country_id : $(this).val() } ;
	
		 pupulate("states.php",data,"states");		 
	 });
	 
	 
	$('#states').change(function () {	
			
		 let data = {state_id : $(this).val() } ;
		
		 pupulate("cities.php",data,"city");	 
	 });
		 
   function pupulate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Please Select"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
</script>
</html> 