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

  
  // Edit a country record
  // Either returns true or an array of errors
  function update_country($country) {
    global $db;

    $errors = validate_country($country);
    if (!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE countries SET ";
    $sql .= "name='" . db_escape($db, $country['name']) . "', ";
    $sql .= "code='" . db_escape($db, $country['code']) . "' ";
    $sql .= "WHERE id='" . db_escape($db, $country['id']) . "' ";
    $sql .= "LIMIT 1;";
    // For update_country statements, $result is just true/false
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