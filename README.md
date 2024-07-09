# Eloquent → 2.Tunneling down

### Installation

1. Download and extract the zip file.
2. Run `composer install` from command line.
3. In case of any problems you may need to run `composer update` first.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate` from the command line.
6. Migrate: Run `php artisan migrate` from the command line. This wil also create the SQLite database.
7. Seed: Run `php artisan db:seed` from the command line.
8. `php artisan serve`

### Intro

The repository is structured with separate commits for each exercise in the Eloquent - Being relatable module. This allows you to review each stage of the module independently, making it easier to provide targeted feedback.
Please refer to the specific commits to see the progress and implementation details for each of the four exercises.

### Eloquent → 2.Tunneling down → 1.Why so serial?

- Created a new Laravel project and installed API routes.
- Created models, factories, and migrations: Car and Brand.
- Relationships Cars (belongsTo) Brand (hasMany).
- Serialized models to hide created_at and updated_at fields.
- Seeded 5 Brands with realistic data.
- Assigned 5 Cars to each Brand in the seeder.
- Implemented show API routes for Car and Brand.
