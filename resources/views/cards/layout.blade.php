<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
        </script>
	<script src="/js/js.js"></script>

</head>
<body onload="closeAlert()">
	@if(session()->has('flash_message'))
		<div class="Alert Alert--{{session()->get('flash_message_level')}}">
			<p class="Alert-text">{{session()->get('flash_message')}}</p>
		</div>
	@else
		<div class="Alert"></div>
	@endif
	<div class="container">
		@yield('content')
	</div>

	<script>
		@yield('js')
	</script>
</body>
</html>