<?php

use Illuminate\Database\Seeder;

class PublishingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PublishingCompany::class, 10)->create();
    }
}
