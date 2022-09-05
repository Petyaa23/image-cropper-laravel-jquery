<html lang="en">
<head>
    <title>How to Image Upload and Crop in Laravel with Ajax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<div class="container">
    <div class="card" style="max-height: 500px;">
        <div class="card-header bg-primary text-center text-white">How to Image Upload and Crop in Laravel with Ajax</div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-4 text-center">
                    <div id="upload-demo"></div>
                </div>
                <div class="col-md-4" style="padding:5%;">
                    <strong>Select image to crop:</strong>
                    <input type="file" id="image">

                    <button class="btn btn-success btn-block upload-image" style="margin-top:2%">Cropping Image</button>
                </div>

                <div class="col-md-4">
                    <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="resources/js/main.js"></script>

</body>
</html>
