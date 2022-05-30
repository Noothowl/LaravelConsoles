//Config axios to use the token
//Axios can make petitions to laravel
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = document.querySelector("meta[name='csrf-token']").content;