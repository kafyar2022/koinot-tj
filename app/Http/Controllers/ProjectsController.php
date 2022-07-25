<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index(Request $request)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'projects');

    switch ($request->category) {
      case 'by-us':
        $data['projects'] = Project::where('locale', $locale)
          ->where('by_us', true)
          ->paginate(9);
        break;

      case 'with-us':
        $data['projects'] = Project::where('locale', $locale)
          ->where('by_us', false)
          ->paginate(9);
        break;

      default:
        $data['projects'] = Project::where('locale', $locale)
          ->paginate(9);
        break;
    }

    return view('pages.projects.index', compact('data'));
  }
}
