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
  function update_customers($orderstate) {
    global $db;

    
  }

  ?>