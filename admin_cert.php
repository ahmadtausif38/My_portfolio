<div>
	<h3>You are working on Certificates</h3>
	<div>
		<span><a href="admin_index.php?data=cert_view">View</a></span>
		<span><a href="admin_index.php?data=cert_add">Add</a></span>

	</div>
		<?php
			if(isset($_REQUEST['data'])){
			$page=$_REQUEST['data'].".php";
				include_once($page);
		}
		else{
			//include('admin_cert.php');
			echo "string";
		}

		?>
</div>

