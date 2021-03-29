<tr>
    <td class="name">
        <a href="{{ route('admin.show', $user->id) }}">{{ $user->name }}</a>
        <p>{{ $user->email }}</p>
    </td>
    <td>{{ $user->id }}</td>
    <td>
        <div class="nowrap">{{  $user->created_at->format('Y-m-d') }}</div>
        <div class="nowrap">{{  $user->created_at->format('h:i:s') }}</div>
    </td>
    <td>
        @switch($user->status)
            @case(0)
                <span class="btn btn-danger">Неактивен</span>
            @break
            @case(1)
                <span class="btn btn-success">Активен</span>
            @break
        @endswitch
    </td>
    <td>

        ЦТП 2 Тольятти


    </td>
    <td class="statuses">
        <div class="circle"></div>


        <div class="circle green"></div>

        <div class="circle red"></div>

        <div class="circle green"></div>

        <div class="circle green"></div>

        <div class="circle"></div>
    </td>
    <td>
        <div class="chat">
            7
            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.8906 0.5625H2.10938C0.943922 0.5625 0 1.51228 0 2.67188V15.3281C0 16.4946 0.950859 17.4375 2.10938 17.4375H21.8906C23.0463 17.4375 24 16.4986 24 15.3281V2.67188C24 1.51434 23.0598 0.5625 21.8906 0.5625ZM21.5952 1.96875C21.1642 2.39742 13.7476 9.77499 13.4916 10.0297C13.0931 10.4281 12.5634 10.6475 12 10.6475C11.4366 10.6475 10.9069 10.4281 10.5071 10.0284C10.3349 9.85706 3.00014 2.56097 2.40478 1.96875H21.5952ZM1.40625 15.0419V2.95898L7.48303 9.00375L1.40625 15.0419ZM2.40567 16.0312L8.48006 9.99548L9.51408 11.0241C10.1781 11.6881 11.061 12.0538 12 12.0538C12.939 12.0538 13.8219 11.6881 14.4846 11.0254L15.5199 9.99548L21.5943 16.0312H2.40567ZM22.5938 15.0419L16.517 9.00375L22.5938 2.95898V15.0419Z" fill="#BCBCBC"/>
            </svg>

        </div>
    </td>
    <td>
        Чендаров Артем Валерьевич
    </td>
    <td>
        {{ $user->created_at->diffForHumans(['parts' => 3]) }}
    </td>
</tr>
