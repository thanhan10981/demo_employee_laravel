@extends('layouts.app')
@section('title','Thêm nhân viên')

@section('content')
<h3 class="mb-3">Thêm nhân viên</h3>
<form action="{{ route('employees.store') }}" method="POST">
  @include('employees._form')
</form>
@endsection
