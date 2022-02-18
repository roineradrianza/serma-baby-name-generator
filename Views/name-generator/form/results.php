<div class="px-4 md:px-0">
    <div ref="serma_name_generator_results" class="container border rounded-lg mt-6"
        :class="{ 'border-[#62CEF9]': !gender_selected, 'border-[#FB80BA]': gender_selected }" v-if="names.length > 0">
        <div class="grid grid-cols-12 gap-2 p-6"
            :class="{ 'bg-[#62cef91a]': !gender_selected, 'bg-[#fb80ba1a]': gender_selected }">
            <div class="hidden md:inline col-span-1">
                <img class="w-[70px]" :src="!gender_selected ? '<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/boy-result.svg' 
            : '<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/girl-result.svg' " alt="">
            </div>
            <div class="col-span-12 md:col-span-11">
                <h3 class="text-16px md:text-[30px] font-semibold"
                    :class="{ 'text-[#62CEF9]': !gender_selected, 'text-[#FB80BA]': gender_selected }">
                    ¡Felicitaciones!
                </h3>
                <p class="text-13px md:text-16px">
                    Estos son posibles nombres para tu bebé:
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 pt-6 pl-4 pr-6">
            <div>
                <ol>
                    <li class="text-black text-16px md:text-18px mb-2" v-for="item, i in splitted_names.second_half"
                        :key="i">
                        <a :href="item.slug" target="_blank">
                            <div class="grid grid-cols-12">
                                <div class="col-span-10 md:col-span-11">
                                    {{ item.name }}
                                </div>
                                <div class="col-span-2 md:col-span-1 flex items-center">
                                    <img class="w-[18px] md:w-[24px]"
                                        src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/chevron-right.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </li>
                </ol>
            </div>

            <div>
                <ol>
                    <li class="text-black text-16px md:text-18px mb-2" v-for="item, i in splitted_names.first_half"
                        :key="i">
                        <a :href="item.slug" target="_blank">
                            <div class="grid grid-cols-12">
                                <div class="col-span-10 md:col-span-11">
                                    {{ item.name }}
                                </div>
                                <div class="col-span-2 md:col-span-1 flex items-center">
                                    <img class="w-[18px] md:w-[24px]"
                                        src="<?= SERMA_RANDOM_BABY_NAME_URL ?>/assets/img/chevron-right.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="px-9 mb-4">
            <button type="button" class="w-full md:w-auto my-3 rounded px-6 py-3 text-white font-regular"
                :class="{ 'bg-[#62CEF9]': !gender_selected, 'bg-[#FB80BA]': gender_selected }" @click="resetForm">
                <span class="fas fa-chevron-left mr-2"></span>
                <span class="text-[15px] md:text-16px">Generar otro nombre</span>
            </button>
        </div>
    </div>
</div>