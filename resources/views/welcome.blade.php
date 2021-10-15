<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Daisy & Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-50">

  <!--navbar-->
  <div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content fixed top-0 w-screen z-10">
    <div class="container mx-auto">
      <div class="flex-1 px-2 mx-2">
        <span class="text-lg font-bold text-xl">
          LKS Store
        </span>
      </div>
      <ul class="flex">
        <li class="mr-5">
          <a href="{{route('login')}}" class="text-md">Login</a>
        </li>
        <li>
          <a href="{{route('register')}}" class="text-md">Register</a>
        </li>
      </ul>
    </div>
  </div>

  <!--hero-->
  <div class="grid sm:grid-cols-2 grid-cols-1 h-96">
    <div class="bg-blue-500 flex items-center justify-center pt-10">
      <div class="text-white w-2/3">
        <h2 class="text-2xl font-bold tracking-widest">LKS Store</h2>
        <p class="font-medium text-sm">
          Beli Smartphone Kekinian dengan Harga Hemat
        </p>
        <p class="mt-5 text-gray-200">
          Ayo belanja sekarang dan dapatkan diskon tahun baru sebanyak 90% yang hanya berlaku sampai tanggal 3 Januari 2021. Ayo buruan!!
        </p>
      </div>
    </div>
    <div class="bg-cover bg-center hidden sm:block" style="background-image: url(https://images.unsplash.com/photo-1611956565880-10e29a417648?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1780&q=80)">
    </div>
  </div>


  <!--Product-->
  <div id="product" class="container mx-auto mt-10 mb-20">
    <h3 class="text-xl uppercase font-bold tracking-wider text-center">Produk Kami</h3>
    <div class="mt-10 grid sm:grid-cols-2 grid-cols-1 xl:grid-cols-4 mx-5 gap-6">
      <div class="card bordered shadow-sm">
        <figure>
          <img src="https://picsum.photos/id/1005/400/250">
        </figure>
        <div class="card-body text-center indicator bg-white w-auto">
          <div class="indicator-item badge bg-blue-500 border-none mr-10 p-2 px-5">
            BARU
          </div>
          <h2 class="card-title uppercase">
            Product Name
          </h2>
          <h3 class="text-xl font-bold tracking-wider">
            Rp. 32.000
          </h3>
          <div class="justify-center card-actions">
            <a href="#description" class="btn bg-blue-500 border-blue-600 hover:bg-blue-600 w-100 py-0 px-10">Lihat info</a>
            <div data-tip="Beli" class="tooltip">
              <button class="btn bg-green-500 hover:bg-green-600 border-green-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card bordered shadow-sm">
        <figure>
          <img src="https://picsum.photos/id/1005/400/250">
        </figure>
        <div class="card-body text-center indicator bg-white w-auto">
          <div class="indicator-item badge bg-blue-500 border-none mr-10 p-2 px-5">
            BARU
          </div>
          <h2 class="card-title uppercase">
            Product Name
          </h2>
          <h3 class="text-xl font-bold tracking-wider">
            Rp. 32.000
          </h3>
          <div class="justify-center card-actions">
            <a href="#description" class="btn bg-blue-500 border-blue-600 hover:bg-blue-600 w-100 py-0 px-10">Lihat info</a>
            <div data-tip="Beli" class="tooltip">
              <button class="btn bg-green-500 hover:bg-green-600 border-green-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="description" class="modal">
    <div class="modal-box">
      <p>
        Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.
      </p>
      <div class="modal-action">
        <a href="" class="btn btn-primary">Accept</a>
        <a href="" class="btn">Close</a>
      </div>
    </div>
  </div>




  <!--footer-->
  <footer class="p-10 footer bg-blue-500 text-base-content footer-center text-white">
    <div class="grid grid-flow-col gap-4">
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </div>
    <div>
      <div class="grid grid-flow-col gap-4">
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
          </svg>
        </a>
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
          </svg>
        </a>
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
          </svg>
        </a>
      </div>
    </div>
    <div>
      <p>
        Copyright © 2021 - All right reserved by ACME Industries Ltd
      </p>
    </div>
  </footer>

</body>
</html>