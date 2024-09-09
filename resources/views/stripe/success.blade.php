<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 font-sans text-gray-900">
    <section class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
      <div class="bg-white shadow-2xl rounded-lg max-w-sm p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-3xl">
        <div class="text-center">
          <img class="w-16 h-16 mx-auto" src="https://img.icons8.com/fluency/48/ok.png" alt="Payment Successful Icon"/>
          <h2 class="text-2xl font-bold text-gray-800 mt-4">Payment Successful</h2>
          <p class="text-gray-500 mt-2">Thank you for your purchase! Your payment was processed successfully.</p>
          <a href="/order-details" class="w-full bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold py-3 px-4 rounded-lg hover:from-green-400 hover:to-teal-400 transition duration-200 flex items-center justify-center mt-6">
            View Order Details
          </a>
          <a href="/products" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 px-4 rounded-lg hover:from-blue-500 hover:to-purple-500 transition duration-200 flex items-center justify-center mt-4">
            Continue Shopping
          </a>
        </div>
      </div>
    </section>
  </body>
</html>