document.addEventListener('DOMContentLoaded', function() {
	
	if(document.querySelector('.splide-full'))
	{
		document.querySelectorAll('.splide-full').forEach(function(el) {
			const splideFull = new Splide(el, {
				perPage: 1,
				perMove: 1,
				type: 'fade',
				rewind: true,
				autoplay: false,
				pagination: true,
				gap: 0,
				arrows: false,
				speed: 1100
			});
				
			splideFull.on( 'active', function (slide) {
				const video = slide.slide.querySelector('video');
				if(video)
				{
					video.currentTime = 0;
					video.play();
				}
			});
			splideFull.on( 'inactive', function (slide) {
				const video = slide.slide.querySelector('video');
				if(video)
				{
					video.pause();
					video.currentTime = 0;
				}
			});
			splideFull.mount();
			
		})
	}
	
	if(document.querySelector('.splide-offer'))
	{
		document.querySelectorAll('.splide-offer').forEach(function(el) {
			new Splide(el, {
				perPage: 1,
				perMove: 1,
				type: 'fade',
				rewind: true,
				autoplay: false,
				pagination: false,
				gap: 0,
				arrows: true,
				speed: 1100
			}).mount();
		})
	}
	
	if(document.querySelector('.splide-products'))
	{
		document.querySelectorAll('.splide-products').forEach(function(el) {
			new Splide(el, {
				perPage: 3,
				perMove: 1,
				type: 'loop',
				autoplay: false,
				pagination: false,
				gap: 20,
				arrows: true,
				speed: 1100,
				breakpoints: {
					768: {
						perPage: 1
					},
					1024: {
						perPage: 2
					}
				}
			}).mount();
		})
	}
	
	if(document.querySelector('.splide-box'))
	{
		document.querySelectorAll('.splide-box').forEach(function(el) {
			new Splide(el, {
				perPage: 3,
				perMove: 1,
				type: 'loop',
				autoplay: false,
				pagination: false,
				gap: 25,
				arrows: true,
				speed: 1100,
				breakpoints: {
					768: {
						perPage: 1
					},
					1024: {
						perPage: 2
					}
				}
			}).mount();
		})
	}
	
	if(document.querySelector('.splide-testimonial'))
	{
		document.querySelectorAll('.splide-testimonial').forEach(function(el) {
			new Splide(el, {
				perPage: 3,
				perMove: 1,
				type: 'loop',
				autoplay: false,
				pagination: false,
				gap: 10,
				arrows: true,
				speed: 1100,
				breakpoints: {
					768: {
						perPage: 1
					},
					1024: {
						perPage: 2
					}
				}
			}).mount();
		})
	}
	
	if(document.querySelector('.splide-txt'))
	{
		document.querySelectorAll('.splide-txt').forEach(function(el) {
			new Splide(el, {
				perPage: 1,
				perMove: 1,
				type: 'loop',
				autoplay: false,
				pagination: false,
				gap: 0,
				arrows: true,
				speed: 1100
			}).mount();
		})
	}
	
	if(document.querySelector('.splide-gallery'))
	{
		document.querySelectorAll('.splide-gallery').forEach(function(el) {
			new Splide(el, {
				perPage: 3,
				perMove: 1,
				type: 'loop',
				autoplay: false,
				pagination: false,
				gap: 20,
				arrows: true,
				speed: 1100,
				breakpoints: {
					768: {
						perPage: 1
					},
					1024: {
						perPage: 2
					}
				}
			}).mount();
		})
	}
	
	if(document.querySelector('.open-form') && document.querySelector('.form-content'))
	{
		const buttonsC = document.querySelectorAll(".open-form");
		const formsC = document.querySelectorAll(".form-content");
		const defaultFormId = "contact_form";
		
		buttonsC.forEach(button => {
			button.addEventListener("click", function (e) {
				e.preventDefault();

				if(this.classList.contains("active"))
				{
					this.classList.remove("active");
					formsC.forEach(form => form.style.display = "none");
					document.getElementById(defaultFormId).style.display = "block";
				}
				else
				{
					buttonsC.forEach(btn => btn.classList.remove("active"));
					formsC.forEach(form => form.style.display = "none");
					this.classList.add("active");
					const targetId = this.getAttribute("data-name");
					const targetForm = document.getElementById(targetId);
					if (targetForm) targetForm.style.display = "block";
					targetForm.scrollIntoView({ behavior: "smooth", block: "start" });
				}
			});
		});
	}
	
	if(document.getElementById('header_fixed'))
	{
		const header = document.getElementById('header_fixed');
		const headerOffset = header.offsetTop + 20;
		const toggleClassOnScroll = () => {
			if (window.scrollY >= headerOffset) {
				header.classList.add('scroll');
			} else {
				header.classList.remove('scroll');
			}
		};
		window.addEventListener('scroll', toggleClassOnScroll);
	}
	
	if(document.querySelector('.header .header-menu ul li a'))
	{
		document.querySelectorAll('.header .header-menu ul li a').forEach(link => {
			link.addEventListener('click', function(e) {
				if(this.getAttribute('href').startsWith('#'))
				{
					document.getElementById('menu_top')?.classList.remove('active');
					document.getElementById('menu_bar')?.classList.remove('active');
				}
			});
		});
	}
	
	if(document.getElementById('menu_bar') && document.getElementById('menu_top'))
	{
		document.getElementById('menu_bar').addEventListener('click', function() {
			this.classList.toggle('active');
			document.getElementById('menu_top').classList.toggle('active');
		});
	}
	
})

gsap.registerPlugin(ScrollTrigger);

if(document.querySelector('.slider-content .item'))
{
    let mm = gsap.matchMedia();
    mm.add("(min-width: 1024px)", () => {
        gsap.to(".slider-content .item", {
            width: "80%",
            ease: "none",
            scrollTrigger: {
                trigger: ".slider-content .item",
                start: "top 10%",
                end: "bottom top",
                scrub: true,
            }
        });
    });
}

if(document.querySelector('.fade-up'))
{
	gsap.utils.toArray('.fade-up').forEach((elem) => {
	let f = gsap.timeline({
		scrollTrigger: {
			trigger: elem,
			start: 'top 80%',
			end: 'top 50%',
		},
		}).from(elem, {y:70, duration:0.8, opacity: 0, ease:'none'})
	}); 
}

if(document.querySelector('.fade-in'))
{
	gsap.utils.toArray('.fade-in').forEach((elem) => {
		let h = gsap.timeline({
		scrollTrigger: {
			trigger: elem,
			start: 'top bottom',
			end: 'bottom 100%',
		},
		}).from(elem, {y:40, duration:0.8, opacity: 0, ease:'none'})
	});
}

function openModal(id) {
	document.getElementById(id).classList.add('open');
	document.body.classList.add('jw-modal-open');
}

function closeModal() {
	document.querySelector('.jw-modal.open').classList.remove('open');
	document.body.classList.remove('jw-modal-open');
}

window.addEventListener('load', function() {
	document.addEventListener('click', event => {
		if(event.target.classList.contains('jw-modal'))
		{
			closeModal();
		}
	});
});