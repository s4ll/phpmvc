<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?=BASE_URL;?>/buku/simpanBuku" method="post">
        <div class="class-body">
           <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul">    
            </div>
           <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis">    
            </div>
           <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai">    
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>