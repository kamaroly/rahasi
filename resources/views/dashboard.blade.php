@extends('layouts.default')

@section('title')
{!! trans('dashboard.dashboard') !!}
@stop

@section('content')
    <div class="ui grid">
        <div class="sixteen columns">
            <div >
               <caption  >{!! trans('dashboard.gross') !!}</caption>
              <canvas id="gross" ></canvas>
            </div>
        </div>
    </div>
 @stop
@section('js')
<script src="/assets/js/chart.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
</script>
<script src="/assets/js/dashboard.js" type="text/javascript" charset="utf-8"></script>
@stop