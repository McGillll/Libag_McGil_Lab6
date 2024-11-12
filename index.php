<html>
    <head>
        <title> Class and Object Demo</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <form action="index.php" method="POST" class="space-y-4 px-10 py-5">
            <label for="fname" class="block text-sm font-medium text-gray-700">First Name:</label>
            <input name="fname" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>
            
            <label for="lname" class="block text-sm font-medium text-gray-700">Last Name:</label>
            <input name="lname" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>

            <label for="mi" class="block text-sm font-medium text-gray-700">Middle Initial:</label>
            <input name="mi" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">

            <label for="age" class="block text-sm font-medium text-gray-700">Age:</label>
            <input name="age" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>

            <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number:</label>
            <input name="contact" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>

            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input name="email" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>

            <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
            <input name="address" type="text" placeholder="*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"  required>

            <input type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
        </form>
    </body>
</html>