@extends("layout.layout")
@section("sidebar")
    <a href="/students" class="btn btn-primary mb-4">Homepage</a>
@endsection
@section ("content")
@if(isset($message))
    <div class="alert alert-success text-center text-capitalize">{{$message}}</div>
@endif
<table class="table">
    <tbody>
      <tr>
        <th scope="row">Student Id:</th>
        <td>{{$singleshow->id}}</td>
      </tr>
      <tr>
        <th scope="row">Student Name:</th>
        <td>{{$singleshow->name}}</td>
      </tr>
      <tr>
        <th scope="row">Student Email:</th>
        <td>{{$singleshow->email}}</td>
      </tr>
      <tr>
        <th scope="row">Student Roll:</th>
        <td>{{$singleshow->roll}}</td>
      </tr>
      <tr>
        <th scope="row">Student Registation:</th>
        <td>{{$singleshow->reg}}</td>
      </tr>
      <tr>
        <th scope="row">Student Address:</th>
        <td>{{$singleshow->address}}</td>
      </tr>
    </tbody>

  </table>
  <form action="/students/{{$singleshow->id}}" method="post">
    @csrf
    @method("delete")
    <button onclick="return confirm('r you sure delete now')" class="btn btn-danger mb-4">Delete</button>
</form>

@endsection
