<?php
      class DbUtil{
public static $user = "";
public static $pass = "";
public static $host = "cs4750.cs.virginia.edu"; public static $schema = "asv3ce";
public static function loginConnection() {
$db = new mysqli(DbUtil::$host, DbUtil::$user,
DbUtil::$pass, DbUtil::$schema); if($db->connect_errno) {
            echo "fail";
            $db->close();
            exit();
}
return $db; }
} ?>
