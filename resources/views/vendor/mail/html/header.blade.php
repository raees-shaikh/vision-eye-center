<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Vission Eye Center')
            <img src="{{asset('img/logo.svg')}}" class="logo" alt="Vission Eye Center">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>