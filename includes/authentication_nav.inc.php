<?php
function authenticateUserNav($connection, $username, $password)
{
  // Test the username and password parameters
  if (!isset($username) || !isset($password))
    return false;

  // Formulate the SQL find the user
  $query = "SELECT password FROM users WHERE user_name = '{$username}'
            AND password = '{$password}'";

  // Execute the query
  if (!$result = @ mysql_query ($query, $connection))
    showerror();

  // Is the returned result exactly one row? If so, then we have found the user
  if (mysql_num_rows($result) != 1)
    return false;
  else
    return true;
}
