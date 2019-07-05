<!--api : 8265bd1679663a7ea12ac168da84d2e8-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Train Route</title>

    <!--Project CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--Bootstrap CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>

<script type="text/javascript">
    $(document).ready(function (){
    


       // $('#btn').click(function () {
        var movie='<?php echo $_GET['i'] ?>';

        

        if(movie=='<?php echo $_GET['i'] ?>')
        {


            $.get("https://api.themoviedb.org/3/movie/top_rated?api_key=8265bd1679663a7ea12ac168da84d2e8&language=en-US&page=1",function(data)
           {
            console.log(data);
           


            $('#result').append(
                '<p><h1 style="color: #ffffff;text-align:center"><font size="30">'+ data['results'][movie]['original_title']+'</h1><br><h5 style="color: #ffffff"> ID : '+ data['results'][movie]['id']+
                '<br><br> Original Language : '+ data['results'][movie]['original_language']+
                '<br><br>  Original Title : '+ data['results'][movie]['original_title']+
                '<br><br> OVERVIEW : <br>'+ data['results'][movie]['overview']+
                '<br><br>  popularity : '+ data['results'][movie]['popularity'] +

                '<br><br> release date : '+ data['results'][movie]['release_date']+
                '<br><br> title : '+ data['results'][movie]['title']+
                '<br><br> vote average : '+ data['results'][movie]['vote_average']+'<br><br> vote_count : ' + data['results'][movie]['vote_count']+'<br></h5></p>');


           });
        }
           
           


    //    });
    });
</script>

<body class=" bg-nav2 ">

<nav class="navbar navbar-dark"  style="background-color: #000000">
    <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/IMDB_Logo_2016.svg" alt="" style="width: 140px">
    </a>
</nav>
<!--
<div class="jumbotron" style="background-color: #570434">
    <div class="row" style="margin-top: 25px">
        <div class="col-12">
            <h1 id="name" class="text-center text-light"></h1>
        </div>
    </div>
</div>
-->

<div class="container">
    <div class="row">
        <div id="result" class="col-12">

        </div>
    </div>
</div>

</body>
</html>



