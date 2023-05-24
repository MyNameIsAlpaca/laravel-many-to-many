<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'language', 'publication_date', 'link', 'type'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }
}