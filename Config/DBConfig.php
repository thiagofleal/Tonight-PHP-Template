<?php

namespace Config;

use Tonight\Data\Driver\MySQL;
// use Tonight\Data\Driver\SQLite;

class DBConfig
{
    const DRIVER = MySQL::class;
    // const DRIVER = SQLite::class;
    const DSN = DB_DSN;
    const USER = DB_USER;
    const PASSWORD = DB_PASS;
}