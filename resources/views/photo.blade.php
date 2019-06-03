@extends('templates.mainLayout')

@section('content')
    <br>
    <div class="box">
        <div class="text-white bg-dark">
            <h4 class="card-header">Send a picture</h4>
            <div class="card-body">
                <form action="{{ url('photo') }}" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image"  value="{{ old('image') }}">
                        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn btn-secondary">Send !</button>
                </form>
            </div>
        </div>
    </div>
@endsection
