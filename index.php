<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harisbenzz Media | Your Digital marketing Partner.</title>
    <link rel="icon" href="assets/imgs/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="mobile-container">
        <header>
            <section class="hero-banner">
                <div class="logo-wrapper">
                    <img src="assets/imgs/logo.png" alt="Harisbenzz Media logo.">
                </div>
                <div class="hero-image"></div>
            </section>
        </header>
        <main>
            <article class="text-info">
                <h2>Welcome to</h2>
                <h2 class="company_name">Harisbenzz Media</h2>
                <p>We're a full-service Digital Marketing and Production Agency, which delivers captivating result-oriented Digital Marketing Services in the areas of Advertising, Marketing, Branding, Production and Social Media.
                    We develop innovative ideas with vast experience to give our clients appropriate results.</p>
                <div class="">
                    <ul class="tags">
                        <li><a onclick="redirectFunc('Social')" class="tag_style">#Social Media Management<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Video')" class="tag_style">#Videography<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Photography')" class="tag_style">#Photography<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Branding')" class="tag_style">#Branding<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Printing')" class="tag_style">#Printing<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Website')" class="tag_style">#Website Development<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Content')" class="tag_style">#Content Creation<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                        <li><a onclick="redirectFunc('Digital')" class="tag_style">#Digital Marketing<span>
                                    <p class="tag_count">View more</p>
                                </span></a></li>
                    </ul>
                </div>
                <!-- <section class="email-signup">
                    <form>
                        <select class="select email-input" name="services" id="">
                            <option value="Social Media Management">Select what you would like us to do for you</option>
                            <option value="Social Media Management">Social Media Management</option>
                            <option value="Website">I want a business websites</option>
                            <option value="Videography">I want a Videography</option>
                            <option value="Photography">Photography</option>
                            <option value="Product Photography">Product Photography</option>
                        </select>
                        <input class="email-input" type="email" required placeholder="Email Address" name="email-address">
                        <button class="email-submit" value="Go" type="submit" text="Go" for="services"><img src="assets/imgs/icon.png" width="25px"  alt="" srcset=""></button>
                    </form>
                </section> -->
            </article>
        </main>
    </div>
    <div class="hero-image-desktop">
        <img src="https://assets.codepen.io/6060109/athlete-big.png" alt="Femail athlete squinting towards the camera.">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function redirectFunc(val) {
            switch (val) {
                case "Social":
                    window.open('https://harisbenzzmedia.com/service/S-75775', '_blank');
                    break
                case "Video":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Photography":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Branding":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Printing":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Website":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Content":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                case "Digital":
                    window.open('https://harisbenzzmedia.com/service/S-71324', '_blank');
                    break
                default:
                    alert(".....");
            }
        }
    </script>

</body>

</html>