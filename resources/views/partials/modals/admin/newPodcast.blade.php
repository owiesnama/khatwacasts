<modal name="newPodcast"
       :pivot-x=".5"
       :pivot-y=".5"
>
    <new-podcast inline-template>
        <form action="{{url('podcast')}}"
              method="post"
              enctype="multipart/form-data"
        >
            @csrf
            <div class="p-6 pb-2 h-full flex flex-col">
                <div class=" flex-1">
                    <input class="border-b mb-6 w-full outline-none block"
                           type="text"
                           name="title"
                           required
                           placeholder="Podcast title"
                    >

                    <file-input v-model="podcast"
                                name="podcast"
                                required
                    ></file-input>

                    <textarea class="border-b mb-6 w-full outline-none block"
                              name="description"
                              required
                              placeholder="description ..."
                    ></textarea>

                </div>


                <div class="flex justify-between">
                    <button @click="$modal.show('newPodcast')"
                            type="button"
                            class="border mb-1 border-gray-light outline-none hover:bg-gray-300 hover:bg-indigo-900
    hover:text-white rounded-full px-5 py-1 text-sm text-light"
                    >
                        Cancel
                    </button>

                    <button @click="$modal.show('newPodcast')"
                            type="submit"
                            class="border mb-1 border-gray-light outline-none hover:bg-gray-100 bg-indigo-900
    hover:text-indigo-900 rounded-full px-5 py-1 text-sm text-white"
                    >
                        Upload
                    </button>
                </div>
            </div>
        </form>
    </new-podcast>

</modal>