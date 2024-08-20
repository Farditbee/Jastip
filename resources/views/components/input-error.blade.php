@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>Email atau Password yang Anda masukkan Salah !</li>
        @endforeach
    </ul>
@endif
