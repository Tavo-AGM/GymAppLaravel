<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\gimnasio;
use App\Models\bloques;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => Hash::make('admin'),
            'rol' => 'admin',
        ]);

        gimnasio::create([
            'nombre' => 'Gimnasio de barrio',
        ]);

        bloques::create(['nombre' => 'Entrada','icono' => 'grid',]);
        bloques::create(['nombre' => 'Tienda','icono' => 'cart',]);
        bloques::create(['nombre' => 'Inventario','icono' => 'database',]);
        bloques::create(['nombre' => 'Socios','icono' => 'users',]);
        bloques::create(['nombre' => 'Historial','icono' => 'history',]);
        bloques::create(['nombre' => 'Reportes','icono' => 'file-pdf',]);
        bloques::create(['nombre' => 'Membresias','icono' => 'credit-card',]);
    }
}
