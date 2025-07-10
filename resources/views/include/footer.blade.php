<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 60px 20px;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer .footer-about, .footer .footer-working, .footer .footer-subscribe {
            width: 30%;
            margin-bottom: 30px;
        }
        .footer h4 {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .footer p {
            font-size: 14px;
            line-height: 1.6;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons i {
            margin-right: 10px;
            font-size: 20px;
        }
        .footer .btn-signup {
            background-color: #f5a623;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        .footer .btn-signup:hover {
            background-color: #e59d1f;
        }

        /* Add style for the subscribe box to make it more like the image */
        .footer-subscribe {
            background-color: #1a1a1a;
            padding: 30px;
            border: 2px solid #fff;
            border-radius: 10px;
        }

        .footer .social-icons {
            margin-top: 20px;
        }

        /* For responsiveness */
        @media (max-width: 768px) {
            .footer .container {
                flex-direction: column;
                align-items: center;
            }
            .footer .footer-about, .footer .footer-working, .footer .footer-subscribe {
                width: 100%;
                text-align: center;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="container">
            <!-- About Us Section -->
            <div class="footer-about">
                <h4>ABOUT US</h4>
                <p>Hello we are Comre. We are here to provide you the best offers through our coupons. Hello, we are a company.</p>
                <p><i class="fas fa-map-marker-alt"></i> Washington Square Park, NY, United States</p>
                <p><i class="fas fa-phone-alt"></i> Customer Support: +124 45 76 678</p>
                <p><i class="fas fa-envelope"></i> Email: mail@woodsman.com</p>
            </div>

            <!-- Working Time Section -->
            <div class="footer-working">
                <h4>WORKING TIME</h4>
                <p style="display: flex; justify-content: space-between;">MONDAY <span>08:00 AM - 10:00 PM</span></p>
                <p style="display: flex; justify-content: space-between;">TUESDAY <span>08:00 AM - 10:00 PM</span></p>
                <p style="display: flex; justify-content: space-between;">WEDNESDAY <span>08:00 AM - 10:00 PM</span></p>
                <p style="display: flex; justify-content: space-between;">THURSDAY <span>08:00 AM - 10:00 PM</span></p>
                <p style="display: flex; justify-content: space-between;">FRIDAY <span>08:00 AM - 10:00 PM</span></p>
                <p style="display: flex; justify-content: space-between;">WEEKEND <span>CLOSED</span></p>
                <p style="display: flex; justify-content: space-between;">EMERGENCY UNIT <span>OPEN ANY TIME</span></p>
            </div>

            <!-- Subscribe Section -->
            <div class="footer-subscribe">
                <h4>SUBSCRIBE TO MAIL!</h4>
                <p>Get our Daily email newsletter with Special Services, Updates, Offers, and more</p>
                <input type="email" placeholder="Email Address" style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 20px; border: 1px solid #fff; background-color: #fff; color: #333; border-radius: 5px;">
                <button class="btn-signup">SIGNUP</button>

                <!-- Social Icons -->
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
