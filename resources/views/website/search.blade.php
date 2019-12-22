
@extends('website.main')


@section('content')


<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>

	            @foreach($medias as $media)

    <div>
        <div class="uk-card uk-card-default uk-card-body">
        	<a href="{{ route('content.view' ,$media->id) }}">
        	<img src="/uploads/img/{{$media->img}}"> </a>
        </div>
    </div>
   

            @endforeach

</div>

@endsection
