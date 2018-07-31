<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="fr">
<head>
	<title>Portfolio de Guillaume LISCOUET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Intégration de Foundation -->
	{{HTML::style('foundation/css/foundation.css')}}
</head>

<body>

<div class="row">
	<nav class="top-bar" data-topbar>
		<div class="small-10 medium-10 large-12 columns">
			<section class="top-bar-section">
				<ul class="left">
					<li>{{HTML::link('/', 'Home')}}</li>
					<li class="has-dropdown">
						{{HTML::link('#', 'Parcours')}}
						<ul class="dropdown">
							<!-- <li>{{HTML::link('formation', 'Ma formation')}}</li> -->
							<li>{{HTML::link('stages', 'Mes stages')}}</li>
							<li>{{HTML::link('projets', 'Mes projets')}}</li>
						</ul>
					</li>
					<li>{{HTML::link('cv/CValternance.pdf', 'Curriculum Vitae', array('target'=>'_target') )}}</li>
				</ul>
			</section>
		</div>	
	</nav>
</div>
<br />

@yield('content')


<!-- Intégration des scripts Javascript de Foundation -->

{{HTML::script('foundation/js/vendor/modernizr.js')}}
{{HTML::script('foundation/js/vendor/jquery.js')}}
{{HTML::script('foundation/js/foundation.min.js')}}

<script>
	$(document).foundation();
</script>

</body>
</html>