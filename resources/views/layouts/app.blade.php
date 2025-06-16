<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SoundView</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ url("assets/css/main.css") }}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
            <!-- Header -->
				<section id="header">

					<!-- Logo -->

					<h1><a href="{{ url("/") }}">SoundView</a></h1>

					<!-- Nav -->
						<nav id="nav">
                              <!-- Botão de login -->
    <div style="position: absolute; top: 1rem; right: 1rem;">
        <a href="{{ route('login') }}"
           style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #007bff; border-radius: 50%;">
            <svg style="width: 20px; height: 20px;" fill="none" stroke="white" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5.121 17.804A9 9 0 1119.88 6.196 9 9 0 015.121 17.804zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </a>
    </div>
							<ul>
								<li class="current"><a href="{{ url("/") }}">Principal</a></li>
								<li>
									<a href="#">Publicações</a>
									<ul>
                                        @foreach ($categorias as $value)
                                        <li><a href="{{ url('/PostagemByCategoriaId/' . $value->id) }}">{{ $value->nome }}</a></li>
                                        @endforeach
									</ul>
								</li>

                                <li>
									<a href="#">Usuários</a>
									<ul>
                                        @foreach ($autores as $value)
                                        <li><a href="{{ url('/PostagemByAutorId/' . $value->id) }}">{{ $value->name }}</a></li>
                                        @endforeach
									</ul>
								</li>

							</ul>
						</nav>


        <div class="container">
            @yield('content')
        </div>

    <!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
								<section>
									<header>
										<h2>Blandit nisl adipiscing</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jun <strong>10</strong></span>
											<h1><a href="https://www.flatpanelshd.com/news.php?id=1749719842&subaction=showfull&utm_source=chatgpt.com" target="_blank"">JBL Bar 1300MK2</a></h1>
											<p>Anunciada em 10 de junho de 2025. Disponível em outubro de 2025 nos EUA.</p>
										</li>
										<li>
											<span class="date">??? <strong>??</strong></span>
											<h1><a href="https://www.rtings.com/soundbar/reviews/samsung/hw-q990f?utm_source=chatgpt.com" target="_blank">Samsung HW‑Q990F</a></h1>
											<p>Prevista como flagship de 2025, mas sem data precisa de chegada.</p>
										</li>
										<li>
											<span class="date">Ago <strong>10</strong></span>
											<h1><a href="https://www.androidheadlines.com/2025/01/lg-unveils-its-s20a-soundbar-at-ces-2025.html?utm_source=chatgpt.com" target="_blank">LG S20A</a></h1>
											<p>Apresentada na CES em 5 de janeiro de 2025. Estará nas lojas a partir do dia 10 de agosto.</p>
										</li>
										<li>
											<span class="date">Set <strong>23</strong></span>
											<h1><a href="https://hometheaterreview.com/philips-just-dropped-3-new-soundbars-dolby-atmos-hdmi-2-1-and-more/?utm_source=chatgpt.com" target="_blank">Philips B8500</a></h1>
											<p>Essa linha da marca Philips será lançada em 23 de setembro de 2025.</p>
										</li>
										<li>
											<span class="date">Jul <strong>11</strong></span>
											<h1><a href="https://www.hardware.com.br/tecnologia/ces-2025-samsung-anuncia-nova-soundbar-que-tem-ate-giroscopio/?utm_source=chatgpt.com" target="_blank">Samsung HW‑B750F (Série B)</a></h1>
											<p>anunciado em janeiro de 2025, com previsão de chegada em 11 julho de 2025.</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h1>Melhor custo benefício</h1>
									</header>
									<a href="https://site.fastshop.com.br/soundbar-lg-s60tr-com-5-1-canais-bluetooth-dolby-digital--ai-sound-pro--wow-interface-lgs60trpto_prd/p?utm_source=bing&utm_medium=cpc&utm_campaign=%5Bch%5D1p%5Bpl%5Dbing%5Bty%5Dpmax%5Bob%5Dconv%5Bbi%5Dtroas%5Bli%5Dad%5Bst%5D_colchao&utm_term=&utm_placement=o&msclkid=2205a595580c1f4dbbb7cdda679dc1ac" target="_blank" class="image featured"><img src="{{ url("images/sound1.webp") }}" alt="" /></a>
									<p>
										Isso é Soundbar LG S60TR com 5.1 Canais Bluetooth Dolby Digital, AI Sound Pro, Wow Interface.
									</p>
									<footer>
										<ul class="actions">
											<li><a href="https://empresas.fastshop.com.br/soundbar?_q=soundbar&map=ft" target="_blank" class="button">Site com menor preço de Soundbars</a></li>
										</ul>
									</footer>
								</section>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<header>
										<h1>Marcas</h1>
									</header>
									<ul class="divided">
										<li><a href="https://www.lg.com/br/audio/soundbars/?ec_model_status_code=ACTIVE" target="_blank">Soundbars LG</a></li>
										<li><a href="https://www.samsung.com/br/aisearch/?searchvalue=soundbar" target="_blank">Soundbars Samsung</a></li>
										<li><a href="https://www.jbl.com.br/search?q=soundbar&search-button=" target="_blank">Soundbars JBL</a></li>
										<li><a href="https://www.sony.com/en/search/#/?ajaxUrl=https%3A%2F%2Ffinder.api.mf.marsflag.com%2Fapi%2Fv1%2Ffinder_service%2Fdocuments%2F4b000647%2Fsearch&ct=&d=&doctype=all&htmlLang=en&imgsize=1&page=1&pagemax=10&q=soundbar&sort=0" target="_blank">Soundbars Sony</a></li>
										<li><a href="https://www.bose.com/search?q=soundbar&search-button=&lang=en_US" target="_blank">Soundbars Bose</a></li>
										<li><a href="https://www.loja.philips.com.br/soundbar" target="_blank">Soundbars Philips</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<header>
										<h1>Onde comprar</h1>
									</header>
									<ul class="divided">
                                        <li><a href="https://www.casasbahia.com.br/soundbar/b" target="_blank">Soundbars na Casas Bahia</a></li>
										<li><a href="https://www.magazineluiza.com.br/busca/soundbar/" target="_blank">Soundbars na Magazine Luiza</a></li>
										<li><a href="https://www.americanas.com.br/s?q=soundbar&fuzzy=0&operator=and&facets=fuzzy%2Coperator&sort=score_desc&page=0" target="_blank">Soundbars na Americanas</a></li>
										<li><a href="https://empresas.fastshop.com.br/soundbar?_q=soundbar&map=ft" target="_blank">Soundbars na Fast Shop</a></li>
										<li><a href="https://www.submarino.com.br/" target="_blank">Soundbars na Submarino</a></li>
                                    <li><a href="https://www.amazon.com.br/s?k=soundbar&__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=UEWYIIPYMTRY&sprefix=soundba%2Caps%2C184&ref=nb_sb_noss_2" target="_blank">Soundbars na Amazon</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h1>Redes Sociais</h1>
									</header>
									<ul class="social">
										<li><a class="icon brands fa-facebook-f" href="https://www.facebook.com/"target="_blank"><span class="label">Facebook</span></a></li>
										<li><a class="icon brands fa-twitter" href="https://x.com/"target="_blank"><span class="label">Twitter</span></a></li>
										<li><a class="icon brands fa-dribbble" href="https://dribbble.com/"target="_blank"><span class="label">Dribbble</span></a></li>
										<li><a class="icon brands fa-tumblr" href="https://tumblr.com/"target="_blank"><span class="label">Tumblr</span></a></li>
										<li><a class="icon brands fa-linkedin-in" href="https://www.linkedin.com/"target="_blank"><span class="label">LinkedIn</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Endereço</h3>
											<p>
												Cafundé de Judas<br />
												3144 Pindamonhangaba<br />
												Rio de Pinheiro, RP 25790-041
											</p>
										</li>
										<li>
											<h3>Email</h3>
											<p><a href="#">soundview@gmail.com</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(021) 1234-5678</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; SoundView. Todos os direitos reservados.</li><br>
                                            <li> <a href="{{ url("/") }}"> Página inicial</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="{{ url("assets/js/jquery.min.js") }}"></script>
			<script src="{{ url("assets/js/jquery.dropotron.min.js") }}"></script>
			<script src="{{ url("assets/js/browser.min.js") }}"></script>
			<script src="{{ url("assets/js/breakpoints.min.js") }}"></script>
			<script src="{{ url("assets/js/util.js") }}"></script>
			<script src="{{ url("assets/js/main.js") }}"></script>

	</body>
</html>
