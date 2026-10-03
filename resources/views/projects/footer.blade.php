<div class="card-footer border-0 bg-transparent">
    <div class="d-flex text-body-secondary small">
        <div class="d-flex align-items-center me-3">
            <img src="/images/clock.svg" alt="clock">
            <div class="ms-2">
                {{ $item->created_at->diffForHumans() }}
            </div>
        </div>
        <div class="d-flex align-items-center me-3">
            <img src="/images/list-check.svg" alt="list-check">
        </div>
        <div class="d-flex align-items-center me-auto">
            <form action="/projects/{{ $item->id }}" method="post" class="hide-submit">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link text-danger p-0">
                    <img src="/images/trash.svg" alt="trash">
                </button>
            </form>
        </div>
    </div>
</div>
