<?php require './fb-init.php'; ?>


<?php if (!isset($_SESSION['access_token'])) :

    header("Location: http://localhost/login/");
    exit();

    ?>

<?php else: ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <!--  roboto font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!--  import ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body style="max-width: 1240px; margin: auto; background: white;
  padding: 10px; text-align: center;">

    <h1 style="margin-top: 250px;">Hi, <?php echo $user->getField('name'); ?> </h1>
    <p class="m-3">I got ur name!! Scroll down and get more extras</p>

    <form class="mt-5" method="get" action="logout.php">
        <button type="submit" class="btn btn-light">Logout</button>
    </form>


    <div class="form-row" style="margin-top: 300px;">
        <div class="col-11">
            <input id="searchfield" type="text" class="form-control" placeholder="Search image here..">
        </div>
        <div class="col d-flex justify-content-start">
            <button onclick="search()" class="btn btn-primary">Search</button>
        </div>
    </div>


    <div id="card" class="container" style="margin-top: 100px;">
        <div class="row mt-4">
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-1" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-1" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-2" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-2" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-3" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-3" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-4" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-4" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-5" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-5" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-6" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-6" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-7" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-7" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-8" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-8" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-9" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-9" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-10" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-10" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-11" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-11" class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img id="img-12" class="card-img-top" src="https://static.impression.co.uk/2014/05/loading1.gif"
                         alt="Card image cap">
                    <div class="card-body">
                        <p id="photographer-12" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>
<?php endif; ?>


<script>

    let query = ""

    function search() {
        query = document.getElementById("searchfield").value;
        console.log(query)

        for (let i = 0; i < 13; i++) {
            let tag = $('#card')
            tag.find('#img-' + (i + 1)).attr('src', 'https://static.impression.co.uk/2014/05/loading1.gif')
        }

            $(function () {
            if (query == "") {
                query = "random"
            }
            $.ajax({
                type: 'GET',
                headers: {
                    "Authorization": "563492ad6f91700001000001f0cc2e4b27404099999fbc4e76547d5e"
                },
                url: 'https://api.pexels.com/v1/search?query=' + query,
                dataType: 'json',
                success: function (response) {
                    for (let i = 0; i < response.photos.length; i++) {
                        let tag = $('#card')
                        tag.find('#photographer-' + (i + 1)).html(response.photos[i].photographer)
                        tag.find('#img-' + (i + 1)).attr('src', response.photos[i].src.original)
                        image = (i + 1) + response.photos[i].src.original
                        console.log(image);
                    }

                }
            })
        })
    }

    $(function () {
        $.ajax({
            type: 'GET',
            headers: {
                "Authorization": "563492ad6f91700001000001f0cc2e4b27404099999fbc4e76547d5e"
            },
            url: 'https://api.pexels.com/v1/curated',
            dataType: 'json',
            success: function (response) {
                for (let i = 0; i < response.photos.length; i++) {
                    let tag = $('#card')
                    tag.find('#photographer-' + (i + 1)).html(response.photos[i].photographer)
                    tag.find('#img-' + (i + 1)).attr('src', response.photos[i].src.original)
                    image = (i + 1) + response.photos[i].src.original
                    console.log(image);
                }

            }
        })
    })


</script>
