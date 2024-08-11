<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\CourseModel;
use App\Models\Materi;
class sufardiWeb extends BaseController
{
    public function beranda() 
    {
        $kModel = new \App\Models\EventModel();
    
        // Ambil semua kursus
        $courses = $kModel->getLimitedCourses(3);
        
        // Tambahkan jumlah materi untuk setiap kursus
        foreach ($courses as &$course) {
            $course['materi_count'] = $kModel->getMateriCount($course['id']);
        }
        
        $data['beranda'] = $courses;
        echo view('/layout/kepala', $data);
        echo view('index');
        echo view('/layout/kaki');
    }
    public function login() 
    {
        $data = [
            'title' => 'tlogin'
        ];

        echo view('/layout/kepala', $data);
        echo view('login');
        echo view('/layout/kaki');
    }

    public function features() //: string
    {
        $kModel = new \App\Models\EventModel();
    
        // Ambil semua kursus
        $courses = $kModel->findAll();
        
        // Tambahkan jumlah materi untuk setiap kursus
        foreach ($courses as &$course) {
            $course['materi_count'] = $kModel->getMateriCount($course['id']);
        }
        
        $data['beranda'] = $courses;
        echo view('/layout/kepala', $data);
        echo view('features');
        echo view('/layout/kaki');
    }

    public function lihatmateri($course_id)
    {
        $materiModel = new \App\Models\MateriModel();
        $mm = new \App\Models\EventModel();
        $course = $mm->find($course_id);
        $data['materi'] = $materiModel->where('course_id', $course_id)->findAll();
        $data['course'] = $course; // Pass course details to the view if needed
        $data['course_id'] = $course_id;
        // echo view('layout/kepala');
        echo view('layout/sidebar', $data);
        echo view('lihatMateri', $data);
    }
    public function dashboard() //: string
{
    $xx = new \App\Models\EventModel();

    $hasil = $xx->findAll();
    $data = [
        'title' => 'tdashboard',
        'pengunjung' => 'Sufardi',
        'event' => $hasil
    ];
    echo view('layout/kepala');
    echo view('dashboard', $data);

    echo view('dashboard/ModalHapusKursus');
    echo view('dashboard/ModalEditKursus');
    echo view('dashboard/TambahKursus');
}

public function tambahCourse()
{
    $xx =new \App\Models\EventModel();
    $EventModel = $xx->save([
        'tanggal' => $this->request->getVar('tanggal'),
        'judul' => $this->request->getVar('judul'),
        'deskripsi' => $this->request->getVar('deskripsi'),
        'durasi' => $this->request->getVar('durasi')
    ]);
    return redirect()->to('/dashboard');

}
public function tambahMateri()
{

    // dd($this->request->getVar());
    $xx =new \App\Models\MateriModel();

    $EventModel = $xx->save([
        'course_id'=>$this->request->getVar('course_id'),
        'tanggal' => $this->request->getVar('tanggal'),
        'judul_materi' => $this->request->getVar('judul'),
        'deskripsi_materi' => $this->request->getVar('deskripsi'),
        'link_materi' => $this->request->getVar('link')
    ]);
    return redirect()->to('/materi');
}
public function editCourse($id)
{
    $xx =new \App\Models\EventModel();
    $EventModel = $xx->save([
        'id' => $id,
        'tanggal' => $this->request->getVar('tanggal'),
        'judul' => $this->request->getVar('judul'),
        'deskripsi' => $this->request->getVar('deskripsi'),
        'durasi' => $this->request->getVar('durasi')
    ]);
    return redirect()->to('/dashboard');
}


public function showMateri($course_id)
    {
        $materiModel = new \App\Models\MateriModel();
        $mm = new \App\Models\EventModel();
        $course = $mm->find($course_id);
        $data['materi'] = $materiModel->where('course_id', $course_id)->findAll();
        $data['course'] = $course; // Pass course details to the view if needed
        $data['course_id'] = $course_id;
        echo view('layout/kepala');
        echo view('materi', $data);
        echo view('dashboard/ModalEditMateri');
        echo view('dashboard/ModalHapusMateri');
        echo view('dashboard/TambahMateri');

    }
public function editMateri($id)
{
    $xx =new \App\Models\MateriModel();

    $EventModel = $xx->save([
        'id' => $id,
        'course_id'=>$this->request->getVar('course_id'),
        'tanggal' => $this->request->getVar('tanggal'),
        'judul_materi' => $this->request->getVar('judul'),
        'deskripsi_materi' => $this->request->getVar('deskripsi'),
        'link_materi' => $this->request->getVar('link')
    ]);
    return redirect()->to('/dashboard');
}
    public function deleteCourse($id)
    {
        $m= new \App\Models\EventModel();
        $delete=$m->delete($id);

        return redirect()->to('/dashboard');
    }
    public function deleteMateri($id)
    {
        $m= new \App\Models\MateriModel();
        $delete=$m->delete($id);

        return redirect()->to('/dashboard');
    }
}
