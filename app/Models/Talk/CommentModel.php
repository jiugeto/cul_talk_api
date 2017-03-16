<?php
namespace App\Models\Talk;

class CommentModel extends BaseModel
{
    /**
     * 评论
     */

    public $table = 'comment';
    public $fillable = [
        'id','talkid','intro','uid','created_at','updated_at',
    ];
}