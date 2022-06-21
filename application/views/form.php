<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email</title>
    <style>
        .center {
            width: 95%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: 2px solid white;
            padding: 2rem;
            box-shadow: 10px 10px 20px 10px #00000038;
            width: 95%;
            max-width: 500px;
        }

        .card-heading {
            margin: auto;
            padding: 1rem;
            font-size: 2rem;
            font-weight: 700;
        }

        .card-body {
            padding: 1rem;
            font-size: 1rem;
        }


        /* button start*/

        .fancy {
            background-color: transparent;
            border: 2px solid #000;
            border-radius: 4px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            float: right;
            font-weight: 700;
            letter-spacing: 0.05em;
            margin: 0;
            outline: none;
            overflow: visible;
            padding: 1.25em 2em;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            transition: all 0.3s ease-in-out;
            user-select: none;
            font-size: 10px;
        }

        .fancy::before {
            content: " ";
            width: 1.5625rem;
            height: 2px;
            background: black;
            top: 50%;
            left: 1.5em;
            position: absolute;
            transform: translateY(-50%);
            transform-origin: center;
            transition: background 0.3s linear, width 0.3s linear;
        }

        .fancy .text {
            font-size: 1.125em;
            line-height: 1.33333em;
            padding-left: 2em;
            display: block;
            text-align: left;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }

        .fancy .top-key {
            height: 2px;
            width: 1.5625rem;
            top: -2px;
            left: 0.625rem;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, left 0.3s ease-out;
        }

        .fancy .bottom-key-1 {
            height: 2px;
            width: 1.5625rem;
            right: 1.875rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy .bottom-key-2 {
            height: 2px;
            width: 0.625rem;
            right: 0.625rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy:hover {
            color: white;
            background: black;
        }

        .fancy:hover::before {
            width: 0.9375rem;
            background: white;
        }

        .fancy:hover .text {
            color: white;
            padding-left: 1.5em;
        }

        .fancy:hover .top-key {
            left: -2px;
            width: 0px;
        }

        .fancy:hover .bottom-key-1,
        .fancy:hover .bottom-key-2 {
            right: 0;
            width: 0;
        }


        /* button end */

        .input-css {
            display: block;
            border: none;
            width: 100%;
            max-width: 419px;
            background: #cccccc3d;
            border-radius: 6px;
            padding: 10px;
            border: 2px solid darkgray;
        }
    </style>

</head>

<body>
    <div class="center">
        <div class="card">
            <div class="card-heading">
                <span>Send Email !</span>
            </div>
            <div class="card-body">

                <?php
                echo $this->session->flashdata('email_sent');
                echo form_open("Email_controller/send_mail"); ?>

                <p><input class="input-css" id="name" type="text" placeholder="Name" required></p>
                <p><input class="input-css" id="email" type="email" placeholder="Email" required></p>
                <p><input class="input-css" id="subject" type="text" placeholder="Subject" required name="Mail Regarding"></p>
                <p><textarea class="input-css" id="message" placeholder="Message" required rows="5"></textarea></p>
                <p><input type="hidden" name="_captcha" value="false"></p><br>
                <p>
                    <button class="fancy" type="submit" value="SEND MAIL">
                        <span class="top-key"></span>
                        <span class="text">SEND MESSAGE</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </button>
                </p>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</body>

</html>