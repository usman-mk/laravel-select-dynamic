<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/function.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="type" class="control-label">ประเภทรถ : </label>
                        <select id="type" class="form-control" onchange="dochange('{{ route('get-json') }}', 'type', this.value, '', 'year');">
                            <option value="0">- เลือกรถ -</option>
                            <option value="1">- รถกระบะ -</option>
                            <option value="2">- รถเก๋ง -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="year" class="control-label">ปี : </label>
                        <select id="year" class="form-control"
                            onchange="dochange('{{ route('get-json') }}', 'year', document.getElementById('type').value, this.value, 'interest');">
                            <option value='0'>- เลือกปี -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="interest" class="control-label">ดอกเบี้ย : </label>
                        <select id="interest" class="form-control">
                            <option value='0'>- เลือกดอกเบี้ย -</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
