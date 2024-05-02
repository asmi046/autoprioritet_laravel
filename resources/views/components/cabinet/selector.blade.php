<div class="cabinet_selector">
    <a @class(["selector", "active" => Route::currentRouteName() === "cabinet" ]) href="{{ route('cabinet') }}">История заказов</a>
    <a @class(["selector", "active" => Route::currentRouteName() === "user-data" ]) href="{{ route('user-data') }}">Мои данные</a>
    <x-a-icon href="{{ route('logout') }}" icon="pi ap_arrow_curve">Выход</x-a-icon>
</div>
