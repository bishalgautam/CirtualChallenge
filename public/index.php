<?php
  require_once('../private/initialize.php');
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

			 <tr>
	          <td><?php echo $result['name']; ?></td>
	          <td><?php echo $result['techinician']; ?></td>
	          <td><?php echo $result['orderdate']; ?></td>
	          <td><?php echo $result['apptype']; ?></td>
	          <td><?php echo $result['cellnumber']; ?></td>
	          <td><?php echo $result['email']; ?></td>
	          <td><?php echo $result['orderstate']; ?></td>
        	</tr>  	 
		<?php } ?>
		
  			</table>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
