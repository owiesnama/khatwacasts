<script>

    export default{
        data(){
            return {
                podcasts: [],
                currentPage: 1
            }
        },

        methods: {
            loadPodcasts(){
                axios.get(`/?page=${this.currentPage}`)
                    .then(({data}) => {
                        let podcasts = data.data
                        if (podcasts.length) {
                            this.podcasts = this.podcasts.concat(podcasts)
                        } else {
                            $state.complete()
                        }
                    })
            },

            loadMore(){
                this.currentPage++
                this.loadPodcasts();
            }
        },

        created(){
            this.loadPodcasts()
        }
    }
</script>
