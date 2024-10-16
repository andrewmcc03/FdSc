<!-- 1 row, 1 column with page title -->

<link rel="stylesheet" href="styles/styles.css">

<div class="navbar">
    <nav>
        <button class="dropdown-btn">&#9776; Menu</button>
        <a href="index.php">Home</a>
        <a href="reports.php">Reports</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
    </nav>
</div>

<!-- Script for toggling navbar dropdown button -->
<script>
    document.addEventListener('DOMContentLoaded', function ()
    {
        var dropdownBtn = document.querySelector('.dropdown-btn');
        var navLinks = document.querySelectorAll('nav a');

        dropdownBtn.addEventListener('click', function ()
        {
            // Iterates over all nav links
            for (var i = 0; i < navLinks.length; i++)
            {
                navLinks[i].classList.toggle('show-links');
            }
        });

        window.addEventListener('resize', function ()
        {
            if (window.innerWidth > 400)
            {
                for (var i = 0; i < navLinks.length; i++)
                {
                    navLinks[i].classList.remove('show-links');
                }
            }
        });
    });
</script>