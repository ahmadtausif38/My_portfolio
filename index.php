<?php 
include('header.php');
?>
<!-- header ends -->
					<div style="text-align: center;">
					<?php
						if(isset($_REQUEST['data'])){
							$page=$_REQUEST['data'].".php";
							include($page);
						}
						else{
							include('content.php');
						}
					?>

				</div>
				
		</div>
		
	</div>
</div>
<!-- footer starts -->
<?php 
include('footer.php');
?>

</body>

</html>