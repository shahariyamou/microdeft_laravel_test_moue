<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">About Me</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-12">Info</label>
                                    <div class="col-md-8">
                                        <h1>Hello,,,, This Is Mou</h1>
                                    </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-12">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

</body>
</html>
