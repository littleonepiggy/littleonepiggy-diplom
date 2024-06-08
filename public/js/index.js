let profile_dropdown = document.querySelector('#profile-dropdown');
let user_menu_button = document.querySelector('#user-menu-button');
let user_menu_button_area = document.querySelector('#user-menu-button-area');

document.addEventListener('click', (e) => {

    if (e.target != user_menu_button_area) {

        setTimeout(() => { profile_dropdown.classList.add('hidden'); }, 100)
        profile_dropdown.classList.add('opacity-0');

    }

})

user_menu_button_area.addEventListener('click', () => {

    setTimeout(() => { profile_dropdown.classList.toggle('hidden'); }, 100)
    profile_dropdown.classList.toggle('opacity-0');

})

const formSend = (t, e, m = 'GET', u = '/', data = []) => {

    e.preventDefault();
    return new Promise((res, rej) => {

        const xhttp = new XMLHttpRequest;

        xhttp.open(m, u, true);
        xhttp.onload = () => {
            res(xhttp.responseURL);
        }
        xhttp.send();

    })
    .then(r => console.log(r))
    .catch(e => console.log(e));
    
}

const formSendSearch = (t, e, u = '', d = '') => {
    
    e.preventDefault(); 
    // window.location = `/search/${t[0].value}${m ?? m}`;
    window.location = `${u}${t[0].value}${d}`;

}
