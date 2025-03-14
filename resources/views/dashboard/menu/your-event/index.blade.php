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
                            <button type="button" class="btn btn-success" data-bs-target="#create-event"
                                data-bs-toggle="modal"> Buat Acara Kamu</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="table-responsive table-centered">
                        <table id="attendances-table" class="table text-nowrap mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="border-0 py-2">No</th>
                                    <th class="border-0 py-2">Nama Acara</th>
                                    <th class="border-0 py-2">Tanggal</th>
                                    <th class="border-0 py-2">Nama Lokasi</th>
                                    <th class="border-0 py-2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bootcamp C++</td>
                                    <td>25 Maret 2025</td>
                                    <td>Jalan Babarsari N0.8, Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pelatihan Laravel</td>
                                    <td>31 April 2025</td>
                                    <td>Jalan Seturan N0.33, Yogyakarta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Custom Pagination -->
                    <div
                        class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                        <div class="col-sm">
                            <div class="text-muted">
                                Showing
                                <span class="fw-semibold" id="current-entries">0</span>
                                of
                                <span class="fw-semibold" id="total-entries">0</span>
                                entries
                            </div>
                        </div>
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <ul class="pagination pagination-rounded m-0" id="custom-pagination">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tambah acara --}}
    <div class="modal fade" id="create-event" aria-hidden="true" aria-labelledby="createEvent" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createEvent">Tambah Acara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="nameEvent" class="form-label">Nama Acara</label>
                                <input type="text" id="nameEvent" name="nameEvent" class="form-control"
                                    placeholder="Masukkan nama acara">
                            </div>
                            <div class="mb-3">
                                <label for="eventDate" class="form-label">Tanggal Acara</label>
                                <input type="date" id="eventDate" name="eventDate" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nameLocation" class="form-label">Alamat</label>
                                <input type="text" id="nameLocation" name="nameLocation" class="form-control"
                                    placeholder="Masukkan alamat acara">
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="coverEvent" class="form-label">Cover Acara</label>
                                    <input name="file" id="coverEvent" type="file" class="form-control">
                                    <small class="text-muted">Unggah gambar untuk cover acara (format: jpg, png)</small>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Area Crop (Awalnya disembunyikan) -->
                                <div id="cropContainer" class="text-center" style="display: none;">
                                    <img id="imageCropPreview" src="#" alt="Preview" style="max-width: 100%;">
                                </div>

                                <!-- Preview Hasil Crop -->
                                <div id="finalPreviewContainer" class="text-center" style="display: none;">
                                    <img id="finalPreview" src="#" alt="Hasil Crop" style="max-width: 100%;">
                                </div>

                                <!-- Tombol Crop dan Simpan -->
                                <div class="mt-2 mb-3 text-center">
                                    <button type="button" id="cropButton" class="btn btn-warning" style="display: none;"
                                        onclick="showCropper()">Crop Gambar</button>
                                    <button type="button" id="saveCropButton" class="btn btn-primary" style="display: none;"
                                        onclick="getCroppedImage()">Simpan</button>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tambahkan Library Cropper.js -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

        <script>
            let cropper;
            const inputFile = document.getElementById('coverEvent');
            const previewImage = document.getElementById('imageCropPreview');
            const cropContainer = document.getElementById('cropContainer');
            const finalPreviewContainer = document.getElementById('finalPreviewContainer');
            const finalPreview = document.getElementById('finalPreview');
            const cropButton = document.getElementById('cropButton');
            const saveCropButton = document.getElementById('saveCropButton');

            // Sembunyikan tombol "Crop Gambar" saat awal
            cropButton.style.display = 'none';

            // Event listener ketika file diunggah
            inputFile.addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        cropContainer.style.display = 'block';
                        finalPreviewContainer.style.display = 'none';
                        saveCropButton.style.display = 'inline-block';

                        if (cropper) {
                            cropper.destroy();
                        }
                        cropper = new Cropper(previewImage, {
                            aspectRatio: 16 / 9,
                            viewMode: 2,
                            autoCropArea: 1, // Area crop diperbesar
                            movable: true,
                            zoomable: true,
                            rotatable: true,
                            scalable: true,
                            minContainerWidth: 200, // Lebarkan area crop
                            minContainerHeight: 300
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Fungsi menampilkan cropper saat "Crop Gambar" ditekan lagi
            function showCropper() {
                cropContainer.style.display = 'block';
                finalPreviewContainer.style.display = 'none';
                cropButton.style.display = 'none';
                saveCropButton.style.display = 'inline-block';

                if (cropper) {
                    cropper.destroy();
                }
                cropper = new Cropper(previewImage, {
                    aspectRatio: 16 / 9,
                    viewMode: 2,
                    autoCropArea: 1, // Area crop diperbesar
                    movable: true,
                    zoomable: true,
                    rotatable: true,
                    scalable: true,
                    minContainerWidth: 200, // Lebarkan area crop
                    minContainerHeight: 300
                });
            }

            // Fungsi untuk mendapatkan hasil crop
            function getCroppedImage() {
                if (cropper) {
                    const croppedCanvas = cropper.getCroppedCanvas();
                    const croppedImage = croppedCanvas.toDataURL('image/jpeg');

                    // Tampilkan hasil crop saja
                    finalPreview.src = croppedImage;
                    finalPreviewContainer.style.display = 'block';
                    cropContainer.style.display = 'none';
                    cropButton.style.display = 'inline-block'; // Tombol crop muncul setelah simpan
                    saveCropButton.style.display = 'none';

                    // Kirim hasil crop ke server
                    const formData = new FormData();
                    formData.append('croppedImage', croppedImage);

                    fetch('/upload-cropped-image', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            alert('Gambar berhasil diunggah!');
                            console.log(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                } else {
                    alert('Silakan unggah dan pilih bagian gambar terlebih dahulu.');
                }
            }
        </script>


        <script type="text/javascript">
            $(function () {
                let currentPage = 1;
                const pageLength = 10; // Jumlah data per halaman

                // Inisialisasi DataTable tanpa pagination bawaan
                const table = $('#attendances-table').DataTable({
                    dom: '<"top">rt<"clear">', // Nonaktifkan paging default
                    processing: true,
                    serverSide: true,
                    paging: false, // Nonaktifkan pagination bawaan
                    ajax: {
                        url: "",
                        data: function (d) {
                            d.start = (currentPage - 1) * pageLength; // Tentukan offset berdasarkan halaman saat ini
                            d.length = pageLength; // Tentukan jumlah data per halaman
                        }
                    },
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                        { data: 'users', name: 'users' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'check_in', name: 'check_in' },
                        { data: 'check_out', name: 'check_out' },
                        { data: 'notes', name: 'notes' },
                    ],
                    drawCallback: function (settings) {
                        const pageInfo = table.page.info();
                        const totalPages = Math.ceil(pageInfo.recordsTotal / pageLength); // Hitung total halaman

                        // Perbarui custom pagination
                        updatePagination(totalPages);
                        $('#current-entries').text(`${pageInfo.start + 1}-${pageInfo.end}`);
                        $('#total-entries').text(pageInfo.recordsTotal);
                    }
                });

                // Hubungkan input search dengan DataTable
                $('#search').on('keyup', function () {
                    table.search(this.value).draw();
                });

                // Fungsi untuk memperbarui pagination custom
                function updatePagination(totalPages) {
                    let paginationHtml = '';

                    // Tombol Previous
                    paginationHtml += `
                                                            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                                                                <a href="#" class="page-link" data-page="prev">
                                                                    <i class="bx bx-left-arrow-alt"></i>
                                                                </a>
                                                            </li>
                                                        `;

                    // Logika untuk membatasi tampilan halaman
                    if (totalPages <= 5) {
                        // Tampilkan semua halaman jika totalPages <= 5
                        for (let i = 1; i <= totalPages; i++) {
                            paginationHtml += `
                                                                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                                                                        <a href="#" class="page-link" data-page="${i}">${i}</a>
                                                                    </li>
                                                                `;
                        }
                    } else {
                        // Halaman pertama
                        paginationHtml += `
                                                                <li class="page-item ${1 === currentPage ? 'active' : ''}">
                                                                    <a href="#" class="page-link" data-page="1">1</a>
                                                                </li>
                                                            `;

                        if (currentPage > 3) {
                            paginationHtml += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
                        }

                        // Halaman sekitar currentPage
                        const start = Math.max(2, currentPage - 1);
                        const end = Math.min(totalPages - 1, currentPage + 1);

                        for (let i = start; i <= end; i++) {
                            paginationHtml += `
                                                                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                                                                        <a href="#" class="page-link" data-page="${i}">${i}</a>
                                                                    </li>
                                                                `;
                        }

                        if (currentPage < totalPages - 2) {
                            paginationHtml += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
                        }

                        // Halaman terakhir
                        paginationHtml += `
                                                                <li class="page-item ${totalPages === currentPage ? 'active' : ''}">
                                                                    <a href="#" class="page-link" data-page="${totalPages}">${totalPages}</a>
                                                                </li>
                                                            `;
                    }

                    // Tombol Next
                    paginationHtml += `
                                                            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                                                                <a href="#" class="page-link" data-page="next">
                                                                    <i class="bx bx-right-arrow-alt"></i>
                                                                </a>
                                                            </li>
                                                        `;

                    $('#custom-pagination').html(paginationHtml);
                }

                // Event handling untuk custom pagination
                $('#custom-pagination').on('click', 'a.page-link', function (e) {
                    e.preventDefault();
                    const page = $(this).data('page');

                    if (page === 'prev' && currentPage > 1) {
                        currentPage--;
                    } else if (page === 'next' && currentPage < Math.ceil(table.page.info().recordsTotal / pageLength)) {
                        currentPage++;
                    } else if (typeof page === 'number') {
                        currentPage = page;
                    }

                    // Reload DataTable dengan halaman baru
                    table.ajax.reload();
                });
            });
        </script>
@endsection