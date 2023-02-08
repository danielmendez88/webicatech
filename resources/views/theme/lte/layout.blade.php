			<!DOCTYPE html>
			<html lang="es">


				<head>
					<title>@yield('title', 'Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas | Icatech')</title>

					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
					<meta http-equiv="x-ua-compatible" content="ie=edge">

					<!-- Global site tag (gtag.js) - Google Analytics -->
					<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155200639-1"></script>
					<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());

					gtag('config', 'UA-155200639-1');
					</script>

					<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">

					<!-- Google Fonts -->
					<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

					<!-- CSS Global Compulsory -->
					<link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/bootstrap.min.css") }}">
					<link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/offcanvas.css")}}">
					<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

					<!-- CSS Implementing Plugins -->
					<link rel="stylesheet" href="{{asset("assets/fonts/font-awesome/css/font-awesome.min.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/icon-line-pro/style.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/icon-line/css/simple-line-icons.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/icon-hs/style.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/dzsparallaxer.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/dzsscroller/scroller.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/advancedscroller/plugin.css")}}">
                    <link rel="stylesheet" href="{{asset("assets/vendor/animate.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/typedjs/typed.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/hamburgers/hamburgers.min.css")}}">
					<link rel="stylesheet" href="{{asset("assets/vendor/fancybox/jquery.fancybox.css")}}">
                    <link rel="stylesheet" href="{{asset("assets/vendor/slick-carousel/slick/slick.css")}}">

					<link rel="stylesheet" href="{{asset("assets/css/unify-core.css")}}">
					<link rel="stylesheet" href="{{asset("assets/css/unify-components.css")}}">
					<link rel="stylesheet" href="{{asset("assets/css/unify-globals.css")}}">
					<link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
					<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
					<link rel="stylesheet" href="{{asset("assets/css/principal.css")}}">
                    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/slider_unidad.css")}}">
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                    <!-- Recaptcha -->
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

					 <!-- Icons -->
                     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
					<style type="text/css">
						.verticalCarousel {
						  max-width: 100%;
						  background-color: #f1f1f1;
						}
						/* line 24, ../sass/style.scss */
						.verticalCarouselHeader {
						  background: #FFF;
						  border-width: 0px;
						  border-style: solid;
						  padding: 15px;
						}
						/* line 27, ../sass/style.scss */
						.verticalCarouselHeader:after {
						  content: "";
						  display: block;
						  clear: both;
						}
						/* line 32, ../sass/style.scss */
						.verticalCarouselHeader h3 {
						  float: left;
						  margin: 0px;
						}
						.lista {
							height: 337px;
						}
						/* line 25, ../sass/jQuery.verticalCarousel.scss */
						.smartmarquee {
							overflow: hidden;
							background-color: #FFF;
						}
						.smartmarquee .lista {
							margin: 0;
							padding: 0;
						}
						.smartmarquee .vc_list li {
							padding-top: 0.4em;
							border-bottom: 1px dotted #000;
						}
						.smartmarquee .vc_list {
							position: relative;
							list-style: none;
							padding: 0.6em 0.6em 0.6em 0.6em;
						}
						.vc_list li img {
							width: 100%;
							height: 102px;
						}
					</style>
				</head>

				<body>
					@include("theme.lte.header")
					<!--fin seccion-->
					<!--seccion menu-->
					@include("theme.lte.menu")
					<!-- PAGINA -->
					@yield("content")
					<!-- PAGINA FIN -->

					<!-- FOOTER DEPENDENCIA -->
					@include("theme.lte.footer_dependency")

					<!-- FOOTER PORTAL DE GOBIERNO -->
					@include("theme.lte.footer")

                        <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
						<script src="{{asset("assets/vendor/jquery-migrate/jquery-migrate.min.js")}}"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

						<script src="{{asset("assets/vendor/hs-megamenu/src/hs.megamenu.js")}}"></script>
						<script src="{{asset("assets/vendor/dzsparallaxer/dzsparallaxer.js")}}"></script>
						<script src="{{asset("assets/vendor/dzsparallaxer/dzsscroller/scroller.js")}}"></script>
						<script src="{{asset("assets/vendor/dzsparallaxer/advancedscroller/plugin.js")}}"></script>
						<script src="{{asset("assets/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
                        <script src="{{asset("assets/vendor/slick-carousel/slick/slick.js")}}"></script>
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

						<script src="{{asset("assets/assets/js/hs.core.js")}}"></script>
						<script src="{{asset("assets/vendor/typedjs/typed.min.js")}}"></script>
						<script src="{{asset("assets/js/components/hs.header.js")}}"></script>
						<script src="{{asset("assets/js/helpers/hs.hamburgers.js")}}"></script>
						<script src="{{asset("assets/js/components/hs.dropdown.js")}}"></script>
						<script src="{{asset("assets/js/components/hs.popup.js")}}"></script>
						<script src="{{asset("assets/js/components/hs.carousel.js")}}"></script>
						<script src="{{asset("assets/js/components/hs.go-to.js")}}"></script>
                        <script src="{{asset("assets/js/functions.js")}}"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
						<script src="{{asset("assets/js/responsiveslides.js")}}"></script>
                        <script src="{{ asset("assets/js/scripts/jquery.smartmarquee.js")}}"></script>
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                        <script src="{{asset("assets/js/aspirante.js")}}"></script>
                        <script src="{{asset("assets/js/uppercase.js")}}"></script>
                        <script src="{{asset("assets/js/validate.js")}}"></script>

						<!--plug in facebook-->
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=2084976248184121&autoLogAppEvents=1"></script>
                        <!--plug in facebook END-->

                        <script>
                            function miFuncion() {
                              var response = grecaptcha.getResponse();

                              if(response.length == 0){
                                alert("Captcha no verificado")
                              }
                              if ($('#condicion').is(":unchecked")) {
                                alert("Por Favor Indica que Aceptas Los avisos de Privacidad");
                                form.condicion.focus();
                                return false;
                              }
                            }
                        </script>


						<script>
							$(function() {
                                $(".rslides").responsiveSlides();
							});

                            $(document).on('ready', function () {

                                $('div .smartmarquee').smartmarquee();

                                    $.HSCore.components.HSHeader.init($('#js-header'));
                                    $.HSCore.helpers.HSHamburgers.init('.hamburger');

                                    $('.js-mega-menu').HSMegaMenu({
                                    event: 'hover',
                                    pageContainer: $('.container'),
                                    breakpoint: 991
                                    });

                                    $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                                    afterOpen: function () {
                                        $(this).find('input[type="search"]').focus();
                                    }
                                    });

                                    $.HSCore.components.HSPopup.init('.js-fancybox');
                                    $.HSCore.components.HSCarousel.init('.js-carousel');
                                    $.HSCore.components.HSGoTo.init('.js-go-to');

                                    $('.carousel').carousel({
                                    interval: 3000
                                    })
                            });
						</script>
						<!--prueba!-->
						<script>
							// document.getElementById('vid').play();
						</script>
						<script>

							$(document).ready(function(){

								// $("#myModal").modal('show');

								setTimeout(function() {
									$('#myModal').modal();
								}, 1000);
							});

						</script>
				</body>
			</html>
