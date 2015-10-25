<?php
use App\Status as Statusesk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $this->call(LessontypeSeeder::class);

        Statusesk::create( [
            'status' => 'Complete' ,

        ] );
        Statusesk::create( [
            'status' => 'Unfinished' ,

        ] );







        App\User::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => Hash::make('test')
        ]);
        App\Lesson::create([
            'id_lessontype' => 1,
            'name' => 'First lesson'
        ]);

        App\Lesson::create([
            'id_lessontype' => 1,
            'name' => 'Second lesson'
        ]);
        App\Lesson::create([
            'id_lessontype' => 2,
            'name' => 'First lesson'
        ]);
        App\Lesson::create([
            'id_lessontype' => 2,
            'name' => 'Second lesson'
        ]);
        App\Lesson::create([
            'id_lessontype' =>2,
            'name' => 'Third lesson'
        ]);
        App\Lesson::create([
            'id_lessontype' =>2,
            'name' => 'Fourth lesson'
        ]);

        App\Lesson::create([
            'id_lessontype' => 1,
            'name' => 'Third lesson'
        ]);

        $user = App\User::find(1);
        $user->lesson()->attach(1, ['status_id' => 1]); //ovako snimas relaciju
        $user->lesson()->attach(2, ['status_id' => 1]); //ovako snimas relaciju



        Model::reguard();
    }
}
