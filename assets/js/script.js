/* Top to button
====================================================*/

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    scroll_to_top.style.display = "block";
  } else {
    scroll_to_top.style.display = "none";
  }
};

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

// When the user scrolls down 200px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
};

// Onclick
scroll_to_top.addEventListener('click', topFunction);



/* Fixed Menu
====================================================*/
// const navbar = document.querySelector("header");

// const headerFixed = () => {
//   const isScrolled = window.scrollY > 95;
//   navbar.style.position = isScrolled ? "fixed" : "relative";
//   navbar.style.left = isScrolled ? "0" : "0";
//   navbar.style.zIndex = isScrolled ? "1000" : "auto";
//   navbar.style.width = isScrolled ? "100%" : "auto";
//   logo.style.display = isScrolled ? "block" : "none";
//   navbar.style.transition = isScrolled ? "all .5s;" : "all .5s;";



// };
// window.addEventListener("scroll", headerFixed);


/* Table of Content
====================================================*/

const tocWrap = document.querySelector(".toc-wrap");
const tocWrapbtn = document.querySelector(".opne-close-btn");
const toc = document.querySelector(".toc");
if (toc) {
  function a() {
    window.innerWidth <= 768 && toc.classList.add("hidden");
  }
  a(),
    tocWrapbtn.addEventListener("click", function () {
      toc.classList.contains("hidden")
        ? (toc.classList.remove("hidden"),
          (tocWrapbtn.style.transform = "rotate(0deg)"))
        : (toc.classList.add("hidden"),
          (tocWrapbtn.style.transform = "rotate(270deg)"));
    });
}

/* Canvas mobile
====================================================*/
const offcanvas = document.querySelector('.offcanvas-menu');

if (offcanvas) {
  const offCanvasShowBtn = document.querySelector('.navbar-toggler');
  const offCanvasCloseBtn = document.querySelector('#close_offcanvas');
  const backdrop = document.querySelector('.backdrop');

  offCanvasShowBtn.addEventListener('click', function () {
    openOffcanvas();
  });

  offCanvasCloseBtn.addEventListener('click', function () {
    closeOffcanvas();
  });

  function openOffcanvas() {
    offcanvas.style.left = '0px';
    offcanvas.style.transition = 'all .3s ease';
    document.body.style.overflow = 'hidden';
    document.body.style.height = '100%';
    backdrop.classList.add('show');
    backdrop.classList.remove('fade');
  }

  function closeOffcanvas() {
    offcanvas.style.left = '-250px';
    offcanvas.style.transition = 'all .3s ease';
    document.body.style.overflow = '';
    document.body.style.height = '';
    backdrop.classList.remove('show');
    backdrop.classList.add('fade');
  }

  // Add a click event listener to the document to close the offcanvas when clicking outside of it
  document.addEventListener('click', function (event) {
    if (!offcanvas.contains(event.target) && !offCanvasShowBtn.contains(event.target)) {
      closeOffcanvas();
    }
  });

}





/*
 * Mobile Search Bar Functions
 ============================================================= */
const searchForm = document.querySelector('.search-form');

if (searchForm) {

  const searchBox = document.querySelector('.search-box');
  const crossSvg = `
      <svg fill="none" viewBox="0 0 17 16" width="17" height="16" xmlns="http://www.w3.org/2000/svg">
        <path d="m12.709 4.3677-8 8" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        <path d="m4.709 4.3677 8 8" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
      </svg>
    `;

  const searchSvg = `
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
        <path d="M16.4077 13.8339L13.292 10.7183C13.1514 10.5776 12.9608 10.4995 12.7608 10.4995H12.2514C13.1139 9.39639 13.6264 8.00889 13.6264 6.49951C13.6264 2.90889 10.717 -0.000488281 7.12642 -0.000488281C3.53579 -0.000488281 0.626419 2.90889 0.626419 6.49951C0.626419 10.0901 3.53579 12.9995 7.12642 12.9995C8.63579 12.9995 10.0233 12.487 11.1264 11.6245V12.1339C11.1264 12.3339 11.2045 12.5245 11.3452 12.6651L14.4608 15.7808C14.7545 16.0745 15.2295 16.0745 15.5202 15.7808L16.4045 14.8964C16.6983 14.6026 16.6983 14.1276 16.4077 13.8339ZM7.12642 10.4995C4.91704 10.4995 3.12642 8.71201 3.12642 6.49951C3.12642 4.29014 4.91392 2.49951 7.12642 2.49951C9.33579 2.49951 11.1264 4.28701 11.1264 6.49951C11.1264 8.70889 9.33892 10.4995 7.12642 10.4995Z" fill="#1E6F5C"></path>
      </svg>
    `;

  function searchEvent() {

    if (isHidden(searchBox)) {
      searchBox.style.display = "block";
      const searchIcon = searchForm.querySelector(":scope > svg");
      if (searchIcon) {
        searchIcon.remove();
      }
      searchForm.insertAdjacentHTML("beforeend", crossSvg);
    } else {
      searchBox.style.display = "none";
      const searchIcon = searchForm.querySelector(":scope > svg");
      if (searchIcon) {
        searchIcon.remove();
      }
      searchForm.insertAdjacentHTML("beforeend", searchSvg);
    }

    const searchIconElement = searchForm.querySelector(":scope > svg");
    if (searchIconElement) {
      searchIconElement.addEventListener("click", searchEvent);
    }
  }

  const initialSearchIcon = searchForm.querySelector(":scope > svg");
  if (initialSearchIcon) {
    initialSearchIcon.addEventListener("click", searchEvent);
  }

}

/* Accordian(faq)
====================================================*/
const detailsElements = document.querySelector("details");

if (detailsElements) {

  const summaryElements = document.querySelector("summary");

  summaryElements.forEach((summary, index) => {
    summary.addEventListener("click", () => {
      // Close other open details elements
      detailsElements.forEach((details, i) => {

        if (i !== index) {
          details.open = false;
        }
      });
    });
  });

}






