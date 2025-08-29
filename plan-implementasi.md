# Rencana Implementasi - Integrasi Halaman Detail Event

## Analisis Sistem Saat Ini

### Struktur Data Event
- Tabel `events` memiliki kolom: id, title, from_date, to_date, name_location, link_location, description, coupon_code, status, type, mode
- Model Event sudah memiliki method untuk mendapatkan status, format tanggal, dan URL gambar

### Routing Saat Ini
- Route homepage: `Route::get('/', [HomepageController::class, 'index'])->name('homepage');`
- Route detail: `Route::get('/detail', [HomepageController::class, 'detail'])->name('homepage.detail');`

### Controller Saat Ini
- `HomepageController::index()`: Mengambil event aktif dan menampilkan di index
- `HomepageController::detail()`: Menampilkan halaman detail tanpa parameter

## Yang Perlu Diubah

### 1. Modifikasi Route
```php
// Dari:
Route::get('/detail', [HomepageController::class, 'detail'])->name('homepage.detail');

// Menjadi:
Route::get('/detail/{event}', [HomepageController::class, 'detail'])->name('homepage.detail');
```

### 2. Update Controller
```php
public function detail(Event $event)
{
    // Validasi bahwa event aktif
    if ($event->status !== 'active') {
        abort(404);
    }

    return view('homepage.detail', [
        'title' => $event->title,
        'event' => $event
    ]);
}
```

### 3. Update View Index
```php
// Dari:
<a href="{{ route('homepage.detail') }}"

// Menjadi:
<a href="{{ route('homepage.detail', $event['id']) }}"
```

### 4. Update View Detail
Halaman detail perlu diubah untuk menggunakan data dari variabel `$event` bukan data statis.

## Data yang Akan Ditampilkan di Detail
- Judul event
- Gambar poster
- Tanggal dan waktu
- Lokasi
- Deskripsi
- Jadwal kegiatan (jika ada)
- Informasi penyelenggara

## Langkah Implementasi
1. Modifikasi route untuk menerima parameter event
2. Update controller untuk menerima dan memproses parameter
3. Update view index untuk mengirim ID event
4. Update view detail untuk menampilkan data dinamis
5. Testing fungsi yang sudah dibuat