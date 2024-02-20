<div>
    <!-- Page main content START -->
    <div class="border page-content-wrapper">

        <!-- Title -->
        <div class="row">
            <div class="mb-3 col-12">
                <h1 class="mb-2 h3 mb-sm-0">Paramètres d'admin</h1>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left side START -->
            <div class="col-xl-3">
                <!-- Tab START -->
                <ul class="nav nav-pills nav-tabs-bg-dark flex-column">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"><i
                                class="fas fa-globe fa-fw me-2"></i>Paramètres du site Web</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i
                                class="fas fa-cog fa-fw me-2"></i>Réglages généraux</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i
                                class="fas fa-user-circle fa-fw me-2"></i>Paramètres du compte</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><i
                                class="fas fa-sliders-h fa-fw me-2"></i>Social Settings</a> </li>
                    <li class="nav-item"> <a class="mb-0 nav-link" data-bs-toggle="tab" href="#tab-5"><i
                                class="fas fa-envelope-open-text fa-fw me-2"></i>Paramètres d'Email</a> </li>
                </ul>
                <!-- Tab END -->
            </div>
            <!-- Left side END -->

            <!-- Right side START -->
            <div class="col-xl-9">

                <!-- Tab Content START -->
                <div class="tab-content">

                    <!-- Personal Information content START -->
                    <div class="tab-pane show active" id="tab-1">
                        <div class="shadow card">

                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="card-header-title">Paramètres du site Web</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <form class="row g-4 align-items-center" wire:submit.prevent="update_one">
                                    <!-- Input item -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Site Name</label>
                                        <input type="text" wire:model="site_name" class="form-control" placeholder="Site Name">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Site Copyrights</label>
                                        <input type="text" wire:model="copyright" class="form-control" placeholder="Site Copyrights">
                                    </div>
                                    <div class="col-10">
                                     <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                                        x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-label">Uploader</label>
                                            <input class="form-control" type="file" wire:model="logo" placeholder="Logo">
                                            @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                                        <!-- Progress Bar -->
                                        <div x-show="uploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-2">
                                        <p>Logo/Favicon</p>
                                        @if ($logo)
                                        <img src="{{ $logo->temporaryUrl() }}" width="50" height="50" style="line-height:25px">
                                        @else
                                        <img src="{{ asset('storage/' . $dbLogo) }}" width="50" height="50" style="line-height:0px">
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Slogan</label>
                                        <input type="text" wire:model="slogan" class="form-control" placeholder="Slogan">
                                    </div>

                                    <!-- Textarea item -->
                                    <div class="col-12">
                                        <label class="form-label">Site Description</label>
                                        <textarea class="form-control" wire:model="description" rows="3"></textarea>
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Contact Phone</label>
                                        <input type="text" wire:model="phone" class="form-control" placeholder="Contact Phone">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" wire:model="email" class="form-control" placeholder="Email">
                                    </div>
                                    <!-- Tags START -->
									<div class="col-12">
                                        <label class="form-label">Mots clés</label>
                                        <textarea class="form-control" wire:model="keywords" rows="2"></textarea>
                                        <span class="small">Maximum de 30 mots-clés. Les mots clés doivent tous être en minuscules. par exemple. javascript, réagir, marketing</span>
									</div>
									<!-- Tags START -->
                                    <!-- Textarea item -->
                                    <div class="col-12">
                                        <label class="form-label">Contact Address</label>
                                        <textarea class="form-control" wire:model="adresse" rows="3"></textarea>
                                    </div>

                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="mb-0 btn btn-success">Mettre à jour</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->

                        </div>
                    </div>
                    <!-- Personal Information content END -->

                    <!-- Réglages généraux content START -->
                    <div class="tab-pane" id="tab-2">

                        <div class="shadow card">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="card-header-title">Réglages généraux</h5>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body">
                                <form class="row g-4" wire:submit.prevent="update_two">
                                    <!-- Input item -->
                                    <div class="col-12">
                                        <label class="form-label">Facebook</label>
                                        <input type="url" wire:model="facebook" class="form-control" placeholder="Facebook">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-12">
                                        <label class="form-label">X</label>
                                        <input type="url" wire:model="twitter" class="form-control" placeholder="X">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-12">
                                        <label class="form-label">LinkdIn</label>
                                        <input type="url" wire:model="linkdin" class="form-control" placeholder="LinkdIn">
                                    </div>
                                    <!-- Radio items -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Activer Slide</label>
                                        <div class="d-sm-flex">
                                            <!-- Radio -->
                                            <div class="form-check radio-bg-light me-4">
                                                <input class="form-check-input" type="radio" value="1" wire:model="is_slider"
                                                    id="flexRadioDefault1" checked="">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Activer
                                                </label>
                                            </div>
                                            <!-- Radio -->
                                            <div class="form-check radio-bg-light me-4">
                                                <input class="form-check-input" type="radio" value="0" wire:model="is_slider"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Desactiver
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Switch item -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Activer/Désactiver site</label>
                                        <div class="mb-0 form-check form-switch form-check-lg">
                                            @if($is_siteactive)
                                            <input class="mt-0 form-check-input price-toggle me-2" type="checkbox"
                                                id="flexSwitchCheckDefault" checked wire:model="is_siteactive">
                                            <label class="mt-1 form-check-label text-success" for="flexSwitchCheckDefault">Activé</label>
                                            @else
                                            <input class="mt-0 form-check-input price-toggle me-2" type="checkbox" id="flexSwitchCheckDefault"
                                                wire:model="is_siteactive">
                                            <label class="mt-1 form-check-label text-dark" for="flexSwitchCheckDefault">Activer</label>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Textarea item -->
                                    <div class="col-lg-12">
                                        <label class="form-label">Texte d'entretien</label>
                                        <textarea class="form-control" rows="3" wire:model="message_disabled"></textarea>
                                        <div class="form-text">Cette message est afficher lorsque le site a été désactiver.</div>
                                    </div>
                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="mb-0 btn btn-success">Mettre à jour</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- General Settings content END -->


                    <!-- Account setting content START -->
                    <div class="tab-pane" id="tab-3">
                        <!-- Activity logs -->
                        <div class="p-4 mb-3 bg-light rounded-3">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- Content -->
                                <div>
                                    <h6 class="h5">Activity Logs</h6>
                                    <p class="mb-1 mb-md-0">You can save your all activity logs including unusual
                                        activity detected.</p>
                                </div>
                                <!-- Switch -->
                                <div class="mb-0 form-check form-switch form-check-md">
                                    <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                                </div>
                            </div>
                        </div>

                        <!-- Change password -->
                        <div class="p-4 mb-3 bg-light rounded-3">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- Content -->
                                <div>
                                    <h6 class="h5">Change Password</h6>
                                    <p class="mb-1 mb-md-0">Set a unique password to protect your account.</p>
                                </div>
                                <!-- Button -->
                                <div>
                                    <a href="#" class="mb-1 btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#changePassword">Change Password</a>
                                    <p class="mb-0 small h6">Updated : {{ Auth()->user()->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 Step Verification -->
                        <div class="p-4 bg-light rounded-3">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- Content -->
                                <div>
                                    <h6 class="h5">2 Step Verification</h6>
                                    <p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is
                                        activated you will need to enter not only your password, but also a special code
                                        using app. You can receive this code by in mobile app.</p>
                                </div>
                                <!-- Switch -->
                                <div class="mb-0 form-check form-switch form-check-md">
                                    <input class="form-check-input" type="checkbox" id="checkPrivacy13" checked="">
                                </div>
                            </div>
                        </div>

                        <!-- Active Logs START -->
                        <div class="mt-4 border card col-12">

                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="card-header-title">Active Logs</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Table START -->
                                <div class="border-0 table-responsive">
                                   <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">User ID</th>
                                            <th scope="col" class="border-0">IP Address</th>
                                            <th scope="col" class="border-0">User Agent</th>
                                            <th scope="col" class="border-0">URL</th>
                                            <th scope="col" class="border-0">Method</th>
                                            <th scope="col" class="border-0">Parameters</th>
                                            <th scope="col" class="border-0 rounded-end">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                        <tr>
                                            <td>{{ $log->user_id }}</td>
                                            <td>{{ $log->ip_address }}</td>
                                            <td>{{ $log->user_agent }}</td>
                                            <td>{{ $log->url }}</td>
                                            <td>{{ $log->method }}</td>
                                            <td>{{ $log->parameters }}</td>
                                            <td>{{ $log->created_at->diffForHumans() }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                               <div>
                                {{ $logs->links() }}
                               </div>

                                </div>
                                <!-- Table END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Active Logs END -->
                    </div>
                    <!-- Account setting content END -->

                    <!-- Social Settings content START -->
                    <div class="tab-pane" id="tab-4">
                        <div class="shadow card">
                            <!-- Card header -->
                            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                <h5 class="mb-0 card-header-title">Social Media Settings</h5>
                                <a href="#" class="mb-0 btn btn-sm btn-primary">Add new</a>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body">
                                <form class="row g-4">
                                    <!-- Input item -->
                                    <div class="col-sm-6">
                                        <label class="form-label"><i
                                                class="fab fa-google text-google-icon me-2"></i>Enter google client
                                            ID</label>
                                        <input class="form-control" type="text">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-sm-6">
                                        <label class="form-label"><i
                                                class="fab fa-google text-google-icon me-2"></i>Enter google API</label>
                                        <input class="form-control" type="text">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-sm-6">
                                        <label class="form-label"><i
                                                class="fab fa-facebook text-facebook me-2"></i>Enter facebook client
                                            ID</label>
                                        <input class="form-control" type="text">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-sm-6">
                                        <label class="form-label"><i
                                                class="fab fa-facebook text-facebook me-2"></i>Enter facebook
                                            API</label>
                                        <input class="form-control" type="text">
                                    </div>

                                    <!-- Note -->
                                    <p class="mb-0"><b>In your app set all redirect URL like:</b> <u
                                            class="text-primary">https://app.eduport.abc/google/callback</u></p>

                                    <!-- Button -->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="mb-0 btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Social Settings content END -->

                    <!-- Email Settings content START -->
                    <div class="tab-pane" id="tab-5">
                        <div class="shadow card">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0 card-header-title">Paramètres de messagerie</h5>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body">
                            <form class="row g-4">
                                <div class="row g-4">
                                    <!-- Input item -->
                                    <div class="col-md-6">
                                        <label class="form-label">SMTP HOST</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-6 col-xl-3">
                                        <label class="form-label">SMTP Port</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-6 col-xl-3">
                                        <label class="form-label">SMTP Encryption</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-6">
                                        <label class="form-label">SMTP Username</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-6">
                                        <label class="form-label">SMTP Passwod</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-12">
                                        <label class="form-label">Email From Address</label>
                                        <input type="email" class="form-control">
                                    </div>

                                </div>
                                <!-- Email Template -->
                                <div class="mt-4 row g-4">
                                    <!-- Button -->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="mb-0 btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Email Settings content END -->

                </div>
                <!-- Tab Content END -->
            </div>
            <!-- Right side END -->
        </div> <!-- Row END -->
    </div>
    <!-- Page main content END -->


    <!-- Popup modal for Change Password START -->
    <div wire:ignore class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal header -->
                <div class="modal-header bg-dark">
                    <h5 class="text-white modal-title" id="changePasswordLabel">Changer le mot de passe</h5>
                    <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <form class="row" wire:submit.prevent="update_password">
                    <!-- Input item -->
                    <div class="mb-3 col-12">
                        <label class="form-label" for="current_password">{{ __('Current Password') }}</label>
                        <span class="text-danger">*</span></label>
                        <input id="current_password" type="password" class="form-control" wire:model.lazy="current_password"
                            placeholder="Enter old password">
                        @error('current_password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <!-- Input item -->
                    <div class="mb-3 col-12">
                        <label class="form-label">Nouveau mot de passe <span class="text-danger">*</span></label>
                        <input type="password" id="password" class="form-control" wire:model.lazy="password"
                            placeholder="Enter new password">
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <!-- Input item -->
                    <div class="mb-4 col-12">
                        <label class="form-label">Confirmer le mot de passe <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password_confirmation" wire:model.lazy="password_confirmation"
                            placeholder="Enter confirm password">
                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="my-0 btn btn-danger-soft" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="my-0 btn btn-success">Changer le mot de passe</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for Change Password END -->
</div>


@push('scripts')
<script>
    var inputSetting = document.querySelector('#keyword');
    var tagifySetting = new Tagify(inputSetting);
    tagifySetting.on('change', function(e){
        var tags = JSON.parse(e.detail.value).map(function(tag) { return tag.value; });
        @this.set('keywords', tags);
    });
</script>
@endpush
