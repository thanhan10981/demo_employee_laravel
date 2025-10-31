@csrf
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Họ tên *</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name ?? '') }}" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Chức vụ</label>
    <input type="text" name="position" class="form-control" value="{{ old('position', $employee->position ?? '') }}">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email *</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}" required>
  </div>
  <div class="col-md-3">
    <label class="form-label">SĐT</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone ?? '') }}">
  </div>
  <div class="col-md-3">
    <label class="form-label">Ngày vào làm</label>
    <input type="date" name="joined_at" class="form-control"
           value="{{ old('joined_at', isset($employee->joined_at) ? $employee->joined_at->format('Y-m-d') : '') }}">
  </div>
</div>
<div class="mt-3 d-flex gap-2">
  <button class="btn btn-primary">Lưu</button>
  <a class="btn btn-light" href="{{ route('employees.index') }}">Hủy</a>
</div>
