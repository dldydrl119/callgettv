<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/event.css" rel="stylesheet" type="text/css">

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-567Q3JJ');
	</script>
	<!-- End Google Tag Manager -->
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "콜겟TV",
			"url": "https://callgettv.com",
			"sameAs": [
				"https://www.youtube.com/channel/UCJN_MRZTG_2l0TL7yJYeE6A",
			]
		}
	</script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-567Q3JJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- Preloader -->
	<!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
	<!-- Preloader_END -->

	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-global navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="logo">
					<a href="/main">
						<img src="/assets/images/logo.png" />
						<!-- <p>상담완료만 해도 리워드가 내집으로</p> -->
					</a>
				</div>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/main">메인</a>
						</li>
						<li>
							<a href="/main/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/main/faq">이용방법</a>
						</li>
						<li>
							<a href="/main/event">이벤트</a>
						</li>
						<!-- <li>
							<a href="/main/news/1">소식</a>
						</li> -->
						<li>
							<a href="/main/contactus">문의하기</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->


	<!-- Event_1_END -->
	<section id="event_1">
		<div class="container">
			<div class="row">
				<p class="event_title">진행 중인 이벤트</p>
				<? for ($i = 0; $i < count($list); $i++) {
					$j = 0; ?>
					<div class="event pointer" data-idx="<?= $list[$i]->event_idx ?>">
						<? foreach ($list[$i] as $key => $value) {
							if (!strpos($key, 'idx')) {
								if (strpos($key, 'image')) { ?>
									<div class="banner"><a href="<?= $list[$i]->event_link  ?>"><img src="<?= SURL ?>/assets/uploads/<?= $value ?>"></a></div>
								<? } else { ?>
									<!-- <div class=" "><?= $value ?></div> -->
						<? }
							}
							$j++;
						} ?>

					</div>
				<? } ?>
			</div>
		</div>
	</section>

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>

</html>