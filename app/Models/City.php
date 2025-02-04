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
 * @property int $district_id
 * @property string $name_en
 * @property string|null $name_si
 * @property string|null $name_ta
 * @property string|null $sub_name_en
 * @property string|null $sub_name_si
 * @property string|null $sub_name_ta
 * @property string|null $postcode
 * @property string|null $latitude
 * @property string|null $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\District $district
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereNameSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereNameTa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereSubNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereSubNameSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereSubNameTa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    protected $fillable = [
        'district_id',
        'name_en',
        'name_si',
        'name_ta',
        'sub_name_en',
        'sub_name_si',
        'sub_name_ta',
        'postcode',
        'latitude',
        'longitude'
    ];

    // Relationships

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
