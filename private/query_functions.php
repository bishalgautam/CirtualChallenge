<?php

  //
  // QUERIES
  //

  // Find all customers, ordered by name
  function find_all_customers(){
    global $db;
    $sql = "SELECT * FROM customers ";
    $sql .= "ORDER BY name ASC;";
    $country_result = db_query($db, $sql);
    return $country_result;
  }

  
  // update the table for any change in the dropdown options.
  function update_customers($id, $state){
    global $db; 
    $sql = "UPDATE customers SET ";
    $sql .= "orderstate='". $state . "' ";
    $sql .= "WHERE id='". $id . "' ";
    $sql .= "LIMIT 1;";  
    $result = db_query($db, $sql);
    if($result) {
      return true;
    } else {
      // The SQL UPDATE statement failed.
      // Just show the error, not the form
      echo db_error($db);
      db_close($db);
      exit;
    }
  }

  ?>