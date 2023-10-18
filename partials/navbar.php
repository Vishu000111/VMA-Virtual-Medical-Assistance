<script>
    function openSlideMenu() {
        document.getElementById("side-menu").style.width = "250px";
    }

    function closeSlideMenu() {
        document.getElementById("side-menu").style.width = "0";
    }
</script>
<nav class="navbar">
    <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
            </svg>
        </a>
    </span>

    <ul class="navbar-nav">
        <?php
            echo '<li><a href="System/index.php">Book your appointment </a></li>';
            echo '<li><a href="disease.html">Common Diseases</a></li>';
            echo '<li><a href="firstaid.php">First Aid</a></li>';
            echo '<li><a href="about.php">About Us</a></a></li>';
            echo '<li><a href="index.php">Home</a></li>';
        ?>
    </ul>
</nav>

<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="firstaid.php">First Aid</a>
        <a href="disease.html">Common Diseases</a>
        <a href="contact.php">Give Feedback</a>
</div>