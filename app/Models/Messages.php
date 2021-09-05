<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable=[
        "sender_name",
        "sender_email",
        "sender_number",
        "sender_message"
    ];
}
