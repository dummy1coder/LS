<div class="modal fade" id="demoModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
            <h3 class="modal-title text-white w-100 text-center">Select a Demo Below to Display</h3>
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center text-white">
                <h5 class="modal-title mb-4" id="demoModalLabel">Choose a Demo</h5>
                <div class="container">
                <div class="row">
    @foreach($demos as $demo)
        <div class="col-md-3 mb-3">
            <a href="{{ route('demo.show', $demo->slug) }}" class="btn btn-primary w-100 py-3">
                {{ $demo->name }}
            </a>
        </div>
    @endforeach
</div>

                </div>
            </div>
        </div>
    </div>
</div>
