window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';


// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'a1fdb3a09dd71c2322c2',
//     httpHost: window.location.hostname,
//     wsHost: window.location.hostname,
//     wsPort: 6001,
//     forceTLS: false,
// });

window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: 'sockets.test' + ":6001"
    // host: '139.162.153.65' + ":1337"
});

// window.Echo.channel('laravel_database_test')
//     .listen('test', (e) => {
//         console.log(e);
//         alert(1)
//     });
// window.Echo.channel('test')
//     .listen('test', (e) => {
//         console.log(e);
//         alert(2)
//     });
