<?php if ($totalPages > 1): ?>
    <div class="event-pagination" style="margin-top:20px;">

        <!-- Prev button -->
        <?php if ($page > 1): ?>
            <a href="javascript:void(0);" class="event-pagination-button" data-page="<?= $page - 1 ?>">« Prev</a>
        <?php else: ?>
            <span class="event-pagination-text">« Prev</span>
        <?php endif; ?>

        <?php
        $range = 2; // how many pages around current
        $ellipsisShown = false;

        for ($i = 1; $i <= $totalPages; $i++):
            if (
                $i == 1 ||
                $i == $totalPages ||
                ($i >= $page - $range && $i <= $page + $range)
            ):
                ?>
                <a href="#" data-page="<?= $i ?>" class="event-pagination-item <?= $i == $page ? 'active' : '' ?>">
                    <?= $i ?>
                </a>
                <?php $ellipsisShown = false; ?>
            <?php elseif (!$ellipsisShown): ?>
                <span class="event-pagination-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="16" height="16">
                        <path d="M96 320C96 289.1 121.1 264 152 264C182.9 264 208 289.1 208 320C208 350.9 182.9 376 152 376C121.1 376 96 350.9 96 320zM264 320C264 289.1 289.1 264 320 264C350.9 264 376 289.1 376 320C376 350.9 350.9 376 320 376C289.1 376 264 350.9 264 320zM488 264C518.9 264 544 289.1 544 320C544 350.9 518.9 376 488 376C457.1 376 432 350.9 432 320C432 289.1 457.1 264 488 264z"/>
                    </svg>
                </span>
                <?php $ellipsisShown = true; ?>
            <?php endif; ?>
        <?php endfor; ?>

        <!-- Next button -->
        <?php if ($page < $totalPages): ?>
            <a href="javascript:void(0);" class="event-pagination-button" data-page="<?= $page + 1 ?>">Next »</a>
        <?php else: ?>
            <span class="event-pagination-text">Next »</span>
        <?php endif; ?>

    </div>
<?php endif; ?>
