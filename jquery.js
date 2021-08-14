// incluide this js file in every inside dashboard files 
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