<?php
$isAjax = isset($_GET['ajax']); // detect AJAX request
include(dirname(__FILE__) . '/inc/event/event-data.php');

function eventTimestamp($date) {
    return DateTime::createFromFormat('d-m-Y', $date)->getTimestamp();
}

$today = strtotime(date("d-m-Y"));
$upcomingEvents = array_filter($eventData, fn($e) => eventTimestamp($e['event_date']) >= $today);
$pastEvents     = array_filter($eventData, fn($e) => eventTimestamp($e['event_date']) < $today);

$tab = $_GET['tab'] ?? 'upcoming';
$events = $tab === 'past' ? $pastEvents : $upcomingEvents;

$perPage = 6;
$total = count($events);
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $perPage;
$pagedEvents = array_slice($events, $offset, $perPage);
$totalPages = ceil($total / $perPage);

ob_start();
if ($pagedEvents) {
    echo '<div class="events-container-wrapper">';
    foreach ($pagedEvents as $event) {
        include(dirname(__FILE__) . '/inc/event/event-card.php');
    }
    echo '</div>';
} else {
    echo "<p>No events found.</p>";
}
include(dirname(__FILE__) . '/inc/event/pagination.php');
$eventsHtml = ob_get_clean();

if ($isAjax) {
    echo $eventsHtml;
    exit;
}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POWER CITY UK | Events</title>
		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" />
        <!-- Jarallax CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.css" />
		<link rel="stylesheet" href="css/app.css" />
	</head>
	<body>
		<div class="page-wrapper">
			<!-- Header -->
			<?php include(dirname(__FILE__) . '/inc/header.php') ?>
			<!-- Header end -->
			<!-- Main -->
			<main class="site-main">
				<section class="inner-banner jarallax">
                    <img alt="Inner banner image" class="jarallax-img" src="/images/inner-banner.jpg" />
                    <div class="container">
                        <div class="inner-banner-wrapper">
                            <h1>Events</h1>
                            <ul class="list-unstyled mb-0 d-flex align-items-center gap-2">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>/</li>
                                <li>Events</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="event">
                    <div class="container">
                        <div class="event-wrapper">
                            <div class="event-tabs">
                                <button data-tab="upcoming" class="active">Upcoming Events</button>
                                <button data-tab="past">Past Events</button>
                            </div>
                            <div class="events-container" id="events-container">
                                <!-- AJAX will load events here -->
                                <?= $eventsHtml ?>
                            </div>
                        </div>
                    </div>
                </section>
			</main>
			<!-- Main end -->
			<!-- Footer -->
			<?php include(dirname(__FILE__) . '/inc/footer.php'); ?>
			<!-- Footer end -->
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/common.js"></script>
        <!-- Jarallax JS -->
        <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>
        <script>
			jarallax(document.querySelectorAll('.jarallax'), {
				speed: 0.4,
			});
        </script>
        <script>
            $(document).ready(function(){
                function loadEvents(tab="upcoming", page=1){
                    $.get("event.php", { tab: tab, page: page, ajax: 1 }, function(data){
                        $("#events-container").html(data);
                        $(".event-tabs button").removeClass("active");
                        $(".event-tabs button[data-tab='"+tab+"']").addClass("active");
                    });
                }

                // Load default
                loadEvents("upcoming", 1);

                // Tab click
                $(".event-tabs button").click(function(){
                    let tab = $(this).data("tab");
                    loadEvents(tab, 1);
                });

                // Delegate pagination click
                $(document).on("click", ".pagination a", function(e){
                    e.preventDefault();
                    let tab = $(".event-tabs button.active").data("tab");
                    let page = $(this).data("page");
                    loadEvents(tab, page);
                });
            });
        </script>
	</body>
</html>