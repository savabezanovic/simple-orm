<?php

class UserModel extends Model {

    protected static $table = 'users';

    public $fields = ["first_name", "last_name", "age"];
    
}