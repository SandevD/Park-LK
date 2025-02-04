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
 * @property int $country_id
 * @property string $name_en
 * @property string|null $name_si
 * @property string|null $name_ta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\District> $districts
 * @property-read int|null $districts_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereNameSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereNameTa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Province whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Province extends Model
{
    protected $fillable = [
        'country_id',
        'name_en',
        'name_si',
        'name_ta',
    ];

    // Relationships

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
