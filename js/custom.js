$("#menu").click(function(){
	$("#menu_list").toggleClass("mobile_hidden").toggleClass("mobile_show");
});

if($("#DNI").val() != ""){
	$("#DNI_label").css("top", "0");
	$("#DNI").css("border-bottom", "2px solid #000");
}
$("#DNI").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});

$("#DNI").focus(function(){
	$("#DNI_label").css("top", "0");
	$("#DNI").css("border-bottom", "2px solid #000");
});
$("#DNI").focusout(function(){
	if($("#DNI").val() == ""){
		$("#DNI_label").css("top", "20");
		$("#DNI").css("border-bottom", "1px solid #ddd");
	}
});
$("#DNI").keyup(function(){
	if($("#DNI").val().length == 8){
		$("#DNI_button").css("opacity", "1");
		$("#DNI_button").css("cursor", "pointer");
	}
	else {
		$("#DNI_button").css("opacity", ".7");
		$("#DNI_button").css("cursor", "not-allowed");
	}
});
$(".checkbox").click(function(){
	$(this).toggleClass("checked").toggleClass("nonchecked");
});
$(".checkbox_label").click(function(){
	$(".checkbox").toggleClass("checked").toggleClass("nonchecked");
});


$("#Clave").focus(function(){
	$("#Clave_label").css("top", "0");
	$("#Clave").css("border-bottom", "2px solid #000");
});
$("#Clave").focusout(function(){
	if($("#Clave").val() == ""){
		$("#Clave_label").css("top", "20");
		$("#Clave").css("border-bottom", "1px solid #ddd");
	}
});
$("#Clave").keyup(function(){
	if($("#Clave").val().length > 3){
		$("#Clave_button").css("opacity", "1");
		$("#Clave_button").css("cursor", "pointer");
	}
	else {
		$("#Clave_button").css("opacity", ".7");
		$("#Clave_button").css("cursor", "not-allowed");
	}
});