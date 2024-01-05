@props(['name'])
@error ($name)
    <p class="text-red-400">* {{$message}}</p>
@enderror
