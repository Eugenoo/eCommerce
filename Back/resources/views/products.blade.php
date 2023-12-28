<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->

        @vite('resources/css/app.css')
    </head>
    <body>

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
           <span class="sr-only">Open sidebar</span>
           <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
           </svg>
        </button>

        <x-admin.sidebar>
        </x-admin.sidebar>

        <div class="p-4 sm:ml-64">
           <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
              <div class="grid grid-cols-3 gap-4 mb-4">
                 <a href="/admin/products/add" class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                       add new product
                    </p>
                 </a>
                 <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                       <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                       </svg>
                    </p>
                 </div>
                 <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                       <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                       </svg>
                    </p>
                 </div>
              </div>
              <div class="h-32">
              </div>

              <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                 <table>
                             <tr>
                                 <th>id</th>
                                 <th>name</th>
                                 <th>description</th>
                                 <th>price</th>
                                 <th>age</th>
                                 <th>stock</th>
                                 <th>bestseller</th>
                                 <th>sale</th>
                                 <th>created_at</th>
                                 <th>updated_at</th>
                                 <th>action</th>
                             </tr>
                             <?php $i=0; ?>
                             @foreach($test['products'] as $product)
                             <?php $i++ ?>
                             <?php if($i%2 == 0) : ?>
                                 <tr class="bg-white hover:bg-gray-200" >
                             <?php elseif($i%2 == 1) : ?>
                                 <tr class="bg-gray-100 hover:bg-gray-200" >
                             <?php endif; ?>
                                 <td>{{ $product['id'] }}</td>
                                 <td>{{ $product['name'] }}</td>
                                 <td>{{ $product['description'] }}</td>
                                 <td>{{ $product['price'] }}</td>
                                 <td>{{ $product['age'] }}</td>
                                 <td>{{ $product['stock'] }}</td>
                                 <td>{{ $product['bestseller'] }}</td>
                                 <td>{{ $product['sale'] }}</td>
                                 <td>{{ $product['created_at'] }}</td>
                                 <td>{{ $product['updated_at'] }}</td>
                                 <td>
                                     <button class="bg-blue-400">edit</button>
                                     <button class="bg-red-200">delete</button>
                                 </td>
                             </tr>
                             @endforeach
                             </table>
              </div>
           </div>
        </div>

    </body>
</html>

