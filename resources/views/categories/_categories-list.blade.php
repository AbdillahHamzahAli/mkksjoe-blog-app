@foreach ($categories as $category)
    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center pr-0">
        <label class="mt-auto mb-auto">
            {{ str_repeat('-', $count) . ' ' . $category->title }}
        </label>
        <div>
            <!-- detail -->
            <a href="{{ route('categories.show', ['category' => $category]) }}" class="btn btn-sm btn-primary"
                role="button">
                <i class="bi bi-eye"></i>
            </a>
            <!-- edit -->
            <a href="{{ route('categories.edit', ['category' => $category]) }}" class="btn btn-sm btn-info" role="button">
                <i class="bi bi-pencil-square"></i>
            </a>
            <!-- delete -->
            <form class="d-inline" action="{{ route('categories.destroy', ['category' => $category]) }}" role="alert"
                method="POST" alert-title="{{ __('categories.alert.delete.title') }}"
                alert-text="{{ __('categories.alert.delete.message.confirm', ['title' => $category->title]) }}"
                alert-btn-cancel="{{ __('categories.button.cancel.value') }}"
                alert-btn-yes="{{ __('categories.button.delete.value') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </div>
    </li>
    @if ($category->descendants && !trim(request()->get('keyword')))
        @include('categories._categories-list', [
            'categories' => $category->descendants,
            'count' => $count + 2,
        ])
    @endif
@endforeach
