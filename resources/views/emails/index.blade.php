<style>
    body {
        font-family: sans-serif;
        background: #fff;
    }

    .email--background {
        background: #eee;
        padding: 10px;
        text-align: center;
    }

    .email--container,
    .pre-header {
        max-width: 500px;
        background: #fff;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 5px;
    }

    .email--inner-container {
        padding: 0 5% 40px;
    }

    .pre-header {
        background: #eee;
        color: #eee;
        font-size: 5px;
    }

    img {
        max-width: 100%;
        display: block;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
        color: #a2a2a2;
        margin-bottom: 30px;
    }

    .cta {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background: #373629;
        text-decoration: none;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 5px;
        font-size: 13px;
    }

    .footer-junk {
        padding: 20px;
        font-size: 10px;
    }

    .footer-junk a {
        color: #bbb;
    }
</style>

<html>

<body>

    <div class="email--background">

        <div class="email--container">
            <img src="https://images.unsplash.com/photo-1473042904451-00171c69419d?auto=format&fit=crop&w=600&q=600">
          <h4 style="padding: 0 1rem;"> You have an appointment: {{$appointment->name}} at {{$appointment->appointment_date}}</h4>

            <div class="email--inner-container">
                <p>Please when the time comes click the button below to join the meet!</p>
                <a href="{{$appointment->meeting_url}}" class="cta">Click</a>
            </div>

        </div>

    </div>
</body>

</html>
