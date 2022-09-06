"use strict";

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// scroll header
window.addEventListener('scroll', () => {
  const sub_menu = $('.sub-menu');
  const menu = $('.menu');

  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    menu.style.backgroundColor = '#ffffff';
    menu.style.top = "0";
    menu.style.boxShadow = '0px 0px 2px rgb(0 0 0 / 20%)';
    sub_menu.style.padding = '19px 0';
    menu.style.transition = "all .2s linear";
  } else {
    menu.style.top = "40px";
    menu.style.boxShadow = 'none';
    menu.style.backgroundColor = 'transparent';
    sub_menu.style.padding = '23px 0';
  }

}); 