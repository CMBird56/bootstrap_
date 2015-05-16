<article class="schedule"> <!-- schedule -->
	<h1>Schedule</h1>
	<p>The Roux Academy gets thousands of submissions every year for artists interesting in participating in the CAC exhibits, and selects approximately 200 distinct pieces of contemporary art for display in their collective exhibit. In addition, 12 individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>

	<div class="tabbable tabs"><!-- ovo je div gde se nalaze tabovi -->
		<ul class="nav nav-tabs"> 
			<li class="active"><a href="#monday" data-toggle="tab">Monday</a></li> 
            <!-- hrefovi moraju da se poklapaju posle sa id-jevima dole u tab content -->
			<li><a href="#tuesday" data-toggle="tab">Tuesday</a></li>
			<li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
			<li><a href="#thursday" data-toggle="tab">Thursday</a></li>
			<li><a href="#friday" data-toggle="tab">Friday</a></li>
		</ul><!-- nav nav-tabs -->
	</div><!-- tabbable tabs -->

	<section class="tab-content"><!-- sadrzaj tabova -->

    <?php include "snippet_schedule_monday.php"; ?> <!-- kada stoji klass media to je neki drugi ne vezan deo bootsrapa -->
    <?php include "snippet_schedule_tuesday.php"; ?>
    <?php include "snippet_schedule_wednesday.php"; ?>
    <?php include "snippet_schedule_thursday.php"; ?>
    <?php include "snippet_schedule_friday.php"; ?>


	</section><!-- tab-content -->

</article><!-- schedule -->