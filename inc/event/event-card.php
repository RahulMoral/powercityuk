<?php
$dates = array_map('trim', explode(',', $event['event_date']));
$times = array_map('trim', explode(',', $event['event_time']));
$formattedSchedule = [];
foreach ($dates as $i => $d) {
    $dateObj = DateTime::createFromFormat('d-m-Y', $d);
    if ($dateObj) {
        $dayName = strtoupper($dateObj->format('D')); // e.g. FRI
        $time = $times[$i] ?? ''; // match time by index
        $formattedSchedule[] = $dayName . ': ' . $dateObj->format('d-m-Y') . ' | ' . $time;
    }
}
?>

<div class="event-card">
    <div class="event-card-image">
        <img src="<?= $event['event_image'] ?>" alt="<?= htmlspecialchars($event['event_name']) ?>" class="img-fluid d-block" />
    </div>
    <div class="event-card-content">
        <h3><?= htmlspecialchars($event['event_name']) ?></h3>
        <div class="event-schedule">
            <?php foreach ($formattedSchedule as $line): ?>
                <p><?= $line ?></p>
            <?php endforeach; ?>
        </div>
        <p><?= htmlspecialchars($event['event_address']) ?></p>
    </div>
</div>