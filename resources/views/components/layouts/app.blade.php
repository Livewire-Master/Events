<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? '.:: Events ::.' }}</title>

    <style>
        body {
            background-color: #18181b;
            color: white;
            font-family: IRANSansX, serif;
        }
    </style>
</head>
<body>
{{ $slot }}

{{--<script>--}}
{{--    document.addEventListener('livewire:init', () =>--}}
{{--    {--}}
{{--        Livewire.on('notify', () =>--}}
{{--        {--}}
{{--            console.log('notify called from another component');--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
