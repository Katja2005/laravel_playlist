<x-app-layout>
    <div class="w-full rounded overflow-hidden shadow-lg p-4 bg-white mb-4">
            <div class="flex justify-between">
                <div>       
                    <a class="font-bold text-xl mb-2" href="{{ route('song.show', $song->id) }}">
                        {{ $song->title }}
                    </a>
                    <a class="font-bold text-xl mb-2" href="{{ route('song.show', $song->id) }}">
                        {{ $song->artist }}
                    </a>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block shadow-lg bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $song->genre }}</span>
                    </div>
                </div>
                <div>
                    <a href="{{ route('song.edit', $song->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit
                    </a>
                    <form action="{{ route('playlist.destroy', $song->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                <table class="w-full table-auto">
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Song 1</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Song 2</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Song 3</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Song 4</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Song 5</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Song 6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
