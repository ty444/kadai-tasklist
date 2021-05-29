@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
   <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route' => 'tasks.store']) !!}
                
                <dev class ="form-group">
                    {!! Form::label('status','ステータス :') !!}
                    {!! FOrm::text('status',null,['class'=>'form-control']) !!}
                </dev>
                <div class="form-group">
                    {!! Form::label('content','タスク :') !!}
                    {!! Form::text('content',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録',['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection