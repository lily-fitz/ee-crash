$(function () {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
      $('.jc-sticky-header').addClass('active')
      $('.jaxcode-logo').addClass('active')
      $('.grand-opening').addClass('go-active')
      $('.ee').addClass('ee-active')
      $('.enroll').addClass('rolling')
      $('.bg-main-home').addClass('home-active')
      $('body').addClass('scrolled')
    } else {
      $('.jc-sticky-header').removeClass('active')
      $('.jaxcode-logo').removeClass('active')
      $('.grand-opening').removeClass('go-active')
      $('.ee').removeClass('ee-active')
      $('.enroll').removeClass('rolling')
      $('body').removeClass('scrolled')
    }
  })
})

const nav = document.querySelector('.primary-nav')
const navToggle = document.querySelector('.menu-toggle')
const pageBody = document.querySelector('body')
const headerNav = document.getElementById('header')

navToggle.addEventListener('click', (e) => {
  navToggle.classList.toggle('menu-toggle-active')

  const visibility = nav.getAttribute('data-visible')
  if (visibility === 'false') {
    nav.setAttribute('data-visible', true)
    e.target.setAttribute('aria-expanded', true)
    pageBody.classList.add('nav_open-no_scroll')
    $('.jc-sticky-header').addClass('navopen')
  } else {
    nav.setAttribute('data-visible', false)
    e.target.setAttribute('aria-expanded', false)
    pageBody.classList.remove('nav_open-no_scroll')
    $('.jc-sticky-header').removeClass('navopen')
  }
})

// document.onclick = function (e) {
//   const visibility = nav.getAttribute('data-visible')

//   if (visibility === 'true') {
//     if (
//       nav !== e.target &&
//       navToggle !== e.target &&
//       nav !== e.target.offsetParent &&
//       navToggle !== e.target.offsetParent
//     ) {
//       nav.setAttribute('data-visible', false)
//       navToggle.classList.remove('menu-toggle-active')
//     }
//   }
// }

window.addEventListener('keydown', (e) => {
  // if (e.keyCode == 27) {
  let keydownEscape = e.key === 'Escape' || e.keyCode === 27
  const visibility = nav.getAttribute('data-visible')

  if (visibility === 'true') {
    if (keydownEscape) {
      nav.setAttribute('data-visible', false)
      navToggle.setAttribute('aria-expanded', false)
      navToggle.classList.remove('menu-toggle-active')
      pageBody.classList.remove('nav_open-no_scroll')
    }
  }
})

const navLinks = document.querySelector('.nav')

const focusableElements =
  'button:not([disabled]), [href]:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), details:not([disabled]), [tabindex]:not([tabindex="-1"])'

const firstFocusableElement = navLinks.querySelectorAll(focusableElements)[0]
const focusableContent = navLinks.querySelectorAll(focusableElements)
const lastFocusableElement = focusableContent[focusableContent.length - 1]

document.addEventListener('keydown', function (e) {
  let isTabPressed = e.key === 'Tab' || e.keyCode === 9

  if (!isTabPressed) {
    return
  }

  if (e.shiftKey) {
    // if shift key pressed for shift + tab combination
    if (document.activeElement === firstFocusableElement) {
      lastFocusableElement.focus() // add focus for the last focusable element
      e.preventDefault()
    }
  } else {
    // if tab key is pressed
    if (document.activeElement === lastFocusableElement) {
      // if focused has reached to last focusable element then focus first focusable element after pressing tab
      firstFocusableElement.focus() // add focus for the first focusable element
      e.preventDefault()
    }
  }
})

// firstFocusableElement.focus()

const navigationLinks = document.querySelectorAll('.primary-nav li a')

navigationLinks.forEach((link) => {
  link.addEventListener('click', () => {
    nav.setAttribute('data-visible', false)
    navToggle.setAttribute('aria-expanded', false)
    navToggle.classList.toggle('menu-toggle-active')
    pageBody.classList.remove('nav_open-no_scroll')
  })
})

const sections = document.querySelectorAll('section')
const navLink = document.querySelectorAll('nav a')

window.onscroll = () => {
  var current = ''

  sections.forEach((section) => {
    const sectionTop = section.offsetTop
    const pageHeight = document.body.offsetHeight

    if (scrollY >= sectionTop - 260 && pageHeight - scrollY >= 900) {
      current = section.getAttribute('id')
    }
  })

  navLink.forEach((link) => {
    link.classList.remove('active')
    if (link.classList.contains(current)) {
      link.classList.add('active')
    }
  })
}
