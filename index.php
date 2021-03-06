<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="https://gist.githubusercontent.com/aaj013/e11d9a235e4730d282c437d771f8d49e/raw/94a64f9c4716d2407a3ab7d11ca4f743e56f4c33/elastislide-full.css" />


</head>
<body>

		<div class="container demo-4">

				<div class="gallery">

					<!-- Elastislide Carousel -->

					<ul id="carousel" class="elastislide-list">

						<li data-preview="images/large/4.jpg"><a href="#"><img src="images/small/4.jpg" alt="image04" /></a></li>

						<li data-preview="images/large/5.jpg"><a href="#"><img src="images/small/5.jpg" alt="image05" /></a></li>

						<li data-preview="images/large/6.jpg"><a href="#"><img src="images/small/6.jpg" alt="image06" /></a></li>

						<li data-preview="images/large/7.jpg"><a href="#"><img src="images/small/7.jpg" alt="image07" /></a></li>

						<li data-preview="images/large/11.jpg"><a href="#"><img src="images/small/11.jpg" alt="image11" /></a></li>

						<li data-preview="images/large/12.jpg"><a href="#"><img src="images/small/12.jpg" alt="image12" /></a></li>

						<li data-preview="images/large/13.jpg"><a href="#"><img src="images/small/13.jpg" alt="image13" /></a></li>

						<li data-preview="images/large/14.jpg"><a href="#"><img src="images/small/14.jpg" alt="image14" /></a></li>

						<li data-preview="images/large/15.jpg"><a href="#"><img src="images/small/15.jpg" alt="image15" /></a></li>

						<li data-preview="images/large/16.jpg"><a href="#"><img src="images/small/16.jpg" alt="image16" /></a></li>

						<li data-preview="images/large/17.jpg"><a href="#"><img src="images/small/17.jpg" alt="image17" /></a></li>

						<li data-preview="images/large/18.jpg"><a href="#"><img src="images/small/18.jpg" alt="image18" /></a></li>

						<li data-preview="images/large/19.jpg"><a href="#"><img src="images/small/19.jpg" alt="image19" /></a></li>

						<li data-preview="images/large/20.jpg"><a href="#"><img src="images/small/20.jpg" alt="image20" /></a></li>

						<li data-preview="images/large/1.jpg"><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>

						<li data-preview="images/large/2.jpg"><a href="#"><img src="images/small/2.jpg" alt="image02" /></a></li>

						<li data-preview="images/large/3.jpg"><a href="#"><img src="images/small/3.jpg" alt="image03" /></a></li>

						<li data-preview="images/large/8.jpg"><a href="#"><img src="images/small/8.jpg" alt="image08" /></a></li>

						<li data-preview="images/large/9.jpg"><a href="#"><img src="images/small/9.jpg" alt="image09" /></a></li>

						<li data-preview="images/large/10.jpg"><a href="#"><img src="images/small/10.jpg" alt="image10" /></a></li>

					</ul>

					<!-- End Elastislide Carousel -->



					<div class="image-preview">

						<img id="preview" src="images/large/4.jpg" />

					</div>

				</div>




			</div>


		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://gist.githubusercontent.com/aaj013/19e4507c6ee9bb9d2eb547de88cb0a90/raw/c452117c1b3c05fe33d1b025eaf88339cb4e507f/elastislide-full.js"></script>

		<script type="text/javascript">

			// example how to integrate with a previewer



			var current = 0,

				$preview = $( '#preview' ),

				$carouselEl = $( '#carousel' ),

				$carouselItems = $carouselEl.children(),

				carousel = $carouselEl.elastislide( {

					current : current,

					minItems : 4,

					onClick : function( el, pos, evt ) {



						changeImage( el, pos );

						evt.preventDefault();



					},

					onReady : function() {



						changeImage( $carouselItems.eq( current ), current );

						

					}

				} );



			function changeImage( el, pos ) {



				$preview.attr( 'src', el.data( 'preview' ) );

				$carouselItems.removeClass( 'current-img' );

				el.addClass( 'current-img' );

				carousel.setCurrent( pos );



			}



		</script>

</body>
</html>
