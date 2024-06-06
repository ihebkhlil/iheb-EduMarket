<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Footer Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        

        footer {
            background-color: #d9edf6;
            position: fixed;
            width: 100%;
            bottom: 0;
            padding: 10px 0;
        }

        .footer-icons img {
            width: 25px;
            height: 25px;
            margin: 0 5px;
        }

        .footer-text {
            color: #86b4d5;
        }
    </style>
</head>
<body>



<footer class="text-light py-4">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <ul class="list-inline footer-icons">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.gmail.com/"><img src="images/gmail.png" alt="Email"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.Twitter.com/"><img src="images/Twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/"><img src="images/youtube.png" alt="YouTube"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <p class="footer-text">Copyright © 2016 apcpedagogie</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
