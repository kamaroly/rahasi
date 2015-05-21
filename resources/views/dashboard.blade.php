@extends('layouts.default')

@section('title') DASHBOARD @stop

@section('content')


<canvas id="dashboard"  class="ui grid sixteen columns"></canvas>
@stop

@section('js')
<script src="/assets/js/chart.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/js/dashboard.js" type="text/javascript" charset="utf-8"></script>
@stop