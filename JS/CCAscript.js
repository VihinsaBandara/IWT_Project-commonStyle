/*document.addEventListener("DOMContentLoaded", () => {
    const selectDrop = document.querySelector('#Country');
    //const selectDrop =document.getElementById('Country');
    fetch('https://restcountries.com/v3.1/all').then((respond) => {
        return respond.json();
    }).then(data =>{ 
        let output ="";
        data.forEach(country => {
        output += `<option value="${country.name}"> ${country.name}</option>`;
    })
    selectDrop.innerHTML = output;
    
    }).catch(err => {
        console.log(err);
    })
})*/