@extends('welcome')
@section('contant')
    <div class="container">
        <div class="form-group">
            <form action="{{ route('Classes.store') }}" method="POST">
                @csrf
                <label for="roomnumber">Room Number</label>
                <input type="number" name="room_no" class="form-control" value="{{ old('room_no') }}">
                @if ($errors->has('room_no'))
                    <div class="text-danger">{{ $errors->first('room_no') }}</div>
                @endif

                <label for="roomnumber">Building Number</label>
                <select class="form-control" name="building">
                    <option value="oldbuilding">Old building</option>
                    <option value="newbuilding">New building</option>
                </select>
                @if ($errors->has('building'))
                    <div class="text-danger">{{ $errors->first('building') }}</div>
                @endif

                <label for="roomnumber">Assigned Teacher</label>
                <select class="form-control" name="practices_id">
                    @foreach ($practice as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('practices_id'))
                    <div class="text-danger">{{ $errors->first('practices_id') }}</div>
                @endif

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-lg mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
