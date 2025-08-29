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
                                        <td>{{ $event->from_date->format('d M Y') }}@if($event->to_date) -
                                        {{ $event->to_date->format('d M Y') }}@endif
                                        </td>
                                        <td>{{ $event->name_location }}</td>
                                        <td>
                                            <span class="badge bg-{{ $event->status == 'active' ? 'success' : 'secondary' }}">
                                                {{ $event->status == 'active' ? 'Aktif' : 'Tidak Aktif' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('your-event.show', $event->id) }}"
                                                    class="btn btn-sm btn-outline-info">Detail</a>
                                                <a href="{{ route('your-event.edit', $event->id) }}"
                                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                                <button type="button" class="btn btn-sm btn-outline-danger"
                                                    data-bs-toggle="modal" data-bs-target="#hapusEventModal"
                                                    data-event-id="{{ $event->id }}" data-event-title="{{ $event->title }}">
                                                    <span class="align-middle">Hapus</span>
                                                </button>
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

    <div class="modal fade" id="hapusEventModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="hapusEventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusEventModalLabel">Hapus Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus event "<span id="eventTitle"></span>"?</p>
                    <p class="text-danger"><small>Tindakan ini tidak dapat dibatalkan.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <form id="hapusEventForm" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusEventModal = document.getElementById('hapusEventModal');
            hapusEventModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const eventId = button.getAttribute('data-event-id');
                const eventTitle = button.getAttribute('data-event-title');

                document.getElementById('eventTitle').textContent = eventTitle;

                const form = document.getElementById('hapusEventForm');
                form.action = "{{ route('your-event.destroy', '') }}/" + eventId;
            });
        });
    </script>

@endsection