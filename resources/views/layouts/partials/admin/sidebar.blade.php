<aside class="w-64 sticky top-0 shadow-full bg-white" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3  rounded h-screen">
        <div class="shrink-0 flex items-center mb-10">
            <a href="{{ route('dashboard') }}">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
            <a href="{{ route('dashboard') }}">
                <label for="" class="cursor-pointer"><strong
                        class="text-red-400 pl-2 font-Dancing text-2xl">Valentine's</strong>
                    <strong class="font-extralight font-Dancing text-2xl">Plus
                        Size</strong></label>
            </a>
        </div>
        <ul class="space-y-2">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 {{ $link['active'] ? 'bg-gray-100' : '' }}">
                        <i class="{{ $link['icon'] }}"></i>
                        <span class="ml-3">{{ $link['title'] }}</span>
                        <span>

                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>