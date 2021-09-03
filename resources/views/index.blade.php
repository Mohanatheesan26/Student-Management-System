@extends('layouts.app')

@section('content')

<style>
  .push-top {
    margin-top: 25px;
    margin-bottom: 25px;
  }
</style>


<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    <div>
      <h2 className="text-center mt-4">Students List</h2>
    </div>

    @if(Auth::user())

    <div class="push-top">
      <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student </a>
    </div>
    <div className="row">
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="table-warning">
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Password</td>
            <td class="text-center">Action</td>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $students)
          <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
        
    @else
    <div class ="push-top">
      <p class ="container">
        Please Login to View......
      </p>
    <div>
    @endif


    
<div>
@endsection