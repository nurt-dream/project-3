<!DOCTYPE html>

<html>
<head>
    <title>HOME BOOTSTRAP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/style_p2.css"/>
    <link rel="shortcut icon" href="{{ asset('/front/') }}/images/favicon.ico" type="image/x-icon">

    <style>
        @media screen and (max-width:350px){
            [class*="col-"]{
                width: 100%;
            }
        }

        img{
            width: 100%;
        }
    </style>

</head>
<body margin-top="20px;">

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="height: auto;">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="{{ asset('/admin/') }}/index.html">HOME</a></li>
                    <li><a href="{{ asset('/admin/') }}/about.html">ABOUT</a></li>
                    <li><a href="{{ asset('/admin/') }}/portf.html">PORTFOLIO</a></li>
                    <li><a href="{{ asset('/admin/') }}/gallery.html">GALLERY</a></li>
                    <li><a href="{{ asset('/admin/') }}/contact.html">GALLERY</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class=" col-md-2 col-sm-2 col-xs-2"
             style="height: 600px;background-color: #8AC1A1;font-size: 15px;padding-top: 70px;">

            <li><a href="{{ asset('/admin/') }}/index.html" style="color: black;">HOME</a></li>
            <li><a href="{{ asset('/admin/') }}/about.html" style="color: black;">ABOUT</a></li>
            <li><a href="{{ asset('/admin/') }}/portf.html" style="color: black;">PORTFOLIO</a></li>
            <li><a href="{{ asset('/admin/') }}/gallery.html" style="color: black;">GALLERY</a></li>
            <li><a href="{{ asset('/admin/') }}/contact.html" style="color: black;">CONTACT</a></li>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10" style="height: auto;background-color: #F8F8F8;">
            <h2 style="text-align: center">MY DREAMS</h2>
            <h3>Honest Person&colon;</h3>
            <p><justify>An honest person is looking for truth; reads, learns and observes,
                    rather than trying to impose their own preconceptions on events.
                    Thus honest people are humble: they focus on learning and growing
                    rather than posturing and grasping. They don’t understand those shallow idiotic things.</justify></p>
            <h3>Active Person&colon;</h3>
            <p><justify>Is wise, yet humble.
                    Doesn't put others down with his actions, words or strength. He affirms and builds others up.
                    Is not ashamed to live and act differently from the world in order to guard himself.
                    Doesn't blame others for his own problems but embraces responsibility.
                    Understands the value of work and is financially responsible.
                </justify></p>

            <h3>Software Specialist&colon;</h3>
            <p><justify>Business leaders are often challenged to find talented, experienced programming
                    staff, especially if salaries must fit within certain budget guidelines. The fact that
                    most of a programmer’s work is conducted in front of a screen makes the hiring process
                    even more complicated. This has been a big challenge as I live in the heart
                    of Silicon Valley and talent is hard to persuade to leave big companies with large
                    paychecks to work for a new, hip startup.</justify></p>

            <h3>Business Magnet&colon;</h3>
            <p><justify>A business magnate (formally industrialist) refers to an entrepreneur of great
                    influence, importance, or standing in a particular enterprise or field of business. The
                    term characteristically refers to a wealthy entrepreneur or investor who controls through
                    personal business ownership or dominant shareholding position in a firm or industry whose
                    goods or services are widely consumed. Such individuals may also be called czars, moguls,
                    proprietors, tycoons, taipans, barons, or oligarchs.</justify></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="height: 80px;text-align: center;padding-top: 30px;background-color: #9FCDB1;color: black;">
            <p>&copy All Rights is Reserved;</p>
        </div>
    </div>
</div>
</body>
</html>