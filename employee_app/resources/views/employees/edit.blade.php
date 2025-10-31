@extends('layouts.app')
@section('title','Sửa thông tin')

@section('content')
<h3 class="mb-3">Sửa nhân viên</h3>
<form action="{{ route('employees.update', $employee) }}" method="POST">
  @method('PUT')
  @include('employees._form', ['employee' => $employee])
</form>
@endsection
