import './bootstrap';
import 'preline';

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js', { scope: '/' }).then(function (registration) {
        console.log(`SW registered successfully!`);
    }).catch(function (registrationError) {
        console.log(`SW registration failed`);
    });
}
