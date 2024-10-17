<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <!-- SIGN UP -->
    <div class="container w-4/12 bg-white shadow-lg rounded-lg p-8" id="signup" style="display:none;">
        <div class="flex items-center justify-center">
            <img src="/parkiir_logo.png" class="w-auto h-12 transition-transform transform hover:scale-110 duration-300" alt="PARKIR Logo">
        </div>
        <h1 class="form-title text-2xl font-bold mb-6 text-center">Register</h1>
        <form method="post" action="register.php" class="space-y-4">
            <div class="input-group relative">
                <i class="fas fa-user absolute top-3 left-3 text-gray-500"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="input-group relative">
                <i class="fas fa-user absolute top-3 left-3 text-gray-500"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name"
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="input-group relative">
                <i class="fas fa-envelope absolute top-3 left-3 text-gray-500"></i>
                <input type="email" name="email" id="email" placeholder="Email" required
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="input-group relative">
                <i class="fas fa-lock absolute top-3 left-3 text-gray-500"></i>
                <input type="password" name="password" id="password" placeholder="Password" required
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <input type="submit" class="btn w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700" value="Sign Up" name="signUp">
        </form>

        <div class="links text-center mt-6">
            <p>Already have an account?</p>
            <button id="signInButton" class="text-red-500 hover:underline">Sign In</button>
        </div>
    </div>

    <!-- SIGN IN -->
    <div class="container bg-white w-4/12 shadow-lg rounded-lg p-8" id="signIn">
        <!-- Logo -->
        <div class="flex items-center justify-center">
            <img src="/parkiir_logo.png" class="w-auto h-12 transition-transform transform hover:scale-110 duration-300" alt="PARKIR Logo">
        </div>
        <h1 class="form-title text-2xl font-bold mb-6 text-center">Sign In</h1>
        <form method="post" action="register.php" class="space-y-4">
            <div class="input-group relative">
                <i class="fas fa-envelope absolute top-3 left-3 text-gray-500"></i>
                <input type="email" name="email" id="email" placeholder="Email" required
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="input-group relative">
                <i class="fas fa-lock absolute top-3 left-3 text-gray-500"></i>
                <input type="password" name="password" id="password" placeholder="Password" required
                    class="pl-10 p-2 w-full border border-gray-300 rounded-md focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <!-- <p class="recover text-right">
                <a href="#" class="text-red-500 hover:underline">Recover Password</a>
            </p> -->
            <input type="submit" class="btn w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700" value="Sign In" name="signIn">
        </form>

        <div class="links text-center mt-6">
            <p>Don't have an account yet?</p>
            <button id="signUpButton" class="text-red-500 hover:underline">Sign Up</button>
        </div>
    </div>

    

    <script>
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signUpForm = document.getElementById('signup');
        const signInForm = document.getElementById('signIn');

        signUpButton.addEventListener('click', () => {
            signInForm.style.display = 'none';
            signUpForm.style.display = 'block';
        });

        signInButton.addEventListener('click', () => {
            signUpForm.style.display = 'none';
            signInForm.style.display = 'block';
        });
    </script>
</body>

</html>