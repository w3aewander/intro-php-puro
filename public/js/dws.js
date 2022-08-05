/** 
 * Diálogos WS é uma biblioteca Javascript criada
 * por Wanderlei Silva do Carmo para servir mensagens de diálogo de forma simples e de fácil utilização.
 * 
 */


const dwsOk = (title, message, type='info', callback=null)  => {

    const dlgBox = document.createElement('div');
    dlgBox.setAttribute('style', 
                        `display: flex;
                        position: absolute;
                        flex-direction: column;
                        font-size: 1.2rem;
                        justify-content: space-between;                    
                         top: calc(50vh - 125px);
                         left: calc(50vw - 175px);
                         width: 350px; 
                         height: 250px;
                         border-radius: 15px;
                         box-shadow: 1px 2px 5px rgba(0,0,0, .6);
                         border: 1px solid gray; 
                         z-index: 9999;
                         animation: anima-dlgbox .6s linear`);
    
    const dlgTitle = document.createElement('div');
    dlgTitle.setAttribute('style', 
                        `display: flex;    
                         flex-direction: row;
                         padding: 10px 15px 5px;
                         font-size: 1.3rem;
                         padding-bottom: 0;
                         border-top-left-radius: 15px;
                         border-top-right-radius: 15px;
                         background-color: rgba(250, 235, 205,.9);`);
    
    const titleNode = document.createTextNode(title);
    dlgTitle.appendChild(titleNode);

    const dlgMessage = document.createElement('div');
    dlgMessage.setAttribute('style', 
    `display: flex;                        
     flex-direction: row;
     justify-content: center;
     align-items: center;
     padding: 1.1rem;
     height: 150px;`);

    // adicionando o texto da mensagem
    const messageNode = document.createTextNode(message);
    dlgMessage.appendChild(messageNode);

    const dlgFooter = document.createElement('div');
    dlgFooter.setAttribute('style', 
                        `display: flex;
                        justify-content: center;                        
                         flex-direction: row;
                         padding: 5px;
                         background-color: rgba(250, 235, 205,.9);`);
    
    const btnOk = document.createElement('button');
    const btnOkText = document.createTextNode('OK');

    // ícone do botão ok
    const btnIcon = document.createElement('i');
    btnIcon.setAttribute('class','fa fa-check fa-fw');   
    btnOk.append(btnOkText)
    btnOk.append(btnIcon);
    btnOk.setAttribute('class',`btn btn-${type} btn-block`);
    btnOk.addEventListener('click', () => { callback(); setTimeout( () => {dlgBox.remove() }, 500 );} );
    dlgFooter.appendChild(btnOk)

    dlgTitle.setAttribute('class',`bg-${type}`);
    dlgBox.appendChild(dlgTitle);

    // ícone da caixa de diálogo
    dlgIcon = document.createElement('i');
    dlgIcon.setAttribute('class',`ml-4 fa fa-3x fa-${type}-circle text-${type}`);

    dlgMessage.appendChild(dlgIcon);

    // adicionando a mensagem
    dlgBox.appendChild(dlgMessage);

    // adicionando um ícone para a caixa de diálogo
    dlgFooter.setAttribute('class',`bg-${type}`);
    dlgBox.appendChild(dlgFooter);

    // adicionando os componentes do diálogo
    document.querySelector('#app').appendChild(dlgBox);

}


const dwsYesNo = (title, message, type='primary', callbackYes=null, callbackNo=null) => {

    const dlgBox = document.createElement('div');
    dlgBox.setAttribute('style', 
                        `display: flex;
                        position: absolute;
                        flex-direction: column;
                        font-size: 1.2rem;
                        justify-content: space-between;                    
                         top: calc(50vh - 125px);
                         left: calc(50vw - 175px);
                         width: 350px; 
                         height: 250px;
                         border-radius: 15px;
                         box-shadow: 1px 2px 5px rgba(0,0,0, .6);
                         border: 1px solid gray; 
                         z-index: 9999;
                         animation: anima-dlgbox .6s linear`);
    
    const dlgTitle = document.createElement('div');
    dlgTitle.setAttribute('style', 
                        `display: flex;    
                         flex-direction: row;
                         padding: 10px 15px 5px;
                         font-size: 1.3rem;
                         padding-bottom: 0;
                         border-top-left-radius: 15px;
                         border-top-right-radius: 15px;
                         background-color: rgba(250, 235, 205,.9);`);
    
    const titleNode = document.createTextNode(title);
    dlgTitle.appendChild(titleNode);

    const dlgMessage = document.createElement('div');
    dlgMessage.setAttribute('style', 
    `display: flex;                        
     flex-direction: row;
     justify-content: center;
     align-items: center;
     padding: 1.1rem;
     height: 150px;`);

    // adicionando o texto da mensagem
    const messageNode = document.createTextNode(message);
    dlgMessage.appendChild(messageNode);

    const dlgFooter = document.createElement('div');
    dlgFooter.setAttribute('style', 
                        `display: flex;
                        justify-content: center;                        
                         flex-direction: row;
                         padding: 5px;
                         background-color: rgba(250, 235, 205,.9);`);
    
    const btnYes = document.createElement('button');
    const btnYesText = document.createTextNode('Sim');
    const btnNo = document.createElement('button');
    const btnNoText = document.createTextNode('Não');

    // ícone do botão ok
    const btnYesIcon = document.createElement('i');
    btnYesIcon.setAttribute('class','fa fa-check fa-fw');   
    btnYes.append(btnYesText)
    btnYes.append(btnYesIcon);
    btnYes.setAttribute('class',`btn btn-success`);
    btnYes.addEventListener('click', () => { callbackYes(); setTimeout( () => {dlgBox.remove() }, 500 );} );
    
    // ícone do botão ok
    const btnNoIcon = document.createElement('i');
    btnNoIcon.setAttribute('class','fa fa-check fa-fw');   
    btnNo.append(btnNoText)
    btnNo.append(btnNoIcon);
    btnNo.setAttribute('class',`btn btn-danger`);
    btnNo.addEventListener('click', () => { callbackNo(); setTimeout( () => {dlgBox.remove() }, 500 );} );
    
    dlgFooter.appendChild(btnYes);
    dlgFooter.appendChild(btnNo);

    dlgTitle.setAttribute('class',`bg-${type}`);
    dlgBox.appendChild(dlgTitle);

    // ícone da caixa de diálogo
    dlgIcon = document.createElement('i');
    dlgIcon.setAttribute('class',`ml-4 fa fa-3x fa-${type}-circle text-${type}`);

    dlgMessage.appendChild(dlgIcon);

    // adicionando a mensagem
    dlgBox.appendChild(dlgMessage);

    // adicionando um ícone para a caixa de diálogo
    dlgFooter.setAttribute('class',`bg-${type}`);
    dlgBox.appendChild(dlgFooter);

    // adicionando os componentes do diálogo
    document.querySelector('#app').appendChild(dlgBox);

}