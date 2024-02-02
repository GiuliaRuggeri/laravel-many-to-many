<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie1 = new Movie();
        $movie1->title = "Via col vento";
        $movie1->description = "Una ragazza del Sud sopravvive alla guerra di Secessione e a due mariti, ma perde il solo uomo di cui era innamorata.";
        $movie1->date = Carbon::create(1951, 11, 3);
        $movie1->duration = 238;
        $movie1->poster_image = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Poster_-_Gone_With_the_Wind_01.jpg/800px-Poster_-_Gone_With_the_Wind_01.jpg";
        $movie1->type_id = 1;
        $movie1->save();

        $movie2= new Movie();
        $movie2->title = "Titanic";
        $movie2->description = "Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall'Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.";
        $movie2->date = Carbon::create(1998, 1, 16);
        $movie2->duration = 210;
        $movie2->poster_image = "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSZHKcyuoqlsdtSxgAvAfp9XyHrFDKLp-7l4OAVznw7BZViQGk0";
        $movie2->type_id = 2;
        $movie2->save();

        $movie3= new Movie();
        $movie3->title = "Chicago";
        $movie3->description = "In una prigione degli anni Venti due ragazze vengono aiutate da un avvocato senza scrupoli. Una volta libere, la loro carriera come ballerine prende il volo.";
        $movie3->date = Carbon::create(2002, 12, 27);
        $movie3->duration = 113;
        $movie3->poster_image = "https://pad.mymovies.it/filmclub/2003/01/020/locandina.jpg";
        $movie3->type_id = 3;
        $movie3->save();
    }
}
