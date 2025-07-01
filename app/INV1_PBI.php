<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class INV1_PBI extends Model
{
    protected $connection = 'sqlsrv_pbi';
    protected $table = 'INV1';
    public function delivery()
    {
        return $this->belongsTo(ODLN_PBI::class, 'BaseEntry', 'DocEntry');
    }
}
