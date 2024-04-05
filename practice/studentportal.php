<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Msu-Maigo Portal</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        body.dark-mode {
            background-color: black;
            color: #fff;
        }

        #options-container {
            display: none;
            position: absolute;
            top: 40px;
            right: 10px;
            padding: 10px;
            background-color: #333;
            border: 1px solid #ddd;
            z-index: 1;
        }

        #options-container label {
            color: #fff;
        }

        #options-container select {
            background-color: #fff;
            color: #333;
            border: 1px solid #ddd;
        }

        #options-btn {
            cursor: pointer;
            color: #007bff;
            font-size: 24px;
            position: relative;
        }

        .kumbati {
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <nav class="kumbati">
        <div>
            <h1 style="margin: 0; padding: 0; color: #ffd700;">Msu-Maigo Student Portal</h1>
        </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ⚙️
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="changeTheme()">Dark Mode</a></li>
                <li>
                    <form action="logout.php" method="POST" style="display:flex; justify-content: center; align-items: center">
                        <button type="submit" class="dropdown-item" style="border: none; background: none; cursor: pointer;">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="home">
            <h1>Welcome to the Student Portal <i class="fas fa-gears"></i></h1>
            <p>Access information about your courses, grades, and schedule.</p>
        </section>
    </main>

    <div id="options-container">
        <h2>Settings</h2>
        <label for="theme">Theme:</label>
        <select id="theme" onchange="changeTheme()">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
    </div>

    <footer>
        <p>&copy; 2024 Mindanao State University Maigo</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/js/all.min.js"></script>

    <script>
        function changeTheme() {
            document.body.classList.toggle('dark-mode');
            const isDarkMode = document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const isDarkMode = localStorage.getItem('darkMode') === 'true';
            if (isDarkMode) {
                document.body.classList.add('dark-mode');
            }
        });
    </script>
</body>

</html>
