<!-- resources/views/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare Veterinary</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .service-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .custom-footer {
            background-color: #343a40;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .contact-form input, .contact-form textarea {
            border-radius: 8px;
            padding: 15px;
        }
    </style>
</head>
<body>

    <!-- Include Header -->
    @include('include.header')

   @include('what-we-do')

   @include('appointment-form')

<br>
    <!-- Include Footer -->
    @include('include.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
