<div>
   
   <x-alpine.simple-modal>
    <x-slot name="buttonTrigger">
      <button class="p-1 rounded-md text-amber-400 hover:bg-amber-400 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
      </svg>
      </button>
    </x-slot>
    <x-slot name="title">Student View</x-slot>
    <x-slot name="content">
      <div class="" x-data="{student: @entangle('student')}">
    <div>
      <div class="grid grid-cols-2 gap-4">
        <label :for="student.id"><span>ID : </span></label><input :id="student.id" type="text" readonly x-model="student.id">
        <label :for="student.name"><span>Name : </span></label><input :id="student.name" type="text" readonly x-model="student.name">
        <label :for="student.gender"><span>Gender : </span></label><input :id="student.gender" type="text" readonly x-model="student.gender">
        <label :for="student.dob"><span>DoB : </span></label><input :id="student.dob" type="text" readonly x-model="student.dob">
      </div>
    </div>
   </div>
    </x-slot>
   </x-alpine.simple-modal>
</div>
  
