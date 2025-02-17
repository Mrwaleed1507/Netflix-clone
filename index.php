<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="nav">
            <img src="Images/logo.png" alt="logo" class="logo">
            <form action="sign_in.php" method="post">
            <button type="submit">Sign In</button>
            <a href="sign_in.php"></a>
        </form>
        </div>
    </header>


    <div class="hero">

        <img src="Images/hero.jpg" alt="hero-image" class="heroImg">

        <div class="box">
            <div class="heading">

                <h1>
                    Unlimited movies, TV shows, and more.
                </h1>

                <h2>
                    Watch anywhere. Cancel anytime.
                </h2>

                <p>
                    Ready to watch? Enter your email to create or restart your membership.
                </p>

            </div>

            <div class="newsletter">

                <form action="index_form.php" method="post">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Email address" required>
                    <button type="submit" name="submit">Get started ></button>
                    <a href="index_form.php"></a>
                </form>

            </div>

        </div>

    </div>

    <section class="s1">

        <div class="text">
            <h1>Enjoy on your TV.</h1>
            <p>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</p>
        </div>

        <div class="img">
            <img src="Images/tv.png" alt="TV">
        </div>

    </section>

    <section class="s2">

        <div class="img">
            <img src="Images/mobile.jpg" alt="mobile">
        </div>

        <div class="text">
            <h1>Download your shows to watch offline.</h1>
            <p>Save your favorites easily and always have something to watch.</p>
        </div>

    </section>

    <section class="s1">

        <div class="text">
            <h1>Watch everywhere.</h1>
            <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</p>
        </div>

        <div class="img">
            <img src="Images/device-pile.png" alt="devices">
        </div>

    </section>
    <section class="faq">

        <h2>Frequently Asked Questions</h2>

        <div class="faq-card">

            <div class="accordion">

                <a href="#" class="title">
                    <h3>What is Netflix?</h3>
                    <img src="https://img.icons8.com/android/24/ffffff/plus.png" id="icon" />
                </a>

            </div>

            <div class="accordion">

                <a href="#" class="title">
                    <h3>How much does it cost?</h3>
                    <img src="https://img.icons8.com/android/24/ffffff/plus.png" id="icon" />
                </a>

            </div>

            <div class="accordion">

                <a href="#" class="title">
                    <h3>How can I watch?</h3>
                    <img src="https://img.icons8.com/android/24/ffffff/plus.png" id="icon" />
                </a>

            </div>

            <div class="accordion">

                <a href="#" class="title">
                    <h3>How can I cancel?</h3>
                    <img src="https://img.icons8.com/android/24/ffffff/plus.png" id="icon" />
                </a>

            </div>

            <div class="accordion">

                <a href="#" class="title">
                    <h3>What can I watch on Netflix?</h3>
                    <img src="https://img.icons8.com/android/24/ffffff/plus.png" id="icon" />
                </a>

            </div>

        </div>

    </section>

    <div class="bottom-newsletter">

        <div class="text">

            <p>
                Ready to watch? Enter your email to create or restart your membership.
            </p>

        </div>

        <div class="newsletter-card2">

            
            <input type="email" name="email" id="email" placeholder="Email address">
            <a href="#" id="btn">Get started ></a>

        </div>

    </div>

    <footer>

        <div class="list-items">

            <div class="footer-top-a">

                <a href="#" id="footer-top-a">Questions? Contact us.</a>

            </div>

            <div class="footer-links">


                <div class="list">

                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Investor relations</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Speed Test</a></li>

                    </ul>

                </div>

                <div class="list">
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Cookie Preferences</a></li>
                        <li><a href="#">Legal Notices</a></li>
                    </ul>
                </div>

                <div class="list">
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Ways to Watch</a></li>
                        <li><a href="#">Corporate Informatio</a></li>
                        <li><a href="#">Netflix Orignals</a></li>
                    </ul>
                </div>

                <div class="list">
                    <ul>
                        <li><a href="#">Media Center</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <p id="footer-end-text">Netflix Pakistan</p>
        </div>


    </footer>

</body>

</html>