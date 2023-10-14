<x-layout>
    <h1 class="text-3xl font-bold">Users</h1>
     <ul>
         @foreach ($users as $user)
             <li class="px-4 py-2 my-4 bg-white border border-gray-300 rounded">
                 <p class="font-semibold">{{ $user->name }}</p>
                 <p class=text-gray-500>{{ $user->email }}</p>
             </li>
         @endforeach
     </ul>
 </x-layout>
