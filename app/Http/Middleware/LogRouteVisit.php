<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\PageVisit;
use Illuminate\Http\Request;

class LogRouteVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtenez le nom de la route actuelle
        $routeName = $request->route()->getName();
        // Recherche ou crée un enregistrement pour la route dans la base de données
        $pageVisit = PageVisit::firstOrNew(['route_name' => $routeName]);

        // Incrémente le nombre de visites
        $pageVisit->visits += 1;

        // Sauvegarde l'enregistrement dans la base de données
        $pageVisit->save();

        return $next($request);
    }
}