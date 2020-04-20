@extends('layouts.app')

@section('content')
<div class="sidebar">
    <a class="" href="">Home</a>
    <a href="#news">List All Students</a>
    <a href="#contact">List All Tutor</a>
    <a href="#about">About</a>
  </div>  
<div class="content">
    <button class="btn btn-success">Add Student</button>
    <hr>
    <table class="table table-bordered text-center">
        <thead class="thead bg-success">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Province</th>
                <th>Tutor</th>
                <th>Gender</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
