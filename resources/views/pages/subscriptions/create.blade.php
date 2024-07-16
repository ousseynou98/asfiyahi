<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="subscriptions"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Créer une nouvelle souscription'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Créer une nouvelle souscription</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                        <div class="row">
                            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('demo') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        <form method='POST' action="{{ route('subscriptions.store') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Type de carte</label>
                                    <select name="subscription_type_id" class="form-control js-example-search-single" required="required">
                                        <option value="">--Type de carte--</option>
                                        @foreach($subscriptionTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subscription_type_id')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Prénom(s)</label>
                                    <input type="text" name="first_name" class="form-control border border-2 p-2" value="{{ old('first_name') }}" required="required">
                                    @error('first_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" name="last_name" class="form-control border border-2 p-2" value="{{ old('last_name') }}" required="required">
                                    @error('last_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date de naissance</label>
                                    <input type="date" name="birth_date" class="form-control border border-2 p-2" value="{{ old('birth_date') }}" required="required">
                                    @error('birth_date')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Lieu de naissance</label>
                                    <input type="text" name="birth_place" class="form-control border border-2 p-2" value="{{ old('birth_place') }}" required="required">
                                    @error('birth_place')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="number" name="phone" class="form-control border border-2 p-2" value="{{ old('phone') }}" required="required">
                                    @error('phone')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Pays</label>
                                    <select class="form-control js-example-search-single" name="country_id" required="required">
                                        <option value="">--Sélectionnez un pays--</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }} (+{{ $country->calling_code }})</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Moyen de paiement</label>
                                    <select name="payment_method" class="form-control js-example-search-single" required="required">
                                        <option value="">--Moyen de paiement--</option>
                                        <option value="Orange Money">Orange Money</option>
                                        <option value="Wave">Wave</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Mastercard">Mastercard</option>
                                    </select>
                                    @error('payment_method')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Adresse</label>
                                    <textarea name="address" class="form-control border border-2 p-2" rows="3" required="required">{{ old('address') }}</textarea>
                                    @error('address')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <style>
 
/* Override Select2 styles */
.select2-container--filled .select2-selection:active {
    background-color: #ffffff !important; /* Your desired background color */
}

.select2-container--filled .select2-selection:hover {
    background-color: #ffffff !important; /* Your desired background color */
}

.select2-container .select2-selection:hover {
    border-color: #000000 !important; /* Your desired border color */
}

.select2-container--filled .select2-selection {
    background-color: #ffffff !important; /* Your desired background color */
    padding: 8px 16px 8px !important; /* Your desired padding */
}
.select2-container .select2-selection:before {
    color: #fb8c00 !important;
    
}

.select2-container .select2-selection {
    -ms-flex-align: center;
    align-items: center;
    background-clip: padding-box;
    background-color: transparent;
    border-bottom: 1px solid #caccd1 !important;
    border-radius: 4px 4px 0 0;
    color: #344767 !important;
    display: -ms-flexbox;
    display: flex;
    font-size: 1rem;
    letter-spacing: .009375em;
    line-height: 1.5;
    overflow: hidden;
    padding: .375rem 0 calc(.375rem - 1px);
    text-overflow: ellipsis;
    transition: border-color 15ms linear, box-shadow 15ms linear;
    white-space: nowrap;
    width: 100%;
    will-change: border-color, box-shadow;
}
</style>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
