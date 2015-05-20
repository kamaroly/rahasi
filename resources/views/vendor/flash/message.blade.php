@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
		<div class="ui  {{ Session::get('flash_notification.level') }} message">
			<i class="close icon"></i>
			 <div class="header">{!! Session::get('flash_notification.title') !!}</div>
					{{ Session::get('flash_notification.message') }}
		</div>
    @endif

  @section('js')
	<script type="text/javascript">
	$(document).ready(function() {
		$('.message .close').on('click', function() {
			$(this).closest('.message').fadeOut();
		});
	});
	</script>
  @stop
</script>
@endif