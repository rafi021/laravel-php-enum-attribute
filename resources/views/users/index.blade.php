<x-layout>
    <h1 class="text-3xl font-bold">Users</h1>
     <ul>
         @foreach ($users as $user)
             <li class="flex justify-between px-4 py-2 my-4 bg-white border border-gray-300 rounded">
                 <div class="flex flex-col justify-around">
                     <p class="text-lg font-semibold">{{ $user->name }}</p>
                     <p class=text-gray-500>{{ $user->email }}</p>
                 </div>
                 <!-- We add the class generated by the Attribute here -->
                 <div class="text-right px-4 py-1 mx-1 my-2 rounded-md {{  $user->role->backgroundColor()  }}">
                     <!-- We use the value from Label attribute here -->
                     <p class="font-bold text-gray-800/50">{{ $user->role->label() }}</p>

                     <!-- Call the attribute description for this Enum case -->
                     <p class="text-gray-500">{{ $user->role->description() }}</p>
                 </div>
             </li>
         @endforeach
     </ul>
 </x-layout>
