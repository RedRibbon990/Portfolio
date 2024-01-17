<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public static $services = 
    [
            [
                'uri' => 'gestionali',
                'name' => 'Sistema Gestionali',
                'costo' => 1500,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '/IMG/apple-gestionale.png'
            ],
            [
                'uri' => 'ecommerce',
                'name' => 'Piattaforma eCommerce',
                'costo' => 2500,
                'tempo_di_realizzazione' => '3 settimane',
                'cover' => '/IMG/e-commerce.png'
                
            ],
            [
                'uri' => 'siti-web',
                'name' => 'Siti Web',
                'costo' => 1000,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '/IMG/Tipologie-siti-web.webp'
            ],
            [
                'uri' => 'marketing-digitale',
                'name' => 'Marketing Digitale',
                'costo' => 1800,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '/IMG/Digital-marketing.jpg'
            ],
            [
                'uri' => 'app-mobile',
                'name' => 'Applicazione Mobile',
                'costo' => 3000,
                'tempo_di_realizzazione' => '4 settimane',
                'cover' => '/IMG/applicazioni-mobile.jpg'
            ],
            [
                'uri' => 'seo',
                'name' => 'Servizi SEO',
                'costo' => 1200,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '/IMG/servizi-seo.webp'
            ],
            [
                'uri' => 'social-media',
                'name' => 'Gestione Social Media',
                'costo' => 800,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '/IMG/social-network.jpg'
            ],
            [
                'uri' => 'analisi-dati',
                'name' => 'Analisi Dati',
                'costo' => 2200,
                'tempo_di_realizzazione' => '3 settimane',
                'cover' => '/IMG/Analisi-Dati.webp'
            ],
            [
                'uri' => 'design-grafico',
                'name' => 'Design Grafico',
                'costo' => 900,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '/IMG/Netflix.jpg'
            ],
            [
                'uri' => 'formazione',
                'name' => 'Formazione Online',
                'costo' => 500,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '/IMG/corsi-formazione.jpg'
            ],
        ];
    

    public function service() {
        return view('service', ['services' => self::$services]);
    }

    public function detail($nome){
        $selectedService = null;
    
        foreach (self::$services as $service){
            if($nome == $service['uri']){
                $selectedService = $service;
                break;
            } 
        }
    
        if ($selectedService) {
            return view('detail', ['service' => $selectedService]);
        } else {
            abort(404);
        }
    }
    
}
