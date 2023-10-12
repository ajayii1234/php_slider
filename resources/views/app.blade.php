<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS in the head section -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/image1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide 1</h5>
                    <p>Here is your text input:</p>
                    <div class="card mb-3">
                    <div class="card card-sm">
    <div class="card-body">
        <div class="input-group">
            <p>Hello, are you still there?</p>
        </div>
    </div>
</div>

</div>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/image2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide 2</h5>
                    <p>Here is your text input:</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter text here" aria-label="Text Input" aria-describedby="basic-addon2">
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/image3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide 3</h5>
                    <p>Here is your text input:</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter text here" aria-label="Text Input" aria-describedby="basic-addon2">
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Include Bootstrap JavaScript in the head section -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Initialize the Carousel -->
    <script>
        $(document).ready(function () {
            $('#carouselExampleAutoplaying').carousel({
                interval: 2000, // Set the interval for auto-sliding in milliseconds
                pause: 'hover', // Pause the carousel on hover (optional)
            });
        });
    </script>
</body>
</html>
