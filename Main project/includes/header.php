<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Text Effects */
        .text-glow {
                    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
                }

                .logo:hover {
                    transform: scale(1.1);
                    transition: 0.5s;
                    cursor: pointer;
                }

                /* Desktop Navbar Styles */
                .desktop-nav {
                    display: none;
                }

                .desktop-nav a {
                    color: #a0aec0;
                    transition: color 0.2s, transform 0.2s;
                }

                .desktop-nav a:hover {
                    background: linear-gradient(to right, #4fcb12, #07b9ea);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    transform: scale(1.1);
                }

                /* Responsive Styles */
                @media (min-width: 768px) {
                    .desktop-nav {
                        display: flex;
                        gap: 1.5rem;
                    }

                    .mobile-menu-icon {
                        display: none;
                    }
                }
    </style>
</head>
<body>
<header class="p-4 bg-black relative z-10 flex justify-between items-center">
                <div class="text-lg md:text-2xl text-red-500 font-bold logo" style="font-family: 'Algerian';">Phoenix<span class="text-blue-500">2k25</span></div>

                <!-- Mobile Menu Icon -->
                <button id="menuToggle" class="text-gray-400 focus:outline-none mobile-menu-icon md:hidden">
                    <i class="fas fa-bars text-2xl"></i>
                </button>

                <!-- Desktop Navbar -->
                <nav class="desktop-nav text-xs md:text-base hidden md:flex">
                    <a href="#" class="hover:text-white">ABOUT</a>
                    <a href="#" class="hover:text-white">EVENTS</a>
                    <a href="#" class="hover:text-white">SPONSORS</a>
                    <a href="#" class="hover:text-white">SPEAKERS</a>
                    <a href="login.php" class="hover:text-white">LOGIN</a>
                    <a href="#" class="hover:text-white">CONTACT</a>
                </nav>
            </header>

            <div id="mobileMenu" class="right-menu md:hidden flex flex-col items-start p-4 space-y-4">
                <button id="closeMenu" class="text-gray-400 text-lg ml-auto focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
                <a href="#" class="hover:text-white">ABOUT</a>
                <a href="#" class="hover:text-white">EVENTS</a>
                <a href="#" class="hover:text-white">SPONSORS</a>
                <a href="#" class="hover:text-white">SPEAKERS</a>
                <a href="#" class="hover:text-white">TEAM</a>
                <a href="#" class="hover:text-white">CONTACT</a>
            </div>
