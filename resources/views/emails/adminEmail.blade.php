<!DOCTYPE html>
<html>
<head>
    <title>J&J</title>
    <style>
        body {
            height: 750px;
            margin: 2px;
            padding: 2px;
            font-family: Helvetica, Arial, sans-serif;
        }

        .button-container {
            margin: 40px 0;
        }

        #box {
            width: 850px;
            margin: 0 auto;
            height: 100%;
        }

        #header {
            height: 200px;
            width: 100%;
            position: relative;
            display: block;
            border-bottom: 1px solid #504597;
            background-color: green;
        }

        .button {
            background-color: #d60e0e;
            border: none;
            color: white !important;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            margin: auto;
            font-size: 22px;
            cursor: pointer;
            border-radius: 10px;
        }

        #image {
            width: 150px;
            height: auto;
            margin-top: 16px;
        }

        #rightbar {
            width: 100%;
            height: 560px;
            padding: 0px;
        }

        .text-div {
            font-size: 18px;
            margin-bottom: 3px;
        }

        #footer {
            clear: both;
            height: 40px;
            text-align: center;
            background-color: #2d0f80;
            margin: 0px;
            padding: 0px;
            color: white;
        }

        p, pre {
            font-size: 18px;
            line-height: 1.4;
        }

        .heading {
            color: #504597;
            font-size: 24px;
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
        <h1 class="heading">You have request to recall from <strong>{{ $requestCall->name }}</strong></h1>
        <h3>His/Her phone number is {{ $requestCall->phone_number }}</h3>

        <p>And message: {{$requestCall->text}}</p>
        <div class="text-div">Thank you,</div>
        <div class="text-div">Your site.</div>
    </div>
</div>
</body>
</html>
