import './bootstrap';
import './alpine';
import './flowbite';

// Importa il componente principale di Vue
import { createApp } from 'vue';
import App from './components/App.vue';

// Crea l'applicazione Vue
const app = createApp(App);

// Monta l'applicazione
app.mount('#app');
