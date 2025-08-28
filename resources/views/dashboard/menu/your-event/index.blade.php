@extends('components.layout')

@section('content')
    <style>
        #imageCropPreview {
            max-width: 100%;
            display: none;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
    </style>

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="forAlert">
            @if(session('success'))
                <div class="alert alert-success alert-icon" role="alert">
                    <div class="d-flex align-items-center">
                        <div
                            class="avatar-sm rounded bg-success d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                            <i class="bx bx-check-shield text-white"></i>
                        </div>
                        <div class="flex-grow-1">
                            Berhasil !! {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close px-2" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
        <div class="col" data-aos="fade-up" data-aos-duration="1000">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between gap-3">
                        <div class="search-bar">
                            <span><i class="bx bx-search-alt"></i></span>
                            <input type="search" class="form-control" id="search" placeholder="Cari" />
                        </div>
                    <div>
                        <a href="{{ route('your-event.create') }}" class="btn btn-success">Buat Acara Kamu</a>
                    </div>
                    </div>
                </div>
                <div>
                    <div class="table-responsive table-centered">
                        <table class="table text-nowrap mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="border-0 py-2">No</th>
                                    <th class="border-0 py-2">Nama Acara</th>
                                    <th class="border-0 py-2">Tanggal</th>
                                    <th class="border-0 py-2">Nama Lokasi</th>
                                    <th class="border-0 py-2">Status</th>
                                    <th class="border-0 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $index => $event)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->from_date->format('d M Y') }}@if($event->to_date) - {{ $event->to_date->format('d M Y') }}@endif</td>
                                    <td>{{ $event->name_location }}</td>
                                    <td>
                                        <span class="badge bg-{{ $event->status == 'active' ? 'success' : 'secondary' }}">
                                            {{ $event->status == 'active' ? 'Aktif' : 'Tidak Aktif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('your-event.edit', $event->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('your-event.destroy', $event->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus acara ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if($events->isEmpty())
                    <div class="text-center py-4">
                        <p class="text-muted">Belum ada acara yang dibuat.</p>
                        <a href="{{ route('your-event.create') }}" class="btn btn-success">Buat Acara Pertama</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
