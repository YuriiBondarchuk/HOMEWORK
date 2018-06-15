var app = angular.module('app',[]);


app.directive('listUser1', function () {
    return {
        restrict : 'EA',
        templateUrl : 'html/listUser.html',
        scope : {
            info : '='
        }
            }
})
app.directive('listUser2', function () {
    return {
        restrict : 'EA',
        templateUrl : 'html/listUser.html',
        scope : {
            info : '='
        }
    }
})
app.directive('listUser3', function () {
    return {
        restrict : 'EA',
        templateUrl : 'html/listUser.html',
        scope : {
            info : '='
        }
    }
})
app.directive('listUser4', function () {
    return {
        restrict : 'EA',
        templateUrl : 'html/listUser.html',
        scope : {
            info : '='
        }
    }
})

app.directive('listUser5', function () {
    return {
        restrict : 'EA',
        templateUrl : 'html/listUser.html',
        scope : {
            info : '='
        }
    }
})






app.controller('ListUserController',function () {
   this.avatar = function () {
       return console.log (this.student[0].name)
    }
   this.student = [
       {
        name : "Devid Back",
        avatar : 'DevidBack.jpg',
        profession : 'programing',
        avatarnik : "DB"

       },
       {
           name : "Harry Robinson",
           avatar : "HarryRobinson.jpg",
           profession : 'writer',
           avatarnik : 'HR'
       },
       {
           name : 'Yurii Mororzov',
           avatar : '',
           profession : 'Artist',
           avatarnik : "YM"
       },
       {
           name : 'Andrei Sevoha',
           avatar : '',
           profession : 'schoolboy',
           avatarnik : "AS"

       },
       {
           name : 'Valerii Darov',
           avatar : '',
           profession : "manager",
           avatarnik : "VD"
       }
   ]
});