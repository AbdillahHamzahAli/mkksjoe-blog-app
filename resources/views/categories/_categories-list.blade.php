@foreach ($categories as $category)
    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center pr-0">
        <label class="mt-auto mb-auto">
            {{ str_repeat('-', $count) . ' ' . $category->title }}
        </label>
        <div>
            <!-- detail -->
            <a href="" class="btn btn-sm btn-primary" role="button">
                <i class="bi bi-eye"></i>
            </a>
            <!-- edit -->
            <a href="{{ route('categories.edit', ['category' => $category]) }}" class="btn btn-sm btn-info"
                role="button">
                <i class="bi bi-pencil-square"></i>
            </a>
            <!-- delete -->
            <form class="d-inline" action="" role="alert" method="POST" alert-title="Delete category"
                alert-text="Are you sure you want to delete the HTML category?" alert-btn-cancel="Cancel"
                alert-btn-yes="Delete">
                <input type="hidden" name="_token" value="4emLkOztqHIjYR72hZFmYgqCuzdxiiL8TTxFqKIp">
                <input type="hidden" name="_method" value="DELETE"> <button type="submit"
                    class="btn btn-sm btn-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </div>
    </li>
    @if ($category->descendants)
        @include('categories._categories-list', [
            'categories' => $category->descendants,
            'count' => $count + 2,
        ])
    @endif
@endforeach
