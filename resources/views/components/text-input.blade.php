@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 disabled:cursor-not-allowed disabled:opacity-50']) !!}>
