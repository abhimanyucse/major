<?php
$e=mysql_connect("localhost","root","");
mysql_select_db("spiritual_project",$e) or die("connection problem");
?>
<script>
$(document).ready(function() {
    $(".w3ls-cart").click(function(){
		var id=$(this).attr("id");
		var my='pid='+id;
		$.ajax({
			data:my,
			type:'post',
			url:"cart_session.php",
			success:function(mess){
				
				}
			});
		
		});
});
</script>
