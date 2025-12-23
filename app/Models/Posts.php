<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'content_media',
        'published_at',
        'edited_at',
        'deleted_at',
        'user_id'
    ];

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'edited_at';
    public const DELETED_AT = 'deleted_at';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
