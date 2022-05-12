<?php

include './utils/header.php';

?>

<div class="flex flex-row flex-wrap place-content-center items-strech p-8 m-auto">
    <?php foreach ($rltalldestinations as $destination) {
    ?>
        <div class="rounded-lg shadow-lg bg-transparent max-w-sm m-4">
            <a href="#!">
                <img class="rounded-t-lg h-60 w-96" src="<?= $destination->getPix() ?>" alt="" />
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2"></h5>
                <form action="./operator.php" method="get" target="" class="text-center">
                    <input type="hidden" name="id" value="<?= $destination->getId() ?>">
                    <input type="hidden" name="location" value="<?= $destination->getLocation() ?>">
                    <input type="hidden" name="pix" value="<?= $destination->getPix() ?>">
                    <input type="hidden" name="price" value="<?= $destination->getPrice() ?>">
                    <button type="submit" class="  neon-button inline px-6 py-2.5 bg-blue-600 
                            text-white font-medium text-xl leading-tight uppercase rounded shadow-md 
                            shadow-blue-500/50">
                        <?= $destination->getLocation() ?>
                    </button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>



<?php
include './utils/footer.php';
?>
</body>

</html>