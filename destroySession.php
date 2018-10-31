<?php 
	
	session_start();
	session_destroy();
	exit('<script>location.href = "index.html"</script>');

 ?>