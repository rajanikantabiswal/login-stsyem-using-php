<?php
$page_title="Dashboard";
include "db/config.php";
include "header.php";
?>
<div class="container mx-auto px-20 py-8">
        <div class="bg-white shadow-md rounded-lg p-8">
            <h1 class="text-3xl font-semibold mb-4">Profile</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
                    <p class="text-gray-900">{{ Your Name }}</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                    <p class="text-gray-900">{{ Your Email }}</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2" for="mobile">Mobile Number</label>
                    <p class="text-gray-900">{{ Your Mobile Number }}</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2" for="bio">Bio</label>
                    <p class="text-gray-900">{{ Your Bio }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="#" class="text-blue-500 hover:text-blue-600">Edit Profile</a>
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>