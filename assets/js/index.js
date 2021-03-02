// CLASS
const classHide = 'd-none';
const classShow = 'act';
const _hide = 'animate__fadeOut';
const _show = 'animate__fadeIn';
const entrance = 'animate__fadeInRight';
const _exit = 'animate__fadeOutLeft';
//ELEMENTS
//para Cambiar entre etapas
//btns
const btnBack = document.querySelector('#btn-back');
const btnNext = document.querySelector('#btn-next');

//steps
const steps = document.querySelectorAll('.step');
console.log('etapas', steps);
//current step
let current;

// change on steps
function nextHandle(event, actuate, state, isError) {

    //select current
    if (current == undefined) {

        state.forEach((element, index) => {
            if (element.classList.contains(classShow)) {
                current = index;
                console.log('current is', current);
            }
        });
    }

    //out current
    if (state[current + 1] != undefined) {
        state[current].classList.add(_exit);
        state[current].classList.remove(classShow);
        state[current].classList.add(classHide);

    } else {
        actuate.setAttribute('disabled', 'disabled');
    }
    /**setTimeout(() => {
        state[current].classList.remove(_exit);
        state[current].classList.add(classHide);
    }, 400);*/

    console.log('state', current);
    //show next
    if (state[current + 1] != undefined) {
        current++;
        console.log('state', current);
        state[current].classList.remove(classHide);
        state[current].classList.add(entrance);

        if (state[current] >= state.length - 1) {
            actuate.setAttribute('disabled', 'disabled');
            current = state.length - 1;
        }
    } else {
        actuate.setAttribute('disabled', 'disabled');
    }
}
btnNext.addEventListener('click', (e) => {
    nextHandle(e, btnNext, steps);
});