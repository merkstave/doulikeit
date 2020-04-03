<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doulikeit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        video {
            width: 100%;
        }

        .center-block {
            display: block;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 481px) {
            .center-block {
                display: block;
                max-width: 640px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (min-width: 641px) {
            .center-block {
                display: block;
                max-width: 1024px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="center-block">
                <video autoplay controls>
                    <source src="/storage/video/<?= $video; ?>" type="video/mp4">
                    <source src="/storage/video/<?= $video; ?>" type="video/ogg">
                    <source src="/storage/video/<?= $video; ?>" type="video/webm">
                </video>
            </div>
        </div>
        <div class="row">
            <div class="center-block">
                <a href="" class="btn btn-primary btn-lg active" role="button">I LIEK IT!</a>
            </div>
        </div>
    </main>
</body>
</html>