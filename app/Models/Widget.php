<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Widget extends Model
{
    use HasFactory;
    use SoftDeletes;

    const WIDGET = [
        'our advantages' => 'our advantages',
    ];
    protected $guarded = ['id'];
    protected $table = 'widgets';
}
