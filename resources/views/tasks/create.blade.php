@extends('layouts.app')

@section('content')

    {{-- {{ }}と{!! !!}の違いについて --}}
    {{-- {{ '<p style="color: red;">htmlspecialchars関数に通した場合</p>' }} --}}
    {{-- {!! '<p style="color: red;">htmlspecialchars関数に通さなかった場合</p>' !!} --}}

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection