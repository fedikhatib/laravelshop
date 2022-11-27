@extends('layouts.chatlayout')

@section('content')
<div class="container">

    <chats :user="{{ auth()->user() }}"></chats>

</div>
@endsection