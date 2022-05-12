<?php
include './utils/header.php';
?>


<div class="flex items-center justify-center mt-16">
                    <div class="w-full max-w-md">
                        <form class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4" method="$_GET" action="./process/createReviewProcess.php">
                            <!-- @csrf -->
                            <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                                Entrez votre nom
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 
                        leading-tight focus:outline-none focus:shadow-outline" name="username" v-model="form.name" type="text" required autofocus placeholder="nom" />
                            </div>
                            <div class="mb-6">
                                </label>

                            </div>
                            <div class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none 
                        w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none 
                        focus:bg-white"  name="review" placeholder='votre commentaire...' required></textarea>
                        <input type="hidden" name="idto" value="<?= $_GET['id'] ?>">
                                    </div>
                                    <button type="submit" class="neon-button bottom-0 w-full md:w-full center mt-3 px-3 py-2  mb-1 bg-[#0c4a6e] 
                            text-white font-bold text-l leading-tight uppercase rounded shadow-md 
                            shadow-blue-500/50">
                                        Envoyer
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
                </div>
                

<?php
include './utils/footer.php';
?>
</body>


</html>