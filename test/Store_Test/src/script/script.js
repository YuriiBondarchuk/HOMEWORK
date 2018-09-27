var basket = {
    all_products: 0,
    total_sum: 0,
    balance: +money_status.innerText,
    by_name: {
        Apple: {
            number: 0,
            sum: 0
        },
        Beer: {
            number: 0,
            sum: 0
        },
        Water: {
            number: 0,
            sum: 0
        },
        Cheese: {
            number: 0,
            sum: 0
        }

    }

};

var transportadd = 0;


function addBasket(event) {


    if (event.path[0].dataset.basket == 'one_basket') {
        var price_product = event.path[1].children[1].children[0].innerText;
        var name_product = event.path[1].children[0].innerText;

    }
    else {
        var price_product = event.path[2].children[2].innerText.substring(0, event.path[2].children[2].innerText.indexOf('$'));

        var name_product = event.path[0].dataset.basket;

    }

    if (basket.balance <= price_product) {
        alert('You ran out of money');
        return;
    }
    else {

        basket.all_products++;
        basket.balance -= price_product;

        basket_status.innerText = basket.all_products;


        for (var value in basket.by_name) {

            if (name_product === value) {
                basket.by_name[value].number++;
                basket.by_name[value].sum += +price_product;
            }
        }


        basket.total_sum += +price_product;
        money_status.innerText = basket.balance.toFixed(2);
    }
    price_amount.innerText = basket.total_sum.toFixed(2) + ' $';
    apple_amount.innerText = basket.by_name.Apple.number;
    beer_amount.innerText = basket.by_name.Beer.number;
    water_amount.innerText = basket.by_name.Water.number;
    cheese_amount.innerText = basket.by_name.Cheese.number;

    console.log(basket.balance, basket.total_sum)
}


// Running the modal window

$(function () {
    $("#btn2").click(function () {
        $("#myModal2").modal('show');
        window.transportadd = 0;
    });
});
$(function () {
    $("#delivery").click(function () {

        if ($("#UPS")[0].checked) {
            // var delivery = {
            //     name: 'UPS',
            //     price: 5
            // }
            // basket.balance -= delivery.price;
            // money_status.innerText = basket.balance.toFixed(2);
            // console.log(delivery.name);
            $("#myModal2").modal('hide');
            basket.all_products = 0;
            basket_status.innerText = basket.all_products;

            upgradeMoneyDB ();

            return;
        }

        if ($("#Pick_up")[0].checked) {
            var delivery = {
                name: 'Pick_ap',
                price: 0
            }
            basket.balance -= delivery.price;
            money_status.innerText = basket.balance.toFixed(2);
            // console.log(delivery.name)
            $("#myModal2").modal('hide');
            basket.all_products = 0;
            basket_status.innerText = basket.all_products;

            upgradeMoneyDB ();

            return;
        }
        if ($("#Pick_up")[0] && $("#Pick_up")[0]) {
            alert('Choose delivery method');

        }
    });


});

// Request to update money in the database

//
// $(function () {
//     $('.btn_make_order').click(function () {
//         var user_name = $('#session_user_name')[0].innerText;
//
//         if (UPS.checked != false && Pick_up.checked != false) {
//
//             for (var value in basket.by_name) {
//
//
//                 basket.by_name[value].number = 0;
//                 basket.by_name[value].sum = 0;
//
//             }
//
//             basket.total_sum = 0;
//
//             price_amount.innerText = basket.total_sum + ' $';
//             apple_amount.innerText = basket.by_name.Apple.number;
//             beer_amount.innerText = basket.by_name.Beer.number;
//             water_amount.innerText = basket.by_name.Water.number;
//             cheese_amount.innerText = basket.by_name.Cheese.number;
//
//
//             UPS.checked = false;
//             Pick_up.checked = false;
//
//
//             $.post('./src/script/upgrademoneydb.php', {money: basket.balance, user: user_name});
//         }
//
//
//     });
// });




function upgradeMoneyDB () {

        var user_name = $('#session_user_name')[0].innerText;

        for (var value in basket.by_name) {

            basket.by_name[value].number = 0;
            basket.by_name[value].sum = 0;

        }

        basket.total_sum = 0;

        price_amount.innerText = basket.total_sum + ' $';
        apple_amount.innerText = basket.by_name.Apple.number;
        beer_amount.innerText = basket.by_name.Beer.number;
        water_amount.innerText = basket.by_name.Water.number;
        cheese_amount.innerText = basket.by_name.Cheese.number;


        UPS.checked = false;
        Pick_up.checked = false;


        $.post('./src/script/upgrademoneydb.php', {money: basket.balance, user: user_name});




    }

function delBasket(event) {


    var price_product = event.path[2].children[2].innerText.substring(0, event.path[2].children[2].innerText.indexOf('$'));

    var name_product = event.path[0].dataset.basket;

    if (basket.by_name[name_product].number != 0) {
        basket.all_products--;
        basket.balance += +price_product;

        basket_status.innerText = basket.all_products;


        for (var value in basket.by_name) {

            if (name_product === value) {
                basket.by_name[value].number--;
                basket.by_name[value].sum -= +price_product;
            }
        }

        if (basket.balance <= 0) {

            return;
        }
        else {
            basket.total_sum -= +price_product;
            money_status.innerText = basket.balance.toFixed(2);
        }
        price_amount.innerText = basket.total_sum.toFixed(2) + ' $';
        apple_amount.innerText = basket.by_name.Apple.number;
        beer_amount.innerText = basket.by_name.Beer.number;
        water_amount.innerText = basket.by_name.Water.number;
        cheese_amount.innerText = basket.by_name.Cheese.number;
    }


}

var clickPickup = 0;
var clickUPS = 0;

function addUPS() {
    if (basket.balance >= 5) {

        if (clickUPS == 0) {
            clickUPS = 1
            transportadd = 1;
            basket.total_sum += 5;
            price_amount.innerText = basket.total_sum.toFixed(2) + ' $';

            basket.balance -= 5;

            money_status.innerText = basket.balance.toFixed(2) + ' $';

        }
        clickPickup = 0;
    }
    else {
        alert('you do not have enough money. Remove something from the cart');
        UPS.checked = false;
    }


}

function delUPS() {
    clickUPS = 0;

    if (transportadd == 1 && clickPickup == 0) {
        basket.total_sum -= 5;
        price_amount.innerText = basket.total_sum.toFixed(2) + ' $';
        transportadd == 0;
        clickPickup = 1;

        basket.balance += 5;

        money_status.innerText = basket.balance.toFixed(2) + ' $';
    }

}