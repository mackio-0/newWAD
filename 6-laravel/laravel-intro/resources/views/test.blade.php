<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    {{-- {{ dd($data) }} --}}
    {{-- <h3>He is {{ $data['name'] }}. He is {{ $data['age'] }} year{{ $data['age'] > 1 ? 's' : '' }} old. His carrer is
        {{ $data['carrer'] }}
    </h3> --}}
    {{-- {!! $htmlString !!} --}}

    {{-- <h3>Name List</h3>
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul> --}}

    {{-- {{ $age }}

    @if ($age >= 18 && $age <= 30)
        <p>He is a youth.</p>
    @elseif ($age == 18)
        <p>He is 18.</p>
    @elseif ($age > 30)
        <p>He is a man</p>
    @else
        <p>He is below 18</p>
    @endif --}}

    {{-- @php
        $count = 0;
    @endphp

    <ul>
        @while ($count < 10)
            <li>{{ $count }}</li>
            @php
                $count++;
            @endphp
        @endwhile
    </ul> --}}

    {{-- <ul>
        @for ($count; $count < 5; $count++)
            <li>
                {{ $count }}
            </li>
        @endfor
    </ul> --}}

    @php
        $fruit = 'mango';
    @endphp

    @switch($fruit)
        @case('apple')
            <p>This is apple.</p>
        @break

        @case('orange')
            <p>This is orange.</p>
        @break

        @case('mango')
            <p>This is mango.</p>
        @break

        @default
            <p>This is not fruit.</p>
    @endswitch

</body>

</html>
