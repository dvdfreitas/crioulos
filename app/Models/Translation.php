<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    public function source()
    {
        return $this->belongsTo(Word::class, 'source_id');
    }

    public function target()
    {
        return $this->belongsTo(Word::class, 'target_id');
    }
}
