<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "movies_tablez";

    public function getFormattedDate(){
        $formattedDate = Carbon::create($this->date, "Europe/Rome");
        return $formattedDate;
    }
}
