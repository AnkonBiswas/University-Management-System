

@extends('website.main')


@section('content')

        <div class="uk-card uk-card-default uk-card-body">

        	                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
        	                    {{ $media->name }}

<br><br>

        	                     <img src="/uploads/img/{{ $media->img }}" width="300px">
<br><br>
        	                      <label class="uk-form-label" for="form-horizontal-text">Download : </label>
        	                     <a href="/uploads/files/{{ $media->content }}">Download</a> <br>


                              </div>

@endsection
