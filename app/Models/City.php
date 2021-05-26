<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * @package App\Models
 * @property int $id
 * @property string $country_code
 * @property string $name
 */
class City extends Model
{
    use HasFactory;

    public $fillable = [
        'country_code',
        'name',
    ];
}
