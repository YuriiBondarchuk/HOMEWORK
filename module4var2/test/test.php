<html>
<head>
    <script src="http://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="../script/jquery-3.3.1.min.js"></script>
    <script>
        function p(){
            $.post("test2.php", { name: "John", time: "2pm" } );
        }
    </script>
</head>

<body>
<a href='test2.php' onclick='p'>P</a>
</body>
</html>