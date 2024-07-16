<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="subscriptions"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Afficher la souscription'></x-navbars.navs.auth>
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
                                <h6 class="mb-3">Détails de la souscription</h6>
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
                        <form>
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Prénom(s)</label>
                                    <input type="text" name="first_name" class="form-control border border-2 p-2" value="{{ old('first_name', $subscription->first_name) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" name="last_name" class="form-control border border-2 p-2" value="{{ old('last_name', $subscription->last_name) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date de naissance</label>
                                    <input type="text" name="birth_date" class="form-control border border-2 p-2" value="{{ \Carbon\Carbon::parse($subscription->birth_date)->format('d/m/Y') }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Lieu de naissance</label>
                                    <input type="text" name="birth_place" class="form-control border border-2 p-2" value="{{ old('birth_place', $subscription->birth_place) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="text" name="phone" class="form-control border border-2 p-2" value="{{ old('phone', $subscription->phone) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Pays</label>
                                    <input type="text" name="country" class="form-control border border-2 p-2" value="{{ old('country', $subscription->country->name) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Moyen de paiement</label>
                                    <input type="text" name="payment_method" class="form-control border border-2 p-2" value="{{ old('payment_method', $subscription->payment_method) }}" disabled>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Adresse</label>
                                    <textarea name="address" class="form-control border border-2 p-2" rows="3" disabled>{{ old('address', $subscription->address) }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('subscriptions.index') }}" class="btn bg-gradient-primary mt-3 mb-0">Retour</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
