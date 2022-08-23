<?php

namespace App\Models;

use Tonight\Data\DataBase as TonightDB;
use Config\DBConfig;

class Database extends TonightDB
{
    public function __construct(...$tables) {
        parent::__construct(
            DBConfig::DRIVER,
            DBConfig::DSN,
            DBConfig::USER,
            DBConfig::PASSWORD
        );
        $this->load(...$tables);
    }

    public static function create(...$tables) {
        return new self(...$tables);
    }

    public static function table($table) {
        $instance = new self($table);
        return $instance->{$table};
    }
}