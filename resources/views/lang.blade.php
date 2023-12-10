<!DOCTYPE html>
<html>
<head>
    <title>Multi Language Website with Laravel 9</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container text-center">
        <hr>
        <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6">
                <strong>Select Language: </strong>
                <select class="form-control lang-change">
                    <option value="en" {{ session()->get('lang_code')=='en' ? 'selected' : ''}}>English</option>
                    <option value="sp" {{ session()->get('lang_code')=='sp' ? 'selected' : ''}}>Spanish</option>
                    <option value="bn" {{ session()->get('lang_code')=='bn' ? 'selected' : ''}}>Bengali</option>
                </select>
            </div>
        </div>
        <h4 class="mt-5">{{ __('text.content') }}</h4>
    </div>
</body>
@extends('lang_script');

</html>
