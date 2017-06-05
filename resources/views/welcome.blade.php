@extends('layouts.app')

@section('content')
<!-- Container element -->
<div class="parallax"></div>
    <style>
    .parallax {
        /* The image used */
        background-image: url("https://img.alwayswanderlust.com/2016/04/lens-1209823_1280.jpg");
    
        /* Set a specific height */
        height: 350px;
    
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <!-- Container element -->
    <div class="parallax">
        <center><p style="font-size:200px; font-style:bold; color:white">PhotoCom</p></center>
    </div>
    
    <div class="container"><br><br>
    <p style="font-size:20px">
    PhotoCom provides a way to connect people with professional photographers and photographers to assistants. 
    Photographers and assistants create personal profiles containing their portfolios, job history, location, 
    rates, and to manage availability. This information is utilized to return relevant lists of professionals 
    who have the skills and availability to complete jobs entered by users.<br><br> 
 
    PhotoCom facilitates communication allowing for quick discussion and negotiation. Photographers and assistants 
    can accept jobs which are then added to their calendars.  They can view and manage jobs they’ve accepted 
    including viewing information about the job itself and request third party information such as weather forecasts 
    and directions. Users also have the option to cancel scheduled jobs. Users have the option to rate work once it’s 
    completed and write reviews which can be showcased on photographers’ and assistants’ profiles.
    </p></div>
@endsection
