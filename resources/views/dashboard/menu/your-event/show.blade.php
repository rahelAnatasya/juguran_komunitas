@extends('components.layout')

@section('content')
<div class="row">
    <div class="col" data-aos="fade-up" data-aos-duration="1000">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Detail Acara</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @if($event->image_path)
                    <div class="col-12 mb-4">
                        <div class="text-center">
                            <img src="{{ $event->getImageUrl() }}" alt="Gambar Acara" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                    </div>
                    @endif

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Nama Acara</label>
                        <p class="form-control-plaintext">{{ $event->title }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tanggal Mulai</label>
                        <p class="form-control-plaintext">{{ $event->from_date->format('d M Y') }}</p>
                    </div>

                    @if($event->to_date)
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tanggal Selesai</label>
                        <p class="form-control-plaintext">{{ $event->to_date->format('d M Y') }}</p>
                    </div>
                    @endif

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Nama Lokasi</label>
                        <p class="form-control-plaintext">{{ $event->name_location }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Link Lokasi</label>
                        <p class="form-control-plaintext">
                            <a href="{{ $event->link_location }}" target="_blank" class="text-primary">
                                {{ $event->link_location }}
                            </a>
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tipe Acara</label>
                        <p class="form-control-plaintext">
                            <span class="badge bg-{{ $event->type == 'online' ? 'info' : 'warning' }}">
                                {{ $event->type == 'online' ? 'Online' : 'Offline' }}
                            </span>
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Mode Acara</label>
                        <p class="form-control-plaintext">
                            <span class="badge bg-{{ $event->mode == 'free' ? 'success' : 'primary' }}">
                                {{ $event->mode == 'free' ? 'Gratis' : 'Berbayar' }}
                            </span>
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <p class="form-control-plaintext">
                            <span class="badge bg-{{ $event->status == 'active' ? 'success' : 'secondary' }}">
                                {{ $event->status == 'active' ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </p>
                    </div>

                    @if($event->coupon_code)
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Kode Kupon</label>
                        <p class="form-control-plaintext">{{ $event->coupon_code }}</p>
                    </div>
                    @endif

                    <div class="col-12 mb-3">
                        <label class="form-label fw-semibold">Deskripsi Acara</label>
                        <div class="border rounded p-3 bg-light">
                            {!! nl2br(e($event->description)) !!}
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex gap-2">
                            @can('update', $event)
                            <a href="{{ route('your-event.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                            @endcan
                            <a href="{{ route('your-event') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection