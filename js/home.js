const app = Vue.createApp({
    created() {
        fetch('http://localhost:8888/sit_loipan_tina_vue/lumen/public/paintings')
        .then(response => response.json())
        .then(data => {
            this.paintingsData = data;
            console.log(data)
            this.loadingSpinner = false;
        })
        .catch(error => {
            console.error(error);
            this.error = "No information found";
            this.loadingSpinner = true;
        })
    },
    data() {
        return {
            paintingsData: [],
            loadingSpinner: true,
            name: "",
            lifedates: "",
            background: "",
            error: "",
            selectedArtistId: null
        }
    },
    methods: {
        getPainting(artistId) {
            
            this.selectedArtistId = artistId;
            console.log(this.selectedArtistId); 

            // console.log(artistId);

            this.loading = true;
            this.name = "";
            this.lifedates = "";
            this.background = "";
            this.error = false;

            fetch(`http://localhost:8888/sit_loipan_tina_vue/lumen/public/artists/${artistId}`)
            .then(response => response.json())
            .then(artistData  => {
                console.log(artistData);

                if (artistData.length > 0) {
                    this.name = artistData[0].name;
                    this.lifedates = artistData[0].lifedates;
                    this.background = artistData[0].background;
                } else {
                    this.error = 'No information found';
                }
            })
            .catch(error => {
                console.log(error);
            })
        }
    }
}).mount('#app');