var Vue = require('vue');

new Vue({
    el: '#login-form',


    filters: {
        reverse: require('./filters/reverse')
    }
});