@extends("layout.layout")
@section("sidebar")
    <a href="/students/create" class="btn btn-primary mb-4">Add Student</a>
@endsection
@section ("content")
@if(isset($message))
    <div class="alert alert-success text-center text-capitalize">{{$message}}</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Id</th>
        <td>Name</td>
        <td>Eemail</td>
        <td>Roll</td>
        <td>Action</td>
      </tr>
      @foreach ($alldata as $singledata)
        <tr>
            <th scope="row">{{$singledata->id}}</th>
            <td>{{$singledata->name}}</td>
            <td>{{$singledata->email}}</td>
            <td>{{$singledata->roll}}</td>
            <td>
                <a href="/students/{{$singledata->id}}" class="btn btn-primary">View</a>
                <a href="/students/{{$singledata->id}}/edit" class="btn btn-primary">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
