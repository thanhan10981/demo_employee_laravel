@extends('layouts.app')
@section('title','Danh sách nhân viên')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Danh sách nhân viên</h3>
  <a class="btn btn-primary" href="{{ route('employees.create') }}">➕ Thêm mới</a>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Họ tên</th>
          <th>Chức vụ</th>
          <th>Email</th>
          <th>SĐT</th>
          <th>Ngày vào làm</th>
          <th class="text-end">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($employees as $emp)
          <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ $emp->name }}</td>
            <td>{{ $emp->position }}</td>
            <td>{{ $emp->email }}</td>
            <td>{{ $emp->phone }}</td>
            <td>{{ optional($emp->joined_at)->format('d/m/Y') }}</td>
            <td class="text-end">
              <a class="btn btn-sm btn-outline-secondary" href="{{ route('employees.edit',$emp) }}">Sửa</a>
              <form action="{{ route('employees.destroy',$emp) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Xóa {{ $emp->name }}?');">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger">Xóa</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="7" class="text-center text-muted py-4">Chưa có nhân viên.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    {{ $employees->links() }}
  </div>
</div>
@endsection
