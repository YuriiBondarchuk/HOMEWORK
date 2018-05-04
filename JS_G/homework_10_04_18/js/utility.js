

function notify() {

    console.log("You have a dog! Use this code for 50% off: UG4H6QE");

}


function checkDogOwner(user, callback) {

    if (user && user.dog) {

        callback();

    }

}
