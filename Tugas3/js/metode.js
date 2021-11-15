$(document).ready(function(){

$("input[type=radio]").change(function(){
 var method = $(this).val();
 $("#form").attr("method", method); 
});

$("#submit").click(function(){ 
	var judul = $("#judul").val();
	var nama = $("#nama").val();
	
	if( judul != '' || nama !='' ){
		return true; 
	}	
	else{
		alert("Mohon Diisi...!!!!!!");
		return false;
	}
});
});