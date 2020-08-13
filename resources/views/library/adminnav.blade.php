<html>
<head>
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
    <a href="#" class="logo">logo</a>
    <ul class="main-nav" id="js-menu">
        <li>
            <a href="/create" class="nav-links">Create</a>
        </li>
        <li>
            <a href="/create2" class="nav-links">Create2</a>
        </li>
        <li>
            <a href="/user" class="nav-links">User</a>
        </li>
        <li>
            <a href="/show" class="nav-links">Show</a>
        </li>
        <li>
            <a href="/showinf" class="nav-links">Info</a>
        </li>
    </ul>
</nav>
<script>
    let mainNav = document.getElementById("js-menu");
    let navBarToggle = document.getElementById("js-navbar-toggle");

    navBarToggle.addEventListener("click", function() {
        mainNav.classList.toggle("active");
    });
</script>
</body>

</html>
