var el_search = document.getElementById('site_search');
var sel_search = document.getElementById('search');

$result = [];
el_search.oninput = () => {
    if (el_search.value == '') {
        sel_search.setAttribute('class', 'focus-none');
    }
    else {
        sel_search.setAttribute('class', 'focus');
    }

    var params = {search: el_search.value}
    var http = new XMLHttpRequest();

    http.open('POST', '../controllers/search.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {

                $result = http.responseText;
            }
            if (site_search.value != '') {
                while (search.options.length != 0) {
                    search.options.remove(search.options.length - 1);
                }
                JSON.parse(this.responseText).forEach((item) => {

                    var new_option = document.createElement('option');
                    new_option.innerHTML = item.title;


                    new_option.setAttribute('value', '../site/single?tov_num=' + item.id);


                    search.appendChild(new_option);

                });

            } else {
                while (search.options.length != 0) {
                    search.options.remove(search.options.length - 1);
                }
            }


        }
    };

    http.send('param=' + JSON.stringify(params));


}





