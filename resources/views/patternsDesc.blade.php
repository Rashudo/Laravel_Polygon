@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header">
        {{ $name }}
    </div>
    <div class="card-body">
        {!! $content  !!}
        <br /><br />
        - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br />
        @foreach($return as $elem)
            {{ $elem }}<br />
        @endforeach
    </div>
</div>

@endsection

