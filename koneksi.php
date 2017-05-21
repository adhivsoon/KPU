<?php
/**
 *
 */
class database
{

  var $host = 'localhost';
  var $user = 'root';
  var $pass = 'smlffjakbar134';
  var $db   = 'E-Voting';

  function __construct()
  {
    $koneksi = mysql_connect($this->host, $this->user, $this->pass);
    mysql_select_db($this->db);
    }
  }

$evoting = new database();

?>
