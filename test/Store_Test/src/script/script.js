var basket = {
    all_products: 0,
    total_sum: 0,
    balance: 100,
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


function addBasket(event) {
    var price_product = event.path[1].children[1].children[0].innerText;
    var name_product = event.path[1].children[0].innerText;

    basket.all_products++;
    basket.balance -= price_product;

    basket_status.innerText = basket.all_products;


    for (var value in basket.by_name) {

        if (name_product === value) {
            basket.by_name[value].number++;
            basket.by_name[value].sum += +price_product;
        }
    }

    if (basket.balance <= 0) {
        alert('You ran out of money');
        return;
    }
    else {
        basket.total_sum += +price_product;
        money_status.innerText = basket.balance.toFixed(2);
    }
    price_amount.innerText = basket.total_sum.toFixed(2) + ' $';
    apple_amount.innerText = basket.by_name.Apple.number;
    beer_amount.innerText = basket.by_name.Beer.number;
    water_amount.innerText = basket.by_name.Water.number;
    cheese_amount.innerText = basket.by_name.Cheese.number;
    console.log(basket.by_name)
    console.log(basket.total_sum);
}


// Running the modal window

$(function () {
    $("#btn2").click(function () {
        $("#myModal2").modal('show');
    });
});
$(function () {
    $("#delivery").click(function () {

        if ($("#UPS")[0].checked) {
            var delivery = {
                name: 'UPS',
                price: 5
            }
            basket.balance -= delivery.price;
            money_status.innerText = basket.balance.toFixed(2);
            console.log(delivery.name);
            $("#myModal2").modal('hide');
            return;
        }

        if ($("#Pick_up")[0].checked) {
            var delivery = {
                name: 'Pick_ap',
                price: 0
            }
            basket.balance -= delivery.price;
            money_status.innerText = basket.balance.toFixed(2);
            console.log(delivery.name)
            $("#myModal2").modal('hide');
            return;
        }
        if ($("#Pick_up")[0] && $("#Pick_up")[0]) {
            alert('Choose delivery method');

        }
    });


});

