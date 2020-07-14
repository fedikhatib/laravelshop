@extends('voyager::master')
@section('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

@stop
@section('content')
<div class="container">
{!! $chart->container() !!}
{!! $chart->script() !!}



</div>
@endsection