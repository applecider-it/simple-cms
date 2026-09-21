<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

/**
 * 投稿モデル
 * 
 * ドキュメント
 * /documents/Models/Post/Category.md
 */
class Category extends Model
{
    protected $table = 'post_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
    }

    /** 名前のバリデーション */
    public function validationName()
    {
        return [
            'required',
            'string',
            'max:255'
        ];
    }
}
