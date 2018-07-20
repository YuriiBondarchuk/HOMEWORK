// Скрипт обработки запроса по смене языка страницы без перезагрузки

function send_zapros() {
    var el_select = document.getElementById('select');
    var params = {search: el_select.value}
    var http = new XMLHttpRequest();

    http.open('POST', 'Select.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {

                result = http.responseText;


                result = JSON.parse(result)

                var table_tr = table_id.children[0].children



                var i = 0;

                for (key in result) {
                    i++

                    table_tr[i].children[0].innerHTML = key;
                    table_tr[i].children[1].innerHTML = '';
                    result[key].forEach((item) => {

                        for (var key2 in item) {


                            table_tr[i].children[1].innerHTML = table_tr[i].children[1].textContent + '</br>' + item[key2]

                        }
                    })
                }
            }
        }


    }


    http.send('param=' + JSON.stringify(params));


}






