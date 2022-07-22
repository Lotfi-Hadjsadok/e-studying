<?php
get_header();
global $post;

$semester = get_field('subject_semestre');
$specialities = get_field('subject_speciality');
$this_speciality = get_query_var('speciality');
$this_speciality_slug = '/speciality/' . $this_speciality;
$semester_slug = $this_speciality_slug . '/' . $semester;
$subject_slug = $semester_slug . '/' . $post->post_name;
?>
<div class="container">
    <span class="e-breadcrumbs">
        <strong> <a href="/">Accueil</a> > Speciality</strong> >
        <span class="e-breadcrumbs-specialities">
            <?php foreach ($specialities as $speciality) : ?>
                <?php $speciality_slug = '/speciality/' . $speciality->post_title; ?>
                <a href="<?= strtolower($speciality_slug)  ?>"><?= strtoupper($speciality->post_title) ?></a>
            <?php endforeach; ?>
        </span>
        >
        <a href="<?= strtolower($semester_slug) ?>"><?= strtoupper($semester)  ?></a> >
        <a href="<?= strtolower($subject_slug) ?>"><?= strtoupper(get_the_title())  ?></a>
    </span>
    <div class="e-data-container">
        <a href="cours"><button>Cours</button></a>
        <a href="td"> <button>TD</button> </a>
        <a href="tp"> <button>TP</button> </a>
        <a href="examen"> <button>Examen</button> </a>
    </div>
</div>
<?php
get_footer();
