<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = [
        'name',
        'speciality',
        'phone',
        'image'
    ];

    public function department() {
        return $this->belongsTo(Department::class, 'name', 'speciality');
    }
    

}
