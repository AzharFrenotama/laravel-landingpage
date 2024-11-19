<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Landing Page tailwind</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">
  <div class="container mx-auto">
    <nav class="flex justify-between items-center p-6">
      <div class="flex items-center space-x-4">
        <div class="w-24"><img src="Asset/Logo.png" alt="Logo"></div>
        <ul class="flex space-x-6">
          <li><a href="#" class="text-black">Home</a></li>
          <li><a href="#" class="text-black">Service</a></li>
          <li><a href="#" class="text-black">Feature</a></li>
          <li><a href="#" class="text-black">Product</a></li>
          <li><a href="#" class="text-black">Testimonial</a></li>
          <li><a href="#" class="text-black">FAQ</a></li>
        </ul>
      </div>
      <div class="flex space-x-4">
        <button class="px-4 py-2 border border-green-500 rounded text-green-500">Login</button>
        <button class="px-4 py-2 bg-green-500 text-white rounded">Sign Up</button>
      </div>
    </nav>

    <main class="bg-gray-50 py-12 text-center">
      <h1 class="text-5xl font-bold text-gray-700">Lesson and Insight</h1>
      <h1 class="text-4xl font-bold text-green-500 mt-2">from 8 years</h1>
      <p class="text-gray-600 mt-4">Where to grow your business as a photographer: site or social media?</p>
      <button class="mt-6 px-6 py-3 bg-green-500 text-white rounded">Register</button>
      <div class="mt-10"><img src="Asset/Illustration.png" alt="Illustration" class="mx-auto w-64"></div>
    </main>

    <section class="text-center my-12">
      <h1 class="text-4xl font-bold text-gray-700">Our clients</h1>
      <p class="text-gray-600 mt-2">We have been working with some Fortune 500+ clients</p>
      <div class="flex justify-center mt-8 space-x-4">
        <img src="Asset/icon tengah.png" alt="Client Icon" class="w-16">
        <img src="Asset/Logo-1.png" alt="Client Logo" class="w-16">
        <img src="Asset/Logo-2.png" alt="Client Logo" class="w-16">
        <img src="Asset/Logo-3.png" alt="Client Logo" class="w-16">
      </div>
    </section>

    <!-- More sections can be added similarly -->

  </div>

  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="gmbr/Icon.png" alt="Icon" class="w-8 h-8">
        <h1 class="text-xl">Nexcent</h1>
      </div>
      <div class="text-gray-400">&copy; 2020 Nexcent Ltd. All rights reserved</div>
      <div>
        <h3 class="font-semibold mb-2">Stay up to date</h3>
        <input type="text" placeholder="Your email address" class="px-4 py-2 rounded">
      </div>
    </div>
  </footer>
</body>

</html>