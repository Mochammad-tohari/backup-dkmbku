<!doctype html>
<html lang="en" data-bs-theme="dark">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Murid Madrasah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  </head>

  <body>
  
    <h1 class="text-center">Edit Data Uji</h1>

        <div class="row justify-content-center">

           <!-- Menampilkan form input data-->
           <div class="col-8">
            <!-- membuat form card background-->
            <div class="card">
              <!-- membuat form card content-->
              <div class="card-body">
                <form action="/update_data_uji/{{$data_uji->id}}" method="POST" enctype="multipart/form-data">
                <!-- crsf token berfungsi untuk membuat data di laravel -->
                 @csrf
                 <div class="row">
             <!-- left column -->
             <div class="col-md-6">
               <!-- general form elements -->
               <div class="card card-primary">
                 <div class="card-header">
                   <h3 class="card-title">Edit Data Uji</h3>
                 </div>
                 <!-- /.card-header -->
                 <!-- form start -->
                 <form>
                   <div class="card-body">
     
                     <div class="form-group">
                         <label for="Kode" class="form-label">Kode</label>
                         <!-- tag php dan echo ?php disini utk membuat primary key secara otomatis menggunakan tanggal--> 
                         <?php
                             $tgl = date ('ymdGis');
                         ?>
                            <input type="text" class="form-control" placeholder=""  value="{{$data_uji->Kode}}" id="" name="Kode" readonly>
                         <div name="" class="form-text">Tidak Bisa Diubah</div>
                     </div>
     
                     <div class="form-group">
                         <label for="Nama" class="form-label">Nama</label>
                         <input type="text" class="form-control" placeholder="" id="" name="Nama" value="{{$data_uji->Nama}}">
                     </div>
                     
                     <div class="form-group">
                         <label for="Password" class="form-label">Password</label>
                         <input type="password" class="form-control" placeholder="" id="" name="Password" value="{{$data_uji->Password}}">
                     </div>
     
                     <div class="form-group">
                         <label for="Tanggal_masuk" class="form-label">Tanggal Masuk</label>
                         <input  class="form-control" type="date" id="" name="Tanggal_masuk" value="{{$data_uji->Tanggal_masuk}}"/>
                     </div>

                     <div class="form-group">
                        <label for="Status" class="form-label">Jenis Kelamin</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="" name="Status">
                        <option selected>{{$data_uji->Status }}</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak_Aktif</option>
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="Foto1" class="form-label">Foto 1</label>
                        <input  type="file" class="form-control" id="" name="Foto1" value="{{$data_uji->Foto1}}"/>
                        <div name="" class="form-text">Kosongkan input jika tidak ada foto baru yang ingin diunggah</div>
                    </div>

                    <div class="form-group">
                        <label for="Foto2" class="form-label">Foto 2</label>
                        <input  type="file" class="form-control" id="" name="Foto2" value="{{$data_uji->Foto2}}"/>
                        <div name="" class="form-text">Kosongkan input jika tidak ada foto baru yang ingin diunggah</div>
                    </div>
     
                   <!-- /.card-body -->
     
                   <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                 </form>
              </div>
             </div>
            </div>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>