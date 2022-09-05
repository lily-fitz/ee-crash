<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>EE Crash</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;500;600;700;800&family=Mukta:wght@300;400;500;600&family=Lato:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="dist/css/main.css" />

        <script src="https://kit.fontawesome.com/f35b1c8d5b.js" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="main.js" defer></script>

        <!-- Lottie CSS File -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>

    <body>
        <section class="jc-sticky-header">
            <header class="container-pilo jc-header">
                <div class="flex">
                    <p class="grand-opening fs-h6 monospace" style="margin-top: -6px">Opening 2023</p>
                </div>
                <div class="flex">
                    <h1 class="jaxcode-logo">
                        <!-- <span style="color: #facd19">EE</span> -->
                        <!-- <span style="color: #fffa2f">EE</span> -->
                        <span class="ee">EE</span>
                        <span style="display: inline-block; margin-left: 2px">Crash</span>
                    </h1>
                </div>
                <div>
                    <a class="enroll" href="#enroll">Enroll</a>
                    <button type="button" class="menu-toggle" aria-expanded="false">
                        <span></span>
                    </button>
                </div>
            </header>
        </section>

        <div id="nav-side">
            <nav class="nav">
                <ul class="primary-nav" data-visible="false">
                    <li>
                        <a class="home" href="#home" class="active">Home</a>
                    </li>
                    <li>
                        <a class="primer" href="#primer">Primer</a>
                    </li>
                    <li>
                        <a class="spotlight" href="#spotlight">EE Field</a>
                    </li>
                    <li>
                        <a class="bootcamps" href="#bootcamps">Lectures</a>
                        <!-- <a href="#schedule">Schedule</a> -->
                    </li>
                    <li>
                        <a class="formats" href="#formats">Formats</a>
                        <!-- <a href="#curriculum">Material</a> -->
                    </li>
                    <li>
                        <a class="tuition" href="#tuition">Tuition</a>
                        <!-- <a href="#directions">Contact</a> -->
                    </li>
                    <li>
                        <a class="maps-enroll" href="#enroll">Enroll</a>
                    </li>
                </ul> 
                
            </nav>
        </div>

        <!-- Intro Home ------------------------------------------------->

        <main id="home" class="bg-main-home">
            <div class="container grid-intro-home center">
                <div class="intro-home-one flow">
                    <!-- <h3 class="fs-h5">Top Rated Bootcamp</h3> -->

                    <p class="grand-opening go-intro fs-h6 monospace" style="margin-top: -6px">Opening 2023</p>

                    <h1 class="fs-h3-intro center">
                        An Expert Introduction To<br />
                        <span style="color: #ee040e">Electrical Engineering</span>
                    </h1>
                    <img src="imgs/whitelinesHOZ.png" alt="#" />
                    <h3 class="fs-h5 top-rated">
                        <img src="imgs/lsharris-logo.png" alt="#" class="comp-sci-logo" />
                        Instructor Experience<br />
                        MIT • Georgia Tech • L3Harris
                    </h3>
                    <br /><br /><br />
                    <!-- <div class="intro-notification bg-lightpurple">
                        <p>
                            Veterans and active duty military, contact us for a $1000 discount on Full Bootcamp Tuition.
                            Requires DD214 or Military ID.
                        </p>
                    </div> -->
                    <a class="explore-arrow" href="#bootcamps">
                        Lectures
                        <br /><br />
                        <img src="imgs/arrow-red.png" alt="#" class="purple-arrow-icon" />
                    </a>
                </div>
            </div>
        </main>

        <!-- Notification ------------------------------------------------->

        <!-- <section class="container-pilo">
            <div class="intro-notification bg-lightpurple">
                <p>
                    Veterans and active duty military, contact us for a $1000 discount on Full Bootcamp Tuition.
                    Requires DD214 or Military ID.
                </p>  
            </div>         
        </section> -->
<a name="thankyou"></a>
        <!-- Grid Two Col------------------------------------------------->
       
        <section id="primer" class="container">
            <div class="primer-two-col">
                <div class="flow">
                    <h3 class="fs-h5">Pre-Engineering Lecture</h3>
                    <h1 class="h1-primer">
                        Need a<br />
                        Math & Physics<br />
                        <span class="red">Primer?</span>
                    </h1>
                       
                    <!-- <button class="explore">Enroll Now</button> -->
                </div>
                <div class="bg-pricetable p-4r">
                     <h3 class="fs-h5-snug capitalize bold monospace">Sign up to be notified when EE&nbsp;Primer is enrolling.</h3>
                    <form method="POST" action="contactprocess-eecrash.php">
                        <input class="monospace" type="email" id="useremail" name="useremail" placeholder="Your Email" required>
                        
                        <input name="emailadd" class="explore" type="submit" value="Sign Up!">
                    </form>
                    
<?php
if(isset($_SESSION['message'])) {
echo '<h3 style="color:green;" class="form-thank-you">Thank you!</h3>';
unset($_SESSION['message']);
}
?>
                </div>
            </div>
        </section>
        <!-- Divider ------------------------------------------------->
        <!-- <section class="container-pilo bg-white divider-cont">
            <div class="divider">&nbsp;</div>
        </section>
        <br /><br /> -->

        <!-- Coder Spotlight ------------------------------------------------->
        <section id="spotlight" class="bg-white">
            <div class="container-title flow">
                <br />
                <h1 class="fs-h3">EE Field</h1>
                <h3 class="fs-h5">People in the field: Learn where you can go.</h3>
            </div>
    
            <div class="container coder-spotlight">
                <div class="field-section">
                    <div>
                        <svg
                            id="Capa_1"
                            enable-background="new 0 0 512.004 512.004"
                            viewBox="0 0 512.004 512.004"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="m221.799 139.528c-2.922-4.879-8.353-7.68-14.024-7.249l-121.895 9.416c-12.341.954-23.334 7.422-30.162 17.748l-51.155 77.372c-5.177 7.831-6.001 17.63-2.203 26.214 3.797 8.584 11.602 14.565 20.877 16.002l98.84 15.309c.769.119 1.537.178 2.299.178 5.063-.001 9.853-2.568 12.636-6.922l84.557-132.283c3.063-4.793 3.151-10.905.23-15.785z"
                                fill="#2a2a2a"
                            />
                            <path
                                d="m372.475 290.205c-4.88-2.922-10.993-2.833-15.785.23l-132.282 84.557c-5.009 3.202-7.654 9.06-6.745 14.935l15.308 98.84c1.437 9.276 7.419 17.08 16.004 20.878 3.57 1.579 7.35 2.358 11.112 2.358 5.281 0 10.528-1.538 15.101-4.561l77.373-51.156c10.326-6.826 16.795-17.82 17.747-30.162l9.416-121.894c.439-5.671-2.369-11.102-7.249-14.025z"
                                fill="#2a2a2a"
                            />
                            <path
                                d="m192.87 412.278c5.97 5.97 14.453 8.763 22.78 7.37 122.112-20.418 218.741-121.522 255.528-192.645 40.849-78.974 42.362-162.43 40.227-201.57-.732-13.412-11.423-24.103-24.835-24.835-39.14-2.134-122.595-.621-201.57 40.228-71.122 36.787-172.226 133.416-192.644 255.528-1.392 8.327 1.4 16.81 7.37 22.78z"
                                fill="#f1f1fb"
                            />
                            <path
                                d="m503.743 8.261-357.445 357.445 46.572 46.572c5.97 5.97 14.453 8.762 22.78 7.37 122.112-20.418 218.741-121.522 255.528-192.644 40.849-78.974 42.362-162.43 40.227-201.57-.366-6.706-3.222-12.732-7.662-17.173z"
                                fill="#d7d6fb"
                            />
                            <path
                                d="m350.731 236.238c-19.209.001-38.41-7.309-53.033-21.932-14.166-14.165-21.968-33-21.968-53.033s7.802-38.868 21.968-53.033c29.241-29.242 76.822-29.243 106.065 0 14.166 14.165 21.967 33 21.967 53.033s-7.801 38.868-21.967 53.033c-14.619 14.62-33.829 21.93-53.032 21.932zm-42.427-117.391h.01z"
                                fill="#bedef7"
                            />
                            <path
                                d="m92.356 296.354c-1.392 8.327 1.4 16.81 7.37 22.78l93.144 93.144c5.97 5.97 14.453 8.762 22.78 7.37 26.571-4.443 51.933-12.709 75.737-23.652l-175.379-175.378c-10.943 23.803-19.209 49.166-23.652 75.736z"
                                fill="#c7d1eb"
                            />
                            <path
                                d="m15.304 421.938c3.838 0 7.678-1.465 10.606-4.394l48.973-48.973c5.858-5.857 5.858-15.355 0-21.213-5.857-5.858-15.354-5.858-21.213 0l-48.972 48.973c-5.858 5.857-5.858 15.355 0 21.213 2.929 2.93 6.767 4.394 10.606 4.394z"
                                fill="#fbbc04"
                            />
                            <path
                                d="m119.764 392.24c-5.857-5.857-15.355-5.857-21.213 0l-94.154 94.154c-5.858 5.857-5.858 15.355 0 21.213 2.929 2.929 6.768 4.393 10.607 4.393s7.678-1.465 10.606-4.394l94.154-94.154c5.858-5.857 5.858-15.355 0-21.212z"
                                fill="#fbbc04"
                            />
                            <path
                                d="m164.645 437.121c-5.857-5.857-15.355-5.857-21.213 0l-48.972 48.972c-5.858 5.857-5.858 15.355 0 21.213 2.929 2.929 6.768 4.394 10.606 4.394s7.678-1.465 10.606-4.394l48.973-48.973c5.858-5.857 5.858-15.355 0-21.212z"
                                fill="#fbbc04"
                            />
                            <path
                                d="m4.397 507.607c2.929 2.929 6.768 4.393 10.607 4.393s7.678-1.465 10.606-4.394l94.154-94.154c5.858-5.857 5.858-15.355 0-21.213z"
                                fill="#fbbc04"
                            />
                            <path
                                d="m146.298 365.706 46.572 46.572c5.97 5.97 14.453 8.762 22.78 7.37 26.571-4.443 51.933-12.709 75.737-23.652l-87.689-87.689z"
                                fill="#bdc6de"
                            />
                            <path
                                d="m297.698 214.306c14.623 14.623 33.824 21.934 53.033 21.932 19.203-.002 38.413-7.313 53.032-21.932 14.166-14.166 21.967-33 21.967-53.033s-7.801-38.868-21.967-53.033z"
                                fill="#abc8e0"
                            />
                            <path
                                d="m350.73 116.295c-11.523 0-23.047 4.386-31.819 13.159-8.499 8.499-13.181 19.799-13.181 31.819s4.682 23.32 13.181 31.819c17.545 17.545 46.095 17.546 63.64 0 8.499-8.5 13.18-19.8 13.18-31.82s-4.681-23.32-13.18-31.819c-8.773-8.772-20.296-13.158-31.821-13.158z"
                                fill="#4bbefd"
                            />
                            <path
                                d="m382.55 129.454-63.639 63.639c17.545 17.545 46.095 17.546 63.639 0 8.499-8.5 13.18-19.8 13.18-31.82s-4.68-23.32-13.18-31.819z"
                                fill="#0590fb"
                            />
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">AEROSPACE & DEFENSE</h4>
                        <h3 class="fs-h5-5">
                            Boeing<br />
                            Raytheon<br />Northrop-Grumman<br />Lockheed Martin<br />L3Harris
                        </h3>
                    </div>
                </div>
                <div class="field-section">
                    <div>
                        <svg id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path
                                d="m328.9 429.246a16 16 0 0 1 -16 16h-113.8a16 16 0 0 1 0-32h113.8a16 16 0 0 1 16 16zm-199.1-16h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 1 0 0-32zm366.2 0h-113.8a16 16 0 1 0 0 32h113.8a16 16 0 0 0 0-32zm-366.2-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm366.2 69.3h-113.8a16 16 0 1 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 1 0 0 32h113.8a16 16 0 0 0 0-32zm-113.8-37.3h113.8a16 16 0 0 0 0-32h-113.8a16 16 0 1 0 0 32zm-69.3 106.6h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32zm0-69.3h-113.8a16 16 0 0 0 0 32h113.8a16 16 0 0 0 0-32z"
                                fill="var(--green)"
                            />
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">Technology</h4>
                        <h3 class="fs-h5-5">
                            Apple<br />
                            Samsung<br />
                            Intel<br />
                            IBM<br />
                            Hewlitt-Packard
                        </h3>
                    </div>
                </div>
                <div class="field-section">
                    <div>
                        <svg
                            id="Capa_1"
                            enable-background="new 0 0 512 512"
                            viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="m272.292 470.957v-172.836h-32.584v172.837h-189.092c-2.859 0-5.177 2.318-5.177 5.177v22.23c0 2.859 2.318 5.177 5.177 5.177h410.768c2.859 0 5.177-2.318 5.177-5.177v-22.23c0-2.859-2.318-5.177-5.177-5.177h-189.092z"
                                fill="#d8eafb"
                            />
                            <path d="m79.551 67.178h355.639v251.219h-355.639z" fill="#cce6ff" />
                            <path
                                d="m445.716 105.747h-379.432c-11.512 0-20.845-9.333-20.845-20.845v-64.057c0-11.512 9.333-20.845 20.845-20.845h379.432c11.512 0 20.845 9.333 20.845 20.845v64.057c0 11.512-9.333 20.845-20.845 20.845z"
                                fill="#00"
                            />
                            <path
                                d="m445.716 245.661h-379.432c-11.512 0-20.845-9.333-20.845-20.845v-64.057c0-11.512 9.333-20.845 20.845-20.845h379.432c11.512 0 20.845 9.333 20.845 20.845v64.057c0 11.512-9.333 20.845-20.845 20.845z"
                                fill="#00"
                            />
                            <path
                                d="m445.716 385.575h-379.432c-11.512 0-20.845-9.333-20.845-20.845v-64.057c0-11.512 9.333-20.845 20.845-20.845h379.432c11.512 0 20.845 9.333 20.845 20.845v64.057c0 11.512-9.333 20.845-20.845 20.845z"
                                fill="#000"
                            />
                            <path
                                d="m445.716 0h-34.572c8.908 0 16.13 7.222 16.13 16.13v73.487c0 8.908-7.222 16.13-16.13 16.13h34.572c11.512 0 20.845-9.333 20.845-20.845v-64.057c0-11.512-9.333-20.845-20.845-20.845z"
                                fill="#000"
                            />
                            <path
                                d="m445.716 139.914h-34.572c8.908 0 16.13 7.222 16.13 16.13v73.487c0 8.908-7.222 16.13-16.13 16.13h34.572c11.512 0 20.845-9.333 20.845-20.845v-64.057c0-11.513-9.333-20.845-20.845-20.845z"
                                fill="#000"
                            />
                            <path
                                d="m445.716 279.828h-34.572c8.908 0 16.13 7.222 16.13 16.13v73.487c0 8.908-7.222 16.13-16.13 16.13h34.572c11.512 0 20.845-9.333 20.845-20.845v-64.057c0-11.513-9.333-20.845-20.845-20.845z"
                                fill="#000"
                            />
                            <g fill="#d8eafb">
                                <path
                                    d="m278.381 43.882h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z"
                                />
                                <path
                                    d="m278.381 77.317h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z"
                                />
                                <path
                                    d="m278.381 184.254h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z"
                                />
                                <path
                                    d="m278.381 217.689h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z"
                                />
                                <path
                                    d="m278.381 324.626h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z"
                                />
                                <path
                                    d="m278.381 358.061h-198.83c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h198.83c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z"
                                />
                            </g>
                            <path
                                d="m196.08 506.084v-37.67c0-3.267 2.649-5.916 5.916-5.916h29.253v-18.444c0-3.267 2.649-5.916 5.916-5.916h37.67c3.267 0 5.916 2.649 5.916 5.916v18.444h28.313c3.267 0 5.916 2.649 5.916 5.916v37.67c0 3.267-2.649 5.916-5.916 5.916h-107.068c-3.267 0-5.916-2.649-5.916-5.916z"
                                fill="#b3d8fb"
                            />
                            <path
                                d="m403.576 76.586c-13.075 0-23.712-10.637-23.712-23.712s10.637-23.713 23.712-23.713 23.712 10.637 23.712 23.713c0 13.074-10.637 23.712-23.712 23.712z"
                                fill="#fbd307"
                            />
                            <path
                                d="m403.576 216.481c-13.075 0-23.712-10.637-23.712-23.713 0-13.075 10.637-23.712 23.712-23.712s23.712 10.637 23.712 23.712c0 13.076-10.637 23.713-23.712 23.713z"
                                fill="var(--blue)"
                            />
                            <path
                                d="m403.576 356.413c-13.075 0-23.712-10.637-23.712-23.712s10.637-23.713 23.712-23.713 23.712 10.637 23.712 23.713c0 13.075-10.637 23.712-23.712 23.712z"
                                fill="var(--red)"
                            />
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">Devices</h4>
                        <h3 class="fs-h5-5">
                            Tesla<br />
                            Bose<br />
                            GE<br />
                            Dyson
                        </h3>
                    </div>
                </div>
                <div class="field-section">
                    <div>
                        <svg
                            version="1.1"
                            id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 512 512"
                            style="enable-background: new 0 0 512 512"
                            xml:space="preserve"
                        >
                            <path
                                style="fill: #fedb41"
                                d="M205.035,299.104H20V196.999c0-24.472,19.909-44.381,44.381-44.381h96.273
	c24.472,0,44.381,19.909,44.381,44.381L205.035,299.104L205.035,299.104z"
                            />
                            <path
                                style="fill: #fcbf29"
                                d="M205.035,299.104h-92.518V152.618h48.136c24.472,0,44.381,19.909,44.381,44.381L205.035,299.104
	L205.035,299.104z"
                            />
                            <path
                                style="fill: #fedb41"
                                d="M112.518,129.823c-29.058,0-52.699-23.641-52.699-52.699s23.641-52.699,52.699-52.699
	s52.699,23.641,52.699,52.699C165.216,106.182,141.576,129.823,112.518,129.823z"
                            />
                            <path
                                style="fill: #fcbf29"
                                d="M112.518,129.823V24.425c29.058,0,52.699,23.641,52.699,52.699
	C165.216,106.182,141.576,129.823,112.518,129.823z"
                            />
                            <path
                                style="fill: var(--green)"
                                d="M491.407,299.104H306.372V196.999c0-24.472,19.909-44.381,44.381-44.381h96.273
	c24.472,0,44.381,19.909,44.381,44.381L491.407,299.104L491.407,299.104z"
                            />
                            <path
                                style="fill: var(--darkgreen)"
                                d="M491.407,299.104H398.89V152.618h48.136c24.472,0,44.381,19.909,44.381,44.381V299.104z"
                            />
                            <path
                                style="fill: var(--green)"
                                d="M398.89,129.823c-29.058,0-52.699-23.641-52.699-52.699s23.641-52.699,52.699-52.699
	s52.699,23.641,52.699,52.699C451.589,106.182,427.948,129.823,398.89,129.823z"
                            />
                            <path
                                style="fill: var(--darkgreen)"
                                d="M398.89,129.823V24.425c29.058,0,52.699,23.641,52.699,52.699
	C451.589,106.182,427.948,129.823,398.89,129.823z"
                            />
                            <path
                                style="fill: #81c8ee"
                                d="M356.744,299.104H155.256V187.92c0-26.648,21.68-48.328,48.328-48.328h104.833
	c26.648,0,48.328,21.68,48.328,48.328v111.184H356.744z"
                            />
                            <path
                                style="fill: #159ce4"
                                d="M356.744,299.104H256V139.592h52.417c26.648,0,48.328,21.68,48.328,48.328v111.184H356.744z"
                            />
                            <path
                                style="fill: #81c8ee"
                                d="M256,114.77c-31.642,0-57.385-25.743-57.385-57.385S224.358,0,256,0s57.385,25.743,57.385,57.385
	S287.642,114.77,256,114.77z"
                            />
                            <path
                                style="fill: #159ce4"
                                d="M256,114.77V0c31.642,0,57.385,25.743,57.385,57.385S287.642,114.77,256,114.77z"
                            />
                            <path
                                style="fill: #000"
                                d="M20,276v33.943l67.947,7.195c4.238,17.374,11.1,33.719,20.143,48.592l-42.968,53.146l48.003,48.003
	l53.146-42.968c14.874,9.042,31.219,15.905,48.592,20.143L222.057,512h67.886l7.195-67.947c17.374-4.238,33.719-11.1,48.592-20.143
	l53.146,42.968l48.003-48.003L403.91,365.73c9.042-14.874,15.905-31.219,20.143-48.592L492,309.943V276H20z"
                            />
                            <path
                                style="fill: #000"
                                d="M256,276v236h33.943l7.195-67.947c17.374-4.238,33.719-11.1,48.592-20.143l53.146,42.968
	l48.003-48.003L403.91,365.73c9.042-14.874,15.905-31.219,20.143-48.592L492,309.943V276H256z"
                            />
                            <path
                                style="fill: #2a2a2a"
                                d="M155.256,276c0,55.64,45.105,100.744,100.744,100.744S356.744,331.64,356.744,276H155.256z"
                            />
                            <path
                                style="fill: #2a2a2a"
                                d="M256,276v100.744c55.64,0,100.744-45.105,100.744-100.744H256z"
                            />
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">Field Development</h4>
                        <h3 class="fs-h5-5">
                            Analog Devices<br />
                            Matlab<br />
                            Xilinx<br />
                        </h3>
                    </div>
                </div>
                <div class="field-section">
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs"
                            version="1.1"
                            x="0"
                            y="0"
                            viewBox="0 0 512 512"
                            style="enable-background: new 0 0 512 512"
                            xml:space="preserve"
                            class=""
                        >
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m271 226c0 5.684-3.208 10.869-8.291 13.418l-60 30c-7.487 3.717-16.439.645-20.127-6.709-3.706-7.412-.703-16.421 6.709-20.127l51.709-25.854v-65.728h-30v45c0 8.291-6.709 15-15 15s-15-6.709-15-15v-45h-30v150h45c8.291 0 15 6.709 15 15s-6.709 15-15 15h-45v30h90v-75c0-5.684 3.208-10.869 8.291-13.418l60-30c7.427-3.691 16.406-.703 20.127 6.709 3.706 7.412.703 16.421-6.709 20.127l-51.709 25.854v65.728h30v-45c0-8.291 6.709-15 15-15s15 6.709 15 15v45h30v-150h-45c-8.291 0-15-6.709-15-15s6.709-15 15-15h45v-30h-90z"
                                        fill="#000"
                                        data-original="#000000"
                                        class=""
                                    />
                                    <path
                                        d="m497 151c8.291 0 15-6.709 15-15s-6.709-15-15-15h-46v-45c0-8.291-6.709-15-15-15h-45v-46c0-8.291-6.709-15-15-15s-15 6.709-15 15v46h-30v-46c0-8.291-6.709-15-15-15s-15 6.709-15 15v46h-30v-46c0-8.291-6.709-15-15-15s-15 6.709-15 15v46h-30v-46c0-8.291-6.709-15-15-15s-15 6.709-15 15v46h-30v-46c0-8.291-6.709-15-15-15s-15 6.709-15 15v46h-45c-8.291 0-15 6.709-15 15v45h-46c-8.291 0-15 6.709-15 15s6.709 15 15 15h46v30h-46c-8.291 0-15 6.709-15 15s6.709 15 15 15h46v30h-46c-8.291 0-15 6.709-15 15s6.709 15 15 15h46v30h-46c-8.291 0-15 6.709-15 15s6.709 15 15 15h46v30h-46c-8.291 0-15 6.709-15 15s6.709 15 15 15h46v45c0 8.291 6.709 15 15 15h45v46c0 8.291 6.709 15 15 15s15-6.709 15-15v-46h30v46c0 8.291 6.709 15 15 15s15-6.709 15-15v-46h30v46c0 8.291 6.709 15 15 15s15-6.709 15-15v-46h30v46c0 8.291 6.709 15 15 15s15-6.709 15-15v-46h30v46c0 8.291 6.709 15 15 15s15-6.709 15-15v-46h45c8.291 0 15-6.709 15-15v-45h46c8.291 0 15-6.709 15-15s-6.709-15-15-15h-46v-30h46c8.291 0 15-6.709 15-15s-6.709-15-15-15h-46v-30h46c8.291 0 15-6.709 15-15s-6.709-15-15-15h-46v-30h46c8.291 0 15-6.709 15-15s-6.709-15-15-15h-46v-30zm-106 225c0 8.291-6.709 15-15 15h-240c-8.291 0-15-6.709-15-15v-240c0-8.291 6.709-15 15-15h240c8.291 0 15 6.709 15 15z"
                                        fill="var(--blue)"
                                        data-original="#000000"
                                        class=""
                                    />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">Chips & Semiconductors</h4>
                        <h3 class="fs-h5-5">
                            TSMC<br />
                            Texas Instruments<br />
                            NVIDIA<br />
                            Micron
                        </h3>
                    </div>
                </div>
                <div class="field-section">
                    <div>
                        <svg
                            version="1.1"
                            id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 464 464"
                            style="enable-background: new 0 0 464 464"
                            xml:space="preserve"
                        >
                            <path style="fill: #fdbd40" d="M144,48h176v400H144V48z" />
                            <path style="fill: #000" d="M208,352h48v96h-48V352z" />
                            <path style="fill: #4bbefd" d="M0,224h144v208H0V224z" />
                            <path style="fill: #0590fb" d="M16,128h96v96H16V128z" />
                            <path style="fill: #4bbefd" d="M32,72h64v56H32V72z" />
                            <path style="fill: #000" d="M56,16h16v56H56V16z" />
                            <path style="fill: var(--darkgreen)" d="M320,224h144v208H320V224z" />
                            <path style="fill: var(--green)" d="M448,224h-96V72l96,32V224z" />
                            <g>
                                <path style="fill: #000" d="M376,120h16v104h-16V120z" />
                                <path style="fill: #000" d="M408,120h16v104h-16V120z" />
                                <path style="fill: #000" d="M24,248h96v16H24V248z" />
                                <path style="fill: #000" d="M24,280h96v16H24V280z" />
                                <path style="fill: #000" d="M24,312h96v16H24V312z" />
                                <path style="fill: #000" d="M24,344h96v16H24V344z" />
                                <path style="fill: #000" d="M184,96h32v32h-32V96z" />
                                <path style="fill: #000" d="M248,96h32v32h-32V96z" />
                                <path style="fill: #000" d="M184,160h32v32h-32V160z" />
                                <path style="fill: #000" d="M248,160h32v32h-32V160z" />
                                <path style="fill: #000" d="M184,224h32v32h-32V224z" />
                                <path style="fill: #000" d="M248,224h32v32h-32V224z" />
                                <path style="fill: #000" d="M184,288h32v32h-32V288z" />
                                <path style="fill: #000" d="M248,288h32v32h-32V288z" />
                                <path style="fill: #000" d="M368,384h48v48h-48V384z" />
                                <path style="fill: #000" d="M344,248h16v16h-16V248z" />
                                <path style="fill: #000" d="M376,248h32v16h-32V248z" />
                                <path style="fill: #000" d="M424,248h16v16h-16V248z" />
                                <path style="fill: #000" d="M344,280h16v16h-16V280z" />
                                <path style="fill: #000" d="M376,280h32v16h-32V280z" />
                                <path style="fill: #000" d="M424,280h16v16h-16V280z" />
                                <path style="fill: #000" d="M344,312h16v16h-16V312z" />
                                <path style="fill: #000" d="M376,312h32v16h-32V312z" />
                                <path style="fill: #000" d="M424,312h16v16h-16V312z" />
                                <path style="fill: #000" d="M344,344h16v16h-16V344z" />
                                <path style="fill: #000" d="M376,344h32v16h-32V344z" />
                                <path style="fill: #000" d="M424,344h16v16h-16V344z" />
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </div>
                    <div class="coder-info">
                        <h4 class="fs-h5 pb-075 bold sansserif">Infrastructure</h4>
                        <h3 class="fs-h5-5">
                            Military<br />
                            Transportation<br />
                            Renewable Energy<br />
                            Smart Home Devices
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview Top ------------------------------------------------->

        <section id="bootcamps" class="container">
            <div class="info-overview-top">
                <div>&nbsp;</div>
                <div class="info-one flow-sm">
                    <h1 class="fs-h3 max-flow center">Lectures</h1>
                    <div class="lecture-accent">
                        <div>
                            <img
                                src="imgs/location-marker-lg.png"
                                alt="#"
                                class="lecture-location-image"
                            />
                        </div>
                        <div>
                            <p class="fs-h6-title-blue max-flow monospace">
                                Boston,&nbsp;MA & Atlanta,&nbsp;GA<br />
                                <span class="fs-h6-title-royalblue monospace max-flow"
                                    >Attend In-person, Online, or Flex!</span
                                >
                            </p>
                        </div>
                    </div>
                    <br /><br /><br />
                    <!-- <p class="center" style="border-top: dashed 3px #000; padding: 20px 10px; margin-top: 40px">
                        &nbsp;
                    </p> -->

                    <h3 class="fs-h4 bold pb-075 center">BIG TOPICS</h3>
                    <h4 class="fs-h5-6 pb-05 monospace center">
                        <span style="background: #ffe644; margin-inline: auto">&nbsp;Crash Course&nbsp;</span>
                    </h4>
                    <h4 class="fs-h5 center">2hrs - $50</h4>
                    <br /><br />

                    <!--lecture-->
                    <h4 class="fs-h5 green">Every 4 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Digital Logic</h3>
                    <!-- <h4 class="fs-7 max-flow inline" style="background: #f6f6f6">
                        &nbsp;Tuition: $3500 • Payment Plans Available <b>VIEW</b>&nbsp;
                    </h4>
                    <br /> -->
                    <p class="monospace">
                        [&nbsp;Boolean Algebra, Truth Tables, Logic Gates, Transistors, Voltage States, Digital
                        Arithmetic, ALUs, and Processors&nbsp;]
                    </p>

                    <!--lecture-->
                    <br /><br />
                    <h4 class="fs-h5 green">Every 4 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Electromagnetics</h3>
                    <p class="monospace">
                        [&nbsp;Vector Calculus, Chirality, Field Energy, Complementary Math, Right-Hand Rule,
                        Conductivity, and Energy Conversion&nbsp;]
                    </p>

                    <!--lecture-->
                    <br /><br />
                    <h4 class="fs-h5 green">Every 6 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Circuits</h3>
                    <p class="monospace">
                        [&nbsp;Ohm's Law, LRC Components, Circuit Analysis, Solid-State Behavior, Analog and Digital
                        Applications&nbsp;]
                    </p>

                    <!--lecture-->
                    <br /><br />
                    <h4 class="fs-h5 green">Every 6 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Signal Processing</h3>
                    <p class="monospace">
                        [&nbsp;Analog and Digital Signals, Useful Representations, Fourier, Discrete Time Transforms,
                        Frequency Transforms, Filter Defining, and Interesting Applications&nbsp;]
                    </p>

                    <!--lecture-->
                    <br /><br />
                    <h4 class="fs-h5 green">Every 6 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Applied Programming</h3>
                    <p class="monospace">
                        [&nbsp;Syntax, Linear Processing, Data Structures, Objects, Debugging, Hardware Applications,
                        Digital Simulations, Task Scripting&nbsp;]
                    </p>

                    <!--lecture-->
                    <!-- <br /><br />
                    <div class="popular-title-ribbon">
                        <div class="popular-title">
                            <h4 class="fs-h5 purple">Every 3 Weeks * $45</h4>
                            <h3 class="fs-h4 bold pb-075">Math & Science Primer</h3>
                        </div>
                        <div class="popular-ribbon flex">
                            <img src="imgs/awards.png" alt="#" class="ribbon-icon" />
                            <p class="inline pink-red fs-h5-5">Interactive</p>
                        </div>
                    </div>
                    <h4 class="fs-h5-5 flow-self inline" style="background: #f6f6f6">&nbsp;Tuition: $500&nbsp;</h4>
                    <span class="bg-lightorange"
                        >&nbsp;Complete this course and get 10% off a any full lecture.&nbsp;</span
                    > -->
                    <br /><br />
                    <p class="tiny-info">* For all lectures, refunds are available until 7 days before time.</p>

                    <br /><br />
                    <br /><br />
                    <br /><br />

                    <h3 class="fs-h4 bold pb-075 center">SMALL TOPICS</h3>
                    <h4 class="fs-h5-6 pb-05 monospace center">
                        <span style="background: #ffe644; margin-inline: auto">&nbsp;Crash Introduction&nbsp;</span>
                    </h4>
                    <h4 class="fs-h5 center">1hr - $30</h4>
                    <br /><br />

                    <!--lecture-->
                    <h4 class="fs-h5 green">Every 4 Weeks</h4>
                    <h3 class="fs-h4 bold pb-075">Digital Logic</h3>
                    <!-- <h4 class="fs-7 max-flow inline" style="background: #f6f6f6">
                        &nbsp;Tuition: $3500 • Payment Plans Available <b>VIEW</b>&nbsp;
                    </h4>
                    <br /> -->
                    <p class="monospace">
                        [&nbsp;Boolean Algebra, Truth Tables, Logic Gates, Transistors, Voltage States, Digital
                        Arithmetic, ALUs, and Processors&nbsp;]
                    </p>
                </div>
            </div>
        </section>

        <!-- Notification ------------------------------------------------->

        <section class="container center">
            <div>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs"
                    version="1.1"
                    width="68"
                    height="68"
                    x="0"
                    y="0"
                    viewBox="0 0 512.001 512"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                    class=""
                >
                    <g>
                        <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="m255.835938 503c-13.789063 0-26.5625-6.222656-35.0625-17.089844l-51.140626-64.855468-89.644531-.054688c-44.101562 0-79.988281-35.886719-79.988281-80v-261c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80v161c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-161c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v261c0 22.054688 17.945312 40 40 40l99.351562.058594c6.121094.003906 11.902344 2.8125 15.691407 7.617187l57.191406 72.527344c1.167969 1.496094 2.59375 1.796875 3.605469 1.796875h.019531c1.007813-.003906 2.445313-.3125 3.5625-1.761719.035156-.046875.070313-.09375.105469-.136719l56.726562-72.433593c3.792969-4.839844 9.597656-7.667969 15.746094-7.667969h100c22.058594 0 40-17.945312 40-40 0-11.046875 8.953125-20 20-20s20 8.953125 20 20c0 44.113281-35.886719 80-80 80h-90.257812l-50.679688 64.707031c-8.453125 10.9375-21.21875 17.238281-35.046875 17.292969-.058594 0-.121094 0-.179687 0zm20.164062-198v-108c0-11.046875-8.953125-20-20-20s-20 8.953125-20 20v108c0 11.046875 8.953125 20 20 20s20-8.953125 20-20zm-20-197c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20 20-8.953125 20-20-8.953125-20-20-20zm0 0"
                            fill="#fa1919"
                            data-original="#000000"
                            class=""
                        />
                    </g>
                </svg>
                <br /><br />
            </div>
            <div class="new-note-border">
                <div class="new-note">
                    <p class="fs-h6 monospace">Nationwide Avg.</p>
                    <p class="fs-h5 bold max30">Starting salary for an electrical engineer is 45K&nbsp;-&nbsp;75K</p>
                </div>
            </div>
        </section>

        <!-- Flex Formats ------------------------------------------------->
        <section id="formats">
            <div class="container-title flow">
                <h1 class="fs-h3">Flexible Formats</h1>
                <h3 class="fs-h5 max-flow">To fit every schedule.</h3>
                <p class="section-desc">
                    Attend in-person lectures, or watch and participate via live-stream with chat. All lectures are recorded and available (for a limited time) online afterwards.
                    <!-- All classes are recorded and available online afterwards. Talk
                    with your instructor anytime during the week through video chat or messenger. -->
                </p>
            </div>
       
            <div class="container-bg flex-formats bg-white">
                <div>
                    <div class="format-img-container">
                        <img src="imgs/in-personjaxcode.png" alt="#" class="format-img" />
                    </div>
                    <div>
                        <h4 class="fs-h5 pb-075 bold sansserif">In-Person</h4>
                        <h3 class="fs-h5-5 center">Boston & Atlanta</h3>
                    </div>
                </div>
                <div>
                    <div class="format-img-container">
                        <img src="imgs/googlemeet.png" alt="#" class="format-img" />
                    </div>
                    <div>
                        <h4 class="fs-h5 pb-075 bold sansserif">Live-Streamed</h4>
                        <h3 class="fs-h5-5">via Twitch</h3>
                    </div>
                </div>
                <div>
                    <div class="format-img-container">
                        <img src="imgs/prerecorded.jpg" alt="#" class="format-img" />
                    </div>
                    <div>
                        <h4 class="fs-h5 pb-075 bold sansserif">Online</h4>
                        <h3 class="fs-h5-5">Twitch Recording</h3>
                    </div>
                </div>
                <div>
                    <div class="format-img-container">
                        <img src="imgs/comboattendxs.png" alt="#" class="format-img" />
                    </div>
                    <div>
                        <h4 class="fs-h5 pb-075 bold sansserif">Flex</h4>
                        <h3 class="fs-h5-5">Combination of Formats</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Overview Bottom ------------------------------------------------->

        <!-- <div class="info-overview-bottom">
      <div class="overview-one">#</div>
      <div class="overview-two">#</div>
    </div> -->

        <!-- Payment Plans -------------------------------------->

        <section id="tuition" class="bg-white">
            <div class="container-title flow">
                <h1 class="fs-h3">Lecture Bundles</h1>
                <h3 class="fs-h5 max-flow">Signup for multiple lectures at once.</h3>
            </div>
       
            <div class="container-bg plan-tables">
                <div class="coder-one bg-pricetable br-10px">
                    <h4 class="fs-h5 bold sansserif">3 Lectures</h4>
                    <p class="price">
                        $99
                    </p>
                    <p class="plan-feature"><span class="check darkyellow">✓</span> Any 3 lectures, within 6 mos. of signing up.</p>
                    <p class="plan-feature"><span class="check darkyellow">✓</span> 30 min. Q&A post-lecture.</p>
                    <button class="explore-comingsoon">Coming Soon</button>
                </div>
                <div class="coder-two bg-pricetable br-10px">
                    <h4 class="fs-h5 bold sansserif">6 Lectures</h4>
                    <p class="price">
                        $199
                    </p>
                    <p class="plan-feature"><span class="check brightblue">✓</span>Any 6 lectures, within 6 mos. of signing up.</p>
                    <p class="plan-feature"><span class="check brightblue">✓</span>30 min. Q&A post-lecture.</p>
                    <button class="explore-comingsoon">Coming Soon</button>
                </div>
                <div class="coder-three bg-pricetable br-10px">
                    <h4 class="fs-h5 bold sansserif">College Lectures</h4>
                    <p class="price">
                        $249
                    </p>
                    <p class="plan-feature"><span class="check green">✓</span>Guest speaker for college lecture, up to 400 people.</p>
                    <p class="plan-feature"><span class="check green">✓</span>50 min. Q&A post-lecture.</p>
                    <button class="explore-comingsoon">Coming Soon</button>
                </div>
                </div>
            </div>
        </section>


        <section id="enroll" class="container bg-white">
            <div class="grid-two-col">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.8442208994734!2d-81.5562126853336!3d30.1844436189013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e5cb73565b098d%3A0x918d089ec73714c2!2sJax%20Code%20Avenues!5e0!3m2!1sen!2sus!4v1640040125004!5m2!1sen!2sus"
                        frameborder="0"
                        style="border: 0"
                        allowfullscreen
                    ></iframe>
                </div>
                <div class="flow"><a name="bottomform"></a>
                    <h3 class="fs-h5">2023 Lectures</h3>
                    <h1 class="fs-h1">
                        Add your email<br />
                        to be notified<br />
                        <span class="red">when dates open</span>
                    </h1>
                    <?php
if(isset($_SESSION['message2'])) {
echo '<h3 style="color:green;" class="form-thank-you">Thank you!</h3>';
unset($_SESSION['message2']);
}
?>
                    <form action="contactprocess-eecrash.php" method="POST">
                    <input type="hidden" name="bottomform" value="true">
                        <input class="monospace" type="email" id="useremail" name="useremail" placeholder="Your Email">
                        
                        <input name="emailadd" class="explore" type="submit" value="Sign Up!">
                      </form>
                    <!-- <button class="explore">Sign Up!</button> -->
                </div>
            </div>
            <br /><br />
        </section>

        <!-- Gray ------------------------------------------------->

        <!-- <section class="bg-white">
      <div class="container-bg subjects">
        <div class="coder-one">#</div>
        <div class="coder-two">
          <button class="explore">Enroll CTA</button>
        </div>
        <div class="coder-three">#</div>
      </div>
    </section> -->

        <!-- Footer --------------------------------------------->

        <footer class="bg-footer">
            <div class="container-bg footer-grid">
                <div>
                    <div>
                        <!-- <lottie-player
                            src="https://assets2.lottiefiles.com/packages/lf20_uem9tohe.json"
                            background="transparent"
                            speed="2"
                            style="width: 40px; height: 34px"
                            loop
                            autoplay
                        ></lottie-player> -->
                        <h1 class="jaxcode-logo-footer-top red">
                            EE<span style="color: white; display: inline-block; margin-left: 2px">Crash</span>
                        </h1>
                        <h1 class="jaxcode-logo-footer-bottom"></h1>
                    </div>
                    <h3 class="fs-h5 white">Electrical Engineering Lectures</h3>
                    <p class="footer-text">In-depth on the latest additions and core concepts. Properties and theories from the 3 major ee-fields: electricity, electronics, and electro-magnetism.</p>
                    <br />
                    <h3 class="fs-h5 white">Coming 2023!</h3>
                    <!-- <br />
                    <button class="explore">Enroll</button> -->
                </div>
                <div>
                    <ul class="monospace">
                        <li><span>Lorentz force law</span></li>
                        <li><span>Electromotive force</span></li>
                        <li><span>Electromagnetic induction</span></li>
                        <li><span>Faraday-Lenz law</span></li>
                        <li><span>Displacement current</span></li>
                        <li><span>Maxwell's equations</span></li>
                        <li><span>Electromagnetic field</span></li>
                        <li><span>Electromagnetic radiation</span></li>
                    </ul>
                </div>
                <div>
                    <h3 class="fs-h5-5 red">
                        For the latest<br />
                        from eecrash<br />
                    </h3>
                    <div class="flex" style="margin-left: 70px; margin-top: 40px">
                        <h3 class="fs-h5-5 social-handle-footer">@EECrashLectures</h3>
                        <div class="soundwave-footer">
                            <img src="imgs/whitelines.png" alt="#" class="sound-waves" />
                        </div>
                        <div class="social-icons-footer">
                            <i class="fa fa-twitter"></i><br />
                            <i class="fa fa-facebook"></i><br />
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-section">
                <p>© Copyright EECrash. All Rights Reserved.</p>
            </div>
        </footer>

        <!-- Intro Home 3 Col ------------------------------------------------->

        <!-- <main class="bg-main-home">
            <div class="container grid-intro-home">
                <div class="soundwave">
                    <img src="imgs/whitelines.png" alt="#" class="sound-waves" />
                </div>
                <div class="intro-home-one flow">
                    
                    <h3 class="fs-h5 center" style="max-width: 40ch">
                        <img src="imgs/computersciencelogoicon.png" alt="#" class="comp-sci-logo" />
                        Top Rated Coding & Cyber Bootcamp by ComputerScience.org
                    </h3>
                    <img src="imgs/whitelinesHOZ.png" alt="#" />
                    <h1 class="fs-h1">
                        START A<br />
                        NEW CAREER<br />
                        <span class="blue">MAY&nbsp;2, 2022</span>
                    </h1>
                    <button class="explore-arrow">
                        Explore
                        <br /><br />
                        <img src="imgs/arrow-purple1.png" alt="#" class="purple-arrow-icon" />
                    </button>
                </div>
                <div class="intro-home-two center">
                    <h3 class="fs-h5 center" style="max-width: 40ch">
                        <img src="imgs/computersciencelogoicon.png" alt="#" class="comp-sci-logo" />
                        Top Rated Coding & Cyber Bootcamp by ComputerScience.org
                    </h3>
                    <img src="imgs/whitelinesHOZ.png" alt="#" />
                </div>
            </div>
        </main> -->

        <!------------------------------------------------------->
    </body>
</html>
