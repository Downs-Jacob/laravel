@extends ('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"
@endsection

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="font-bold text-indigo-400 uppercase text-3xl pb-12"> New Article</h1>
            <form method="POST" action="/articles">
                @csrf
                <div class = "field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input
                            class="input {{$errors->has('title') ? 'is-danger' : ''}}"
                            type="text"
                            name="title"
                            id="title"
                            value="{{old ('title')}}">
                        @if ($errors->has('title'))
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @endif
                  </div>
                </div>
                <div class = "field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea
                            class="textarea {{$errors->has('excerpt') ? 'is-danger' : ''}}"
                            name="excerpt"
                            id="excerpt"
                            >{{old ('excerpt')}}
                        </textarea>
                        @if ($errors->has('excerpt'))
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                   </div>
                </div>
                <div class = "field">
                    <label class="label" for="title">Body</label>
                    <div class="control">
                        <textarea
                            class="textarea {{$errors->has('body') ? 'is-danger' : ''}}"
                            name="body"
                            id="body"
                            >{{old ('body')}}
                            </textarea>
                        @if ($errors->has('body'))
                            <p class="help is-danger">{{$errors->first('body')}}</p>
                        @endif
                   </div>
                </div>
                <div class = "field">
                    <label class="label" for="title">Tags</label>
                    <div class="select is-multiple control">
                        <select name="tags[]" multiple>

                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('tags'))
                            <p class="help is-danger">{{ $message }}</p>
                        @endif
                   </div>
                </div>
                <div class="field is-grouped"></div>
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>

            </form>
        </div>
    </div>
@endsection
