<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionHead extends Model
{
    use HasFactory;
    protected $table = 'discussion_heads';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at','discussion_head_message','discussion_head_id'];
    public function Messages()
    {
        return $this->hasMany(RelyMessage::class, 'reply_message_id', 'id');
    }
}
