<?php

use App\Livewire\Home;
use App\Livewire\Offres;
use App\Livewire\Search;
use App\Livewire\Article;
use App\Models\Abonnement;
use App\Livewire\Documents;
use App\Livewire\EtabTypes;
use App\Livewire\RevueOpen;
use App\Livewire\StaffPage;
use App\Livewire\EtabSingle;
use App\Livewire\Newsletter;
use App\Livewire\ReglesPage;
use App\Livewire\Admin\Etabs;
use App\Livewire\Admin\Panel;
use App\Livewire\Admin\Posts;
use App\Livewire\Admin\Types;
use App\Livewire\AllArticles;
use App\Livewire\ContactPage;
use App\Livewire\RevuesListe;
use App\Livewire\ShowDomaine;
use App\Livewire\SingleEvent;
use App\Livewire\Admin\Regles;
use App\Livewire\Admin\Revues;
use App\Livewire\Admin\Staffs;
use App\Livewire\MotPresident;
use App\Livewire\Publications;
use App\Livewire\Admin\Contacts;
use App\Livewire\Admin\Domaines;
use App\Livewire\Admin\Settings;
use App\Livewire\Etablissements;
use App\Livewire\HistoriquePage;
use App\Livewire\Admin\Uploaders;
use App\Livewire\CategoryArticle;
use App\Livewire\Admin\Categories;
use App\Livewire\Admin\Doctorales;
use App\Livewire\Admin\Evenements;
use App\Livewire\Admin\Presidents;
use App\Livewire\OrganigrammePage;
use App\Livewire\Admin\Abonnements;
use App\Livewire\Admin\Historiques;
use App\Livewire\Admin\Preinscrits;
use App\Livewire\PreinscriptionPage;
use App\Livewire\Admin\Organigrammes;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\FilesPublication;
use App\Livewire\Admin\PresidentStories;
use App\Http\Controllers\Auth\TwoFAController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Hello Inertia Test Route
Route::get('/hello-inertia', function () {
    return \Inertia\Inertia::render('Welcome', [
        'version' => Illuminate\Foundation\Application::VERSION,
    ]);
});
//Routes HomePage
//Routes HomePage
// Modern Home Verification Route
Route::get('/modern-home', function () {
    return \Inertia\Inertia::render('HomePage');
});

//Routes HomePage
Route::get('/', Home::class)->name('home');
Route::get('/new/{slug}/', Article::class)->name('open_article');
Route::get('/voir-tous-actualites/', AllArticles::class)->name('all_article');
Route::get('/c/{slug}', CategoryArticle::class)->name('cat_article');

Route::get('/mot-du-president/{uuid}', MotPresident::class)->name('mot_president');
Route::get('/nos-etablissements', Etablissements::class)->name('etablissement');
Route::get('/ecole-doctoral', Etablissements::class)->name('doctoral');
Route::get('/detail/{uuid}', EtabSingle::class)->name('single_etab');
Route::get('/detail-ecoles-doctorale/{uuid}', EtabSingle::class)->name('single_doc');
Route::get('/d-t/{slug}', EtabTypes::class)->name('detail_type');

Route::get('/detail-domaine/{uuid}', ShowDomaine::class)->name('detail_domaine');

Route::get('/offres-de-formation', Offres::class)->name('offres');
Route::get('/historique', HistoriquePage::class)->name('historiqueIndex');
Route::get('/organigramme', OrganigrammePage::class)->name('organigramme');
Route::get('/nos-staffs', StaffPage::class)->name('staff_page');
Route::get('/detail-evenement/{uuid}', SingleEvent::class)->name('detail_event');
Route::get('/contactez-nous', ContactPage::class)->name('contact_page');

Route::get('/lire/{slug}/{uuid}', ReglesPage::class)->name('show_regle');
Route::get('/resultats-preinscription', PreinscriptionPage::class)->name('resultat_inscription');
Route::get('/documents', Documents::class)->name('documents');
Route::get('/requete', Search::class)->name('search.results');

Route::get('/publications-scientifiques', RevuesListe::class)->name('listes_revue');
Route::get('/ouvrir-revue/{uuid}', RevueOpen::class)->name('open_revue');
Route::get('/{revue_id}/publication-scientifique-revue-{uuid}', [Publications::class, 'download'])->name('download_revue');

//Route::post('/abonnez-vous', [NewsletterController::class, 'store'])->name('abonnez_vous');
//Route::get('/confirmation-email/{email}/{id}/{status}', [NewsletterController::class, 'confirmEmail'])->name('confirm_email');
Route::get('/email/verify/{id}/{email}', [NewsletterController::class, 'verifyEmail'])->name('verification.verify');

// 2FA Auth
Route::get('2fa', [TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [TwoFAController::class, 'resend'])->name('2fa.resend');

// Routes Admin
Route::middleware(['auth:web', 'verified','isAdmin', 'logsActivity', '2fa'])->group(function () {

    Route::get('/mja/dashboard', Panel::class)->name('admin');

    Route::get('/adminx/categorie', Categories::class)->name('categorie');
    Route::get('/adminx/article', Posts::class)->name('article');

    Route::get('/adminx/president', Presidents::class)->name('president');

    Route::get('/adminx/profil-etab', Etabs::class)->name('profil_etab');
    Route::get('/adminx/doctorale-ecole', Doctorales::class)->name('ecole_doctorale');
    Route::get('/adminx/type-etab', Types::class)->name('type_etab');


    Route::get('/adminx/domaines', Domaines::class)->name('domaines');
    Route::get('/adminx/historique', Historiques::class)->name('historique');
    Route::get('/adminx/president-list', PresidentStories::class)->name('list_president');
    Route::get('/adminx/orga', Organigrammes::class)->name('orga');
    Route::get('/adminx/staff', Staffs::class)->name('staff');

    Route::get('/adminx/event', Evenements::class)->name('event');

    Route::get('/adminx/settings', Settings::class)->name('settings');
    Route::get('/adminx/contact', Contacts::class)->name('contact');
    Route::get('/adminx/abonne', Abonnements::class)->name('abonne');

    Route::get('adminx/regles', Regles::class)->name('regles');

    Route::get('adminx/pre-inscription', Preinscrits::class)->name('pre_inscription');

    Route::get('adminx/uploader', Uploaders::class)->name('uploader');

    Route::get('adminx/revues', Revues::class)->name('revues');
    Route::get('adminx/fichiers', FilesPublication::class)->name('fichiers');

});

//Routes Auth
Route::get('/mja/user-auth', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post('/mja/user-auth', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


