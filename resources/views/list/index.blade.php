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

                <h1 class="text-center mt-4 mb-3">To Do List</h1>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('list.create') }}" class="btn btn-primary mb-3">Tambahkan Data</a>
                </div>

              @foreach ($lists as $key => $data)
                <div class="card mb-3 ">
                  <div class="card-body">
                    <h5 class="card-title">{{ $data->nama }}
                       {{ $data->status }}
                      </h5>
                    <p class="card-text d">{{ $data->prioritas }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="card-text mb-0">{{ $data->tanggal }}</p>
                      <div class="d-flex gap-2">
                        <a href="{{ route('list.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('list.destroy', $data-> id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>