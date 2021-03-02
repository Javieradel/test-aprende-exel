// CLASS
const classHide = 'd-none';
const classShow = 'act';
const _hide = 'animate__fadeOut';
const _show = 'animate__fadeIn';
const entrance = 'animate__fadeInRight';
const entrance2 = 'animate__fadeInLeft';

const _exit = 'animate__fadeOutLeft';
//ELEMENTS
//para Cambiar entre etapas
//btns
const btnBack = document.querySelector('#btn-back');
const btnNext = document.querySelector('#btn-next');

//statusBar
const statusBar = document.querySelector('#progress-bar');
//steps
const steps = document.querySelectorAll('.step');
console.log('etapas', steps);
//current step
let current;

// status bar
function setInitStatus() {
    //set start status

    if (current == undefined) {

        steps.forEach((element, index) => {
            if (element.classList.contains(classShow)) {
                current = index;
                console.log('current is', current);
            }
        });
    }

    //set init status bar
    manStatusBar(statusBar, (((current + 1) * 100) / steps.length));
}

function manStatusBar(obj, status) {
    obj.style.width = status + '%';
}
// change on steps
function nextHandle(actuate, state, isError) {

    //out current
    if (state[current + 1] != undefined) {
        //state[current].classList.add(_exit);
        state[current].classList.remove(classShow);
        state[current].classList.remove(entrance2);
        state[current].classList.remove(entrance);
        state[current].classList.remove(_exit);
        state[current].classList.add(classHide);

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));
    } else {
        actuate.setAttribute('disabled', 'disabled');
    }


    console.log('state', current);
    //show next
    if (state[current + 1] != undefined) {
        current++;

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));

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
    if (current > 0) {
        actuate.removeAttribute('disabled');
    }
    if (current < state.length - 1) {
        actuate.removeAttribute('disabled');
    }

}

function backHandler(actuate, state, isError) {

    //out current
    if (state[current - 1] != undefined) {

        //state[current].classList.add(_exit);
        state[current].classList.remove(classShow);
        state[current].classList.remove(entrance2);
        state[current].classList.remove(entrance);
        state[current].classList.remove(_exit);
        state[current].classList.add(classHide);

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));
    } else {
        actuate.setAttribute('disabled', 'disabled');
    }


    console.log('state', current);
    //show next
    if (state[current - 1] != undefined) {

        current--;

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));

        console.log('state', current);

        state[current].classList.remove(classHide);
        state[current].classList.add(entrance2);

        if (state[current] <= 0) {

            actuate.setAttribute('disabled', 'disabled');
            current = 0;
        }
    } else {
        actuate.setAttribute('disabled', 'disabled');
    }
    if (current > 0) {
        actuate.removeAttribute('disabled');
    }
    if (current < state.length - 1) {
        actuate.removeAttribute('disabled');
    }
}




window.onload = () => {
    setInitStatus();
};
btnNext.addEventListener('click', (e) => {
    nextHandle(btnNext, steps);
});

btnBack.addEventListener('click', (e) => {
    backHandler(btnBack, steps);
});