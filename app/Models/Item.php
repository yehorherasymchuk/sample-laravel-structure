<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Item
 * @package App\Models
 * @property int $id
 * @property string $company_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $status
 *
 * @property Company $company
 */
class Item extends Model
{
    use HasFactory;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 10;

    public $fillable = [
        'company_id',
        'name',
        'description',
        'status',
        'price',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
