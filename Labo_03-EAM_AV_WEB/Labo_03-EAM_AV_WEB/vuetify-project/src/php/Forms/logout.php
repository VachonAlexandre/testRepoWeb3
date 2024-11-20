<?php
session_start();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header('Location: /Labo_02-VME_EAM_WEB/connexion');

