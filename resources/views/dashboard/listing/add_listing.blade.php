<section>
    <form class="form-floating" action="" method="post">
        <div class="card mb-3">
            <div class="card-header">
                Ad Information
            </div>
            <div class="card-body">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Enter property title e.g. Beautiful House in DHA Phase 5" required>
                    <label for="title">Title <span class="required">*</span></label>
                </div>
                <div class="mb-3 form-floating">
                    <textarea class="form-control" placeholder="Describe your property, it’s features, area it is in etc."
                        name="description" id="description" style="height: 100px"></textarea>
                    <label for="description">Description</label>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                Purpose
            </div>
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="sell" data-bs-toggle="tab" data-bs-target="#sell_data"
                            type="button" role="tab" aria-controls="sell_data" aria-selected="true">Sell</button>
                        <button class="nav-link" id="rent" data-bs-toggle="tab" data-bs-target="#rent_data"
                            type="button" role="tab" aria-controls="rent" aria-selected="false">Rent</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="sell_data" role="tabpanel" aria-labelledby="sell"
                        tabindex="0">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                @forelse ($sell as $sell)
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="purpose"
                                                    value="{{ $sell->id }}" id="home{{ $sell->id }}">
                                                <label class="form-check-label" for="home{{ $sell->id }}">
                                                    {{ $sell->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rent_data" role="tabpanel" aria-labelledby="rent" tabindex="0">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                @forelse ($rent as $rent)
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="purpose"
                                                    value="{{ $rent->id }}" id="rent{{ $rent->id }}">
                                                <label class="form-check-label" for="rent{{ $rent->id }}">
                                                    {{ $rent->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                Location
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="location" name="location" required>
                    <label for="location">Enter Location <span class="required">*</span></label>
                </div>
            </div>

        </div>
        <div class="card mb-3">
            <div class="card-header">
                Price And Area
            </div>
            <div class="card-body">
                <div class=" row g-3">
                    <div class="form-floating  col-sm-8">
                        <input type="text" class="form-control" id="unit" name="unit"
                            placeholder="Enter Unit" required>
                        <label for="unit">Unit <span class="required">*</span></label>
                    </div>
                    <div class="form-floating col-sm">
                        <select class="form-select" id="unit_type" name="unit_type">
                            <option selected>Select</option>
                            <option value="1">Marla</option>
                            <option value="2">Sq. Ft.</option>
                            <option value="2">Sq. M.</option>
                            <option value="2">Sq. Md.</option>
                            <option value="2">Yard.</option>
                        </select>
                        <label for="unit_type">Select Unit Type <span class="required">*</span></label>
                    </div>
                    <div class="form-floating  col-sm-8">
                        <input type="text" class="form-control" id="prize" name="prize"
                            placeholder="Enter Prize" required>
                        <label for="prize">Prize <span class="required">*</span></label>
                    </div>
                    <div class="form-floating col-sm">
                        <select class="form-select" id="unit_type" name="unit_type" disabled>
                            <option selected>PKR</option>
                        </select>
                        <label for="unit_type">Select Unit Type <span class="required">*</span></label>
                    </div>
                </div>
            </div>

        </div>
        <div class="card mb-3">
            <div class="card-header">
                Features
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="1"
                        required>
                    <label for="bedrooms">Bedrooms <span class="required">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" min="1"
                        required>
                    <label for="bathrooms">Bathrooms <span class="required">*</span></label>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                Extra Features
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general_features" data-bs-toggle="tab"
                            data-bs-target="#general_features_data" type="button" role="tab"
                            aria-controls="general_features_data" aria-selected="true">Genral Features</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#interior_features_data" type="button" role="tab"
                            aria-controls="interior_features_data" aria-selected="false">Interior Features</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#exterior_features_data" type="button" role="tab"
                            aria-controls="exterior_features_data" aria-selected="false">Exterior Features</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general_features_data" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                @forelse ($general_features as $general_features)
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="general_features" value="{{ $general_features->id }}"
                                                    id="general_features{{ $general_features->id }}">
                                                <label class="form-check-label"
                                                    for="general_features{{ $general_features->id }}">
                                                    {{ $general_features->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="interior_features_data" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                @forelse ($interior_features as $interior_features)
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="interior_features" value="{{ $interior_features->id }}"
                                                    id="interior_features{{ $interior_features->id }}">
                                                <label class="form-check-label"
                                                    for="interior_features{{ $interior_features->id }}">
                                                    {{ $interior_features->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="exterior_features_data" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                @forelse ($exterior_features as $exterior_features)
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="exterior_features" value="{{ $exterior_features->id }}"
                                                    id="exterior_features{{ $exterior_features->id }}">
                                                <label class="form-check-label"
                                                    for="exterior_features{{ $exterior_features->id }}">
                                                    {{ $exterior_features->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                Properties Images And Videos
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab"
                            aria-controls="home-tab-pane" aria-selected="true">Image</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Video</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">image</div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">video</div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                Contact Information
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"required>
                    <label for="email">Email <span class="required">*</span></label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="number" class="form-control" id="number" name="number"required>
                    <label for="number">Number <span class="required">*</span></label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg" type="submit">Add</button>
    </form>
</section>
<script>
    $(document).ready(function() {
        var autocomplete;
        var id = 'location'
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)), {
            types: ['geocode'],
        })

    });
</script>
