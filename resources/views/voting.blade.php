<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            <img src="{{ $country->flag }}"> {{ $country->name }} is voting
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="links">
            {!! Form::open(['route' => ['voting.post', $country]]) !!}
            <table>
                <thead>
                <tr>
                    <th>Votes</th>
                    <th>Countries</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>{!! Form::select('country_1', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>{!! Form::select('country_2', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>{!! Form::select('country_3', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>{!! Form::select('country_4', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>{!! Form::select('country_5', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>{!! Form::select('country_6', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>{!! Form::select('country_7', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>{!! Form::select('country_8', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>{!! Form::select('country_10', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>{!! Form::select('country_12', $countries, null, ['class' =>  "form-group"]) !!}</td>
                </tr>
                </tbody>
                <tfoot>
                    <td colspan="2">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </td>
                </tfoot>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>
