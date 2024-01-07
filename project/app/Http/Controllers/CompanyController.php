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
                'cover' => '\IMG\imgservizigestionali.jpg'
            ],
            [
                'uri' => 'ecommerce',
                'name' => 'Piattaforma eCommerce',
                'costo' => 2500,
                'tempo_di_realizzazione' => '3 settimane',
                'cover' => '\IMG\imgserviziecom.jpg'
                
            ],
            [
                'uri' => 'siti-web',
                'name' => 'Siti Web',
                'costo' => 1000,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '\IMG\imgservizisiti.jpg'
            ],
            [
                'uri' => 'marketing-digitale',
                'name' => 'Marketing Digitale',
                'costo' => 1800,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '\IMG\imgservizimarketing.jpg'
            ],
            [
                'uri' => 'app-mobile',
                'name' => 'Applicazione Mobile',
                'costo' => 3000,
                'tempo_di_realizzazione' => '4 settimane',
                'cover' => '\IMG\imphp2.avif'
            ],
            [
                'uri' => 'seo',
                'name' => 'Servizi SEO',
                'costo' => 1200,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '\IMG\imphp2.avif'
            ],
            [
                'uri' => 'social-media',
                'name' => 'Gestione Social Media',
                'costo' => 800,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '\IMG\imphp2.avif'
            ],
            [
                'uri' => 'analisi-dati',
                'name' => 'Analisi Dati',
                'costo' => 2200,
                'tempo_di_realizzazione' => '3 settimane',
                'cover' => '\IMG\imphp2.avif'
            ],
            [
                'uri' => 'design-grafico',
                'name' => 'Design Grafico',
                'costo' => 900,
                'tempo_di_realizzazione' => '1 settimana',
                'cover' => '\IMG\imgservizigestionali.jpg'
            ],
            [
                'uri' => 'formazione',
                'name' => 'Formazione Online',
                'costo' => 500,
                'tempo_di_realizzazione' => '2 settimane',
                'cover' => '\IMG\imphp2.avif'
            ],
        ];
    
    
    public function service() {

        return view('service', ['services' => self::$services]);
    }

    public function detail($nome){
        
        foreach (self::$services as $service){
            if($nome == $service['uri']){
                return view('detail' , ['nome' => $service]);
            } 
        }
        abort(404);
    }
}
