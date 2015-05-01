@extends('app') @section('title') {{{
$photo_album->name }}} :: @parent @stop @section('content')
<h3>{{{ $photo_album->name }}}</h3>

<div id="mygallery">
	@foreach($photos as $item) 
	<a
		href="{{{'../../appfiles/photoalbum/'.$photo_album->folder_id.'/'.$item->filename }}}"
		data-lightbox="roadtrip"> <img alt="{{$item->name}}"
{{--		src="{{{'../../appfiles/photoalbum/'.$photo_album->folder_id.'/thumbs/'.$item->filename }}}" --}}
		src="{{{'appfiles/photoalbum/6ea59f8b95757bc9174cc8584b720d97.jpg' }}}"

				/>
	</a> 
	@endforeach
</div>
@stop @section('scripts')
<script>
        $("#mygallery").justifiedGallery();
    </script>
@stop
