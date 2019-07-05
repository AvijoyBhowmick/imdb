<html>
<head>
    <title>IMDB Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--Bootstrap CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btn0').click(function(){
          //  var train=$('#btn0').val();


/*
            $.get("https://api.themoviedb.org/3/movie/top_rated?api_key=8265bd1679663a7ea12ac168da84d2e8&language=en-US&page=1" , function (data) {
//console.log(data);

                $('#rating').append('');

            });   */

 $.get(function (data) {
            header('Location:page3.php');
        });
        });
    });
</script>

<body class=" bg-nav2 ">

<nav class="navbar navbar-dark"  style="background-color: #000000">
    <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/IMDB_Logo_2016.svg" alt="" style="width: 140px">
    </a>
</nav>

<div class="jumbotron" style="background-color: #570434">
    <div class="row">
        <div class="col-7">
            <h1 class="display-4 text-light">Official Movie Ratings </h1>
            <p class="lead text-light">Read reviews before wasting movie at the Theaters</p>
            
        </div>
        <div class="col-5">
            
            <a class="btn btn-lg offset-8 mt-100" href="index.php" style="color: #E10C85"><font size="4">Log Out</a>
        </div>
    </div>
</div>
<h1 class="text-center text-light" style="color: #343A40">Top Rated Are Movies are below:-</h1>




<div class="container">
    <div class="row">



        <div class="col-3">
            <div class="card">
                <img src="https://i.pinimg.com/originals/98/de/9c/98de9ce3c0772ac036d91265c911db26.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 ">
               
                    <h5  class="card-title text-light">Dilwale Dulhania Le Jayenge</h5>
                   
                    <a href="page3_modefied.php?i=0" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card ">
                <img src="data:image/jpeg;base64,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" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body   bg-nav2 " style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Parasite</h5>
                    
                    <a href="page3_modefied.php?i=1" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51PmHDi0bFL.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Shawshank Redemption</h5>
                   
                    <a href="page3_modefied.php?i=2" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://images-na.ssl-images-amazon.com/images/I/71a-l6PfT6L._SY606_.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Godfather</h5>
                    
                    <a href="page3_modefied.php?i=3" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://ih0.redbubble.net/image.505809634.8839/flat,550x550,075,f.u4.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light"> Your Name.</h5>
                  
                    <a href="page3_modefied.php?i=4" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://i.pinimg.com/originals/c6/56/ac/c656acf20ea94b0a2e3b548cfba1a119.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5 class="card-title  text-light">Schindler's List</h5>
                    
                    <a href="page3_modefied.php?i=5" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://m.media-amazon.com/images/M/MV5BMWMwMGQzZTItY2JlNC00OWZiLWIyMDctNDk2ZDQ2YjRjMWQ0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Godfather: Part II</h5>
                    
                    <a href="page3_modefied.php?i=6" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://prodimage.images-bn.com/pimages/0826663181579_p0_v2_s550x406.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5 class="card-title  text-light">Spirited Away</h5>
                    
                    <a href="page3_modefied.php?i=7" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://assets.www.warnerbros.com/sites/default/files/green_mile_keyart.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Green Mile</h5>
                   
                    <a href="page3_modefied.php?i=8" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7c/Vitaebella.jpg/220px-Vitaebella.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light"> Life Is Beautiful</h5>
                    
                    <a href="page3_modefied.php?i=9" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="data:image/jpeg;base64,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" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Pulp Fiction</h5>
                   
                    <a href="page3_modefied.php?i=10" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="data:image/jpeg;base64,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" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5 class="card-title  text-light">A Dog's Will</h5>
                   
                    <a href="page3_modefied.php?i=11" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b8/Spider-Man_Into_the_Spider-Verse_%282018_poster%29.png/220px-Spider-Man_Into_the_Spider-Verse_%282018_poster%29.png" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5 class="card-title  text-light">Spider-Man: Into the Spider-Verse</h5>
                    
                    <a href="page3_modefied.php?i=12" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://musicimage.xboxlive.com/catalog/video.movie.8D6KGWZL5PRK/image?locale=en-us&mode=crop&purposes=BoxArt&q=90&h=225&w=150&format=jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Dark Knight</h5>
                   
                    <a href="page3_modefied.php?i=13" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://i.ebayimg.com/images/g/3uYAAOSwbsBXn3Z1/s-l300.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body  bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Forrest Gump</h5>
                   
                    <a href="page3_modefied.php?i=14" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://www.foxmovies.com/s3/dev-temp/en-US/__5951f4d047790-medium.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body   bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Fight Club</h5>
                   
                    <a href="page3_modefied.php?i=15" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




          <div class="col-3">
            <div class="card">
                <img src="https://cdn.shopify.com/s/files/1/0747/3829/products/HP2480_09ac6e62-51a2-4640-a1ca-41cacd3b4059_1024x1024.jpg?v=1515503761" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body   bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Psycho</h5>
                   
                    <a href="page3_modefied.php?i=16" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



         <div class="col-3">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/9d/Lord_of_the_Rings_-_The_Return_of_the_King.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body    bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">The Lord of the Rings: The Return of the King</h5>
                   
                    <a href="page3_modefied.php?i=17" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>




        <div class="col-3">
            <div class="card">
                <img src="https://images-na.ssl-images-amazon.com/images/I/410FKSV8XGL._SY445_.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body    bg-nav2 "style="height: 150px;width: 210px">
                    <h5 class="card-title  text-light">Once Upon a Time in America</h5>
                    
                    <a href="page3_modefied.php?i=18" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>


             <div class="col-3">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg" style="height: 256px;width: 210px" class="card-img-top" style="height: 256px;width: 256px">
                <div class="card-body    bg-nav2 "style="height: 150px;width: 210px">
                    <h5  class="card-title  text-light">Avengers: Endgame</h5>
                  
                    <a href="page3_modefied.php?i=19" class="btn text-light btn-lg">View Details</a>
                </div>
            </div>
        </div>



    </div>
</div>

</body>
</html>