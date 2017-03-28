<?php
  require_once('../private/initialize.php');
  $done = "Done";
  $cancelled = "Cancelled";
  $in_progress = "In Progress";
  //$order_state = array( 1 =>"Done", 2=>"Cancelled", 3=> "In Progress");
?>
<?php $page_title = 'Cirtual Coding Challenge'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<?php include(SHARED_PATH . '/public_menu.php'); ?>
<div id="main-content">

  <div id="home">
    
  		<!-- Table -->
  			<table class="table table-striped">
		  		<thead>
		  		  <tr>
			        <th>Name</th>
			        <th>Technician</th>
			        <th>Order Date</th>
			        <th>Appt. Type</th>
			        <th>Cell Number</th>
			        <th>Email</th>
			        <th>Order Status</th>
			      </tr>
			    </thead>
		    <?php 
  			//query the database
			    $records = find_all_customers();
			// populate the values from the database 
		 while($result = db_fetch_assoc($records)){ ?>

			 <tr style= "backgroud-color:red">
	          <td><?php echo $result['name']; ?></td>
	          <td><?php echo $result['techinician']; ?></td>
	          <td><?php echo $result['orderdate']; ?></td>
	          <td><?php echo $result['apptype']; ?></td>
	          <td><?php echo $result['cellnumber']; ?></td>
	          <td><?php echo $result['email']; ?></td>
	          <td > 
	          	<?php 
	          		$options = array();
	          		if(!strcmp($in_progress, $result['orderstate'])){
	          			$options[0] =  $cancelled;
	          			$options[1] =  $done;
	          		}else if(!strcmp($cancelled, $result['orderstate'])){
	          			 $options[0] =  $in_progress;
	          			 $options[1] =  $done;
	          		}else{
	          			 $options[0] =  $cancelled;
	          			 $options[1] =  $in_progress;
	          		}
	          	?>
	          	<select name="select_catalog" id="select_catalog" class="drop-down"> 
	          		<option value="<?php echo $result['orderstate']; ?>"> <?php echo $result['orderstate']; ?> </option>
	          		<option value="<?php echo $options[0];?>"> <?php echo $options[0];?> </option>
	          		<option value="<?php echo $options[1];?>"> <?php echo $options[1];?> </option>
	          </select></td>
        	</tr>  	 
		<?php } ?>

  			</table>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
