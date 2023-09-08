<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelyMessage extends Model
{
    use HasFactory;
    protected $table = 'discussion_messages';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at', 'reply_message_id', 'reply_message'];
    public function Heads()
    {
        return $this->belongsTo(DiscussionHead::class, 'id', 'discussion_head_id');
    }
}
