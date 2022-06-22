@extends('layouts.app')


@section('content')
    <div class="container">

    @if ($errors->any())
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{{ $error }}} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @foreach($news as $item)
        <div class="row md-3 mb-5">
            <h2>{{$item['title']}}</h2>

            @if(isset($item['img']))
                @if(strpos($item['img'], 'picsum') !== false)
                    <img style="max-width: 100px;" src="{{$item['img']}}">
                @else ()
                    <img style="max-width: 100px;" src="{{'/storage/' . $item['img']}}">
                @endif
            @endif
            {{$item['text']}}

            @if(count($item['comment']))
                <p class="h5 mt-4 mb-4">Comments:</p>
            @endif
            @foreach($item['comment']->take(3) as $comment)
                <div class="alert alert-secondary" role="alert">
                    {{$comment['text']}}
                </div>
            @endforeach

            <form action="{{ route('comment') }}" method="POST">
                @csrf
                <input type="hidden" name="new_id" value="{{$item['id']}}">

                <div class="row mb-3 mt-3">
                    <p class="h6">Add comment:</p>
                    <div class="form-group col-sm-4">
                        <input type="text" name="text" class="form-control" value="{{ old('text') }}" autocomplete="off"
                               placeholder="Text">
                    </div>
                    <div class="form-group mb-1 col-sm-3 d-flex">
                        <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img"  data-refresh-config="default">
                        <input class="form-control" type="text" name="captcha" placeholder="Captcha"/>
                    </div>
                    <div class="form-group col-sm-2">
                        <button type="submit" class="form-control">Send</button>
                    </div>
                </div>
            </form>
        </div>
    @endforeach

        <div class="d-flex justify-content-center">
        {{ $news->links() }}
        </div>
    </div>
@endsection

