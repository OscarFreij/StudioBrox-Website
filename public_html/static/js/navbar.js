'use strict'

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  document.getElementById("navbar-list").style.visibility = "visible";
};

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("navbar-list").style.visibility = "hidden";
};

function SetActivePage() {
  const params = new Proxy(new URLSearchParams(window.location.search), {
      get: (searchParams, prop) => searchParams.get(prop),
    });
    let value = params.page;

    for (let index = 0; index < $(".navbar-item").length; index++) {
      const element = $(".navbar-item")[index];
      if (element.href.includes(value))
      {
          element.classList.add("active");
          console.log("current page: "+value);
      }
    }
}

$(function() {
  $(window).scroll(function () {
     if ($(this).scrollTop() > ($('.banner')[0].clientHeight-$('.navbar-wrapper')[0].clientHeight)) {
        $('header').addClass('bg-dark')
     } else {
        $('header').removeClass('bg-dark')
     }
  });
});