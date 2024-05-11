@extends('welcome')
@section('contant')
    
      <div class="container" >
        <form action="{{ route('Classes.update', $classes->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="roomnumber" >Room Number</label>
            <input type="number" value="{{$classes->room_no}}" name="room_no" class="form-control" value="">
            <label for="roomnumber">Building Number</label>
            <select class="form-control" name="building" id="">
                <option {{ $classes->building == 'oldbuilding' ? 'selected' : '' }} value="oldbuilding">Old building</option>
                <option {{ $classes->building == 'newbuilding' ? 'selected' : '' }} value="newbuilding">New building</option>
                
            </select>
            <label for="roomnumber">Assigned Teacher</label>
            <select class="form-control" name="practices_id" id="">
                @foreach ($practice as $item)
                    <option {{$item->id == $classes->id ? 'selected' : '    '}} value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-lg mt-3">Submit</button>
            </div>
          </form>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
@endsection
