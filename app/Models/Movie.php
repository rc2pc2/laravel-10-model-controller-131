<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "date",
        "nationality",
        "original_title",
        "vote"
    ];

    public function getFormattedDate(){
        $formattedDate = Carbon::create($this->date, "Europe/Rome");
        return $formattedDate;
    }
}
