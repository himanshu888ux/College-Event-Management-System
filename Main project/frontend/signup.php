<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212;
            color: #fff;
            overflow: hidden; /* Hide scrollbars */
        }

        label {
            font-weight: 600;
            color: #fff;
        }
        
        .video-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns */
            height: 100vh; /* Full viewport height */
            position: absolute; /* Positioning to cover the whole viewport */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        
        video {
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            object-fit: cover; /* Cover the entire area */
            opacity: 0.5; /* Slightly transparent for overlay effect */
        }

        .box3d {
            position: relative; /* To position jumbotron over video */
            z-index: 1; /* Bring jumbotron above video */
            width: 100%;
            max-width: 600px;
            margin: auto;
            perspective: 1000px; /* Perspective for 3D effect */
        }
        .jumbotron {
            background-color: rgba(31, 31, 31, 0.9); /* Semi-transparent for visibility */
            padding: 30px;
            border-radius: 15px;
            transform-style: preserve-3d; /* Preserve 3D effect */
            transition: transform 0.1s; /* Smooth transition */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            position: relative; /* Position for mouse tracking */
        }
        .jumbotron:hover {
            box-shadow: 0 0 30px rgba(0, 150, 255, 0.8); /* Blue glow effect on hover */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="../assets/signup_video.mp4" type="video/mp4"> <!-- Replace with your video file -->
            Your browser does not support the video tag.
        </video>
        <video autoplay muted loop>
            <source src="../assets/signup_video.mp4" type="video/mp4"> <!-- Replace with your video file -->
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="container mt-3 box3d">
        <div class="jumbotron" id="jumbotron">
            <h2 class="text-center">Register</h2>
            <form <form action="../backend/signup-process.php" method="post">
          
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name." required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="college-name">College name</label>
                        <input type="text" class="form-control" name="college-name" id="college-name" placeholder="Enter your College Name" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" name="course" id="course" placeholder="Enter Your Course" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter Your City" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="current-year">Current Year</label>
                        <select class="form-control custom-select" name="current-year" id="current-year" required>
                            <option value="first">1st Year</option>
                            <option value="second">2nd Year</option>
                            <option value="third">3rd Year</option>
                            <option value="fourth">4th Year</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="sex">Gender</label>
                        <select id="sex" class="form-control" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="unspecified">Unspecified</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" id="dob" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="tel">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control" id="pass" placeholder="Enter your password." required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="pass2">Confirm Password</label>
                        <input type="password" name="cnf-password" class="form-control" id="pass2" placeholder="Re-enter your password." required>
                    </div>
                    <div class="col-sm-12">
                        <input type="checkbox" class="form-check d-inline" id="chb" required>
                        <label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.</label>
                    </div>
                    <div class="col-sm-12 form-group mb-0">
                        <button class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const jumbotron = document.getElementById('jumbotron');

        jumbotron.addEventListener('mousemove', (e) => {
            const rect = jumbotron.getBoundingClientRect();
            const x = e.clientX - rect.left; // x position within the element
            const y = e.clientY - rect.top; // y position within the element

            const midX = rect.width / 2;
            const midY = rect.height / 2;

            const deltaX = (x - midX) / midX; // Normalize x to -1 to 1
            const deltaY = (y - midY) / midY; // Normalize y to -1 to 1

            const rotateY = deltaX * 10; // Max rotation on Y
            const rotateX = -deltaY * 10; // Max rotation on X

            jumbotron.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
        });

        jumbotron.addEventListener('mouseleave', () => {
            jumbotron.style.transform = 'rotateY(0deg) rotateX(0deg)'; // Reset on mouse leave
        });
    </script>
</body>
</html>
