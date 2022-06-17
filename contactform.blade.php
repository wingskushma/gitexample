<!DOCTYPE html>
<html>
<header>
    <h1>Contact us</h1>
    <script src="{{ asset('js/contactform.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/contactform.css') }}">
</header>

<body>
    <div id="form">

        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>

        <form id="waterform" method="post">

            <div class="formgroup" id="name-form">
                <label for="name">Your name*</label>
                <input type="text" id="name" name="name" placeholder="{{ $name }}" />
            </div>

            <div class="formgroup" id="email-form">
                <label for="email">Your e-mail*</label>
                <input type="email" id="email" name="email" placeholder="{{ $email }}" />
            </div>

            <div class="formgroup" id="message-form">
                <label for="message">Your message</label>
                <textarea id="message" name="message"> {{$message ?? ''? $message ?? '': "type your message here " ; }}</textarea>
            </div>

            <input type="submit" value="Send your message!" />
        </form>
    </div>


</body>

</html>
