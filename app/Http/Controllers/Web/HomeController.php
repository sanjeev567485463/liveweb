<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $activeTheme = getActiveTheme();

            if (empty($activeTheme)) {
                Log::warning('Homepage fallback triggered because no active theme was found.');
                return redirect('/login');
            }

            $homeLanding = $activeTheme->homeLanding;

            if (empty($homeLanding) || $homeLanding->components->isEmpty()) {
                Log::warning('Homepage fallback triggered because no home landing/components were found.', [
                    'theme_id' => $activeTheme->id ?? null,
                    'home_landing_id' => $activeTheme->home_landing_id ?? null,
                ]);

                return redirect('/login');
            }

            $seoSettings = getSeoMetas('home');
            $pageTitle = !empty($seoSettings['title']) ? $seoSettings['title'] : trans('home.home_title');
            $pageDescription = !empty($seoSettings['description']) ? $seoSettings['description'] : trans('home.home_title');
            $pageRobot = getPageRobot('home');

            $data = [
                'pageTitle' => $pageTitle,
                'pageDescription' => $pageDescription,
                'pageRobot' => $pageRobot,
                'activeTheme' => $activeTheme,
                'homeLanding' => $homeLanding,
            ];

            return response()->view('design_1.web.home.index', $data);
        } catch (\Throwable $e) {
            Log::error('Homepage render failed.', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect('/login');
        }
    }
}
