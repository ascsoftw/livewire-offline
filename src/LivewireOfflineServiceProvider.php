<?php

namespace Ascsoftw\LivewireOffline;

use Illuminate\Support\ServiceProvider;
use Ascsoftw\LivewireOffline\Http\Livewire\Offline;
use Livewire\Livewire;

class LivewireOfflineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('offline', Offline::class);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-offline');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/livewire-offline')
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/livewire-offline.php' => base_path('config/livewire-offline.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ .'/../config/livewire-offline.php', 'livewire-offline');
    }
}
