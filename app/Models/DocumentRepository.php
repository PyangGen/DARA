<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentRepository extends Model
{
    use HasFactory;

    protected $primaryKey = 'document_id';

    protected $fillable = [
        'title', 'student_id', 'teacher_id', 'authors', 'citation',
        'metadata', 'file', 'status', 'approved_by', 'date_submitted',
        'date_reviewed', 'study_type', 'abandoned_date', 'recovered_date',
        'lost_date', 'archived'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}