<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Testimonial Slider</title>
	<style>
		html,
		body {
			margin: 0;
			padding: 0;
			font-family: "Sora", sans-serif;
		}

		.testimonial-wrapper {
			position: relative;
			height: 100vh;
			overflow: hidden;
			background: #4361ee;
		}

		.slide {
			height: 100%;
			width: 100%;
			top: 0;
			position: absolute;
			visibility: hidden;
		}

		.slide__outer,
		.slide__inner {
			width: 100%;
			height: 100%;
			overflow: hidden;
		}

		.slide__content {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100%;
			width: 100%;
		}

		.slide__container {
			max-width: 1400px;
			width: 100%;
			margin: 0 auto;
			padding: 2rem;
			display: grid;
			grid-template-columns: repeat(10, 1fr);
			grid-template-rows: repeat(10, 1fr);
		}

		.slide__heading {
			--width: 200;
			font-family: sans-serif;
			font-size: clamp(3rem, 10vw, 8rem);
			font-weight: 900;
			font-variation-settings: "wdth" var(--width);
			margin: 0;
			color: #fff;
			grid-area: 2 / 2 / 3 / 10;
		}

		.slide__img-cont {
			grid-area: 3 / 2 / 8 / 8;
		}

		.slide__img-cont img {
			width: 100%;
			height: auto;
			object-fit: cover;
			display: block;
		}

		.overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 2;
			pointer-events: none;
		}

		.overlay__count {
			position: absolute;
			top: 2rem;
			right: 2rem;
			font-size: 2rem;
			color: white;
			z-index: 3;
		}

		.overlay__img-cont {
			position: absolute;
			top: 25%;
			right: 10%;
			width: 300px;
			height: 300px;
			overflow: hidden;
		}

		.overlay__img-cont img {
			position: absolute;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.next-section {
			height: 100vh;
			background: #f4f4f4;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
		}
	</style>
</head>

<body>

	<!-- Testimonial Section -->
	<section class="testimonial-wrapper">
		<div class="slide">
			<div class="slide__outer">
				<div class="slide__inner">
					<div class="slide__content">
						<div class="slide__container">
							<h2 class="slide__heading">SCROLL</h2>
							<figure class="slide__img-cont">
								<img class="slide__img" src="https://images.unsplash.com/photo-1567016376408-0226e4d0c1ea?auto=format&fit=crop&w=800&q=80" alt="">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div class="slide__outer">
				<div class="slide__inner">
					<div class="slide__content">
						<div class="slide__container">
							<h2 class="slide__heading">SWIPE</h2>
							<figure class="slide__img-cont">
								<img class="slide__img" src="https://images.unsplash.com/photo-1558603668-6570496b66f8?auto=format&fit=crop&w=800&q=80" alt="">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div class="slide__outer">
				<div class="slide__inner">
					<div class="slide__content">
						<div class="slide__container">
							<h2 class="slide__heading">SCROLL</h2>
							<figure class="slide__img-cont">
								<img class="slide__img" src="https://images.unsplash.com/photo-1537165924986-cc3568f5d454?auto=format&fit=crop&w=800&q=80" alt="">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div class="slide__outer">
				<div class="slide__inner">
					<div class="slide__content">
						<div class="slide__container">
							<h2 class="slide__heading">SWIPE</h2>
							<figure class="slide__img-cont">
								<img class="slide__img" src="https://images.unsplash.com/photo-1589271243958-d61e12b61b97?auto=format&fit=crop&w=800&q=80" alt="">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="overlay">
			<p class="overlay__count">0<span class="count">1</span></p>
			<div class="overlay__img-cont">
				<img class="image" src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=800&q=80" />
				<img class="image" src="https://images.unsplash.com/photo-1594666757003-3ee20de41568?auto=format&fit=crop&w=800&q=80" />
				<img class="image" src="https://images.unsplash.com/photo-1579830341096-05f2f31b8259?auto=format&fit=crop&w=800&q=80" />
				<img class="image" src="https://images.unsplash.com/photo-1603771628302-c32c88e568e3?auto=format&fit=crop&w=800&q=80" />
			</div>
		</div>
	</section>

	<!-- Next Section -->
	<section class="next-section">
		<h2>Next Section Here</h2>
	</section>

	<!-- GSAP Scripts -->
	<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
	<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
	<script src="https://unpkg.com/gsap@3/dist/Observer.min.js"></script>

	<script>
		gsap.registerPlugin(ScrollTrigger, Observer);

		const sections = gsap.utils.toArray(".slide");
		const images = gsap.utils.toArray(".image").reverse();
		const slideImages = gsap.utils.toArray(".slide__img");
		const outerWrappers = gsap.utils.toArray(".slide__outer");
		const innerWrappers = gsap.utils.toArray(".slide__inner");
		const count = document.querySelector(".count");
		const wrap = gsap.utils.wrap(0, sections.length);
		let currentIndex = 0;
		let animating = false;
		let observer;

		gsap.set(outerWrappers, {
			xPercent: 100
		});
		gsap.set(innerWrappers, {
			xPercent: -100
		});
		gsap.set(".slide:nth-of-type(1) .slide__outer", {
			xPercent: 0
		});
		gsap.set(".slide:nth-of-type(1) .slide__inner", {
			xPercent: 0
		});

		function gotoSection(index, direction) {
			animating = true;
			index = wrap(index);

			let tl = gsap.timeline({
				defaults: {
					duration: 1,
					ease: "expo.inOut"
				},
				onComplete: () => animating = false
			});

			gsap.set([sections, images], {
				zIndex: 0,
				autoAlpha: 0
			});
			gsap.set([sections[currentIndex], images[index]], {
				zIndex: 1,
				autoAlpha: 1
			});
			gsap.set([sections[index], images[currentIndex]], {
				zIndex: 2,
				autoAlpha: 1
			});

			tl.set(count, {
					text: index + 1
				}, 0.32)
				.fromTo(outerWrappers[index], {
					xPercent: 100 * direction
				}, {
					xPercent: 0
				}, 0)
				.fromTo(innerWrappers[index], {
					xPercent: -100 * direction
				}, {
					xPercent: 0
				}, 0)
				.fromTo(images[index], {
					xPercent: 125 * direction,
					scaleX: 1.5,
					scaleY: 1.3
				}, {
					xPercent: 0,
					scaleX: 1,
					scaleY: 1
				}, 0)
				.fromTo(images[currentIndex], {
					xPercent: 0,
					scaleX: 1,
					scaleY: 1
				}, {
					xPercent: -125 * direction,
					scaleX: 1.5,
					scaleY: 1.3
				}, 0)
				.fromTo(slideImages[index], {
					scale: 2
				}, {
					scale: 1
				}, 0)
				.timeScale(0.8);

			currentIndex = index;
		}

		function enableSlider() {
			observer = Observer.create({
				target: ".testimonial-wrapper",
				type: "wheel,touch,pointer",
				preventDefault: true,
				wheelSpeed: -1,
				onUp: () => {
					if (animating) return;
					if (currentIndex === sections.length - 1) {
						disableSlider();
						ScrollTrigger.getById("pin").scroll(ScrollTrigger.getById("pin").end);
					} else {
						gotoSection(currentIndex + 1, 1);
					}
				},
				onDown: () => {
					if (animating) return;
					if (currentIndex === 0) {
						disableSlider();
						ScrollTrigger.getById("pin").scroll(ScrollTrigger.getById("pin").start - 1);
					} else {
						gotoSection(currentIndex - 1, -1);
					}
				},
				tolerance: 10
			});
		}

		function disableSlider() {
			if (observer) observer.kill();
		}

		enableSlider();

		ScrollTrigger.create({
			id: "pin",
			trigger: ".testimonial-wrapper",
			start: "top top",
			end: "bottom bottom",
			pin: true,
			onEnter: enableSlider,
			onEnterBack: enableSlider,
			onLeave: disableSlider,
			onLeaveBack: disableSlider
		});
	</script>
</body>

</html>