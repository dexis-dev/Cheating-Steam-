window.addEventListener('load', () => {
    setTimeout(() => {
      const container = document.querySelector('.cookies_container');
      container.classList.remove('hidden');
      container.classList.add('fadeInLeft');
    }, 2000);  
  });

function closeCookiesBox() {
    const container = document.querySelector('.cookies_container');
    container.classList.remove('fadeInLeft');
    container.classList.add('fadeOutLeft');
    setTimeout(() => {
      container.classList.add('hidden');
    }, 600);
}