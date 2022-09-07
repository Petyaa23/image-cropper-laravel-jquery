{{--<html>--}}
{{--<head>--}}

{{--    <title>Cropper</title>--}}

{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}

{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}

{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}

{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />--}}

{{--</head>--}}
{{--<body>--}}
{{--<div class="container mt-5">--}}
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            Crop Image Using jQuery Croppie with Ajax in Laravel--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <input type="file" name="before_crop_image" id="before_crop_image" accept="image/*" />--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @foreach($images as $value)--}}
{{--        <img alt="" src="{{ $value->title }}">--}}
{{--    @endforeach--}}

{{--</div>--}}



{{--<div id="imageModel" class="modal fade bd-example-modal-lg" role="dialog">--}}
{{--    <div class="modal-dialog modal-lg">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal">×</button>--}}
{{--                <h4 class="modal-title">Crop & Resize Upload Image in PHP with Ajax</h4>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8 text-center">--}}
{{--                        <div id="image_demo" style="width:350px; margin-top:30px"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4" style="padding-top:30px;">--}}
{{--                        <br />--}}
{{--                        <br />--}}
{{--                        <br/>--}}
{{--                        <button class="btn btn-success crop_image">Save</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--            </div>--}}
{{--            <div>--}}



{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src="{{ asset('js/main.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html>
<head>
    <title>Laravel Crop Image Before Upload using Cropper JS</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }
    .modal-lg{
        max-width: 1000px !important;
    }
</style>
<body>
<div class="container">
    <h1>Laravel Crop Image Before Upload using Cropper JS</h1>
    <input type="file" name="image" class="image">
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Laravel Crop Image Before Upload using Cropper JS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop">Crop</button>
            </div>
        </div>
    </div>
</div>


<script>

    let $modal = $('#modal');
    let image = document.getElementById('image');
    let cropper;

    $("body").on("change", ".image", function(e){
        let files = e.target.files;
        let done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        let reader;
        let file;
        let url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function(){
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        canvas.toBlob(function(blob) {

            url = URL.createObjectURL(blob);
            let reader = new FileReader();

            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                let base64data = reader.result;

                const formData = new FormData;
                formData.append('image', blob);
                console.log(formData)
                $.ajax({
                    url:"/save-crop-image",
                    type:'POST',
                    data: formData,
                    cache : false,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        $modal.modal('hide');
                        window.location.reload();

                // $.ajax({
                //     type: "POST",
                //     dataType: "json",
                //     url: "/save-crop-image",
                //     data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                //     success: function(data){
                //         $modal.modal('hide');
                //         alert("success upload image");
                    }
                });
            }
        });
    })

</script>


