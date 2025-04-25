  const nav = document.querySelector('.nav');
  const toggle = document.querySelector('.nav__toggle');

  toggle.addEventListener('click', () => {
    nav.classList.toggle('open');
  });

  const searchBtn = document.querySelector('.search-btn');
const searchContainer = document.querySelector('.search-container');

searchBtn.addEventListener('click', () => {
  searchContainer.classList.toggle('active');
  const input = searchContainer.querySelector('.search-input');
  if (searchContainer.classList.contains('active')) {
    input.focus();
  }
});

document.addEventListener('click', (e) => {
    if (!searchContainer.contains(e.target)) {
      searchContainer.classList.remove('active');
    }
  });

  
//   FAQ

const faqItems = document.querySelectorAll('.faq__item');

faqItems.forEach(item => {
  item.querySelector('.faq__question').addEventListener('click', () => {
    item.classList.toggle('active');
  });
});


