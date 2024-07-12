@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <div class="card-body">
                       <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input  type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea  name="body" id="" cols="10" rows="5" class="form-control @error('body') is-invalid @enderror" value="{{ old('body') }}"></textarea>

                             @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit" >Submit</button>
                       </form>
                   </div>
                </div>
           </div>
        </div>
    </div>
@endsection
