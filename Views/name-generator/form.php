<div ref="serma_name_generator_form" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="hidden md:inline cols-span-1 px-3 md:px-6 pt-8 pb-4 bg-cover" style="background-image: url('<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <div class="baby-comment-box pt-1 px-4">
                <h2 class="text-18px md:text-[30px] text-center md:text-left text-black font-semibold mb-4">
                    Generador de <span class="font-['Cookie'] text-purple-lighten font-normal text-40px">Nombres</span></h2>
            </div>
            <img class="pb-4 max-w-[208px] mx-auto" src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/baby-01.png" alt="">
        </div>

        <div class="bg-yellow-lighten md:col-span-2 px-3 md:px-10 py-8 rounded-2xl">
            <form action="" method="post" id="serma-random-baby-name-generator-wp-form">
                <h2 class="md:hidden mx-8 px-4 bg-white rounded-tr-3xl rounded-bl-3xl text-18px text-black text-center font-semibold mb-4">
                    Generador de <span class="font-['Cookie'] text-purple-lighten font-normal text-[28px]">Nombres</span></h2>
                <div class="grid grid-cols-4 md:mb-4">
                    <div class="flex items-center col-span-4 md:col-span-2 mb-4 md:mb-0">
                        <img class="w-[20px]" src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/gender.svg" />
                        <span class="text-13px md:text-16px ml-2">
                            Sexo del bebé:
                        </span>
                    </div>
                    <div class="flex items-center col-span-2 md:col-span-1">
                        <input id="gender1" type="radio" v-model="form.maleFemale" name="maleFemale" value="0"
                            class="w-4 h-4 accent-green-lighten" aria-labelledby="gender1" aria-describedby="gender1">
                        <label for="gender1" class="flex items-center ml-2 font-medium">
                            <img class="w-[30px]" src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/boy.svg" />
                            <span class="ml-2 text-13px md:text-16px text-secondary">
                                Niño
                            </span>
                        </label>
                    </div>
                    <div class="flex items-center col-span-2 md:col-span-1">
                        <input id="gender2" type="radio" v-model="form.maleFemale" name="maleFemale" value="1"
                            class="w-4 h-4 accent-green-lighten" aria-labelledby="gender2" aria-describedby="gender2">
                        <label for="gender2" class="flex items-center ml-2 font-medium">
                            <img class="w-[30px]" src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/girl.svg" />
                            <span class="ml-2 text-13px md:text-16px text-secondary">
                                Niña
                            </span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="text-13px md:text-16px">Primera letra del nombre</p>
                </div>
                <div class="relative container max-w-screen-lg my-2">
                    <div class="group hover:bg-purple-darken flex cursor-pointer serma-carousel-arrow-left justify-center items-center absolute left-0 rounded-full w-9 h-9 z-10"
                        serma-carousel-target="letter_carousel">
                        <span class="group-hover:text-white fas fa-chevron-left text-secondary fa-sm text-center"></i>
                    </div>

                    <div class="group hover:bg-purple-darken flex cursor-pointer serma-carousel-arrow-right justify-center items-center absolute right-0 md:right-2 rounded-full w-9 h-9 z-10"
                        serma-carousel-target="letter_carousel">
                        <span
                            class="group-hover:text-white fas fa-chevron-right text-secondary fa-sm text-center"></span>
                    </div>

                    <div class="serma-carousel scroll-smooth container max-w-[75%] lg:max-w-[79%] mx-auto flex gap-4 pb-4 overflow-x-scroll md:overflow-hidden invisible-scrollbar"
                        serma-carousel-id="letter_carousel">
                        <?= SERMA_RANDOM_BABY_NAME_TEMPLATE::show_template('name-generator/form/letter') ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-3 mb-2">
                    <div class="flex items-center col-span-2">
                        <img class="w-[20px]" src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/popularity.svg" />
                        <span class="text-13px md:text-16px ml-2 text-secondary">
                            Popularidad:
                        </span>
                    </div>
                </div>
                <div>
                    <div class="flex">
                        <label class="w-full md:w-auto">
                            <input checked type="radio" v-model="form.pop" name="pop" id="popularity_high"
                                class="hidden peer" value="high" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-5 mr-2 text-center text-13px md:text-16px rounded-full">
                                Alto</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.pop" name="pop" id="popularity_medium" class="hidden peer"
                                value="medium" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-5 mr-2 text-center text-13px md:text-16px rounded-full">
                                Medio</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.pop" name="pop" id="popularity_low" class="hidden peer"
                                value="low" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-5 mr-2 text-center text-13px md:text-16px rounded-full">
                                Bajo</div>
                        </label>
                    </div>
                </div>
                <div class="flex mt-4 md:justify-end" v-if="!show_options">
                    <p class="text-purple-darken decoration-purple-darken underline decoration-1 text-13px md:text-16px cursor-pointer"
                        @click="show_options = true">
                        Más opciones <span class="md:hidden fas fa-arrow-down fa-sm ml-2"></span>
                    </p>
                </div>
                <div class="extra-options grid grid-cols-1 md:grid-cols-3 gap-4 mt-4" v-if="show_options">
                    <div class="grid grid-cols-3 md:grid-cols-1">
                        <div class="col-span-2 md:col-span-auto flex items-center">
                            <label class="text-secondary text-13px md:text-16px" for="">
                                Largo mínimo del nombre (opcional)
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input v-model="form.minLen" name="minLen" type="number" placeholder="0"
                                class="w-full md:w-20 h-8 px-4 py-5 mt-2 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                                required>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-1">
                        <div class="col-span-2 md:col-span-auto flex items-center">
                            <label class="text-secondary text-13px md:text-16px" for="">
                                Largo máximo del nombre (opcional)
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input v-model="form.maxLen" name="maxLen" type="number" placeholder="0"
                                class="w-full md:w-20 h-8 px-4 py-5 mt-2 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                                required>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-1">
                        <div class="col-span-2 md:col-span-auto flex items-center">
                            <label class="text-secondary text-13px md:text-16px" for="">
                                N° de resultados para mostrar
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input v-model="form.numResults" name="numResults" type="number" placeholder="1"
                                class="w-full md:w-20 h-8 px-4 py-5 mt-2 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                                required>
                        </div>
                    </div>
                </div>
                <button type="button"
                    class="my-3 w-full md:w-auto rounded text-[15px] md:text-14px bg-green-lighten px-4 py-4 md:py-3 text-white font-regular"
                    @click="generateName" :disabled="loading">
                    <span v-if="loading">Generando...</span>
                    <span v-else>
                        Obtén el nombre de tu bebé
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>

<?= SERMA_RANDOM_BABY_NAME_TEMPLATE::show_template('name-generator/form/results') ?>