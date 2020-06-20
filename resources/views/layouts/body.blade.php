@extends('layouts.index')

@section('content')
<div>
    <ul>
        <li>
            <?php print_r($placasmae)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($placasvideo)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($coolers)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($fontes)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($gabinetes)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($processadores)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($rams)?>
        </li>
    </ul>
    <ul>
        <li>
            <?php print_r($roms)?>
        </li>
    </ul>    
</div>
@endsection