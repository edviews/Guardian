<?php

namespace Modules\Guardian\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Guardian\Entities\Guardian;
use Modules\Guardian\Entities\Emergency;

class GuardianDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        factory(Guardian::class, 50)->create();
        factory(Emergency::class, 50)->create();
    }
}
