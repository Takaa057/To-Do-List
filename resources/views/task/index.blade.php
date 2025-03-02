@extends('layout')

@section('content')
    
<h1>To-Do List Sederhana</h1>

<!-- Form untuk menambahkan tugas -->
<form class="todo-form">
    {{-- <input type="text" id="task-input" placeholder="Masukkan tugas baru..." required>
    <button type="submit" id="add-task-btn">Tambah Tugas</button> --}}

    <a href="{{ route('task.create') }}" class="add-task-btn">Tambah Tugas</a>
    </form>
    
    <!-- Daftar tugas -->
    <ul id="task-list">
        <!-- Contoh tugas -->
        
        <li class="task-item">
            <span>Belajar HTML
            Prioritas
            Tanggal
        </span>
            <div class="task-actions">
                <button class="complete-btn">Selesai</button>
                <button class="delete-btn">Hapus</button>
            </div>
        </li>
        <li class="task-item completed">
            <span>Belajar CSS</span>
            <div class="task-actions">
                <button class="complete-btn">Selesai</button>
                <button class="delete-btn">Hapus</button>
            </div>
        </li>
    </ul>
    
    @endsection
