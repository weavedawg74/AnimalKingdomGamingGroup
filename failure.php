<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    <title>Animal Kingdom Gaming Group</title>
</head>

<body id="top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#top">AKG Group</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
                    aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <div class="form-inline ml-auto">
                        <div class="row">
                            <div>
                                <div class="input-group pb-modalreglog-input-group ml-auto">
                                    <!--<button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal"
                                        data-target="#myModal">Login</button>
                                    <button class="btn btn-secondary pb-modalreglog-submit ml-2" data-toggle="modal"
                                        data-target="#myModal2">Join Us</button>-->
                                    <a href="https://discord.gg/9ZdpgMsvDA" target="_blank"><button class="btn btn-primary ml-2">Join Our Discord</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        <!--Log In Modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Log In</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><strong>&times;</strong></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group text-dark">
                                <label for="email">Email address</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon"><i
                                                class="fa fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <label for="password">Password</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon"><i
                                                class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="pws" placeholder="Password"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--Register Modal-->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title text-dark" id="exampleModalLongTitle"><strong>Join the
                                AKG</strong>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><strong>&times;</strong></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="pb-modalreglog-form-reg">
                            <div class="form-group">
                                <div id="pb-modalreglog-progressbar"></div>
                            </div>
                            <div class="form-group text-dark">
                                <label for="email">Email address</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon"><i
                                                class="fa fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <label for="password">Password</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon"><i
                                                class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="inputPws" placeholder="Password"
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <label for="confirmpassword">Confirm password</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon"><i
                                                class="fa fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="inputConfirmPws"
                                        placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <img src="https://i.imgur.com/TTTrnYT.png" class="img-fluid">
            <h4>We are the Animal Kingdom Gaming Group, a few buddies who enjoy gaming together and bringing others into
                the fold.</h4>
            <div id="members" class="flex-container">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://i.imgur.com/6OUEJuv.png" class="card-img bg-dark" alt="pic of weavedawg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Weavedawg</h5>
                                <p class="card-text">The Animal Kingdom's resident Tactician. Whether on the fields of
                                    Rocket League or hunkered down in the fields of FPS games, he's always thinking of
                                    the
                                    step beyond the next step. His play-style of cooler heads prevail is the saving
                                    grace to
                                    errors made by other members.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">ABrutalAnimal</h5>
                                <p class="card-text">The Animal Kingdom's resident Technician. Whether on the fields of
                                    Rocket League or the fields of FPS games, he always brings the crispy flicks. His
                                    play-style of shoot first and ask questions later is the driving force behind many
                                    of
                                    the Animal Kingdoms victories.</p>
                            </div>
                        </div>
                        <div class="col-md-4 bg-dark">
                            <img src="https://i.imgur.com/jmHNTvD.png" class="card-img" alt="pic of ABrutalAnimal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="join">
            <p class="h1">Oopsie Poopsie!</p>
            <p>Something went wrong when trying to register</p>
            <p>It's probably something we did wrong, please try again.</p>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gameQueueModal"
            data-whatever="@getbootstrap">Play with the Animal Kingdom</button>

        <div class="modal fade" id="gameQueueModal" tabindex="-1" role="dialog" aria-labelledby="gameQueueModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title text-dark" id="ModalLabel"><strong>Play with the AKG</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><strong>&times;</strong></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form name="gamerForm"action="process.php" method="post" enctype = "multipart/form-data">
                            <div class="form-group text-dark">
                                <label for="platformUsername">Platform Username</label>
                                <input name="username" type="text" class="form-control" id="username"
                                    placeholder="Platform Username" required>
                            </div>
                            <div class="form-group text-dark">
                                <label for="platformSelect">Select your Platform</label>
                                <select name="platform" class="form-control" id="platformSelect" required>
                                    <option value="">Select a Platform</option>
                                    <option value="Steam">Steam</option>
                                    <option value="Epic Games">Epic Games</option>
                                    <option value="GoG">GoG</option>
                                    <option value="Origin">Origin</option>
                                    <option value="Uplay">Uplay</option>
                                    <option value="Battle">Battle.net</option>
                                </select>
                            </div>
                            <div class="form-group text-dark">
                                <label for="gameSelect">Select the Game you want to Play</label>
                                <select name="games" class="form-control" id="gameSelect" required>
                                    <option value="">Select a Game</option>
                                    <option value="AmongUs">Among Us</option>
                                    <option value="Apex">Apex Legends</option>
                                    <option value="BF4">Battlefield 4</option>
                                    <option value="Battlewake">Battlewake</option>
                                    <option value="BDO">Black Desert Online</option>
                                    <option value="Bloons TD6">Bloons Tower Defense 6</option>
                                    <option value="Elite Dangerous">Elite Dangerous</option>
                                    <option value="Fall Guys">Fall Guys</option>
                                    <option value="For Honor">For Honor</option>
                                    <option value="CODMW">Modern Warfare</option>
                                    <option value="MK 11">Mortal Kombat 11</option>
                                    <option value="R6 Siege">Rainbow Six: Siege</option>
                                    <option value="Rocket League">Rocket League</option>
                                </select>
                            </div>
                            <div class="form-group text-dark">
                                <label for="start">Desired Game Day</label>
                                    <input class="form-control" type="datetime-local" id="start" name="gamedate"
                                    value="" min="2021-01-01T00:00" max="2030-12-31T00:00" required>
                            </div>

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h1>Games we play</h1>

        <div id="games" class="row row-cols-2 row-cols-md-4">
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Apex Legends</p>
                    </div>
                    <img src="https://i.imgur.com/LmDHHPj.jpg" class="card-img-bottom" alt="Apex Legends cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Modern Warfare</p>
                    </div>
                    <img src="https://i.imgur.com/R3E0wl5.jpg" class="card-img-bottom" alt="Apex Legends cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Rainbow Six: Siege</p>
                    </div>
                    <img src="https://i.imgur.com/ThIr4PN.jpg" class="card-img-bottom" alt="R6 Siege cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Rocket League</p>
                    </div>
                    <img src="https://i.imgur.com/mGPQPSP.jpg" class="card-img-bottom" alt="Rocket League cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Black Desert Online</p>
                    </div>
                    <img src="https://i.imgur.com/T69ylnY.jpg" class="card-img-bottom"
                        alt="Black Desert Online cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">For Honor</p>
                    </div>
                    <img src="https://i.imgur.com/Z5TgqLD.jpg" class="card-img-bottom" alt="For Honor cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Bloon Tower Defense 6</p>
                    </div>
                    <img src="https://i.imgur.com/Oyx4HBA.jpg" class="card-img-bottom" alt="Bloons TD6 cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Elite Dangerous</p>
                    </div>
                    <img src="https://i.imgur.com/jCuK15H.jpg" class="card-img-bottom" alt="Elite Dangerous cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Fall Guys</p>
                    </div>
                    <img src="https://i.imgur.com/DelLdPa.jpg" class="card-img-bottom" alt="Fall Guys cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Battlefield 4</p>
                    </div>
                    <img src="https://i.imgur.com/vZwJyEW.jpg" class="card-img-bottom" alt="Battlefield 4 cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Mortal Kombat 11</p>
                    </div>
                    <img src="https://i.imgur.com/VAOXqVc.png" class="card-img-bottom" alt="MK 11 cover art">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">Battlewake</p>
                    </div>
                    <img src="https://i.imgur.com/GwLmMQC.jpg" class="card-img-bottom" alt="Battlewake cover art">
                </div>
            </div>

        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#"><img src="https://i.imgur.com/VdArSaM.png" alt="WEAVE Logo" width="35rem"
                    height="50rem" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="collapsibleNavbar">
                <ul class="nav navbar-nav ml-auto w-100 justify-content-center flex-row">
                    <li class="nav-item">
                        <a href="mailto:weaverling.a@gmail.com"><img src="https://i.imgur.com/C9t63FA.png"
                                title="Contact" alt="Contact" width="50rem"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/weavedawg74" target="_blank"><img
                                src="https://i.imgur.com/zy2V17P.png" title="Facebook" alt="Facebook" width="50rem"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.linkedin.com/in/andrew-weaverling/" target="_blank"><img
                                src="https://i.imgur.com/Hn8Ix3A.png" title="LinkedIn" alt="LinkedIn" width="50rem"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/weavedawg74" target="_blank"><img
                                src="https://i.imgur.com/86gBT2g.png" title="Github" alt="Github" width="50rem"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/weavedawg74/" target="_blank"><img
                                src="https://i.imgur.com/RgBDJCr.png" title="Instagram" alt="Instagram"
                                width="50rem"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.youtube.com/channel/UCQJSMsybsmQmvPmgTOR5osw" target="_blank"><img
                                src="https://i.imgur.com/aYOy66y.png" title="YouTube" alt="YouTube" width="50rem"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>