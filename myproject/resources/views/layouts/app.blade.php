<div class="'dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ app()->getLocale() === 'ru' ? 'Русский' : 'English' }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{ route('set_locale', ['locale' => 'en']) }}">English</a>
        <a class="dropdown-item" href="{{ route('set_locale', ['locale' => 'ru']) }}">Русский</a>
    </div>
</div>
