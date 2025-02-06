<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Althinect\FilamentSpatieRolesPermissions\Concerns\HasSuperAdmin;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\FilamentUser;

class User extends Authenticatable implements MustVerifyEmail, HasAvatar
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasSuperAdmin;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_url'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    // Avatar
    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->avatar_url) {
            return env('APP_URL') . '/' . $this->avatar_url;
        }
        return $this->avatar_url;
    }

    // Filament Panel Access
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    // Relationships
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Scopes
    public function scopeIsSuperAdmin($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'Super Admin');
        });
    }
    public function scopeIsCompanyAdmin($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'Company Admin');
        });
    }
    public function scopeIsCustomer($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'Customer');
        });
    }
}
