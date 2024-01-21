
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
                    <h2>Laravel 10 CRUD </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('departements.create') }}"> Create New Departement</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>

                <th width="280px">Action</th>
            </tr>
            @foreach ($departements as $departement)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $departement->name }}</td>

                <td>
                    <form action="{{ route('departements.destroy',$departement->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('departements.show',$departement->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('departements.edit',$departement->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $departements->links() !!}




    </x-app-layout>
