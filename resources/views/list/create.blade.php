<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 class="text-center mt-4 mb-3">Tambahkan Data</h1>

                <form action="{{ route('list.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">---</option>
                            <option value="selesai">selesai</option>
                            <option value="belum">belum</option>
                        </select>
                       
                    </div>

                    <div class="form-group">
                        <label for="">Prioritas</label>
                        <select name="prioritas" id="" class="form-control">
                            <option value="">---</option>
                            <option value="urgent">urgent</option>
                            <option value="hari_ini">hari_ini</option>
                            <option value="tidak_wajib">tidak_wajib</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal"  class="form-control mb-4">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('list.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>