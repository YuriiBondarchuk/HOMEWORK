describe ("function checkDogOwner", function(){
    it ("does it exist", function(){
        expect (typeof checkDogOwner).toBe("function");
    });

    it ("there is a function notify", function(){
        expect (typeof notify).toBe("function");
    });


    it ("can fail manually", function() {

        checkDogOwner(false, function (){
            fail("Callback has been called");
    });
    });


})
