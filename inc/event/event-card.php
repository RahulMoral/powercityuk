<div class="event-card">
    <div class="event-card-image">
        <img src="<?= $event['event_image'] ?>" alt="<?= htmlspecialchars($event['event_name']) ?>" class="img-fluid d-block" />
    </div>
    <div class="event-card-content">
        <h3><?= htmlspecialchars($event['event_name']) ?></h3>
        <p><?= $event['event_date'] ?> | <?= $event['event_time'] ?></p>
        <p><?= htmlspecialchars($event['event_address']) ?></p>
    </div>
</div>