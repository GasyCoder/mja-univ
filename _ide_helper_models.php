<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Abonnement
 *
 * @property int $id
 * @property string $email
 * @property int $is_subscribed
 * @property string|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereIsSubscribed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereUpdatedAt($value)
 */
	class Abonnement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Admission
 *
 * @property int $id
 * @property int $etabId
 * @property string|null $descriptions
 * @property string|null $file_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Etab $etab
 * @method static \Illuminate\Database\Eloquent\Builder|Admission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereDescriptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereEtabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admission whereUpdatedAt($value)
 */
	class Admission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AlbumEtab
 *
 * @property int $id
 * @property int $etabId
 * @property string|null $images_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab query()
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab whereEtabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab whereImagesPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlbumEtab whereUpdatedAt($value)
 */
	class AlbumEtab extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $color
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactEtab
 *
 * @property int $id
 * @property int $etabId
 * @property string $phone_1
 * @property string|null $phone_2
 * @property string|null $email
 * @property string|null $siteweb
 * @property string|null $facebook
 * @property string|null $adresse
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Etab $etab
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereEtabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab wherePhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereSiteweb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactEtab withoutTrashed()
 */
	class ContactEtab extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Domaine
 *
 * @property int $id
 * @property string $name
 * @property string $uuid
 * @property string $slug
 * @property string|null $resume
 * @property string|null $icon_path
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Etab> $etabs
 * @property-read int|null $etabs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereIconPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domaine whereUuid($value)
 */
	class Domaine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Etab
 *
 * @property int $id
 * @property string $name
 * @property string $uuid
 * @property int $rubrique_id
 * @property string $sigle
 * @property string $director
 * @property string|null $slogan
 * @property string|null $about
 * @property string|null $image_path
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\ContactEtab|null $contact
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Domaine> $domaines
 * @property-read int|null $domaines_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pedagogie> $pedagogies
 * @property-read int|null $pedagogies_count
 * @property-read \App\Models\Rubrique $rubrique
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Statistic> $statistiques
 * @property-read int|null $statistiques_count
 * @method static \Illuminate\Database\Eloquent\Builder|Etab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etab onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Etab query()
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereDirector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereRubriqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereSigle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etab withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Etab withoutTrashed()
 */
	class Etab extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Evenement
 *
 * @property int $id
 * @property string $title
 * @property string $uuid
 * @property string $slug
 * @property string|null $sub_title
 * @property string|null $description
 * @property string|null $organisator
 * @property string $location
 * @property string|null $url_location
 * @property \Illuminate\Support\Carbon $dateStart
 * @property \Illuminate\Support\Carbon $dateEnd
 * @property \Illuminate\Support\Carbon|null $hourStart
 * @property \Illuminate\Support\Carbon|null $hourEnd
 * @property string|null $image_cover
 * @property string|null $file_path
 * @property int $is_active
 * @property int $is_archive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereHourEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereHourStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereImageCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereIsArchive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereOrganisator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereUrlLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement withoutTrashed()
 */
	class Evenement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Historique
 *
 * @property int $id
 * @property string $slogan
 * @property string $intro
 * @property string $body
 * @property string $images_cover
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $html
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique query()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereImagesCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereUpdatedAt($value)
 */
	class Historique extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organigramme
 *
 * @property int $id
 * @property string $intro
 * @property string $body
 * @property string $image_path
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $html
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organigramme whereUpdatedAt($value)
 */
	class Organigramme extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pedagogie
 *
 * @property int $id
 * @property int $etabId
 * @property string $domaine
 * @property string $mention
 * @property string $parcour
 * @property string|null $respo_mention
 * @property string|null $respo_parcour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Etab $etab
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereDomaine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereEtabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereMention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereParcour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereRespoMention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereRespoParcour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Pedagogie withoutTrashed()
 */
	class Pedagogie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $uuid
 * @property string $slug
 * @property int $category_id
 * @property string|null $images
 * @property int $is_slider
 * @property int $is_active
 * @property int $send_to_subscribers
 * @property string $contenus
 * @property string $bg_color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Category $category
 * @property-read mixed $html
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContenus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsSlider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSendToSubscribers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post withoutTrashed()
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\President
 *
 * @property int $id
 * @property string $name
 * @property string $uuid
 * @property string|null $intro
 * @property string $body
 * @property string $bg_color
 * @property string|null $image_path
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $html
 * @method static \Database\Factories\PresidentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|President newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|President newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|President query()
 * @method static \Illuminate\Database\Eloquent\Builder|President whereBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|President whereUuid($value)
 */
	class President extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PresidentStory
 *
 * @property int $id
 * @property string $president_name
 * @property string $president_year
 * @property string|null $president_avatar
 * @property string|null $decret
 * @property int $is_current
 * @property string|null $mandat
 * @property int $is_interim
 * @property int $is_dead
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereDecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereIsCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereIsDead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereIsInterim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereMandat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory wherePresidentAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory wherePresidentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory wherePresidentYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresidentStory whereUpdatedAt($value)
 */
	class PresidentStory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rubrique
 *
 * @property int $id
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Etab> $etabs
 * @property-read int|null $etabs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubrique whereUpdatedAt($value)
 */
	class Rubrique extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $site_name
 * @property string $copyright
 * @property string $email
 * @property string $phone
 * @property string $adresse
 * @property string $description
 * @property string $keywords
 * @property int $is_slider
 * @property int $is_siteactive
 * @property string $message_disabled
 * @property string|null $logo
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkdin
 * @property string|null $slogan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereIsSiteactive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereIsSlider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLinkdin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMessageDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Staff
 *
 * @property int $id
 * @property string $name
 * @property int $staff_cat_id
 * @property string $job
 * @property int|null $matricule
 * @property string $about
 * @property string|null $image_path
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\StaffCat $staffCat
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff query()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereStaffCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereUpdatedAt($value)
 */
	class Staff extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StaffCat
 *
 * @property int $id
 * @property string $title
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Staff> $staffs
 * @property-read int|null $staffs_count
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffCat whereUpdatedAt($value)
 */
	class StaffCat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Statistic
 *
 * @property int $id
 * @property int $etabId
 * @property int $enseignant
 * @property int $etudiant
 * @property int|null $personnel
 * @property int|null $vacataire
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Etab $etab
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereEnseignant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereEtabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereEtudiant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic wherePersonnel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereVacataire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic withoutTrashed()
 */
	class Statistic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserCode
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCode whereUserId($value)
 */
	class UserCode extends \Eloquent {}
}

