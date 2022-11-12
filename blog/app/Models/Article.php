<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Article
 * @package App\Models
 * @version November 12, 2022, 10:49 pm UTC
 *
 * @property \App\Models\User $author
 * @property \Illuminate\Database\Eloquent\Collection $comments
 * @property integer $author_id
 * @property string $title
 * @property string $announce
 * @property string $content
 */
class Article extends Model
{

    public $table = 'articles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'author_id',
        'title',
        'announce',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'title' => 'string',
        'announce' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_id' => 'required',
        'title' => 'nullable|string|max:256',
        'announce' => 'nullable|string',
        'content' => 'nullable|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'article_id');
    }
}
