@foreach ($notes as $note)
{{ Auth::user()->niveau }}
{{ $note->niveau }}
{{ Auth::user()->groupe }}
{{ $note->groupe }}
<br>
@if((Auth::user()->groupe) === ($note->groupe))

@if((Auth::user()->niveau) === ($note->niveau))


<div class="col-sm">
    {{ $note->fichier }}
    </div>
    {{-- <a href="{{ route('downloadfile', $note->fichier) }}" class="btn btn-primary"> Download </a>?> --}}
       <a href ="notes/{{ $note->id }}" class="btn btn-primary">Afficher
    </a>
    @endif
@endif
    @endforeach

