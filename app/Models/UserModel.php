<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'm_user';        // Harus kasih tahu nama tabelnya
    protected $primaryKey = 'user_id'; // Harus kasih tahu primary key-nya
}