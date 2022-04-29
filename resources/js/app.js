require('./bootstrap');

(async()=>{


await axios.get('/sanctum/csrf-cookie').then(response => {
    console.log('csrf-cookie', response);
});

await axios.get('/login').then(response =>{
    console.log('login', response);
});

await axios.get('/users').then(response =>{
    console.log('user', response);
});

await axios.get('/api/user').then(response =>{
    console.log('api user', response);
});

})()
