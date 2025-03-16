        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Phoenix 2k25</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

                body {
                    font-family: 'Press Start 2P', cursive;
                    overflow-x: hidden;
                }

                .bg-video-container {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    z-index: -1;
                }

                .bg-video {
                    width: 100vw;
                    height: 100vh;
                    object-fit: cover;
                    opacity: 0.6;
                }
                
                footer {
                    font-family: cursive;
                }

                /* Text Effects */
                .text-glow {
                    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
                }

                

                @-webkit-keyframes bounce {
                    0% {
                        text-shadow:
                            0 5px 0 #ccc,
                            0 2px 3px rgba(0, 0, 0, 1);
                    }

                    100% {
                        transform: translateY(-20px);
                        text-shadow: 0 50px 0 #black,
                            0 0px 20px rgba(0, 0, 0, .8);
                    }
                }

                /* Apply Animation */
                .animate-jump {
                    -webkit-animation: bounce .4s ease infinite alternate;
                }

                #loading-screen {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: black;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    z-index: 9999;
                    /* Ensure it covers everything */
                }

                #loading-video {
                    max-width: 100%;
                    max-height: 100%;
                }

                #main-content {
                    display: none; /* Hide the main content initially */
                }
                .card {
  width: 190px;
  height: 254px;
  background: #07182E;
  position: relative;
  display: flex;
  place-content: center;
  place-items: center;
  overflow: hidden;
  border-radius: 20px;
  font-family: 'calibri', cursive;
}

.card h2 {
  z-index: 1;
  color: white;
  font-size: 2em;
  position: relative;
    overflow: hidden;
    transition: transform 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), box-shadow 0.4s ease;
    border-radius: 10px;
}

.card:hover {
    transform: translateY(-12px) scale(1.06);
    box-shadow: 0px 15px 25px rgba(255, 255, 255, 0.15);
}

.card::before {
  content: '';
  position: absolute;
  width: 100px;
  background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
  height: 130%;
  animation: rotBGimg 3s linear infinite;
  transition: left 0.6s ease-in-out;
}
.card:hover::before {
    left: 100%;
}   

@keyframes rotBGimg {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.card::after {
  content: '';
  position: absolute;
  background: #07182E;
  ;
  inset: 5px;
  border-radius: 15px;
}  
/* .card:hover:before {
  background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
  animation: rotBGimg 3.5s linear infinite;
} */



            </style>
        </head>

        <body class="bg-black text-white">
            <!-- Loading Screen -->
            <div id="loading-screen">
                <video autoplay muted loop id="loading-video">
                    <source src="../assets/loading_animation.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

           <?php 
                include("../includes/header.php");
           ?>

            <div class="bg-video-container">
                <video  loop muted class="bg-video" id="main-video" style="display: block;height: 100%;width: 100%;">
                    <source src="../assets/start_animation.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <main id="main-content" class="relative flex flex-col justify-center items-center text-center p-4 h-screen">
                <div class="absolute top-4 left-4 text-xs text-gray-400 z-10">[ TIME:
                    <script>
                        var time = new Date();
                        document.write(time.toLocaleString('en-US', { hour: '2-digit', minute: "2-digit", hour12: true }));
                    </script> ]
                </div>

                <h1 class="text-4xl md:text-6xl text-red-500 animate-jump" style="font-family: 'Algerian';">Pheonix<span class="text-sky-500">2k25</span></h1>
                <div class="flex items-center space-x-2 mt-4 z-10">
                    <div class="w-8 h-1 bg-white"></div>
                    <span class="text-lg md:text-xl">24-25 OCT</span>
                </div>
                <h2 class="text-2xl md:text-4xl mt-4 text-glow z-10">DIGITAL BIG BANG</h2>
                <h2 class="text-2xl md:text-4xl mt-2 text-glow z-10">UNCHARTED REALMS</h2>
                <h2 class="text-2xl md:text-4xl mt-2 text-glow z-10">AWAIT</h2>
            </main>
            
        <!-- Cards Section -->
<section class="py-16 px-4 bg-black text-white">
    <div class="container mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 text-glow">Our Exciting Events</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
            <!-- Card 1 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">Coding Marathon</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Test your coding skills with real-time challenges.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 24 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Learn More</a>
            </div>

            <!-- Card 2 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">Robotics Championship</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Build, innovate, and battle your robots.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 24-25 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Learn More</a>
            </div>

            <!-- Card 3 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">AI & ML Workshop</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Explore the world of artificial intelligence.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 25 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600">Learn More</a>
            </div>

            <!-- Card 4 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">Hackathon</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Compete in a 24-hour coding sprint.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 25 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Learn More</a>
            </div>

            <!-- Card 5 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">Tech Talks</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Learn from industry experts and innovators.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 24-25 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Learn More</a>
            </div>

            <!-- Card 6 -->
            <div class="card w-64 h-80 p-4 relative flex flex-col justify-center items-center text-center">
                <h2 class="text-xl font-bold z-10">Gaming Arena</h2>
                <p class="text-gray-300 text-sm z-10 mt-2">Showcase your gaming skills and win prizes.</p>
                <p class="text-gray-400 text-sm z-10 mt-1">Date: 25 Oct 2024</p>
                <a href="#" class="z-10 mt-4 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">Learn More</a>
            </div>
        </div>
    </div>
</section>

            <footer class="bg-gray-800 py-8 mt-8 ps-8">
                <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
                    <div class="flex items-center mb-4 md:mb-0">
                        <img alt="TantraFiesta Logo" class="mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/Yrvhbc2bVoKZDt2ZkRaiccWYuptr0Mf448jDDRxe906NHtqTA.jpg" width="50"/>
                        <div>
                            <h1 class="text-2xl font-bold">
                                PHEONIX 2k25
                            </h1>
                            <p class="text-gray-400">
                                24-25 October, 2024
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-10 mb-4 md:mb-0">
                        <div class="pr-10">
                            <h2 class="text-lg font-semibold text-gray-300">
                                CONTACT US
                            </h2>
                            <p class="text-gray-400">
                                djalok559552@gmail.in
                            </p>
                            <p class="text-gray-400">
                                +91 8080048058
                            </p>
                        </div>
                        <div class="pr-10">
                            <h2 class="text-lg font-semibold text-gray-300">
                                QUICK LINKS
                            </h2>
                            <ul class="text-gray-400">
                                <li>About</li>
                                <li>Events</li>
                                <li>Sponsors</li>
                                <li>Speakers</li>
                                <li>Teams</li>
                            </ul>
                        </div>
                        <div class="pr-20">
                            <h2 class="text-lg font-semibold text-gray-300">
                                SOCIAL
                            </h2>
                            <ul class="text-gray-400 ">
                                <li><i class="fab fa-instagram"></i> Instagram</li>
                                <li><i class="fab fa-linkedin"></i> LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center text-gray-500 mt-4">
                    <p>
                        Pheonix 2k25 © Website Created and Maintained by
                        <a class="text-blue-500" href="#">
                            Students
                        </a>.
                    </p>
                </div>
            </footer>
            
            <script>
                
                setTimeout(() => {
                    document.getElementById('loading-screen').style.display = 'none'; // Hide loading screen
                    document.getElementById('main-content').style.display = 'flex'; // Show main content
                    var pl =document.getElementById('main-video');
                    pl.play();
                }, 8000);
            </script>

            <script>
                
                const menuToggle = document.getElementById("menuToggle");
                const mobileMenu = document.getElementById("mobileMenu");
                const closeMenu = document.getElementById("closeMenu");

                menuToggle.addEventListener("click", () => {
                    mobileMenu.classList.toggle("open");
                });

                closeMenu.addEventListener("click", () => {
                    mobileMenu.classList.remove("open");
                });
            </script>
        </body>

        </html>
