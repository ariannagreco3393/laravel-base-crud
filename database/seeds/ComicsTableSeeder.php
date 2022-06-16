<?php

use App\Comic;

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        //dd($comics);

        foreach ($comics as $comic) {
            // creazione nuova istanza di comic
            $new_comic = new Comic();

            // Popolazione delle colonne
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            // Salvare i dati nel DB
            $new_comic->save();
        }
    }
}
