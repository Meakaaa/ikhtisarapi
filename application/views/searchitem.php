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

  <div class="container mx-auto flex gap-6 py-5 px-10 flex-col md:flex-row items-center">
    <a class="flex lg:w-1/5 md:w-1/5 w-full">
      <img src="<?= base_url('asset/logoikh.jpg') ?>" class="md:-mt-2.5 lg:-mt-2.5 object-cover object-center rounded" alt="hero">
    </a>
    <form class="flex items-center lg:w-4/5 md:w-4/5 w-full">
      <label for="simple-search" class="sr-only">Search</label>
      <div class="relative w-full m-auto">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
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

  <section class="text-gray-600 body-font overflow-hidden px-10">
    <div class="container px-5 py-5 mx-auto">
      <div class="-my-8 divide-y-2 divide-gray-100">
        <?php foreach ($referensi as $ref): ?>
        <div class="py-8 flex flex-wrap md:flex-nowrap">
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?php echo $ref['nama_ref']; ?>
            </h2>
            <p class="leading-relaxed text-justify"><?php echo $ref['deskripsi']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font overflow-hidden px-10">
    <div class="container px-5 mx-auto">
      <div class="my-10">
        <h1 class="text-3xl font-semibold title-font mb-2 text-gray-900">Simpulan/Ikhtisar</h1>
        <div class="h-1 w-24 bg-[#497842] rounded"></div>
      </div>

      <div class="-my-8 divide-y-2 divide-gray-100 py-8">
        <div class="pb-8 flex flex-wrap md:flex-nowrap">
          <div class="md:flex-grow">
            <p class="leading-relaxed text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo praesentium, dolorum fugiat quas mollitia est qui provident. Quaerat explicabo, quam facilis dolore pariatur modi consequuntur, iste adipisci mollitia repudiandae magnam! Error optio iure ipsam aliquid reprehenderit veritatis praesentium magni voluptate voluptatem officiis fuga sint tempora ut temporibus, minima perferendis suscipit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>