$(function(){
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(ME)|(DEX)|(CES)|(DCES)|(EX)|(CE)|(DEE)|(DME))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll no");
			this.value="";
			$(this).focus();

		}
	});
   $('#sname').on('keypress',function(e){
    if(/[^a-zA-Z ]/.test(e.key)){
    	alert("Invalid Name . Only alphabets and spaces allowed");
    	this.value="";
    	$(this).focus();
    	return false;
    }
   });
   $('semail').on('blur',function(e)){
   	if(((\w*\d_?.?){1}@(\w*\d*\w*){1}.(\w*\d*\w*){1}).test(e.key)){
   		alert("Invalid email only characters a-zA-Z0-9 @ . _are allowed");
   		$(this).focus();
   		return false;
   	
  }
});






