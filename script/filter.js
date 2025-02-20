const filterBox = document.querySelectorAll('.box');

document.querySelector('.div').addEventListener('click', event =>{
    if(event.target.tagName !== 'BUTTON') return false;

    let filterClass = event.target.dataset['f'];
    
    filterBox.forEach(elem=>{
        elem.classList.remove('d-none');
        if(!elem.classList.contains(filterClass) && filterClass !== 'all'){
            elem.classList.add('d-none');
        }
    })
})
