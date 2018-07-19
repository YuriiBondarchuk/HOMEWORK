

function send_zapros() {
    var el_select = document.getElementById('select');
    var params = {search: el_select.value}
    var http = new XMLHttpRequest();

    http.open('POST', 'Select.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {

                $result = http.responseText;
                console.log($result);
                console.log(JSON.parse($result));


                }
            }


        }



    http.send('param=' + JSON.stringify(params));


}






