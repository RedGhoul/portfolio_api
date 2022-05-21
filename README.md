php artisan crud:generate Project --fields='title#string; tagline#string; githuburl#string; liveurl#string; show#boolean;' --view-path=admin --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html

php artisan crud:generate Job --fields='companyname#string; positionname#string; startdate#date; enddate#date; show#boolean; presentjob#boolean' --view-path=admin --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html

php artisan crud:api-controller Api\ProjectsController --crud-name=projects --model-name=Project

php artisan crud:api-controller Api\\JobsController --crud-name=jobs --model-name=Job

php artisan crud:generate JobPoint --fields='taskdone#text;' --view-path=admin --controller-namespace=App\Http\Controllers\Admin --foreign-keys="job_id#id#jobs#cascade" --relationships="jobpoints#hasOne#App\Job" --route-group=admin --form-helper=html --force
