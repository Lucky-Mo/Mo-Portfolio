<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Mo-Portfolio</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <meta http-equiv="refresh" content=""> 
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 </head>
    <body>
        <nav class="navbar">
            <div class="navbar-container">

                <!-- Nav left (logo) -->
                 <a class="logo" href="index.php"><img src="images/favicon.ico" alt="logo"></a>

               
                <!-- Nav right (links) -->
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item, container"><a href="index.php" class="nav-middel">Home</a></li>
                    <li class="nav-item, container"><a href="aboutme.php" class="nav-middel">About Me</a></li>
                    <li class="nav-item, container"><a href="service.php" class="nav-middel">Services</a></li>
                    <li class="nav-item, container"><a href="projects.php" class="nav-middel">Projects</a></li>
                    <li class="nav-item, container"><a href="contact.php" class="nav-middel">Contact</a></li>

                    <!-- ????????!!!!!!! -->
                    <div class="nav-right">

                        <!-- Language Selection -->
                        <div class="container" id="nav-language">
                        <select class="button">
                            <option value="en">EN</option>
                            <option value="es">NL</option>
                            <option value="fr">DE</option>
                            <option value="de">FR</option>
                            <option value="zh">AR</option>
                        </select>
                        </div>

                        <!-- Dark or Light Mode -->
                        <div class="container">   
                            <select class="button">
                                <option value="light">Dark</option>
                                <option value="dark">Light</option>
                            </select>
                        </div>
                        
                        <!-- Sign In or Sign Up -->
                        <div class="container">
                            <select class="button">
                                <option value="light">Sign In</option>
                                <option value="dark">Sign Up</option>
                            </select>
                        </div>

                    </div>

                    
                    
                    <!-- Menu when smaller than 768px -->
                </ul>
                 <div class="menu-icon" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>

        <main class="grid grid-cols-4 gap-4">

        <div class="hero-text">
            <h1>Welcome to my universe!</h1>
            <p>I am Muhammad Alothman, a developer crafting digital experiences. <br> I am 19 years old from Syria!</p>
            <li class="nav-item, container"><a href="contact.php" class="nav-middel">Explore My Work!</a></li>
            <a href="projects.php" class="nav-item container" id="explore-work">Explore My Work!</a>
        </div>

        


        <section>
            <!-- From Uiverse.io by D3OXY 
            <div class="card" id="cardid1">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div>

            <div class="card" id="cardid2">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div>

            <div class="card" id="cardid3">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div>

            <div class="card" id="cardid4">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div>

            <div class="card" id="cardid5">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div>

            <div class="card" id="cardid6">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                    <p class="card__title">Project Name</p>
                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <button class="card__button">Live Demo</button>
                    <button class="card__button secondary">Source Code</button>
                </div>
            </div> -->
        </section>
            
        </main>
            

        <script src="script.js"></script>
    </body>
</html>



