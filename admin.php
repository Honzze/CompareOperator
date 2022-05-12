<?php

include './utils/header.php';

?>



<?php
if (
    isset($_SESSION['login'])
    && isset($_SESSION['pwd'])
    && !empty($_SESSION['login'])
    && !empty($_SESSION['pwd'])
) {
?>


    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" neon-button flex flex-row flex-wrap text-xl bg-[#49afde]  h-30 w-96 rounded-lg shadow-lg mt-12 mb-8 font-bold place-content-center items-strech p-8 m-auto space-x-4" type="button">Destination <svg class="ml-2 w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="./adminPanel/destinationPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ajouter</a>
            </li>
            <li>
                <a href="./adminPanel/destinationPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
            </li>
        </ul>
    </div>
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" neon-button flex flex-row flex-wrap text-xl bg-[#5cd636]  h-30 w-96 rounded-lg shadow-lg mt-12 mb-8 font-bold place-content-center items-strech p-8 m-auto space-x-4" type="button">Tour Operator <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="./adminPanel/operatorPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ajouter</a>
            </li>
            <li>
                <a href="./adminPanel/operatorPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
            </li>
        </ul>
    </div>
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" neon-button flex flex-row flex-wrap text-xl bg-[#e6d522]  h-30 w-96 rounded-lg shadow-lg mt-12 mb-8 font-bold place-content-center items-strech p-8 m-auto space-x-4" type="button">Premium<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="./adminPanel/premiumPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ajouter</a>
            </li>
            <li>
                <a href="./adminPanel/premiumPanel.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
            </li>
        </ul>
    </div>
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" neon-button flex flex-row flex-wrap text-xl bg-[#ce26e7]  h-30 w-96 rounded-lg shadow-lg mt-12 mb-8 font-bold place-content-center items-strech p-8 m-auto space-x-4" type="button">Nouvelle Offre<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="./adminPanel/newOffer.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ajouter</a>
            </li>
            <li>
                <a href="./adminPanel/newOffer.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
            </li>
        </ul>
    </div>
    <div>
        <a href="./config/killSession.php"><button class=" neon-button flex flex-row flex-wrap text-xl bg-[#ef2020] h-30 w-96 rounded-lg shadow-lg mt-12 mb-8 font-bold place-content-center items-strech p-8 m-auto space-x-4" type="button">Déconnexion</button>
            <input type="submit" value="Déconnexion"></a>
    </div>


<?php
} else {
?>

    <form action="./config/connectAdmin.php" method="post">
        <div class=" neon-button flex flex-row flex-wrap bg-[#7dc6e1] bg-opacity-10 rounded-lg h-30 w-96 shadow-lg mt-16 mb-4 font-bold place-content-center items-strech p-8 m-auto space-x-4">
            <div class="container mx-auto">
                <div class="max-w-md mx-auto my-10">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Connexion Admin</h1>
                        <p class="text-gray-500 dark:text-gray-400">Entrez votre identifiant et votre mot de passe</p>
                    </div>
                    <div class="m-7">

                        <div class="mb-6">
                            <label for="username" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Identifiant</label>
                            <input type="text" name="login" id="username" placeholder="votre nom" class="w-full px-3 py-2 
                        placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring 
                        focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white 
                        dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Mot de passe</label>
                            </div>
                            <input type="password" name="pwd" id="password" placeholder="votre mot de passe" class="w-full px-3 py-2 
                        placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring 
                        focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white 
                        dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            <input type="submit" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
    include './utils/footer.php';
    ?>


<?php
}
?>

</body>

</html>