<?php
$page_title="Login Page";
include "header.php";
?>
        <div class="flex justify-center items-center h-[90vh]">
            <div class="bg-white p-8 rounded-lg shadow-md w-96">
                <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>
                <form>
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your username">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
                </form>
            </div>
        </div>
<?php
include "footer.php";
?>