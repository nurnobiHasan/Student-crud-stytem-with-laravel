@extends("layout.layout")
@section("sidebar")
    <a href="/students" class="btn btn-success mb-4">Homepage</a>
@endsection
@section("content")
<form action="/students/{{$editdata->id}}" method="post">
    @csrf
    @if (isset($editdata->id))
        @method("put")
    @endif
    <div class="mb-3">
      <label for="name" class="form-label">Student Name:</label>
      <input type="text" value="{{old('name',$editdata->name)}}" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="write name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Student Eamil:</label>
        <input type="email" name="email" value="{{old('name',$editdata->email)}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="write email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Email Password:</label>
        <input type="password" value="{{old('name',$editdata->password)}}" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="write password">
    </div>

    <div class="mb-3">
        <label for="roll" class="form-label">Student Roll:</label>
        <input type="text" value="{{old('name',$editdata->roll)}}" name="roll" class="form-control" id="roll" aria-describedby="emailHelp" placeholder="write roll">
    </div>

    <div class="mb-3">
        <label for="reg" class="form-label">Student Registtion:</label>
        <input type="text"  value="{{old('name',$editdata->reg)}}" name="reg" class="form-control" id="reg" aria-describedby="emailHelp" placeholder="write registation">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Student Address:</label>
        <input type="text" value="{{old('name',$editdata->address)}}" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="write address">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
  @endsection
