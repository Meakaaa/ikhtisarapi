<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="asset/logofav.png">
  <title>Ikhtisar</title>
</head>

<body class="bg-[#F7F7F7]">

  <div class="flex flex-col my-48">

    <div class="flex container mx-auto px-5 my-10 items-center justify-center">
      <img src="asset/logoikh.jpg" class="w-[300px] object-cover object-center rounded" alt="ikhtisar">
    </div>

    <form method="GET" action="<?php echo site_url('search') ?>" class="flex items-center">
      <label for="simple-search" class="sr-only">Search</label>
      <div class="relative lg:w-[700px] md:w-[700px] w-[300px] m-auto">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 cursor-pointer">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
              clip-rule="evenodd"></path>
          </svg>
        </div>
        <input type="text" id="simple-search"
          class="bg-[#F7F7F7] border border-gray-500 text-gray-900 text-lg rounded-full focus:ring-gray-300 focus:border-gray-300 block w-full pl-10 pr-16 p-4"
          placeholder="Search" required>

        <div class="absolute inset-y-0 right-0 flex items-center pr-9 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
          </svg>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
          </svg>

        </div>
      </div>
    </form>
  </div>
</body>

</html>