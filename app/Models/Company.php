<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Company
 * @package App\Models
 * @property int $id
 * @property string $city_id
 * @property string $name
 * @property string $description
 * @property int $status
 *
 * @property City $city
 */
class Company extends Model
{
    use HasFactory;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 10;

    public $fillable = [
        'city_id',
        'name',
        'description',
        'status',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

}
