<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.home'); // Vue de la page d'accueil
    }

    public function formation()
    {
        $formations = Formation::all();
        return view('portfolio.formation', compact('formations'));
    }

    public function skills()
    {
        $skills = Skill::all();
        return view('portfolio.skills', compact('skills'));
    }

    public function experience()
    {
        $experiences = Experience::all();
        return view('portfolio.experience', compact('experiences'));
    }

    public function projects()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.github.com/users/hamzakhalid14/repos');
        $projects = json_decode($response->getBody(), true);
    
        return view('portfolio.projects', compact('projects'));
    }
    
    public function contact()
    {
        // Récupérez les données de contact depuis la base de données
        $contact = Contact::first();

        // Passez les données à la vue
        return view('portfolio.contact', compact('contact'));
    }
}

    
