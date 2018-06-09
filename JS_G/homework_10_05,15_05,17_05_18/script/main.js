var app = angular.module('app', []);



var random = {
    image: function () {
        return chance.natural({min: 1, max: 3}) + ".jpg";
    }
};


app.controller('PageController', function ($scope) {
    $scope.funclick = function (event) {


        var id = event.path[0].id;

        console.log(id)
        if (id === 'spisok') {
            angular.element(document.getElementsByClassName('model')).css('display', 'none');
            angular.element(document.getElementsByClassName('spisok_main')).css('display', 'block');
        }
        else {
            angular.element(document.getElementsByClassName('model')).css('display', 'block');
            angular.element(document.getElementsByClassName('spisok_main')).css('display', 'none');
        }
    }

})

app.controller('TabController', function () {
    this.tab = 1;
    this.selectedTab = function (tab) {
        this.tab = tab;
    }
    this.isSelectedTab = function (tab) {
        return this.tab == tab;
    }


});

app.controller('GalleryController', function () {
    this.current = 0;
    this.setCurrent = function (index) {
        this.current = index || 0;
    };
});

app.controller('ReviewController', function () {
    this.colors = ['black','white','yellow','green'];
    this.review = {};
    this.arr = [];
    this.addReview = function(color){
       return this.arr.push(color);
       };

});

app.controller('ProductsController', function () {



    this.modelfoto = (new Array(3))
        .join('a')
        .split('a')
        .map(function () {
            return {

                image: random.image(),
                images: [random.image(), random.image(), random.image()]
            };
        });
    this.model = [
        {
            price: 450,
            article: 9020,
            description: 'Романтичное летнее платье в цветочном принте, трапециевидного силуэта.',
            img: "",
            size: 'X,L,M',
            specification: "Your information"

        },
        {
            price: 450,
            article: 9030,
            description: 'Повседневное платье-бюстье прямого силуэта c коротким рукавом, с поясом, длинное с разрезами в боковых швах.',
            img: "img/9030",
            size: 'X,L,M',
            specification: "Your information"

        },
        {
            price: 450,
            article: 9040,
            description: 'Летнее платье из хлопка прямого силуэта, с открытой зоной декольте, отрезное по линии талии,с разрезами, длиною в пол.',
            img: "img/9040",
            size: 'X,L,M',
            specification: "Your information"

        },
        {
            price: 450,
            article: 9041,
            description: 'Летнее платье трапециевидного силуэта, с вырезом горловины "лодочка", рукавами-воланами, длиной до колен.',
            img: "img/9041",
            size: 'X,L,M',
            specification: "Your information"

        },
        {
            price: 450,
            article: 9050,
            description: 'Повседневное летнее платье прямого силуэта, с вырезом горловины типа «кармен», притачными широкими воланами, длиной выше колен.',
            img: "img/9050",
            size: 'X,L,M',
            specification: "Your information"

        },
        {
            price: 450,
            article: 9130,
            description: 'Летнее платье трапециевидного силуэта из хлопка с застежкой на кнопки, карманами в боковых швах, с поясом, длиной до середины икры.',
            img: "img/9130",
            size: 'X,L,M',
            specification: "Your information"

        }

    ]
})
























