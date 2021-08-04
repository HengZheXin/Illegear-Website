<?php
class User {

    private $username;
    private $password;
    private $role;

    public function __construct($uname, $pwd, $r) {

        $this->username = $uname;
        $this->password = $pwd;
        $this->role = $r;
    }

    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getRole() { return $this->role; }


    public function setUsername($n) { $this->username = $n; }
    public function setPassword($p) { $this->password = $p; }
    public function setRole($r) { $this->role = $r; }
}
?>
