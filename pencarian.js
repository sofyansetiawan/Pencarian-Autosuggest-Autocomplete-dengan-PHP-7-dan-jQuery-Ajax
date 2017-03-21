$(document).ready(function() {
	 $("#input_pencarian").blur(function(){
	   $('#box_pencarian').fadeOut();
	 });
});

function cari(inputan) {
  if(inputan.length == 0) {
	$('#box_pencarian').fadeOut();
  } 
  else {
	$.post("pencarian.php", {dicari: ""+inputan+""}, function(data) {
		$('#box_pencarian').fadeIn(); 
		$('#box_pencarian').html(data);
	});
  }
}