<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['film', 'user', 'rating', 'deskripsi', 'tanggal'];

    public function review()
    {
        return $this->belongsTo(review::class, 'review_id');
    }

}
