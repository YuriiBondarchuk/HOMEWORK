var app = angular.module('app', []);



    app.controller('PageController',function () {
        this.click_button = {
            tile : 'true'
        }

    })

app.controller('ProductsController',function () {
    this.model = [
        {
            price : 450,
            article : 9020,
            description : 'описание платья #',
            img : "img"

        } ,
        {
            price : 450,
            article : 9030,
            description : 'описание платья #',
            img : "img"

        } ,
        {
            price : 450,
            article : 9040,
            description : 'описание платья #',
            img : "img"

        } ,
        {
            price : 450,
            article : 9041,
            description : 'описание платья #',
            img : "img"

        } ,
        {
            price : 450,
            article : 9050,
            description : 'описание платья #',
            img : "img"

        } ,
        {
            price : 450,
            article : 9130,
            description : 'описание платья #',
            img : "img"

        }

    ]
})
























