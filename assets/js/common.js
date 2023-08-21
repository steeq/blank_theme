
/* スムーズスクロール
------------------------------------------ */

const smoothScrollTrigger = document.querySelectorAll('.smoothScroll');
for (let i = 0; i < smoothScrollTrigger.length; i++){
	smoothScrollTrigger[i].addEventListener('click', (e) => {
		e.preventDefault();
		let href = smoothScrollTrigger[i].getAttribute('href');
		let targetElement = document.getElementById(href.replace('#', ''));
		const rect = targetElement.getBoundingClientRect().top;
		const offset = window.pageYOffset;
		const gap = 0;
		const target = rect + offset - gap;
		window.scrollTo({
			top: target,
			behavior: 'smooth',
		});
	});
}