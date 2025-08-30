<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'first_name', 'last_name', 'usn', 'password_hash', 
        'email', 'phone_number', 'role', 'profile_picture', 
        'last_login', 'is_active'
    ];

    public function documentsAsStudent()
    {
        return $this->hasMany(DocumentRepository::class, 'student_id');
    }

    public function documentsAsTeacher()
    {
        return $this->hasMany(DocumentRepository::class, 'teacher_id');
    }

    public function documentsApproved()
    {
        return $this->hasMany(DocumentRepository::class, 'approved_by');
    }
}