# Hostinger Shared Hosting Deployment

This project is now prepared for Hostinger shared hosting with these assumptions:

- The full Laravel project is uploaded into `public_html`
- Requests are rewritten internally to the `public` folder by the root `.htaccess`
- Public web cron routes are disabled
- Cron jobs should run through Artisan commands from Hostinger hPanel

## Required setup

1. Upload the whole project.
2. Keep sensitive files outside public access when possible.
3. Set production values in `.env`.
4. Run Laravel install/deploy commands through SSH or terminal access if available.

## Hostinger cron jobs

Use Hostinger `Custom` cron jobs and run the Artisan command directly.

Example path pattern:

```bash
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendSessionsReminder
```

List available cron job names:

```bash
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job
```

## Common cron commands

```bash
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendSessionsReminder
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendMeetingsReminder
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendMeetingPackageReminders
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job renewSubscriptions
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job reminderBeforeExpirationSubscribes
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendSubscribeReminder
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendInstallmentReminders
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job checkGiftsDate
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendAbandonedCartReminders
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job clearAbandonedCartItems
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendAttendanceNotifications
/usr/bin/php /home/u12345678/domains/example.com/public_html/artisan app:run-cron-job sendEventsReminders
```

## Notes

- Hostinger cron schedules use UTC, so adjust timings accordingly.
- The root `.htaccess` blocks direct access to `app`, `bootstrap`, `config`, `database`, `resources`, `routes`, `storage`, `tests`, `vendor`, `.env`, `artisan`, and other sensitive files.
- Uploads in `public/store` have execution-blocking `.htaccess` rules to stop PHP/script execution.
