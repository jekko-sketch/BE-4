import axios from 'axios';

window.axios = axios;

const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
}
