let cep = document.querySelector('#inputCep');
let street = document.querySelector('#inputAddress');
let district = document.querySelector('#inputDistrict');
let city = document.querySelector('#inputCity');
let state = document.querySelector('option[selected="selected"]');

cep.addEventListener('blur', () => {
    fcookie='cep street district city state '.split(" ");
    let vcep = cep.value
    document.cookie=fcookie[0]+"=" +cep.value
    carregarCep(vcep)
})

function carregarCep(cep){
    let url = `https://viacep.com.br/ws/${cep}/json/`
    fetch(url)
    .then(res => res.json())
    .then(cepinfo => { 
       cep.value = cepinfo.cep
       street.value = cepinfo.logradouro
       district.value = cepinfo.bairro
       city.value = cepinfo.localidade
       state.value = cepinfo.uf
       state.innerHTML = cepinfo.uf
       document.cookie=fcookie[1]+"=" +street.value
       document.cookie=fcookie[2]+"=" +district.value
       document.cookie=fcookie[3]+"=" +city.value
       document.cookie=fcookie[4]+"=" +state.value
       console.log(city.value)
    })
}
