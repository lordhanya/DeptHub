<?php include __DIR__ . '/header.php'; ?>
<header>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <button id="openNav" class="w3-button w3-xlarge rounded-3 py-2 m-3" onclick="w3_open()">&#9776;</button>
            <a class="navbar-brand py-3" href="#"><img src="../images/title-logo.png" alt="DeptHub Logo" width="50" height="50" /> DeptHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../includes/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>