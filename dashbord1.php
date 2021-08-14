<?php 
require("auto_auth.php");

echo "<h1>Well come to dashbord</h1>";
?>
<a href="dashbord.php">dashbord</a>
<a href="logout.php">logout</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		setInterval(function(){
			user_auth();
		},2000);
		
		function user_auth(){
			jQuery.ajax({
				url:'auto_auth.php',
				type:'post',
				data:'type=ajax',
				success:function(result){
					if(result == 'logout'){
						window.location.href='logout.php';

					}
				}

			});
		}
	</script>