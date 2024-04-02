<!DOCTYPE html>
<html>
<head>
    <title>Routes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {padding-top: 30px;  }
        .explanation {margin-bottom: 20px; }
        .panel-heading {cursor: pointer;}
    </style>
</head>
<body>
<div class='container-fluid'>
    <div class="explanation">
        <p>Click on each section below to expand and view the routes. Sections are categorized into Development, API, Admin, and Non-Admin routes.</p>
    </div>
    @php
        $sections = [
            'Site Navigation' => [],
            'Admin' => ['admin'],
            'API' => ['api/'],
            'Development' => ['_debugbar', 'log-viewer', 'sanctum', '_ignition', 'wecodelaravel', 'horizon', 'telescope', 'userVerificatio'],


        ];
    @endphp
    <div class="col-12">
        @foreach ($sections as $section => $prefixes)
            <div class="panel panel-default">
                <div class="panel-heading" data-toggle="collapse" data-target="#collapse{{ $loop->index }}">
                    <h4 class="panel-title">
                        <a href="#collapse{{ $loop->index }}" class="collapsed" data-toggle="collapse">{{ $section }} Routes</a>
                    </h4>
                </div>
                <div id="collapse{{ $loop->index }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        @include('site.layouts.partials.routes_table', ['routes' => Route::getRoutes(), 'prefixes' => $prefixes, 'section' => strtolower($section)])
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
</body>
</html>
