<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $slug
 * @property string|null $website
 * @property string|null $location
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Company whereWebsite($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $job_application_id
 * @property string $round_name
 * @property \Illuminate\Support\Carbon $interview_at
 * @property string|null $mode
 * @property string|null $meeting_link
 * @property string|null $feedback
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobApplication|null $jobApplication
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereInterviewAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereJobApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereMeetingLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereRoundName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Interview whereUpdatedAt($value)
 */
	class Interview extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property int|null $company_id
 * @property int $job_status_id
 * @property string $title
 * @property string|null $company_name
 * @property string|null $location
 * @property numeric|null $salary
 * @property string|null $application_url
 * @property \Illuminate\Support\Carbon|null $applied_at
 * @property bool $is_remote
 * @property \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobNote> $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Interview> $interviews
 * @property-read int|null $interviews_count
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @property-read \App\Models\JobStatus $status
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\JobApplicationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication search($search)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereApplicationUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereAppliedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereIsRemote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereJobStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication withoutTrashed()
 */
	class JobApplication extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $job_application_id
 * @property string $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobApplication|null $jobApplication
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote whereJobApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobNote whereUpdatedAt($value)
 */
	class JobNote extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobStatus whereUpdatedAt($value)
 */
	class JobStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @method static \Database\Factories\SkillFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobs
 * @property-read int|null $jobs_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

