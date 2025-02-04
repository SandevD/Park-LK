<?php

namespace App\Filament\Pages;

use Dotswan\FilamentLaravelPulse\Widgets\PulseExceptions;
use Dotswan\FilamentLaravelPulse\Widgets\PulseQueues;
use Dotswan\FilamentLaravelPulse\Widgets\PulseServers;
use Dotswan\FilamentLaravelPulse\Widgets\PulseSlowOutGoingRequests;
use Dotswan\FilamentLaravelPulse\Widgets\PulseSlowQueries;
use Dotswan\FilamentLaravelPulse\Widgets\PulseSlowRequests;
use Dotswan\FilamentLaravelPulse\Widgets\PulseUsage;
use Filament\Pages\Dashboard\Concerns\HasFiltersAction;

class PulseDashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersAction;

    protected static string $routePath = 'pulse-dashboard';

    protected static ?string $title = 'Pulse Dashboard';

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $navigationGroup = 'Dashboards';

    public function getColumns(): int|string|array
    {
        return 12;
    }

    public function getWidgets(): array
    {
        return [
            PulseUsage::class,
            PulseExceptions::class,
            PulseQueues::class,
            PulseServers::class,
            PulseSlowQueries::class,
            PulseSlowRequests::class,
            PulseSlowOutGoingRequests::class
        ];
    }
}
