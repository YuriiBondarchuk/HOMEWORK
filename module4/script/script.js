var write = 0;

setInterval(function () {
    var x  = Math.floor(Math.random() * (5 - 0 + 1)) + 0;
    write = write+x;
    document.getElementById('write').innerText = x;

},3000);


$(window).on('beforeunload', function(){
    // var read_t = document.getElementById('write').innerText
    var read_t = write;
    var name = document.getElementById('name').innerText
    var id = document.getElementById('id').innerText
    $.post('../script/insert.php',{read: read_t,name : name,id : id});
    console.log('Exit')
    return "Вы действительно хотите уйти?"
});



