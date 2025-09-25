<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ORDR extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'ORDR';

    public function whiOctgs()
    {
        return $this->belongsTo(OCTG::class,'GroupNum','GroupNum');
    }
    public function rdr1()
    {
        return $this->hasMany(RDR1::class, 'DocEntry', 'DocEntry');
    }
    public function asNew() 
    {
        return $this->hasOne(StatementOfAccount::class, 'DocNum', 'DocEntry');
    }
    public function relatedProducts()
{
    return RDR1::query()
        ->select('RDR1.*')
        ->whereIn('RDR1.DocEntry', function ($query) {
            $query->select('o2.DocEntry')
                ->from('ORDR as o1')
                ->join('ORDR as o2', 'o2.NumAtCard', '=', 'o1.NumAtCard')
                ->where('o1.DocEntry', $this->DocEntry);
        })
        ->get();
}









}
