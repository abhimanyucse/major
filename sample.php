<script type="text/javascript" src="js/jquery-1.11.1.min.js">
</script>
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
				alert(mess);
				}
			});
		
		});
});
</script>
<?php
session_start();
if(isset($_SESSION['cart'])){
session_unset($_SESSION['cart']);
}
include("connect.php");
$se=mysql_query("select *from products");
while($info=mysql_fetch_array($se)){
?>
<input type="button" class="mac" id="<?php echo $info['pid'];?>">
<?php
}
?>