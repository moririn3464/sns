@extends('layouts.layout')

@section('content')
  <div class="divide-solid border-gray-300 divide-y">
      @foreach($tweets as $tweet)
      <div class="p-4">
        <p>{{$tweet->FormattedDate}}</p>
        <p>{{$tweet->tweet}}</p>
      </div>
      @endforeach
  </div>

  <div>
    <form action="{{ route('timeline.post') }}" method="POST">
      @csrf
      <div class="">
        <input type="text" name="tweet" id="tweet" value="{{ old('tweet') }}" />
      </div>
      <div class="">
        <button type="submit" class="btn btn-primary">投稿する</button>
      </div>
    </form>
  </div>
@endsection