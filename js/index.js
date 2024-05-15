

const accordionItems = document.querySelectorAll('.accordion__item');

accordionItems.forEach((e) => {
    e.classList.add('active');

})


const secondLink = document.querySelectorAll('.menu__link');

secondLink.forEach((e, index) => {
    if(index === 1) {
        e.insertAdjacentHTML('beforeend', `<svg class="header-arrow-is-sticky" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.03516 0.93042L5.03516 4.93042L1.03516 0.93042" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
      </svg> 
      <svg class="header__arrow" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.03516 0.93042L5.03516 4.93042L1.03516 0.93042" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
    </svg> `)
    }
})

function inputChecked() {
    const inputs = document.querySelectorAll('.filter__label');

    inputs.forEach((e) => {
        e.addEventListener('click', (event)=> {
            let target = event.currentTarget;
            let labelBtn = target.querySelector('.filter__button');
            labelBtn.classList.add('active');
            if(labelBtn.classList.contains('active')) {
                console.log('yes');
            }
            localStorage.setItem('addedClass',labelBtn );
        })
    })
}

inputChecked()


