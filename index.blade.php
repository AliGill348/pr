@extends('welcome')
@section('contant')
<a href="{{route('Classes.create')}}">  <button  class="btn btn-success text-end">ADD the Practice</button></a>

<div class="table-responsive  mt-4">
    <table
        class="table table-secondary text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Room No</th>
                <th scope="col">Building</th>
                <th scope="col">Assign Teacher</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $key => $class)
            <tr class="">
                <td scope="row">{{$key+1}}</td>
                <td scope="row">{{$class->room_no}}</td>
                <td scope="row">{{$class->building}}</td>
                @if (isset($class->practice))
                <td scope="row">{{$class->practice->name}}</td>
                @endif
                <td><a href="{{ route('Classes.edit', $class->id) }}"><button class="btn btn-success">Edit</button></a></td>
                <form action="{{route('Classes.destroy',$class->id)}}" method="POST">
                    @method('Delete')
                    @csrf
                <td><a delete={{$class->id}}><button class="btn btn-danger me-4" >Delete</button></a></td>
                </form>            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection
