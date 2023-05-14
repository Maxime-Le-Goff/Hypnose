const edit = document.querySelectorAll('.edit');

function setCaretPosition(ctrl, pos) {
    ctrl.focus();
    ctrl.setSelectionRange(pos, pos);
  
}


for(let x = 0; x < edit.length; x++){

    edit[x].addEventListener('click', (e) => {

        const ths = e.target;
        if(ths.localName == 'p'){

            const textarea = document.createElement('textarea');
            ths.setAttribute('data-text', ths.innerHTML);
            textarea.setAttribute('rows', '10')
            textarea.value = ths.innerText;
            textarea.style.height = 'fit-content';
            textarea.style.width = '100%';
            textarea.style.backgroundColor = 'white';
            textarea.style.fontSize = "1.5em";
            ths.innerHTML = '';
            ths.append(textarea); 
            setCaretPosition(textarea, textarea.value.length);
            textarea.addEventListener('blur', (e) => {

                const orign_text = textarea.parentElement.getAttribute('data-text');
                const current_text = textarea.value;
                if(orign_text != current_text){
                    ths.textContent = current_text;
                } else {
                    ths.textContent = orign_text;
                }
                
                textarea.textContent = '';
            },
            true
            );
            
        } else {

            const input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.value = ths.innerText;
            input.style.width = '100%';
            input.style.backgroundColor = 'white';
            input.style.color = 'black';
            input.style.fontSize = "1.5em";
            ths.innerHTML = '';
            ths.append(input);
            setCaretPosition(input, input.value.length);
            input.addEventListener('blur', (e) => {

                const orign_text = input.parentElement.getAttribute('data-text');
                const current_text = input.value;
                if(orign_text != current_text){
                    ths.textContent = current_text;
                } else {
                    ths.textContent = orign_text;
                }
                
                // input.textContent = '';
            })

        }  
    })

}