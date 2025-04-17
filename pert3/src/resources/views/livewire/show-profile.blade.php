<main>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Jarez Portfolio</title>
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Hero Section */
        .hero-section {
            padding: 120px 0;
            background-color: #ffffff;
            width: 100%;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .col-lg-6 {
            width: 50%;
            padding: 0 15px;
        }
        
        .hero-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }
        
        .hero-subtitle {
            font-size: 28px;
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
        }
        
        .hero-description {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }
        
        .text-muted {
            color: #6c757d;
            margin-bottom: 20px;
        }
        
        /* Profile Image */
        .profile-img-container {
            text-align: right;
        }
        
        .profile-img {
            width: 350px;
            height: 350px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        /* Social Icons */
        .social-icons {
            display: flex;
            justify-content: flex-start;
            margin: 20px 0 30px;
        }
        
        .social-icon {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 40px;
            height: 40px;
            border-radius: 70%;
            background-color: #f0f0f0;
            color: #333;
            margin-right: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        
        .social-icon:hover {
            background-color: #dc3545;
            color: white;
            transform: translateY(-3px);
        }
        
        /* Buttons */
        .profile-btn {
            margin-top: 20px;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 0;
            cursor: pointer;
            font-size: 16px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-outline-danger {
            background-color: transparent;
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        
        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }
        
        .ms-3 {
            margin-left: 15px;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .hero-section {
                padding: 80px 0 40px;
            }
            
            .col-lg-6 {
                width: 100%;
                text-align: center;
            }
            
            .profile-img-container {
                text-align: center;
                margin-top: 40px;
            }
            
            .profile-img {
                width: 250px;
                height: 250px;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-subtitle {
                font-size: 24px;
            }
            
            .social-icons {
                justify-content: center;
                display: flex;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section with Profile Image -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="hero-title">WELCOME!</h1>
                    <h2 class="hero-subtitle">I Am Muhammad Jarez</h2>
                    <p class="hero-description">Fakultas Ilmu Komputer</p>
                    <p class="text-muted">Teknik informatika</p>
                    
                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="https://facebook.com/Muhammad.Jarez" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://github.com/Moocchi" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="https://Instagram.com/jarez09" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                    
                    <div class="mt-4">
                        <button type="button" class="profile-btn btn-danger">Tangerang</button>
                        <button type="button" class="profile-btn btn-outline-danger ms-3">09 Mei 2005</button>
                    </div>
                </div>
                <div class="col-lg-6 profile-img-container">
                    <img src="{{ asset ('front/images/chinesjesus.jpg') }}" alt="Profile Picture" class="profile-img">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
</main>