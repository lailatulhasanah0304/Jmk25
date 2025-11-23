<?php

namespace Jmk25\Models;

use Jmk25\Config\Database;
use Jmk25\Exception\ValidationException;

class UserModel {
  public static function conn() {
    return Database::getConnectionDB();
  } 

  public static function findUser($username) {
    $statement = self::conn()->prepare("SELECT username FROM user WHERE username = ?");
    $statement->execute([$username]);
    
    foreach ($statement as $s) {
      throw new ValidationException("Username sudah tersedia");
    }
  }
  
  public static function register($username, $password){
    $statement = self::conn()->prepare("INSERT INTO user(username, user_password) VALUES (?, ?)");
    $statement->execute([
      $username,
      md5($password)
    ]);
  }

}