const rubriques = document.querySelectorAll('.rubrique_btn');
for(const rubrique of rubriques){
    rubrique.addEventListener('click',(event) => {
        const div = event.toElement.closest('.rubrique').querySelector('.pblms');
            if(div.classList.contains('extended')){
                div.classList.remove('extended');
            } else {
                div.classList.add('extended');
            }
        }
    )
    }
    