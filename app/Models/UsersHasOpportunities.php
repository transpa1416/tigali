<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersHasOpportunities extends Model
{
    use HasFactory;

    protected $table = 'UsersHasOpportunities';

    protected $fillable = [
        'users_id',
        'examsModule_id',
        'countOpportunities',
        'isActive',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
