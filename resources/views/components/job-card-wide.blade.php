@props(['job'])

<x-panel class="flex gap-x-6">
<div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div> 

    <div class="flex-1 flex flex-col">
    <a href="#" class="self-start text-sm text-gray-400">

        <a href="{{ $job->url }}" target="_blank">

            {{ $job->employer->name }}
        </a>
        
    </a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
        <x-tag :tag="$tag"></x-tag>
    @endforeach
    </div>
</x-panel>