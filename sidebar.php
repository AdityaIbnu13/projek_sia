<?php

$modul = isset($_GET['modul']) ? $_GET['modul'] : '';

?>
<style>
    li{
        margin-bottom:10px;
    }
</style>
<ul class="nav nav-pills flex-column ms-2">
    <li class="nav-item">
        <a href="dashboard.php" class="nav-link text-white <?= $modul == '' ? 'active' : ''; ?>">
            <i class="bi bi-speedometer2 me-2"></i>Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a href="?modul=akun" class="nav-link text-white <?= $modul == 'akun' ? 'active' : ''; ?>">
            <i class="bi bi-database-fill-gear me-2"></i>Data Akun
        </a>
    </li>
</ul>