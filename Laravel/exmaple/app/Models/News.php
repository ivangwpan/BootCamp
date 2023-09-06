<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = ['img_path','title','content'];
}
