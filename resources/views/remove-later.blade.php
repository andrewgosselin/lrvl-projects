<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Test</title>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bulma -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" rel="stylesheet">
        <script src="/js/bulma-image-showcase.js" type="text/javascript"></script>
        <link href="/css/bulma-image-showcase.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
        <style>
        	* {
			  box-sizing: border-box;
			}
			html {
				background-color: #000630;
			}
			body {
				font-family: 'Tangerine', serif;
			  background-color: #000630;
			  background-image: url("https://i.pinimg.com/originals/86/c8/5d/86c85d088097b381f2db8900bfedf07b.jpg");
			      animation: fadeInAnimation ease 3s;
				  animation-iteration-count: 1; 
				  animation-fill-mode: forwards; 
				  overflow-y: hidden;
				  overflow-x: hidden;
			}
			.parallax {
			  -webkit-perspective: 100px;
			          perspective: 100px;
			  height: 100vh;
			  overflow-x: hidden;
			  overflow-y: auto;
			  top: 0;
			  left: 50%;
			  right: 0;
			  bottom: 0;
			}
			@keyframes fadeInAnimation { 
			    0% { 
			        opacity: 0; 
			    } 
			    100% { 
			        opacity: 1; 
			    } 
			} 
			.parallax__layer {
			  position: absolute;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: -700px;
			}
			.parallax__layer img {
			  display: block;
			  position: absolute;
			  bottom: 0;
			}
			.parallax__cover {
			  background: #181c1c;
			  display: block;
			  position: absolute;
			  top: 100%;
			  left: 0;
			  right: 0;
			  min-height: 1000px;
			  padding-top: 50px;
			  z-index: 2;
			}
			.parallax__logo {
				padding-left: 430px;
			  -webkit-transform: translateZ(-300px) scale(4);
			          transform: translateZ(-300px) scale(4);
			}
			.parallax__layer__0 {
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
			  -webkit-transform: translateZ(-300px) scale(4);
			          transform: translateZ(-300px) scale(4);
			}
			.parallax__layer__1 {
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
			  -webkit-transform: translateZ(-250px) scale(3.5);
			          transform: translateZ(-250px) scale(3.5);
			}
			.parallax__layer__2 {
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
			  -webkit-transform: translateZ(-200px) scale(3);
			          transform: translateZ(-200px) scale(3);
			}
			.parallax__layer__3 {
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
			  -webkit-transform: translateZ(-150px) scale(2.5);
			          transform: translateZ(-150px) scale(2.5);
			}
			.parallax__layer__4 {
				    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
			  -webkit-transform: translateZ(-100px) scale(2);
			          transform: translateZ(-100px) scale(2);
			}
			.parallax__layer__5 {
			  -webkit-transform: translateZ(-50px) scale(1.5);
			          transform: translateZ(-50px) scale(1.5);
			}
			.parallax__layer__6 {

			  -webkit-transform: translateZ(0px) scale(1);
			          transform: translateZ(0px) scale(1);
			}
			#topNav {
				box-shadow: inset 0 25px 25px -25px rgba(211,211,211, 0.4);
				z-index: 99;
			}
			::-webkit-scrollbar {
			  height: 10px;
			  overflow: visible;
			  width: 10px;
			  display: none;
			}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
        </style>
    </head>
    <body>
    	<div id="topNav" class="container-fluid" style="position: absolute; top: 0; width: 100%; height: 150px;">
			<div class="content pt-4 pr-5">
				<a class="button is-primary is-inverted is-outlined is-pulled-right" href="/login">Login</a>
			</div>
    	</div>
		<div class="parallax" id="parallax">
			<div class="parallax__layer parallax__logo" style="">
	        	<img src="https://cloud.cyrexag.com/cdn/branding/logo.png" style="max-width: 125px; left: 50%; top: 25%;"/>
		    </div>
		    <div class="parallax__layer parallax__layer__0">
		        <img src="/parallax/layer_0.png" />
		    </div>
		    <div class="parallax__layer parallax__layer__1">
		        <img src="/parallax/layer_1.png"/>
		    </div>
		    <div class="parallax__layer parallax__layer__2">
		        <img src="/parallax/layer_2.png" />
		    </div>
		    <div class="parallax__layer parallax__layer__3">
		        <img src="/parallax/layer_3.png" />
		    </div>
		    <div class="parallax__layer parallax__layer__4">
		        <img src="/parallax/layer_3.png" />
		    </div>
		    <div class="parallax__layer parallax__layer__5">
		        <img src="/parallax/layer_5.png" />
		    </div>
		    <div class="parallax__layer parallax__layer__6">
		        <img src="/parallax/layer_6.png" />
		    </div>
		    <div class="parallax__cover">
		    	<div class="container" style="padding-bottom: 250px;">


				  <section class="section">
				    <div class="container">
						<div class="card">
						  <div class="card-content">
						    <div class="media">
						      <div class="media-left">
						        <figure class="image is-48x48">
						          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
						        </figure>
						      </div>
						      <div class="media-content">
						        <p class="title is-4">Andrew Gosselin</p>
						        <p class="subtitle is-6">Software Engineer</p>
						      </div>
						    </div>

						    <div class="content">
						      My name is <b>Andrew Gosselin</b>, I am an experienced Software Engineer with a demonstrated history of working in Technology. Skilled in mainly Laravel, PHP, Javascript, HTML, Java, C#, and C++. I also have a lot of experience in working on Virtual Reality, I have created multiple scaled gameplay environments with the HTC Vive and the Oculus Rift using Unity and Unreal Engine.
						      <br>
						      <time datetime="2020-7-22">10:24 PM - 22 July 2020</time>
						    </div>
						  </div>
						</div>
				    </div>
				  </section>

				  <section class="section">
				    <div class="container">
						<div class="card">
						  <header class="card-header">
						    <p class="card-header-title">
						      Public Projects
						    </p>
						  </header>
						  <div class="card-content">
						    <div class="content">
						      	<div class='carousel is-5 carousel-animated carousel-animate-slide'>
								  <div class='carousel-container'>
								    <div class='carousel-item is-active'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								    <div class='carousel-item'>
								      <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
								    </div>
								  </div>
								  <div class="carousel-navigation is-centered">
								    <div class="carousel-nav-left">
								      <i class="fas fa-chevron-left" aria-hidden="true"></i>
								    </div>
								    <div class="carousel-nav-right">
								      <i class="fas fa-chevron-right" aria-hidden="true"></i>
								    </div>
								  </div>
								</div>
						    </div>
						  </div>
						  <footer class="card-footer has-background-warning" style="padding: 10px;">
						  	<p>Need to make the API to pull projects from <a href="https://projects.cyrexag.com">https://projects.cyrexag.com</a>. These will be empty until then.</p>
						  </footer>
						</div>
				    </div>
				  </section>

				  <section class="section">
				    <div class="container">
						<div class="card">
						  <header class="card-header">
						    <p class="card-header-title">
						      Downloads
						    </p>
						  </header>
						  <div class="card-content">
						    <div class="content">
						    	<ul style="list-style: none">
						    		<li>
						    			<div class="columns">
						    				<div class="column">
							    				<h4>Resume</h4>
									    		<time datetime="2020-2-22">Last Updated: 7/22/2020</time>
							    			</div>
							    			<div class="column is-one-fifth">
							    				<a class="button is-success" href="https://cloud.cyrexag.com/cdn/branding/Resume.pdf" target="_blank">Download</a>
							    			</div>
						    			</div>
						    		</li>
						    		<li></li>
						    	</ul>
						    </div>
						  </div>
						  <footer class="card-footer has-background-warning" style="padding: 10px;">
						  	<p>These downloads are pulled from a database, they should be the most updated versions.</p>
						  </footer>
						</div>
				    </div>
				  </section>


			    </div>
			    <div class="container-fluid" style="position: absolute; width: 100%; height: auto; bottom: 0; background-color: #2c2f33; -webkit-box-shadow: inset 0px 5px 10px 1px #000000; box-shadow: inset 0px 5px 10px 1px #000000; overflow: hidden; padding: 15px;">
		    		<div style="text-align: center; color: white; font-size: 2vh">
		    			<div class="columns">
		    				<div class="column">
		    					<p>Pages</p>
		    					<ul>
								    <li><a href="/test">Test Page</a></li>
								</ul>
		    				</div>
		    				<div class="column">
		    					<p>Other Sites</p>
		    					<ul>
								    <li><a href="https://auth.cyrexag.com" target="_blank">https://auth.cyrexag.com</a></li>
								    <li><a href="https://projects.cyrexag.com" target="_blank">https://projects.cyrexag.com</a></li>
								    <li><a href="https://database.cyrexag.com" target="_blank">https://database.cyrexag.com</a></li>
								    <li><a href="https://gameservers.cyrexag.com" target="_blank">https://gameservers.cyrexag.com</a></li>
								</ul>
		    				</div>
		    				<div class="column">
		    					<p>Contact</p>
		    				</div>
		    			</div>
		    		</div>
			    </div>
		    </div>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			$.ajaxSetup({
			  headers: {
			      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
		  	$("#parallax").scroll(function() {
			  var scrollTop = $(this).scrollTop();

			  $('#topNav').css({
			    opacity: function() {
			      var elementHeight = $(this).height();
			      var value = 0;
			      if (scrollTop < 100) {
			      	value = 1;
			      } else if(scrollTop < 200) {
			      	value = 0.8;
			      } else if(scrollTop < 300) {
			      	value = 0.6;
			      } else if(scrollTop < 400) {
			      	value = 0.3
			      } else if(scrollTop < 500) {
			      	value = 0.2;
			      } else if(scrollTop < 600) {
			      	value = 0.1;
			      } else {
			      	value = 0;
			      }
			      return value;
			    }
			  });
			});

		</script>
    </body>
</html>