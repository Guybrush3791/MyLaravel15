require('./bootstrap');

window.Vue = require('vue');
$ = require('jquery');

function init() {

  new Vue({
    el: "#app"
  });
}

$(document).ready(init);
