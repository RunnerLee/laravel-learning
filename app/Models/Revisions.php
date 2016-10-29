<?php
/**
 * Created by PhpStorm.
 * User: runner
 * Date: 16-10-29
 * Time: 下午3:32
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Revisions extends Model
{

    protected $fillable = [
        'type',
        'field',
        'old_value',
        'new_value',
        'revisionable_type',
        'revisionable_id',
        'user_id',
    ];


    public function revisionable()
    {
        return $this->morphTo();
    }


    public function user()
    {
        return $this->belongsTo(Auth::getProvider()->getModel());
    }

}