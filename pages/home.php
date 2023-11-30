<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">

    <title>Document</title>
</head>
<body>
    <main class="">
        <header class="">
            <img id="logo-img" src="../images/logo.png" alt="logo-img" />
            <nav>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href=""><li>About us</li></a>
                    <li id="join-us-btn">JOIN US</li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <div class="content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="screen-img d-block w-100" src="../images/screen_1.jpg" alt="First slide" width="1200" height="500">>
                            <div class="carousel-caption d-none d-md-block">
                                <button id="screen-1-btn" type="button" class="screen-more-btn btn btn-warning">More</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="screen-img d-block w-100" src="../images/screen_2.jpg" alt="First slide" width="1200" height="500">>
                            <div class="carousel-caption d-none d-md-block">
                                <button id="screen-2-btn" type="button" class="screen-more-btn btn btn-warning">More</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="screen-img d-block w-100" src="../images/screen_3.jpg" alt="First slide" width="1200" height="500">>
                            <div class="carousel-caption d-none d-md-block">
                                <button id="screen-3-btn" type="button" class="screen-more-btn btn btn-warning">More</button>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="screen-info">
                    <div class="default-info">
                        <h1 id="info-h1">Now Showing on our Cinemas!</h1>
                        <h3 id="info-h3">Click 'more' for details.</h3>
                        <img id="popcorn-img" src="../images/popcorn.png" alt="popcorn">
                    </div>

                    <div class="screen-1-info">
                        <h1 id="screen-1-info-h1">Trolls Band Together</h1>
                        <p id="screen-1-info-p">
                                Poppy discovers that Branch and his four brothers were once part of her 
                                favorite boy band. When one of his siblings, Floyd, gets kidnapped by a
                                 pair of nefarious villains, Branch and Poppy embark on a harrowing and 
                                 emotional journey to reunite the other brothers and rescue Floyd from a 
                                 fate even worse than pop culture obscurity.
                        </p>

                        <div class="functions">
                            <div class="trailer">
                                <img src="../images/play.png" alt="play" data-toggle="modal" data-target="#trailer-1">
                                <h5>Watch trailer...</h5>
                            </div>

                            <div class="to-do">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#screen-time-1">
                                    Screen Time
                                </button>
                                <button type="button" class="btn btn-dark">Available Seats</button>
                            </div>
                        </div>
                    </div>

                    <div class="screen-2-info">
                        <h1 id="screen-2-info-h1">The Marvels</h1>
                        <p id="screen-2-info-p">
                                Poppy discovers that Branch and his four brothers were once part of her 
                                favorite boy band. When one of his siblings, Floyd, gets kidnapped by a
                                 pair of nefarious villains, Branch and Poppy embark on a harrowing and 
                                 emotional journey to reunite the other brothers and rescue Floyd from a 
                                 fate even worse than pop culture obscurity.
                        </p>

                        <div class="functions">
                            <div class="trailer">
                                <img src="../images/play.png" alt="play" data-toggle="modal" data-target="#trailer-2">
                                <h5>Watch trailer...</h5>
                            </div>

                            <div class="to-do">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#screen-time-2">
                                    Screen Time
                                </button>
                                <button type="button" class="btn btn-dark">Available Seats</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="screen-3-info">
                        <h1 id="screen-3-info-h1">Barbie</h1>
                        <p id="screen-3-info-p">
                                Poppy discovers that Branch and his four brothers were once part of her 
                                favorite boy band. When one of his siblings, Floyd, gets kidnapped by a
                                 pair of nefarious villains, Branch and Poppy embark on a harrowing and 
                                 emotional journey to reunite the other brothers and rescue Floyd from a 
                                 fate even worse than pop culture obscurity.
                        </p>

                        <div class="functions">
                            <div class="trailer">
                                <img src="../images/play.png" alt="play" data-toggle="modal" data-target="#trailer-3">
                                <h5>Watch trailer...</h5>
                            </div>

                            <div class="to-do">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#screen-time-3">
                                    Screen Time
                                </button>
                                <button type="button" class="btn btn-dark">Available Seats</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="screen-time-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screen-time-title-1">Select Showtime for Trolls</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>
                        <input type="radio" name="show" value="morning"> Morning Show: 10:00 AM - 1:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="noon"> Noon Show: 1:00 PM - 4:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="evening"> Evening Show: 4:00 PM - 7:00 PM
                    </label>
                </div>
                <div class="modal-footer">
                    <button id="screen-time-btn-1" type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="screen-time-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screen-time-title-2">Select Showtime for the Marvels</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>
                        <input type="radio" name="show" value="morning"> Morning Show: 10:00 AM - 1:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="noon"> Noon Show: 1:00 PM - 4:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="evening"> Evening Show: 4:00 PM - 7:00 PM
                    </label>
                </div>
                <div class="modal-footer">
                    <button id="screen-time-btn-1" type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="screen-time-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screen-time-title-3">Select Showtime for the Barbie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>
                        <input type="radio" name="show" value="morning"> Morning Show: 10:00 AM - 1:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="noon"> Noon Show: 1:00 PM - 4:00 PM
                    </label>
                    <label>
                        <input type="radio" name="show" value="evening"> Evening Show: 4:00 PM - 7:00 PM
                    </label>
                </div>
                <div class="modal-footer">
                    <button id="screen-time-btn-1" type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- trailers -->
    <div class="modal fade" id="trailer-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trailer-title-1">Trailer!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="100%" height="360" controls>
                        <source src="../images/screen_1_trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="trailer-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trailer-title-2">Select Showtime for the Marvels</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="100%" height="360" controls>
                        <source src="../images/screen_2_trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="trailer-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trailer-title-3">Select Showtime for the Barbie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="100%" height="360" controls>
                        <source src="../images/screen_3_trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="home.js"></script>
</body>
</html>