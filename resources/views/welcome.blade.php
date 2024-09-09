<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Cool New Product</title>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 font-sans text-gray-900">
    <section class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
      <div class="bg-white shadow-2xl rounded-lg max-w-sm p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-3xl">
        <div class="product">
          <img class="w-full h-64 object-cover rounded-lg shadow-md" src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
          <div class="description mt-4 text-center">
            <h3 class="text-2xl font-bold text-gray-800">Stubborn Attachments</h3>
            <h5 class="text-xl font-medium text-gray-600 mt-2">$20.00</h5>
            <p class="text-gray-500 mt-2">A thought-provoking book on economics and ethics. An essential read for those looking to understand long-term societal progress.</p>
          </div>
        </div>
        <form action="{{ route('stripe.payment.create') }}" method="POST" x-data="{ loading: false, price: 50, quantity: 1 }" @submit.prevent="loading = true; $el.submit()">
          @csrf
          <div class="mt-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price (each):</label>
            <input type="text" id="price" x-model="price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-4 rounded-lg border" readonly />
          </div>
          <div class="mt-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
            <input type="number" id="quantity" x-model="quantity" min="1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2 px-4 rounded-lg border" />
          </div>
          <input type="hidden" name="price" :value="price * quantity" />
          <button type="submit" id="checkout-button" :disabled="loading"
            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 px-4 rounded-lg hover:from-blue-500 hover:to-purple-500 transition duration-200 flex items-center justify-center mt-6">
            <template x-if="!loading">
              <span>Pay $<span x-text="price * quantity"></span></span>
            </template>
            <template x-if="loading">
              <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
              </svg>
            </template>
          </button>
        </form>
      </div>
    </section>
  </body>
</html>