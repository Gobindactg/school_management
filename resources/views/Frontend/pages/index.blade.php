@if ($user_level === 1.0)
    @include('Frontend.pages.dashboard.SystemAdmin')


@elseif ($user_level === 2.0)
    @include('Frontend.pages.dashboard.InstitutionAdmin')


@elseif ($user_level === 3.0)
    @include('Frontend.pages.dashboard.Teachers')


@elseif ($user_level === 4.1)
    @include('Frontend.pages.dashboard.Accountants')


@elseif ($user_level === 4.2)
    @include('Frontend.pages.dashboard.Librarians')


@elseif ($user_level === 4.3)
    @include('Frontend.pages.dashboard.TransportationsAdministrative')


@elseif ($user_level === 5.0)
    @include('Frontend.pages.dashboard.Students')


@else
    Unknown User:{{ $user_level }} / You Proberbly A Sus! {{-- this will be remove later --}}
@endif
