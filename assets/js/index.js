// CLASS
const classHide = 'd-none';
const classShow = 'act';
const _hide = 'animate__fadeOut';
const _show = 'animate__fadeIn';
const entrance = 'animate__fadeInRight';
const entrance2 = 'animate__fadeInLeft';

const _exit = 'animate__fadeOutLeft';

const vName = /^[a-zA-Z\s]*$/;
const vTelf = /^\+([0-9|\s])+$/;
const vEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
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

//Validation and data

const inputs = document.querySelectorAll('.input-');
console.log('inputs', inputs);
// error log
let errorInputs = {
    name: {
        status: '',
        message: ''
    },
    email: {
        status: '',
        message: ''
    },
    telf: {
        status: '',
        message: ''
    },
    policy: {
        status: '',
        message: ''
    },
};

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


    //console.log('state', current);
    //show next
    if (state[current + 1] != undefined) {
        current++;

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));

        //console.log('state', current);
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


    //console.log('state', current);
    //show next
    if (state[current - 1] != undefined) {

        current--;

        manStatusBar(statusBar, (((current + 1) * 100) / state.length));

        //console.log('state', current);

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

function showError(message, obj) {
    //<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    //console.log('error message', message);
    const ele = document.createElement('div');
    ele.setAttribute('class', 'd-block invalid-feedback');
    ele.innerText = message;
    obj.appendChild(ele);
    return ele;
}

function hideError(obj) {
    obj.remove();
}

function validarNombre(input) {
    // /^[a-zA-Z\s]*$/

    if (input.length > 80) {
        errorInputs.name.status = 'error';
        errorInputs.name.message = 'Nombre muy largo';
        //console.log(errorInputs.name.message);
        return false;
    }

    if (input.length < 4) {

        errorInputs.name.status = 'error';
        errorInputs.name.message = 'Nombre muy corto';
        //console.log(errorInputs.name.message);
        return false;
    }
    if (!vName.test(input)) {
        errorInputs.name.status = 'error';
        errorInputs.name.message = 'formato invalido';
        //console.log(errorInputs.name.message);
        return false;
    }
    return true;
}

function validarTelf(input) {
    // /^\+([0-9|\s])+$/

    return vTelf.test(input)
}

function validarEmail(input) {
    // ^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$
    return vEmail.test(input);
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

//activate inputs
/*inputs.forEach((element)=>{
    
    element.addEventListener(()=>{
        
    });
});*/
//name
let errS;

inputs[0].addEventListener('blur', (e) => {
    console.log(e.target.value);

    let value = e.target.value;
    console.log('length', value.length);
    inputs[0].parentElement.lastChild.innerText = '';

    if (!validarNombre(value)) {
        console.log(errorInputs.name);

        inputs[0].classList.add('is-invalid');
        btnNext.classList.remove('btn-success');
        btnNext.setAttribute('disabled', 'disabled');
        errS = showError(errorInputs.name.message, inputs[0].parentElement);

    } else {
        inputs[0].classList.remove('is-invalid');
        btnNext.removeAttribute('disabled');
        btnNext.classList.add('btn-success');
        hideError(errS);
        //errorInputs.name.status = '';
        //errorInputs.name.message.pop();
    }


});