<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'LeverancierId',
        'ProductId',
        'DatumLevering',
        'Aantal',
        'DatumEerstVolgendeLevering'
    ];

    public function Leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
