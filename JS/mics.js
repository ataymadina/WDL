$(function(){

$("#user").on('keypress',function (e){
	var user =$(this).val();
	var dataString ='user=' + user + '&pass' + pass;

	$.ajax({
		type:'POST',
		ulr:'checkuser.php',
		data:dataString,
		cache:false,
		success: function(available){

          
           if (available== "false") {
           	$('#usererr').html('<span class="alert alert-danger">Username not available</span>');
           	}
           else{
           	$('#usererr').html('<span class="alert alert-success">Username  available</span>');
           
           }


		}
	});
});
