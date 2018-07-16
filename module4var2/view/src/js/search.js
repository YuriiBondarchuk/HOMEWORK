

var el_search= document.getElementById('search');


el_search.oninput =()=> {

    var params = {search:el_search.value}
    var http = new XMLHttpRequest();




    http.open('POST', '../controllers/search.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    http.onreadystatechange= function(){
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this)
                console.log(http.responseText);
                // console.log(JSON.parse(this.responseText));

                // console.log()
            }
        }
    };

    // http.send('param=' + JSON.stringify(params));
    http.send('');


}


