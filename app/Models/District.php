<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 *
 *
 * @property int $id
 * @property int $province_id
 * @property string $name_en
 * @property string|null $name_si
 * @property string|null $name_ta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Province $province
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereNameSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereNameTa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|District whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class District extends Model
{
    protected $fillable = [
        'province_id',
        'name_en',
        'name_si',
        'name_ta',
    ];

    // Relationships

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
