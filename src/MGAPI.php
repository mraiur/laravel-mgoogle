<?php namespace MGoogleLaravel;

use MGoogle\MGoogle;
use MGoogle\Calendar;

class MGAPI{

    private $connection;
    /**
     * @return MGoogle instance if the connection is established or false if not.
     */
    public function __construct()
    {
        $this->connection = MGoogle::Init(config('mgoogle'));

        if( $this->connection->isConnected() )
        {
            return $this->connection;
        }

        return false;
    }

    public function calendar(){
        $calendar = new Calendar($this->connection->Connect());

        return $calendar;
    }
}
