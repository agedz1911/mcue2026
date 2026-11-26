<?php

use App\Livewire\Section\Flyer;
use Illuminate\Support\Facades\DB;
use Livewire\Livewire;

it('displays active flyers in id order', function () {
    config([
        'database.default' => 'sqlite',
        'database.connections.sqlite.database' => ':memory:',
    ]);
    DB::purge('sqlite');

    $migration = require database_path('migrations/2025_07_16_033726_create_flyers_table.php');
    $migration->up();

    DB::table('flyers')->insert([
        ['id' => 3, 'image' => 'third.jpg', 'is_active' => true],
        ['id' => 2, 'image' => 'inactive.jpg', 'is_active' => false],
        ['id' => 1, 'image' => 'first.jpg', 'is_active' => true],
    ]);

    Livewire::test(Flyer::class)
        ->assertViewHas('flyers', fn ($flyers) => $flyers->pluck('id')->all() === [1, 3]);
});
