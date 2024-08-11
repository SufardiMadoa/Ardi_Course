<?php
namespace App\Models;
use CodeIgniter\Model;
class EventModel extends Model
{
// ...
protected $table = 'kegiatan';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;


protected $protectFields = false;
protected $allowedFields = [
    'tanggal',
    'judul',
    'deskripsi',
    'durasi'
];

public function getMateriCount($course_id)
{
    $materiModel = new \App\Models\MateriModel();
    return $materiModel->countByCourse($course_id);
}
public function getLimitedCourses($limit = 3)
    {
        return $this->limit($limit)->findAll();
    }
}


