<?php
class UserModel extends Model {

    protected $_table = "user";

    public function authByEmail($email,$pass) {
        //TODO: auth
        return true;
    }
    
    public function authByName($email,$pass) {
        //TODO: auth
        return true;
    }
    
    public function isUserExistsByName($email) {
        return true;
    }

    public function isUserExistsByEmail($email) {
        return true;
    }

    public function isAdmin($id) {
        return false;
    }
}

