<x-layout>
    <h1 class="text-3xl font-bold">Users</h1>
     <ul>
         @foreach ($users as $user)
             <li class="flex justify-between px-4 py-2 my-4 bg-white border border-gray-300 rounded">
                 <div>
                     <p class="font-semibold">{{ $user->name }}</p>
                     <p class=text-gray-500>{{ $user->email }}</p>
                 </div>
                 <div class="text-right">
                     <p class="font-bold text-gray-500">{{ $user->role }}</p>

                     <!-- Call the attribute description for this Enum case -->
                     <p class="text-gray-500">{{ $user->role->description() }}</p>

                 </div>
             </li>
         @endforeach
     </ul>
 </x-layout>
