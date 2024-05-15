<!DOCTYPE html>
<html>
<head>
    <title>J&J</title>
    <style>
        body {
            height: 100vh;
            padding: 2px;
            font-family: Helvetica, Arial, sans-serif;
        }

        #box {
            width: 100%;
            margin: 0 auto;
            height: 100vh;
        }

        #header {
            padding: 10px;
            height: 200px;
            width: 100%;
            position: relative;
            display: block;
            background-color: green;
        }

        #button {
            display: block;
            background-color: blue;
            border: none;
            color: white !important;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            margin: 15px auto;
            font-size: 22px;
            cursor: pointer;
            border-radius: 10px;
        }

        #image {
            display: block;
            width: 150px;
            height: auto;
            margin: 16px auto;
        }

        .text-div {
            font-size: 18px;
            margin-bottom: 3px;
        }

        p, pre {
            font-size: 18px;
            line-height: 1.4;
        }

        .heading {
            color: #504597;
            font-size: 24px;
        }

        #name {
            color: green;
        }
    </style>
</head>
<body>
<div id="box">
    <div id="header">
        <img id="image" src="{{asset($logo)}}">
    </div>
    <div class="spacing"></div>
    <div id="rightbar">
        <h1 class="heading">Hello {{$sender}}!</h1>
        <h2>You have request to recall from <strong id="name">{{ $requestCall->name }}</strong></h2>
        <h3>His/Her phone number is {{ $requestCall->phone_number }}
        </h3>
        <a id="button" href="tel:{{$requestCall->phone_number}}">Call</a>
        @if($requestCall->text)
            <p>And message: {{$requestCall->text}}</p>
        @endif
        <div class="text-div">Thank you,</div>
        <div class="text-div">Your lovely site.</div>

    </div>
</div>
</body>
</html>
