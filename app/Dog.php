<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dog extends Model
{
    protected $table = 'dogs';

    protected $fillable = [
        'name', 'age', 'race_id'
    ];

    public function races()
    {
        return $this->morphToOne("App\Race", "Race");
    }

    public static function getDogs()
    {
        $dogs = DB::table('dogs')
        ->leftJoin('races', 'races.id', '=', 'dogs.race_id')
        ->leftJoin('vaccines', 'vaccines.dog_id', '=', 'dogs.id')
        ->select('dogs.*', 'races.name as race_name', 'races.description as race_description', 'vaccines.name as vaccines')
        ->get();

        dd($dogs);

        return $dogs;
    }

    public static function findDog($id)
    {
        $dogs = DB::table('races')
        ->join('dogs', 'dogs.race_id', 'races.id')
        ->select('dogs.*', 'races.name as race_name', 'races.description as race_description')->where("dogs.id", $id)
        ->first();

        return $dogs;
    }
}
