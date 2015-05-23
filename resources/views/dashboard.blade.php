@extends('layouts.default')

@section('title') DASHBOARD @stop

@section('content')
<div class="container clearfix">
<div class="third widget doughnut">
    <h3>Breakdown of Hours</h3>
    <p><a href="" class="button">Filter By Employee</a></p>
    <div class="canvas-container">
        <canvas id="hours"></canvas>
        <span class="status"></span>
    </div>
    <div class="chart-legend">
        <ul>
            <li class="ship">Shipping &amp; Receiving</li>
            <li class="rework">Rework</li>
            <li class="admin">Administrative</li>
            <li class="prod">Production</li>
        </ul>
    </div>
</div>
    <div class="third widget line">
        <div class="chart-legend">
            <h3>Shipments per Day</h3>
        </div>
        <div class="canvas-container">
            <canvas id="shipments"></canvas>
        </div>
    </div>
    <div class="third widget">
        <div class="chart-legend">
            <h3>Customer Service Assessment</h3>
        </div>
        <div class="canvas-container">
            <canvas id="departments"></canvas>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="/assets/js/chart.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/js/dashboard.js" type="text/javascript" charset="utf-8"></script>
@stop