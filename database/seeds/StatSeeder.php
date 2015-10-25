<?php
use App\Status as Statusesk;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statusesk::create( [
            'status' => 'Complete' ,

        ] );
        Statusesk::create( [
            'status' => 'Unfinished' ,

        ] );
    }
}
