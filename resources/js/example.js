// Import the Echo instance
import Echo from './echo';


Echo.channel('chat')
    .listen('Example', (event) => {
       alert('Hoşgeldiniz ' + event.user.name);
    });



