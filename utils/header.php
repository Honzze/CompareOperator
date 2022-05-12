<?php
session_start();


include './config/autoload.php';
include './config/connectBDD.php';

$manager = new Manager;

$rltalldestinations = $manager->getLocationByName();
require_once './config/autoload.php';





?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <title>ComparOperator</title>
</head>

<body>
    <header>

        <nav class="neon bg-white border-gray-200 px-2 py-12 tracking-widest sm:px-4  rounded dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="./index.php" class="flex items-center">
                    <img src="./img/logo.png" class="mr-3 h-6 sm:h-20" alt="Logo">
                    <span class="self-center text-6xl font-semibold whitespace-nowrap 
                    dark:text-white">ComparOperator</span>
                </a>
            </div>
        </nav>

    </header>