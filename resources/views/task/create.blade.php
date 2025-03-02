@extends('layout')

@section('content')

<h1>To-Do List Sederhana</h1>

    <form action="{{ route('task.store') }}" method="POST" class="todo-form">
        @csrf
        <div>
            <label for="">Nama</label>
            <input type="text" class="input">
        </div>

        <div>
            <label for="">Status</label>
            <select name="" id="" class="input">
                <option value="">---</option>
                <option value="selesai">Selesai</option>
                <option value="belum selesai">Belum Selesai</option>
            </select>
        </div>

        <div>
            <label for="">Prioritas</label>
            <select name="" id="" class="input">
                <option value="">---</option>
                <option value="urgent">Urgent</option>
                <option value="selesai hari ini">Selesai Hari Ini</option>
                <option value="tidak wajib">tidak wajib</option>
            </select>
        </div>

        <div>
            <label for="tanggal">tanggal</label>
            <input type="date" class="input" value="tanggal">
        </div>

        <div class="task-actions">
            <button type="submit" class="complete-btn">Selesai</button>
            <a href="{{ route('task.index') }}" class="delete-btn">Cancel</a>
        </div>
            
    </form>
@endsection