<?php
class User extends Model
{
    protected static $tableName = "users";
    protected static $collumns = [
        'id',
        'name',
        'password',
        'start_date',
        'end_date',
        'id_admin',
    ];
}