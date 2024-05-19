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

const formSendSearch = (t, e) => {
    
    e.preventDefault(); 
    window.location = `/search/${t[0].value}?page=1`;

}
