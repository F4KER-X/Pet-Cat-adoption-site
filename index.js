function validateFindDogCat() {
    //validating type select
    const type = document.getElementById('type')
    type.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (type.value === "") {
        type.classList.add('is-invalid');
    }

    //validating breed select
    const breed = document.getElementById('breed')
    breed.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (breed.value === "") {
        breed.classList.add('is-invalid');
    }
    //validating age select
    const age = document.getElementById('age')
    age.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (age.value === "") {
        age.classList.add('is-invalid');
    }
    //validating gender select
    const gender = document.getElementById('gender')
    gender.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (gender.value === "") {
        gender.classList.add('is-invalid');
    }
    //validating getalong select
    const getalongD = document.getElementById('getalongD')
    getalongD.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (getalongD.value === "") {
        getalongD.classList.add('is-invalid');
    }

    const getalongChild = document.getElementById('getalongChild')
    getalongChild.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (getalongChild.value === "") {
        getalongChild.classList.add('is-invalid');
    }

    const getalongC = document.getElementById('getalongC')
    getalongC.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (getalongC.value === "") {
        getalongC.classList.add('is-invalid');
    }

    //reset the is-invalid classes
    const resetButton = document.getElementById('reset');
    resetButton.addEventListener('click', () => {
        // Remove the classes
        type.classList.remove('is-invalid');
        getalongChild.classList.remove('is-invalid');
        gender.classList.remove('is-invalid');
        age.classList.remove('is-invalid');
        breed.classList.remove('is-invalid');
        getalongD.classList.remove('is-invalid');
        getalongC.classList.remove('is-invalid');
        return;
    });


    //if any of the values is empty the form will not be submitted.
    if (type.value === '' || breed.value === '' || age.value === '' || gender.value === '' || getalongChild.value === '' || getalongD.value === '' || getalongC.value === '') {
        return false;
    }
}


//getting time in a format
function displayDateTime() {
    const now = new Date();
    const date = now.toDateString();
    const time = now.toLocaleTimeString();
    document.getElementById("datetime").innerHTML = date + " " + time;
}
//having the time ready when the page load
displayDateTime();
//displaying the time with an interval of 1 sec
setInterval(displayDateTime, 1000);


//
function validateGiveAway() {

    //validate the type select
    const type = document.getElementById('type')
    type.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (type.value === "") {
        type.classList.add('is-invalid');
    }

    //validate the breed select
    const breed = document.getElementById('breed')
    breed.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (breed.value === "") {
        breed.classList.add('is-invalid');
    }

    //validate the age select
    const age = document.getElementById('age')
    age.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (age.value === "") {
        age.classList.add('is-invalid');
    }


    //validate the gender select
    const gender = document.getElementById('gender')
    gender.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (gender.value === "") {
        gender.classList.add('is-invalid');
    }


    //validate the comment section
    const comment = document.getElementById('formControlTextarea')
    comment.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (comment.value === "") {
        comment.classList.add('is-invalid');
    }


    //validate the first name
    const fname = document.getElementById('fname')
    fname.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (fname.value === "") {
        fname.classList.add('is-invalid');
    }

    //validate last name
    const lname = document.getElementById('lname')
    lname.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (lname.value === "") {
        lname.classList.add('is-invalid');
    }

    //validate the email
    const inputEmail3 = document.getElementById('inputEmail3')
    inputEmail3.addEventListener('blur', event => {
        if (event.target.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
            event.target.classList.remove('is-invalid');
        } else {
            event.target.classList.add('is-invalid');
        }
    })
    if (inputEmail3.value === "" || !(inputEmail3.value).match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        inputEmail3.classList.add('is-invalid');
    }
    //validate Pet's name
    const petName = document.getElementById('petName')
    lname.addEventListener('change', event => {
        if (event.target.value === "") {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (petName.value === "") {
        petName.classList.add('is-invalid');
    }


    //Does it get along with other Dogs?
    const yesD = document.getElementById('yesD')
    const noD = document.getElementById('noD')
    yesD.addEventListener('change', radioChangeHandlerDogs);
    noD.addEventListener('change', radioChangeHandlerDogs);

    function radioChangeHandlerDogs(event) {
        if (event.target.checked) {
            // Remove the 'is-invalid' class if one of the radio buttons is selected
            yesD.classList.remove('is-invalid')
            noD.classList.remove('is-invalid')
        } else {
            // Add the 'is-invalid' class if neither of the radio buttons is selected
            yesD.classList.add('is-invalid')
            noD.classList.add('is-invalid')
        }
    }
    if (!yesD.checked && !noD.checked) {
        yesD.classList.add('is-invalid')
        noD.classList.add('is-invalid')
    }

    //Does it get along with other Cats?
    const yesC = document.getElementById('yesC')
    const noC = document.getElementById('noC')
    yesC.addEventListener('change', radioChangeHandlerCats);
    noC.addEventListener('change', radioChangeHandlerCats);

    function radioChangeHandlerCats(event) {
        if (event.target.checked) {
            // Remove the 'is-invalid' class if one of the radio buttons is selected
            yesC.classList.remove('is-invalid')
            noC.classList.remove('is-invalid')
        } else {
            // Add the 'is-invalid' class if neither of the radio buttons is selected
            yesC.classList.add('is-invalid')
            noC.classList.add('is-invalid')
        }
    }
    if (!yesC.checked && !noC.checked) {
        yesC.classList.add('is-invalid')
        noC.classList.add('is-invalid')
    }


    //Suitable for a family with small children?
    const yeschild = document.getElementById('yeschild')
    const nochild = document.getElementById('nochild')
    yeschild.addEventListener('change', radioChangeHandlerChildren);
    nochild.addEventListener('change', radioChangeHandlerChildren);

    function radioChangeHandlerChildren(event) {
        if (event.target.checked) {
            // Remove the 'is-invalid' class if one of the radio buttons is selected
            yeschild.classList.remove('is-invalid')
            nochild.classList.remove('is-invalid')
        } else {
            // Add the 'is-invalid' class if neither of the radio buttons is selected
            yeschild.classList.add('is-invalid')
            nochild.classList.add('is-invalid')
        }
    }
    if (!yeschild.checked && !nochild.checked) {
        yeschild.classList.add('is-invalid')
        nochild.classList.add('is-invalid')
    }


    const resetButton = document.getElementById('reset');
    resetButton.addEventListener('click', () => {
        // Remove the classes
        type.classList.remove('is-invalid');
        inputEmail3.classList.remove('is-invalid');
        lname.classList.remove('is-invalid');
        fname.classList.remove('is-invalid');
        gender.classList.remove('is-invalid');
        age.classList.remove('is-invalid');
        breed.classList.remove('is-invalid');
        yeschild.classList.remove('is-invalid')
        nochild.classList.remove('is-invalid')
        yesC.classList.remove('is-invalid')
        noC.classList.remove('is-invalid')
        yesD.classList.remove('is-invalid')
        noD.classList.remove('is-invalid')
        petName.classList.remove('is-invalid')
        comment.classList.remove('is-invalid')

        return;
    });

    if (type.value === '' || breed.value === '' || age.value === '' || gender.value === '' || fname.value === '' || lname.value === '' || inputEmail3.value === '' || (!yesD.checked && !noD.checked) || (!yesC.checked && !noC.checked) || (!yeschild.checked && !nochild.checked) || comment.value === '' || petName === '') {
        return false;
    }
}

function validateRegister() {

    //get username 
    const username = document.getElementById('username')
    username.addEventListener('change', event => {
        if (event.target.value === "" || !validateUsername(username)) {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (username.value === "" || !validateUsername(username)) {
        username.classList.add('is-invalid');
    }

    //get password
    const password = document.getElementById('password')
    password.addEventListener('change', event => {
        if (event.target.value === "" || !validatePassword(password)) {
            event.target.classList.add('is-invalid');
        } else {
            event.target.classList.remove('is-invalid');
        }
    })
    if (password.value === "" || !validatePassword(password)) {
        password.classList.add('is-invalid');
    }


    //check if they are empty
    if (username.value === '' || password.value === '' || !validateUsername(username) || !validatePassword(password)) {
        return false;
    }

}

//compare username with pattern
function validateUsername(username) {
    const usernameRegex = /^[a-zA-Z0-9]+$/;
    return usernameRegex.test(username.value);
}

//compare password with pattern
function validatePassword(password) {
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;

    return passwordRegex.test(password.value);
}