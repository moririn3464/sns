@extends('layouts.layout')

@section('content')
  <div>
      @foreach($tweets as $tweet)
      <div>
        <p>{{$tweet->tweet}}</p>
      </div>
      @endforeach
  </div>

  <div>
    <form action="{{ route('timeline.post') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="tweet">ツイート</label>
        <input type="text" name="tweet" id="tweet" value="{{ old('tweet') }}" />
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">送信</button>
      </div>
    </form>
  </div>
@endsection