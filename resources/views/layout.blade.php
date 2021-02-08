<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- SEO -->
	<title>Me with YouTube Video - HTML Template Demo</title>
	<meta name="description" content="Me is a slick, personal layout for any individual wanting a minimal online presence. Features include a big background image or video, logo, bio and icons." />
	<meta name="robots" content="index, follow" />
	<meta name="referrer" content="always" />

	<!-- Social & Open Graph -->
	<meta property="og:title" content="Me with YouTube Video - HTML Template Demo" />
	<meta property="og:description" content="Me is a slick, personal layout for any individual wanting a minimal online presence. Features include a big background image or video, logo, bio and icons." />
	<meta property="og:image" content="https://demo.onepagelove.com/fullsingle-html/me/images/social.jpg"> <!-- include your hosted image full URL -->
	<meta property="og:url" content="https://demo.onepagelove.com/fullsingle-html/me/index-youtube.html" />
	<meta name="twitter:title" content="Me with YouTube Video - HTML Template Demo" >
	<meta name="twitter:description" content="Me is a slick, personal layout for any individual wanting a minimal online presence. Features include a big background image or video logo, bio and icons." />
	<meta name="twitter:image" content="https://demo.onepagelove.com/fullsingle-html/me/images/social.jpg" /> <!-- include your hosted image full URL -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@onepagelove" />
	<meta name="twitter:creator" content="@robhope" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/images/favicon.png" sizes="32x32">

	<!-- Styles -->
	<link rel='stylesheet' href='/assets/css/me.css' type='text/css' media='screen' />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

</head>

<body id="fullsingle" class="page-template-page-fullsingle-me me-video">

<!-- YouTube Video -->
<div class="me-video-container">
	<div class="video-wrap">
		<div class="video-container">
			<iframe class="video-content" src="https://www.youtube.com/embed/dk9uNWPP7EA?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;mute=1&playlist=dk9uNWPP7EA" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div class="fs-me">

	<!-- Content Container -->
	<div class="me-content">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>

</div>

</body>
</html>
