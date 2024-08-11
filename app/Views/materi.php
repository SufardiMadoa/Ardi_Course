<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.semanticui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.semanticui.css">

    <link rel="stylesheet" href="{{asset('src/css/contentDasboard.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .column-table th{
            background-color: #480785;
    color:white;
    
    }
    .dt-search {
    display:hidden;

}
    </style>
</head>
<body>
<!--Main Navigation-->
<!--Main layout-->
<main style="margin-top: 58px; mx-2">
  <div class="container pt-4 mx-2">
  <h4 class="my-4">Data Materi </div>
  <div class="col-sm-12 col-md-12">
        <div class="head-right d-flex align-items-start justify-content-between flex-row flex-md-row">
          
    </div>
</div>
<div class="container pt-4 mx-2 table-responsive my-3">
<div class="text-end check-button">
          <a
            href="#"
            class="custom-button-2 rounded-3 px-4 fw-medium text-decoration-none"
            data-bs-toggle="modal" data-bs-target="#modalTambah" data-course-id="<?= $course_id; ?>">
            Tambah Kursus</a
          >
        </div>    


    <table id="example" class="table table-striped table-hover dt-responsive" style="width:100%">
        <thead>
            <tr class="column-table">

                <th >Tanggal</th>
                <th >Judul</th>
                <th >Deskripsi</th>
                <th >Link</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($materi as $m) : ?>
            <tr>

                <td ><?= $m['tanggal']; ?></td>
                <td><?= $m['judul_materi']; ?></td>
                <td><?= $m['deskripsi_materi']; ?></td>
                <td>
                <a href="<?= $m['link_materi']; ?>" ><?= $m['link_materi']; ?></a>
                </td>
                <td >
                    <div class=" dropstart">
                        <button type="button border-0" class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm ">
                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal<?= $m['id']; ?>">Edit</a></li>
                        <li>  <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $m['id']; ?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    

</main>

<!-- csv download -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.semanticui.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>

<script>
// dibawah ini merupakan script pada table
new DataTable('#example',{
        // scrollX: true,
        buttons: ['csv'],
    layout: {
        topStart:['buttons', 'pageLength']

    }
    });
    // Menambahkan placeholder ke dalam sel tabel menggunakan JavaScript
    var search = document.getElementById("dt-search-0");
    search.placeholder ="search";

</script>

<!-- Modal Tambah -->

</body>
</html>
<!-- application/views/dashboard/TambahKursus.php -->
 <!-- View Utama (misalnya: application/views/dashboard/data_kegiatan.php) -->