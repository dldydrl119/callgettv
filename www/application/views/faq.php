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
	<link href="/assets/css/faq.css" rel="stylesheet" type="text/css">

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

	<!-- Global site tag (gtag.js) - Google Ads: 675458681 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-675458681"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-675458681');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-191157780-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-191157780-1');
	</script>


	<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
	<script type="text/javascript">
		kakaoPixel('8277931052310114600').pageView();
	</script>
	<!-- Hotjar Tracking Code for callgettv.com -->
	<script>
		(function(h, o, t, j, a, r) {
			h.hj = h.hj || function() {
				(h.hj.q = h.hj.q || []).push(arguments)
			};
			h._hjSettings = {
				hjid: 2282897,
				hjsv: 6
			};
			a = o.getElementsByTagName('head')[0];
			r = o.createElement('script');
			r.async = 1;
			r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
			a.appendChild(r);
		})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
	</script>


	<!-- 최적화 도구 스니펫 -->
	<script src="https://www.googleoptimize.com/optimize.js?id=OPT-WFR9VLW"></script>

	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '600429703862604');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=600429703862604&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<!--AceCounter-Plus Log Gathering for AceTag Manager V.9.2.20170103-->
	<script type="text/javascript">
		var _AceTM = (function(_j, _s, _b, _o, _y) {
			var _uf = 'undefined',
				_pmt = '',
				_lt = location;
			var _ap = String(typeof(_y.appid) != _uf ? _y.appid() : (isNaN(window.name)) ? 0 : window.name);
			var _ai = (_ap.length != 6) ? (_j != 0 ? _j : 0) : _ap;
			if (typeof(_y.em) == _uf && _ai != 0) {
				var _sc = document.createElement('script');
				var _sm = document.getElementsByTagName('script')[0];
				var _cn = {
					tid: _ai + _s,
					hsn: _lt.hostname,
					hrf: (document.referrer.split('/')[2]),
					dvp: (typeof(window.orientation) != _uf ? (_ap != 0 ? 2 : 1) : 0),
					tgp: '',
					tn1: _y.uWorth,
					tn2: 0,
					tn3: 0,
					tw1: '',
					tw2: '',
					tw3: '',
					tw4: '',
					tw5: '',
					tw6: '',
					tw7: _y.pSearch
				};
				_cn.hrf = (_cn.hsn != _cn.hrf) ? _cn.hrf : 'in';
				for (var _aix in _y) {
					var _ns = (_y[_aix]) || {};
					if (typeof(_ns) != 'function') {
						_cn.tgp = String(_aix).length >= 3 ? _aix : '';
						_cn.tn2 = _ns.pPrice;
						_cn.tn3 = _ns.bTotalPrice;
						_cn.tw1 = _ns.bOrderNo;
						_cn.tw2 = _ns.pCode;
						_cn.tw3 = _ns.pName;
						_cn.tw4 = _ns.pImageURl;
						_cn.tw5 = _ns.pCategory;
						_cn.tw6 = _ns.pLink;
						break;
					};
				};
				_cn.rnd = (new Date().getTime());
				for (var _alx in _cn) {
					var _ct = String(_cn[_alx]).substring(0, 128);
					_pmt += (_alx + "=" + encodeURIComponent((_ct != _uf) ? _ct : '') + "&");
				};
				_y.acid = _ai;
				_y.atid = _cn.tid;
				_y.em = _cn.rnd;
				_sc.src = ((_lt.protocol.indexOf('http') == 0 ? _lt.protocol : 'http:') + '//' + _b + '/' + _o) + '?' + _pmt + 'py=0';
				_sm.parentNode.insertBefore(_sc, _sm);
			};
			return _y;
		})(148878, 'AZ-50-A', 'atm.acecounter.com', 'ac' + '.js', window._AceTM || {});
	</script>
	<!--AceCounter-Plus Log Gathering for AceTag Manager End -->
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
					<a href="/">
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

	<!-- FAQ_1  -->
	<section id="faq_1">
		<div class="cover"></div>
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>이용방법</h3>
					<p>콜겟TV의<br>이용방법입니다.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_1 _END -->

	
	<!-- FAQ_2 -->
	<section id="faq_2" class="faq">
		<div class="video-container">
			<iframe width="100%" src="https://www.youtube.com/embed/vFmTwtTUlfk?ps=blogger&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
		</div>
	</section>
	<!-- FAQ_2_END -->

	<!-- FAQ_3 -->
	<section id="faq_3" class="faq mt50">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>콜겟TV 이용방법</h3>
					<div class="explain">
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_1.png">
							<p>1. 리워드 선택</p>
							<p>콜겟TV 홈페이지에서 원하는 리워드를 선택하세요.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_2.png">
							<p>2. 리워드 영상 시청</p>
							<p>리워드에 대한 자세한 설명 및 활용법 영상을 시청하세요.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_3.png">
							<p>3. 라이프 서비스 영상 시청</p>
							<p>리워드와 연계된 라이프 서비스 영상을 시청하세요.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_4.png">
							<p>4. 전화상담 예약</p>
							<p>라이프 서비스에 대한 자세한 설명을 듣고 싶다면<br>“CALL”버튼을 눌러 상담을 예약하세요.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_5.png">
							<p>5. 상담 진행</p>
							<p>상담사와 라이프 서비스에 관한 상담을 진행하세요.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_6.png">
							<p>6. 사은품 수령</p>
							<p>상담 완료 후 원하는 장소로 무료 리워드를 지급받으세요.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_3_END -->

	<!-- FAQ_4 -->
	<section id="faq_4" class="faq">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>FAQ</h3>
				</div>
			</div>
			<div class="row">
				<div class="panel-group" id="accordion">
					<? for ($i = 0; $i < count($list); $i++) { ?>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title panel-title-adjust">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>">
										Q) <?= $list[$i]->faq_question ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?= $i ?>" class="panel-collapse collapse">
								<div class="panel-body">
									A) <?= nl2br($list[$i]->faq_answer) ?>
								</div>
							</div>
						</div>

					<? } ?>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- FAQ_4_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>

	<!-- AceCounter Log Gathering Script V.8.0.AMZ2019080601 -->
	<script language='javascript'>
		var _AceGID = (function() {
			var Inf = ['gtp8.acecounter.com', '8080', 'AH2A44720084087', 'AW', '0', 'NaPm,Ncisy', 'ALL', '0'];
			var _CI = (!_AceGID) ? [] : _AceGID.val;
			var _N = 0;
			var _T = new Image(0, 0);
			if (_CI.join('.').indexOf(Inf[3]) < 0) {
				_T.src = "https://" + Inf[0] + '/?cookie';
				_CI.push(Inf);
				_N = _CI.length;
			}
			return {
				o: _N,
				val: _CI
			};
		})();
		var _AceCounter = (function() {
			var G = _AceGID;
			var _sc = document.createElement('script');
			var _sm = document.getElementsByTagName('script')[0];
			if (G.o != 0) {
				var _A = G.val[G.o - 1];
				var _G = (_A[0]).substr(0, _A[0].indexOf('.'));
				var _C = (_A[7] != '0') ? (_A[2]) : _A[3];
				var _U = (_A[5]).replace(/\,/g, '_');
				_sc.src = 'https:' + '//cr.acecounter.com/Web/AceCounter_' + _C + '.js?gc=' + _A[2] + '&py=' + _A[4] + '&gd=' + _G + '&gp=' + _A[1] + '&up=' + _U + '&rd=' + (new Date().getTime());
				_sm.parentNode.insertBefore(_sc, _sm);
				return _sc.src;
			}
		})();
	</script>
	<!-- AceCounter Log Gathering Script End -->

	<!-- NAVER SCRIPT -->
	<!-- <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
	<script type="text/javascript">
		if (!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "s_1b6e7d3aef97";
		if (!_nasa) var _nasa = {};
		wcs.inflow("callgettv.com");
		wcs_do(_nasa);
	</script> -->


	<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
	<script type="text/javascript">
		if (!wcs_add) var wcs_add = {};
		wcs_add["wa"] = "10fe07b67732040";
		if (window.wcs) {
			wcs_do();
		}
	</script>


</body>

</html>