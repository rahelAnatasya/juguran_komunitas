@extends('components.layout')

@section('content')
<div class="row">
    <div class="col" data-aos="fade-up" data-aos-duration="1000">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tambah Acara Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('your-event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="image" class="form-label">Gambar Acara</label>
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"
                                   accept="image/*">
                            <div class="form-text">Format yang didukung: JPEG, PNG, JPG, GIF. Maksimal 2MB.</div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Nama Acara <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" 
                                   placeholder="Masukkan nama acara" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="from_date" class="form-label">Tanggal Mulai <span class="text-danger">*</span></label>
                            <input type="date" id="from_date" name="from_date" class="form-control @error('from_date') is-invalid @enderror" 
                                   value="{{ old('from_date') }}" required>
                            @error('from_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="to_date" class="form-label">Tanggal Selesai</label>
                            <input type="date" id="to_date" name="to_date" class="form-control @error('to_date') is-invalid @enderror" 
                                   value="{{ old('to_date') }}">
                            @error('to_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start_time" class="form-label">Waktu Mulai</label>
                            <input type="time" id="start_time" name="start_time" class="form-control @error('start_time') is-invalid @enderror"
                                   value="{{ old('start_time') }}">
                            @error('start_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="end_time" class="form-label">Waktu Selesai</label>
                            <input type="time" id="end_time" name="end_time" class="form-control @error('end_time') is-invalid @enderror"
                                   value="{{ old('end_time') }}">
                            @error('end_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name_location" class="form-label">Nama Lokasi <span class="text-danger">*</span></label>
                            <input type="text" id="name_location" name="name_location" class="form-control @error('name_location') is-invalid @enderror"
                                   placeholder="Masukkan nama lokasi" value="{{ old('name_location') }}" required>
                            @error('name_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="link_location" class="form-label">Link Lokasi <span class="text-danger">*</span></label>
                            <input type="url" id="link_location" name="link_location" class="form-control @error('link_location') is-invalid @enderror" 
                                   placeholder="https://maps.google.com/..." value="{{ old('link_location') }}" required>
                            @error('link_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Tipe Acara <span class="text-danger">*</span></label>
                            <select id="type" name="type" class="form-select @error('type') is-invalid @enderror" required>
                                <option value="">Pilih tipe acara</option>
                                <option value="online" {{ old('type') == 'online' ? 'selected' : '' }}>Online</option>
                                <option value="offline" {{ old('type') == 'offline' ? 'selected' : '' }}>Offline</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mode" class="form-label">Mode Acara <span class="text-danger">*</span></label>
                            <select id="mode" name="mode" class="form-select @error('mode') is-invalid @enderror" required>
                                <option value="">Pilih mode acara</option>
                                <option value="free" {{ old('mode') == 'free' ? 'selected' : '' }}>Gratis</option>
                                <option value="paid" {{ old('mode') == 'paid' ? 'selected' : '' }}>Berbayar</option>
                            </select>
                            @error('mode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="">Pilih status</option>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="coupon_code" class="form-label">Kode Kupon</label>
                            <input type="text" id="coupon_code" name="coupon_code" class="form-control @error('coupon_code') is-invalid @enderror" 
                                   placeholder="Masukkan kode kupon (opsional)" value="{{ old('coupon_code') }}">
                            @error('coupon_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Deskripsi Acara <span class="text-danger">*</span></label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" 
                                      rows="4" placeholder="Deskripsikan acara secara detail..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Simpan Acara</button>
                            <a href="{{ route('your-event') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
