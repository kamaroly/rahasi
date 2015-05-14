@extends('layouts.default')

@section('content')
<script src="/assets/js/react.js"></script>
<script src="/assets/js/JSXTransformer.js"></script>


<script type="text/jsx">
	var HelloWorld = React.createClass({
		render: function() {
			return (
				<div className="HelloWorld">Hello World</div>
			);
		}
	});

	React.render(<HelloWorld />,document.getElementById('container'));
</script>

@stop