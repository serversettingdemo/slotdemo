<?php

namespace Database\Seeders;

use App\Models\View;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class viewseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 150; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '1',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 130; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '2',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 145; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '3',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 95; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '4',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 156; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '5',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 142; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '6',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 138; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '7',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 113; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '8',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 120; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '9',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 128; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '10',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 136; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '11',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 110; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '12',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 111; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '13',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 109; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '14',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 102; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '15',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 100; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '16',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 99; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '17',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 97; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '18',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 97; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '19',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 95; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '20',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 94; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '21',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 92; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '20',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 90; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '21',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 87; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '22',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 86; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '23',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 80; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '24',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 86; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '25',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 79; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '26',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '27',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 58; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '28',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 55; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '29',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '30',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 58; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '31',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 58; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '32',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 56; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '33',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 54; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '34',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 53; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '35',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '36',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '37',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '38',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '39',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '40',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '41',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '42',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '43',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '44',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '45',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '46',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '47',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '48',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '49',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '50',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '51',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '52',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '53',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '54',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '55',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '56',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '57',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '58',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '59',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '60',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '61',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '62',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '63',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '64',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '65',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '66',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '67',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '68',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '69',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '70',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '71',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '72',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }
        for($i = 1; $i <= 50; $i++){
            View::create([
                'viewable_type' => 'App\Models\Gamelist',
                'viewable_id' => '73',
                'visitor' => Str::random(80),
                'collection' => null,
                'viewed_at' => now(),            
            ]);    
        }    
    }
}
