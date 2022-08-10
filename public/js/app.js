( () => {
  const link = document.createElement('link')
  link.rel = 'stylesheet'
  link.href = '/css/app.css'
  document.head .appendChild(link)

  const ancor = document.querySelectorAll('a')

  ancor.forEach(link => {

    link.addEventListener('click', (evt) => {

      evt.preventDefault();
      //console.log("Prevenindo o padrão.")
      const target = evt.target.getAttribute('data-target')
      const app = document.querySelector("#app")

      loadPage(target)

    })

  })

  setInterval( () =>{
    //let y = Math.floor(Math.random() * 100)
    
    //document.querySelector('body').style.background = `radial-gradient( circle at ${y}%, #4196ffa5 ${Math.ceil(x/y)}%,#1a94ff ${x}%, #00a2ff 50%, #3711a9 90% ) no-repeat`;
    //if ( x >= 10 ) { x = 0; }
    //x = x + .1;
  },1000)

})()

const sendMail = (evt) => {
  
  console.log(evt.target)
  evt.target.preventDefault()

  alert ("Prevenindo..")

  const addr = e.target.email.value
  const name = e.target.nome.value
  const subject = e.target.assunto.value
  const celular = e.target.celular.value
  const message = e.target.mensagem.value

  fetch('/sendmail', {
    method: 'POST',
    headers: {'Content-Type': 'application/json, charset=utf8'},  
    body: JSON.stringify({addr,name, subject,celular, message})
  })
  .then( r => r.json())
  .then( r => console.log(r))
  .catch ( err => console.log(err)) 

}

const loadPage = (page) => {  
  
    fetch(`/../${page}.tpl`)
         .then( r => r.text())
         .then( r => app.innerHTML = r )
  
}

//Abrir a página inicial por padrão.
loadPage('inicio')

