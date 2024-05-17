const formSend = (t, e, m, u) => {

    e.preventDefault();

    return new Promise((res, rej) => {

        const xhttp = new XMLHttpRequest;

        xhttp.open('GET', '/search/' + t[0].value, true);
        xhttp.onload = () => {
            res(xhttp.responseURL);
        }
        xhttp.send();

    })
    .then(r => window.location = r)
    .catch(e => console.log(e));
    
}

