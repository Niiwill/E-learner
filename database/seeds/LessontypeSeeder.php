<?php
use App\Lessontype as Lessontype;
use Illuminate\Database\Seeder;

class LessontypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lessontype::create( [
            'name' => 'HTML' ,
            'color'=>'tile-primary',

        ] );

        Lessontype::create( [
            'name' => 'CSS' ,
            'color'=>'tile-red',

        ] );
        Lessontype::create( [
            'name' => 'Java Script' ,
            'color'=>'tile-blue',

        ] );
        Lessontype::create( [
            'name' => 'Angular JS' ,
            'color'=>'tile-aqua',
        ] );
        Lessontype::create( [
            'name' => 'PHP' ,
            'color'=>'tile-green',

        ] );
        Lessontype::create( [
            'name' => 'Laravel' ,
            'color'=>'tile-cyan',

        ] );
        Lessontype::create( [
            'name' => 'Bootstrap' ,
            'color'=>'tile-purple',
        ] );
        Lessontype::create( [
            'name' => 'Quizz' ,
            'color' => 'tile-pink' ,

        ] );
    }
}
