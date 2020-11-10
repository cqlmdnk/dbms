<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="assets/css/adminpanel.css">
    <script type="text/javascript" src="assets/js/adminpanel.js"></script>
    <?php   
   require_once('DataLayer/personDAO.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        $_SESSION['type'] = "movie";
    } 

    ?>

    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery.dd.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/dd.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/ispin/dist/ispin.css">
    <script defer src="https://unpkg.com/ispin"></script>


</head>

<body>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script src="assets/js/dynamic-select.js"> </script>

    <ul class="menu cf">
        <li><a onclick="addMovieTab()">Add Movie</a></li>
        <li><a onclick="addSeriesTab()">Add Series</a></li>
        <li><a onclick="addPersonTab()">Add Star</a></li>
    </ul>
    <div class="container">
        <div>

            <form id="add-form" action="Business/add_person.php" method="POST">
                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-underlined">
                        <input type="text" name="movieName">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Movie Name</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-underlined">
                        <input type="text" name="releaseYyear">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Release Year</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-underlined">
                        <input type="text" name="movieDuration">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Duration in Minutes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>

                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-filled">
                        <input type="text" name="movieRating">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Rating</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-filled">
                        <input type="text" name="movieRatingCount">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">How much people rated this movie?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie">
                    <label class="omrs-input-underlined">
                        <input type="text" name="movieNation">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Nation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="movieLimit">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Age Limitations</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="movieIm">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Image url(*.png, *.jpg etc.)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="movie" style="display: none">
                    <label class="omrs-input-underlined">
                        <textarea form="add-form" name="movieInfo" cols="75" rows="3"></textarea>
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Information</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>

                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-underlined">
                        <input type="text" name="seriesName">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Series Name</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-underlined">
                        <input type="text" name="startYear">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Start Year</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-underlined">
                        <input type="text" name="seriesDuration">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Duration of Episodes in Minutes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>

                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-filled">
                        <input type="text" name="seriesRating">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Rating</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-filled">
                        <input type="text" name="seriesRatingCount">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">How much people rated this series?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series">
                    <label class="omrs-input-underlined">
                        <input type="text" name="seriesNation">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Nation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name ="seriesLimit">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Age Limitations</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="seriesIm">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Image url(*.png, *.jpg etc.)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="series" style="display: none">
                    <label class="omrs-input-underlined">
                        <textarea form="add-form" name="seriesInfo" cols="75" rows="3"></textarea>
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Information</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>








                <div class="omrs-input-group" name="person" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="personName">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Name of Person</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="person" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="personBirth">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Birth Date (Please use DD.MM.YYYY as format. )</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="person" style="display: none">
                    <label class="omrs-input-underlined">
                        <input type="text" name="personImage">
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Image url(*.png, *.jpg etc.)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>
                <div class="omrs-input-group" name="person" style="display: none">
                    <label class="omrs-input-underlined">
                        <textarea form="add-form" name="personInfo" cols="75" rows="3"></textarea>
                        <span class="omrs-input-label"></span>
                        <span class="omrs-input-helper">Information</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-5-6c.78 2.34 2.72 4 5 4s4.22-1.66 5-4H7z" />
                        </svg>
                    </label>
                </div>

                <div id="dropdown-list">
                    <br />
                    <div id="directors">
                        <text>Director(s)</text>
                        <br />
                        <button class="stepper" id="btn_remove_dir" type="button" style="width:50px"
                            onclick="stepDown('dir', 1)"> - </button>
                        <input class="stepper" name="dir" id="dir" style="width:50px" value="0" step="1">
                        <button class="stepper" id="btn_add_dir" type="button" style="width:50px"
                            onclick="stepUp('dir', 1)"> + </button>

                        <br />

                    </div>
                    <br />
                    <div id="writers">
                        <text>Writer(s)</text>
                        <br />
                        <button class="stepper" id="btn_remove_wrt" type="button" style="width:50px"
                            onclick="stepDown('wrt', 1)"> - </button>
                        <input class="stepper" name="wrt" id="wrt" style="width:50px" value="0" step="1">
                        <button class="stepper" id="btn_add_wrt" type="button" style="width:50px"
                            onclick="stepUp('wrt', 1)"> + </button>

                        <br />




                    </div>
                    <br />
                    <div id="actors">
                        <text>Actor(s) or Actress(es)</text>
                        <br />
                        <button class="stepper" id="btn_remove_act" type="button" style="width:50px"
                            onclick="stepDown('act', 1)"> - </button>
                        <input class="stepper" name="act" id="act" style="width:50px" value="0" step="1">
                        <button class="stepper" id="btn_add_act" type="button" style="width:50px"
                            onclick="stepUp('act', 1)"> + </button>

                        <br />



                    </div>
                </div>

                <button type="submit">Add </button>






        </div>



        </form>



        <div class="feedback-msg" id="feedback-msg"> <?php 
                        
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            echo '<style type="text/css">#feedback-msg {display: block; } </style>';
                        } 
                        else{
                            echo '<style type="text/css">#feedback-msg {display: node; } </style>';
                        }
                    ?>
        </div>

        <script type="text/javascript">
            var x = "<?php echo $_SESSION['type'] ?>";
            if (x === "person") {
                addPersonTab();
            } else if (x == "series") {
                addSeriesTab();
            } else if (x == "movie") {
                addMovieTab();
            }
        </script>
    </div>
    </div>



    </div>

</body>

</html>