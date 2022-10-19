@extends('layouts.app')   
@section('content')
   
            @if(Session::has('success'))
                <div class="alert alert-success"> {{Session::get('success')}}    </div>
            @endif  
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{url('posts')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value={{old('title')}}>
                    @if ($errors->has('title'))
                        {{ $errors->first('title') }}
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="body" name="body" rows="3" value={{old('body')}}></textarea>
                    @if ($errors->has('body'))
                        {{ $errors->first('body') }}
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

@endsection




