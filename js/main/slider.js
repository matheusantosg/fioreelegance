$(document).ready(() => {
	const imagens = document.querySelector('.single-noivas__wrapper.slider')
	const $photos = document.querySelectorAll('.single-noivas__image')

	$photos.forEach(($photo) => {
		const attr = $photo.getAttribute('src')

		if (attr === '' || attr === undefined) $photo.remove()
	})

	$(imagens).addClass("owl-carousel").owlCarousel({
		loop: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
			},
			1260: {
				items: 2,
				nav: true,
			},
		},
	});
})