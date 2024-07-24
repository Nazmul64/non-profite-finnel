<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usermessages extends Model
{
    use HasFactory,SoftDeletes;
     protected $fillable = [
        'guest_name',
        'status',
        'guest_email',
        'guest_messages',
    ];
}
