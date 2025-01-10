<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLY | [SERVER NAME]</title>
    <link rel="stylesheet" href="css/apply.css">
</head>
<body>
    <header>
        <div class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li class="center-text">
                    <span>APPLY | [SERVER NAME]</span>
                </li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="Your Discord Link">DISCORD</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="hero">
            <img src="img/Logo.png" alt="Yor Logo" class="hero-logo">
        </div>
        <div class="content">
            <h2>Application Form</h2>
            <form action="submit_application.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="platform">What Platform Are You On?</label>
                    <select id="platform" name="platform" required>
                        <option value="Xbox">Xbox</option>
                        <option value="PlayStation">PlayStation</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="department">What Department Would You Like to Join?</label>
                    <select id="department" name="department" required>
                        <option value="LSPD">LSPD</option>
                        <option value="LSFD">LSFD</option>
                        <option value="Communications">Communications</option>
                        <option value="Civilian">Civilian</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reason">Why Do You Want to Join This Community?</label>
                    <textarea id="reason" name="reason" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="experience">Have You Had Any Past Experience in a GTA V Roleplay Community?</label>
                    <textarea id="experience" name="experience" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="rules">Have You Understood the Rules and Regulations of This Community?</label> <input type="checkbox" id="rules" name="rules" required> Yes
                <div class="form-group">
                    <button type="submit">Submit Application</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> [SERVER NAME]. All rights reserved. | Built by DevDyls</p>
    </footer>
</body>
</html>
