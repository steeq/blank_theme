/* ハンバーガー
------------------------------------------ */
document.querySelectorAll(".nav-toggle").forEach(function(el, i){
	el.addEventListener('click',function(e){
		const header = document.querySelector('.site_header');
		const global_nav = document.querySelector('.global_nav');
		const global_navOverlay = document.querySelector('.global_nav_overlay');
		const toggleBtn = document.querySelector('.global_nav_toggle');
		let bodyStyle = getComputedStyle(document.body);
		global_nav.classList.toggle('is-active');
		toggleBtn.classList.toggle('is-active');
		global_navOverlay.classList.toggle('is-open');
		header.classList.toggle('is-open');
		if (bodyStyle.overflow == 'visible') {
			document.body.style.overflow = 'hidden';
		}else if (bodyStyle.overflow == 'hidden') {
			document.body.style.overflow = 'visible';
		}
	})
})


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