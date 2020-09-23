<?php

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Tenant\Product::class, 5)->create();
        factory(\App\Models\Tenant\User::class, 5)->create();
    }
}
