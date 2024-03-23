<?php
session_start();
$page_title = "Register Page";
include "header.php";
?>
<?php if(isset($_SESSION['status'])){
    ?>
<div class="flex justify-center alertBox">
    <div class="grid min-h-[140px] w-[50%] place-items-center overflow-x-scroll rounded-lg p-2 lg:overflow-visible">
        <div role="alert" class="relative block w-full text-base font-regular px-4 py-4 rounded-lg bg-green-200 text-white flex">
            <div class=" mr-12">
                <p class="font-bold text-black">
                    🌟 <?php
                        echo $_SESSION['status'];
                    ?>
                </p>
            </div>
            <button onclick="removeAlert()" class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 !absolute top-3 right-3" type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>
<?php
} 
?>
<div class="flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-[35%] my-4">
        <h2 class="text-2xl font-semibold mb-4 text-center">Register</h2>
        <form action="register-code.php" method="post">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 font-semibold mb-2">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your mobile number" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your password" required>
            </div>
            <div class="mb-6">
                <label for="confirmPassword" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Confirm your password" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Register</button>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>