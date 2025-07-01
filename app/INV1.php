<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class INV1 extends Model
{
    //
    protected $connection = 'sqlsrv';
    protected $table = 'INV1';

    public function oinv()
    {
        return $this->belongsTo(OINV::class, 'DocEntry', 'DocEntry');
    }
    public function delivery()
    {
        return $this->belongsTo(ODLN::class, 'BaseEntry', 'DocEntry');
    }
}
