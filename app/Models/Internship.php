<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'fname',
    //     'lname',
    //     'email',
    //     'phone',
    //     'resume',
    // ];

    protected $guarded = [

    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
