<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'message',
        'doctor_id',
        'department_id',
        'user_id',
    ];

    public function department() {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

}
