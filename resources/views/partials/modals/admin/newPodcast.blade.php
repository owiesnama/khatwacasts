<modal name="newPodcast"
       :pivot-x=".5"
       :pivot-y=".5"
>
    <div class="p-6 pb-2 h-full flex flex-col">
        <div class=" flex-1">
            <input class="border-b mb-6 w-full outline-none block"
                   type="text"
                   placeholder="Podcast title"
            >

            <div class="border-b mb-6 w-full outline-none block">

                <button @click="$modal.show('newPodcast')"
                        class="border mb-1 border-gray-light outline-none hover:bg-gray-300 hover:bg-indigo-900
    hover:text-white rounded-full px-5 py-1 text-sm text-light"
                >
                    Choose file
                </button>
                <p></p>
                <input class="hidden"
                       type="file"
                >
            </div>
            <textarea class="border-b mb-6 w-full outline-none block"
                      placeholder="description ..."></textarea>

        </div>


        <div class="flex justify-between">
            <button @click="$modal.show('newPodcast')"
                    class="border mb-1 border-gray-light outline-none hover:bg-gray-300 hover:bg-indigo-900
    hover:text-white rounded-full px-5 py-1 text-sm text-light"
            >
                Cancel
            </button>

            <button @click="$modal.show('newPodcast')"
                    class="border mb-1 border-gray-light outline-none hover:bg-gray-100 bg-indigo-900
    hover:text-indigo-900 rounded-full px-5 py-1 text-sm text-white"
            >
                Upload
            </button>
        </div>
    </div>


</modal>