let profile_dropdown = document.querySelector('#profile-dropdown');
let user_menu_button = document.querySelector('#user-menu-button');
let user_menu_button_area = document.querySelector('#user-menu-button-area');

// скрывать дропдаун при клике куда угодно
document.addEventListener('click', (e) => {

    if (e.target != user_menu_button_area && !profile_dropdown.classList.contains('hidden')) {

        setTimeout(() => { profile_dropdown.classList.add('hidden'); }, 100);
        profile_dropdown.classList.add('opacity-0');

    }

})

// скрывать/показывать дропдаун при клике
user_menu_button_area.addEventListener('click', () => {

    if (profile_dropdown.classList.contains('hidden')) {

        profile_dropdown.classList.toggle('hidden');
        setTimeout(() => { profile_dropdown.classList.toggle('opacity-0'); }, 100)

    } else {

        setTimeout(() => { profile_dropdown.classList.toggle('hidden'); }, 100)
        profile_dropdown.classList.toggle('opacity-0');

    }

});

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
    window.location = `${u}${t[0].value}${d}`;

}
