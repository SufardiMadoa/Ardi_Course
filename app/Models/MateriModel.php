<?php
namespace App\Models;
use CodeIgniter\Model;
class MateriModel extends Model
{
// ...
protected $table = 'materi';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;


protected $protectFields = false;
    protected $allowedFields = ['course_id', 'judul_materi', 'deskripsi_materi', 'link_materi'];

    public function countByCourse($course_id)
    {
        return $this->where('course_id', $course_id)->countAllResults();
    }
}

