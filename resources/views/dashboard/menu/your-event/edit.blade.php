@extends('components.layout')

@section('content')
<div class="row">
    <div class="col" data-aos="fade-up" data-aos-duration="1000">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Acara</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('your-event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="image" class="form-label">Gambar Acara</label>
                            
                            @if($event->image_path)
                                <div class="mb-3">
                                    <img src="{{ $event->getImageUrl() }}" alt="Gambar Acara" class="img-fluid rounded" style="max-height: 200px;">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" name="remove_image" id="remove_image" value="1">
                                        <label class="form-check-label text-danger" for="remove_image">
                                            Hapus gambar saat ini
                                        </label>
                                    </div>
                                </div>
                            @endif
                            
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
                                   placeholder="Masukkan nama acara" value="{{ old('title', $event->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="from_date" class="form-label">Tanggal Mulai <span class="text-danger">*</span></label>
                            <input type="date" id="from_date" name="from_date" class="form-control @error('from_date') is-invalid @enderror" 
                                   value="{{ old('from_date', $event->from_date->format('Y-m-d')) }}" required>
                            @error('from_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="to_date" class="form-label">Tanggal Selesai</label>
                            <input type="date" id="to_date" name="to_date" class="form-control @error('to_date') is-invalid @enderror" 
                                   value="{{ old('to_date', $event->to_date ? $event->to_date->format('Y-m-d') : '') }}">
                            @error('to_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name_location" class="form-label">Nama Lokasi <span class="text-danger">*</span></label>
                            <input type="text" id="name_location" name="name_location" class="form-control @error('name_location') is-invalid @enderror" 
                                   placeholder="Masukkan nama lokasi" value="{{ old('name_location', $event->name_location) }}" required>
                            @error('name_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="link_location" class="form-label">Link Lokasi <span class="text-danger">*</span></label>
                            <input type="url" id="link_location" name="link_location" class="form-control @error('link_location') is-invalid @enderror" 
                                   placeholder="https://maps.google.com/..." value="{{ old('link_location', $event->link_location) }}" required>
                            @error('link_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Tipe Acara <span class="text-danger">*</span></label>
                            <select id="type" name="type" class="form-select @error('type') is-invalid @enderror" required>
                                <option value="">Pilih tipe acara</option>
                                <option value="online" {{ old('type', $event->type) == 'online' ? 'selected' : '' }}>Online</option>
                                <option value="offline" {{ old('type', $event->type) == 'offline' ? 'selected' : '' }}>Offline</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mode" class="form-label">Mode Acara <span class="text-danger">*</span></label>
                            <select id="mode" name="mode" class="form-select @error('mode') is-invalid @enderror" required>
                                <option value="">Pilih mode acara</option>
                                <option value="free" {{ old('mode', $event->mode) == 'free' ? 'selected' : '' }}>Gratis</option>
                                <option value="paid" {{ old('mode', $event->mode) == 'paid' ? 'selected' : '' }}>Berbayar</option>
                            </select>
                            @error('mode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="">Pilih status</option>
                                <option value="active" {{ old('status', $event->status) == 'active' ? 'selected' : '' }}>Aktif</option>
                                <option value="inactive" {{ old('status', $event->status) == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="coupon_code" class="form-label">Kode Kupon</label>
                            <input type="text" id="coupon_code" name="coupon_code" class="form-control @error('coupon_code') is-invalid @enderror" 
                                   placeholder="Masukkan kode kupon (opsional)" value="{{ old('coupon_code', $event->coupon_code) }}">
                            @error('coupon_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Deskripsi Acara <span class="text-danger">*</span></label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" 
                                      rows="4" placeholder="Deskripsikan acara secara detail..." required>{{ old('description', $event->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Perbarui Acara</button>
                            <a href="{{ route('your-event') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
