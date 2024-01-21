
    <!-- Stylesheets -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :18px ;color:aqua;text-align:right">
                {{ __('طبيبك الافتراضي') }}   ||  حدد قسم الألم الرئيسي
            </h2>

        </x-slot>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>





    </x-app-layout>
