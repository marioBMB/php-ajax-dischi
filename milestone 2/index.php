<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolify</title>
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body>
    
        <div id="myapp">

            <header>
                <div class="spotify-logo">
                    <img src="./img/logo-small.svg" alt="spotify-logo">
                </div>
            </header>
    
            <main>

                <div class="filter-search">
                    <select name="genre" id="genre" v-model="selectedvalue" @change="filterGenre(selectedvalue)">
                        <option value='' selected>All</option>
                        <option v-for="(genre, index) in genres" :value="genre" :key="index">{{genre}}</option>
                    </select>
                </div>
                <div class="album-container">
                    
                    <div v-for="(album, index) in albums" class="album">
                        <img :src="album.poster">
                        <div class="album-meta">
                            <h3 class="album-title">{{album.title}}</h3>
                            <p class="album-author">{{album.author}}</p>
                            <p class="album-year">{{album.year}}</p>
                        </div>
                    </div>
                </div>
    
            </main>
    
            <footer>
    
            </footer>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript">
            
            
            const app = new Vue(            
                {
                    el: "#myapp",
                    data: {
                        
                        apiURL: "./api.php",
                        albums: [],
                        genres: [],
                        selectedvalue: "",
                    },
                    methods: {

                    getAlbums(arrParams = {genre: ""}){
                        
                        axios.get(this.apiURL, {
                                
                            params: {
                                'genre': arrParams.genre,
                            }
                        })
                        .then((response) => {
                            
                            this.albums = response.data;
                            console.log(this.albums);
                        })
                        .catch((error) => {
                            console.log(error);
                        })
                    },
                    filterGenre(selected){
                        this.getAlbums({'genre': selected});
                    }
                },
                computed: {
                    
                },
                created(){
                    this.getAlbums();
                    this.genres = ['Rock', 'Pop', 'Jazz', 'Metal'],
                    console.log(this.genres);
                }
            });
            
        </script>
    </body>
</html>