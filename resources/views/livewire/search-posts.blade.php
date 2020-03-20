<div class="row mt-4">
    <div class="col-12">
        <h2 class="text-muted text-center">Post finder</h2>

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @if ($search !== "")
                        Searching for {{ $search }}
                    @else
                        Search
                    @endif
                </div>

                <div class="card-text">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                        <input wire:model.debounce.500ms="search" class="form-control" type="text" name="search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
