@extends('components.layout')

@section('content')
  <div class="container mt-4">
    <div class="row g-1">
    <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="800">
      <div class="card text-white bg-primary shadow">
      <div class="card-body d-flex align-items-center">
        <i class="bx bx-calendar bx-lg me-3"></i>
        <div>
        <h6 class="card-title mb-0 text-white fs-16">Total Acara</h6>
        <h2 class="fw-bold mb-0 text-white fs-16">{{ $totalEvents }}</h2>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="800">
      <div class="card text-white bg-warning shadow">
      <div class="card-body d-flex align-items-center">
        <i class="bx bx-time bx-lg me-3"></i>
        <div>
        <h6 class="card-title mb-0 text-white fs-16">Acara Akan Datang</h6>
        <h2 class="fw-bold mb-0 text-white fs-16">{{ $upcomingEventsCount }}</h2>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="800">
      <div class="card text-white bg-purple shadow">
      <div class="card-body d-flex align-items-center">
        <i class="bx bx-pie-chart bx-lg me-3"></i>
        <div>
        <h6 class="card-title mb-0 text-white fs-16">Acara Sedang Berlangsung</h6>
        <h2 class="fw-bold mb-0 text-white fs-16">{{ $ongoingEventsCount }}</h2>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="600" data-aos-duration="800">
      <div class="card text-white bg-success shadow">
      <div class="card-body d-flex align-items-center">
        <i class="bx bx-pie-chart bx-lg me-3"></i>
        <div>
        <h6 class="card-title mb-0 text-white fs-16">Acara Selesai</h6>
        <h2 class="fw-bold mb-0 text-white fs-16">{{ $completedEventsCount }}</h2>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="row">

    </div>
    <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow-lg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
      <div class="card-body p-4">
        <h2 class="text-center mb-5">Profile</h2>

        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form id="profileForm" action="{{ route('profile.update') }}" method="POST">
          @csrf
          @method('PUT')
          
          <div class="row g-4">
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" readonly>
              </div>
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" readonly>
              </div>
            </div>

            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label fw-bold">Phone</label>
                <input type="tel" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" readonly>
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label class="form-label fw-bold">Address</label>
                <input type="text" class="form-control" name="institution" value="{{ old('institution', $user->institution) }}" readonly>
              </div>
            </div>
          </div>

          <div class="d-flex flex-column flex-md-row col-gap-5 justify-content-between mt-4 gap-2">
            <button type="button" id="editBtn" class="btn btn-primary w-100 px-4 py-2">
              Change Profile Data
            </button>
            <button type="submit" id="saveBtn" class="btn btn-success w-100 px-4 py-2" style="display: none;">
              Save Changes
            </button>
            <button type="button" id="cancelBtn" class="btn btn-secondary w-100 px-4 py-2" style="display: none;">
              Cancel
            </button>
            <button type="button" class="btn btn-primary w-100 px-4 py-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
              Change Password
            </button>
            <button type="button" class="btn btn-danger w-100 px-4 py-2" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
              Delete Account
            </button>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const editBtn = document.getElementById('editBtn');
      const saveBtn = document.getElementById('saveBtn');
      const cancelBtn = document.getElementById('cancelBtn');
      const formInputs = document.querySelectorAll('#profileForm input[type="text"], #profileForm input[type="email"], #profileForm input[type="tel"]');
      const originalValues = {};

      // Store original values
      formInputs.forEach(input => {
        originalValues[input.name] = input.value;
      });

      // Edit button click
      editBtn.addEventListener('click', function() {
        // Enable inputs
        formInputs.forEach(input => {
          input.removeAttribute('readonly');
          input.classList.add('border-primary');
        });

        // Toggle buttons
        editBtn.style.display = 'none';
        saveBtn.style.display = 'block';
        cancelBtn.style.display = 'block';
      });

      // Cancel button click
      cancelBtn.addEventListener('click', function() {
        // Restore original values
        formInputs.forEach(input => {
          input.value = originalValues[input.name];
          input.setAttribute('readonly', true);
          input.classList.remove('border-primary');
        });

        // Toggle buttons
        editBtn.style.display = 'block';
        saveBtn.style.display = 'none';
        cancelBtn.style.display = 'none';
      });

      // Form validation before submit
      document.getElementById('profileForm').addEventListener('submit', function(e) {
        let isValid = true;
        
        formInputs.forEach(input => {
          if (input.value.trim() === '') {
            isValid = false;
            input.classList.add('is-invalid');
          } else {
            input.classList.remove('is-invalid');
          }
        });

        if (!isValid) {
          e.preventDefault();
          alert('Mohon lengkapi semua field!');
        }
      });

      // Handle modal errors - prevent modal from closing if there are validation errors
      const changePasswordModal = document.getElementById('changePasswordModal');
      const deleteAccountModal = document.getElementById('deleteAccountModal');

      if (changePasswordModal) {
        changePasswordModal.addEventListener('hidden.bs.modal', function () {
          // Clear validation errors when modal is closed
          const errorAlerts = changePasswordModal.querySelectorAll('.alert-danger');
          errorAlerts.forEach(alert => alert.remove());
        });
      }

      if (deleteAccountModal) {
        deleteAccountModal.addEventListener('hidden.bs.modal', function () {
          // Clear validation errors when modal is closed
          const errorAlerts = deleteAccountModal.querySelectorAll('.alert-danger');
          errorAlerts.forEach(alert => alert.remove());
        });
      }

      // Show modal with errors if there are any
      @if($errors->has('current_password') || $errors->has('new_password'))
        const changePasswordModalInstance = new bootstrap.Modal(document.getElementById('changePasswordModal'));
        changePasswordModalInstance.show();
      @endif

      @if($errors->has('password'))
        const deleteAccountModalInstance = new bootstrap.Modal(document.getElementById('deleteAccountModal'));
        deleteAccountModalInstance.show();
      @endif
    });
  </script>

  <!-- Change Password Modal -->
  <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('profile.change-password') }}" method="POST">
          @csrf
          <div class="modal-body">
            @if($errors->has('current_password'))
              <div class="alert alert-danger">
                {{ $errors->first('current_password') }}
              </div>
            @endif
            <div class="mb-3">
              <label for="current_password" class="form-label">Current Password</label>
              <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>
            <div class="mb-3">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="new_password" name="new_password" required minlength="8">
            </div>
            <div class="mb-3">
              <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Change Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Account Modal -->
  <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteAccountModalLabel">Delete Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('profile.delete-account') }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            <div class="alert alert-danger">
              <strong>Warning!</strong> This action cannot be undone. All your data will be permanently deleted.
            </div>
            @if($errors->has('password'))
              <div class="alert alert-danger">
                {{ $errors->first('password') }}
              </div>
            @endif
            <div class="mb-3">
              <label for="password" class="form-label">Enter your password to confirm</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Account</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
