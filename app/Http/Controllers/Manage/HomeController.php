<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Invitation;
use App\Models\JobPosting;
use App\Models\JobPostingCategory;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categoriesCount = JobPostingCategory::count();
        $jobsCount = JobPosting::count();
        $applicationsCount = Application::count();
        $invitationsCount = Invitation::count();
        $blogsCount = Blog::count();
        $clientsCount = Client::count();
        $projectCount = Project::count();
        $newsCount = News::count();

        return view('manage.home', [
            'categoriesCount' => $categoriesCount,
            'jobsCount' => $jobsCount,
            'applicationsCount' => $applicationsCount,
            'invitationsCount' => $invitationsCount,
            'blogsCount' => $blogsCount,
            'clientsCount' => $clientsCount,
            'projectCount' => $projectCount,
            'newsCount' => $newsCount,
        ]);
    }
}
