(()=>{var e={9606:()=>{var e=localStorage.getItem("darkMode"),t=document.getElementById("toggle-button"),s="./app/views/pages/assets/svgs/sun.svg",o="./app/views/pages/assets/svgs/moon.svg";"true"===e||null===e?(document.body.classList.add("dark-mode"),t.src=s):(document.body.classList.add("light-mode"),t.src=o),t.addEventListener("click",(function(){document.body.classList.toggle("dark-mode"),document.body.classList.toggle("light-mode"),document.body.classList.contains("dark-mode")?(localStorage.setItem("darkMode","true"),t.src=s):(localStorage.setItem("darkMode","false"),t.src=o)}))},5079:()=>{var e=document.getElementById("toggle-sidebar"),t=document.getElementById("sidebar"),s=document.getElementById("fade");function o(e){"show"===e?(t.classList.remove("left"),t.classList.add("right"),s.classList.remove("hidden")):(t.classList.remove("right"),t.classList.add("left"),s.classList.add("hidden"))}e.addEventListener("click",(function(){o("show")})),s.addEventListener("click",(function(){o("hidden")}))}},t={};function s(o){var d=t[o];if(void 0!==d)return d.exports;var a=t[o]={exports:{}};return e[o](a,a.exports,s),a.exports}s.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return s.d(t,{a:t}),t},s.d=(e,t)=>{for(var o in t)s.o(t,o)&&!s.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},s.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";s(9606),s(5079),document.querySelectorAll(".card").forEach((function(e,t){e.querySelector("button").addEventListener("click",(function(){window.location.href="http://localhost/lemonade/wapp/exam?id=".concat(t)}))}))})()})();