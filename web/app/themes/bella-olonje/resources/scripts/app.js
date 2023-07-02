import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);

document.getElementById("open_nav").onclick = function(){
  document.getElementById("mySidenav").style.width = "80%";
}

document.getElementById("close_nav").onclick = function(){
  document.getElementById("mySidenav").style.width = "0";
}