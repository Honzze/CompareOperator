<?php
include './utils/header.php';
$manager = new Manager;
$rltOperator = $manager->getDestinationByLocations($_GET['location'], $_GET['pix']);
$rltReview = $manager->getReviewByOperatorId($_GET['id']);
?>
<div class=" neon-button flex flex-row flex-wrap place-content-center items-strech p-8 m-auto space-x-4">
    <?php foreach ($rltOperator as $destination) {   ?>
        
        <div class=" md:flex-row md:max-w-xl rounded-lg bg-[#164e63] bg-opacity-10 h-30 w-96 shadow-lg   font-bold">
            <div class="ml-4 mt-2 text-[#bae6fd]">
                <?= $destination->tourOperator->getName() ?>
            </div>
            <div class="flex flex-row p-6 ">
                <h5 class="text-[#a5f3fc] text-xl  font-bold ml-8"><?= $destination->getLocation() ?></h5>
                <p class="text-gray-700 text-base ">
                </p>
                <p class=" text-[#a5f3fc] font-bold text-xl ml-44 "><?= $destination->getPrice() . '€' ?></p>
            </div>
            <div class=" neon-button flex flex-row flex-wrap place-content-center items-strech p-8 m-auto space-x-4">

                <a href="<?= $destination->tourOperator->getLink()?>"> <button type="submit" class="  px-6 py-2.5 mb-3 bg-[#0c4a6e] 

                            text-white font-bold text-xl leading-tight uppercase rounded shadow-md 
                            shadow-blue-500/50">
                        Valider
                    </button><a />
            </div>
            <a href="./review.php">
                <div class="w-full px-4">
                    <h3 class=" neon-button text-[#a5f3fc] flex items-center justify-center font-medium tracking-tight">Votre avis compte</h3>
                </div><a />
        </div>
    <?php }
    ?>
</div>



</div>
</div>

<?php foreach ($rltReview as $reviews) {

?>
    <div class="flex items-center justify-center">
        <div class="mb-1 tracking-wide px-4 py-4">
            <h2 class="text-[#a5f3fc] font-semibold mt-1">Derniers Commentaires</h2>
            <div class="border-b -mx-8 px-8 pb-3">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="inline-block relative">
                            <div class="relative w-16 h-16 rounded-full overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                            </div>
                            <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <p class="flex items-baseline">
                            <span class="text-white font-bold"><?= $reviews->getAuthor() ?></span>
                            <span class="ml-2 text-green-600 text-xs"></span>
                        </p>
                        <div class="flex items-center mt-1">
                            <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </div>

                        <div class="mt-3">
                            <span class="font-bold text-[#a5f3fc]">Sapien consequat eleifend!</span>
                            <p class="mt-1 text-white"><?= $reviews->getMessage() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php } ?>



<?php
include './utils/footer.php';
?>
</body>


</html>