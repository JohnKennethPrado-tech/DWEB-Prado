<footer style="text-align:center;padding:1.5rem 0;color:#555;">
    <hr style="margin-bottom:1rem;opacity:0.3;">

    <p><strong>Time Zones</strong></p>

    <p>
        Philippines: <?= date("h:i A"); ?><br>
        New York: <?= date("h:i A", strtotime("now America/New_York")); ?><br>
        London: <?= date("h:i A", strtotime("now Europe/London")); ?><br>
        Tokyo: <?= date("h:i A", strtotime("now Asia/Tokyo")); ?>
    </p>

    <p style="margin-top:0.8rem;font-size:0.85rem;">
        © <?= date("Y"); ?> Philippine Holidays
    </p>
</footer>
