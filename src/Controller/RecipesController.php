<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController {


	#[Route('/list-recipes', name: "list-recipes")]
	public function displayListRecipes() {

		$recipes = [
            1 => [
                'id'          => 1,
                'title'       => 'Quiche Lorraine',
                'image'       => 'https://recettes.precuttech.com/wp-content/uploads/2024/08/Quiche-Lorraine-allegee.jpg',
                'ingredients' => [
                    '200 g de lardons',
                    '3 œufs',
                    '25 cl de crème fraîche',
                    '1 pâte brisée',
                    '50 g de gruyère râpé',
                    'Sel, poivre, muscade'
                ],
                'description' => 'La classique quiche lorraine, croustillante à l\'extérieur et fondante à l\'intérieur.',
                'createdAt'   => '2025-04-23 09:00:00',
                'category'    => 'Plat'
            ],

            2 => [
                'id'          => 2,
                'title'       => 'Ratatouille Provençale',
                'image'       => 'https://www.purerecette.com/wp-content/uploads/2024/10/Ratatouille-Provencale-2.jpg',
                'ingredients' => [
                    '2 courgettes',
                    '1 aubergine',
                    '1 poivron rouge',
                    '1 poivron vert',
                    '3 tomates',
                    '2 oignons',
                    'Herbes de Provence, huile d\'olive, sel, poivre'
                ],
                'description' => 'Un mélange de légumes mijotés aux parfums du Sud.',
                'createdAt'   => '2025-04-22 18:30:00',
                'category'    => 'Plat'
            ],

            3 => [
                'id'          => 3,
                'title'       => 'Soupe à l’oignon gratinée',
                'image'       => 'https://www.francoislambert.one/cdn/shop/articles/soupe_a_l_oignon_gratinee.jpg?v=1728569373',
                'ingredients' => [
                    '800 g d’oignons',
                    '1 L de bouillon de bœuf',
                    '60 g de beurre',
                    '2 c. à s. de farine',
                    '8 tranches de baguette',
                    '100 g d’emmental râpé',
                    'Sel, poivre, thym'
                ],
                'description' => 'La célèbre soupe réconfortante, gratinée au four avec un fromage doré.',
                'createdAt'   => '2025-04-20 20:15:00',
                'category'    => 'Entrée'
            ],

            4 => [
                'id'          => 4,
                'title'       => 'Tarte Tatin',
                'image'       => 'https://assets.afcdn.com/recipe/20180503/79001_w1024h768c1cx2880cy1920.webp',
                'ingredients' => [
                    '6 pommes Golden',
                    '120 g de beurre',
                    '150 g de sucre',
                    '1 pâte feuilletée'
                ],
                'description' => 'Une tarte renversée caramélisée, incontournable des desserts français.',
                'createdAt'   => '2025-04-18 16:45:00',
                'category'    => 'Dessert'
            ],

            5 => [
                'id'          => 5,
                'title'       => 'Crêpes Suzette',
                'image'       => 'https://truffle-assets.tastemadecontent.net/6ed314ca-vid49032-crepes-suzette-still-l.jpg',
                'ingredients' => [
                    '250 g de farine',
                    '3 œufs',
                    '50 cl de lait',
                    '50 g de beurre fondu',
                    'Zestes et jus de 2 oranges',
                    '40 g de sucre',
                    'Grand Marnier'
                ],
                'description' => 'Des crêpes fines nappées d’une sauce au beurre d’orange flambée au Grand Marnier.',
                'createdAt'   => '2025-03-30 11:25:00',
                'category'    => 'Dessert'
            ],
            6 => [
                'id'          => 6,
                'title'       => 'Salade Niçoise',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRogDd8u1-6ewfzEQIxWobnAj4pfFl0Ezj86A&s',
                'ingredients' => [
                    '200 g de tomates cerises',
                    '1 concombre',
                    '3 œufs durs',
                    '150 g de thon au naturel',
                    '100 g d’olives noires',
                    'Poivron, oignon rouge',
                    'Huile d’olive, vinaigre, basilic'
                ],
                'description' => 'Une salade colorée et équilibrée, originaire de Nice.',
                'createdAt'   => '2025-04-15 12:10:00',
                'category'    => 'Entrée'
            ],

            7 => [
                'id'          => 7,
                'title'       => 'Poulet Basquaise',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXJApmOttUKDd5WFzloECqjFqq4gQ_3aRphg&s',
                'ingredients' => [
                    '4 cuisses de poulet',
                    '2 poivrons rouges',
                    '2 poivrons verts',
                    '4 tomates',
                    '2 oignons, 2 gousses d’ail',
                    'Piment d’Espelette, huile d’olive, vin blanc'
                ],
                'description' => 'Un plat mijoté parfumé au piment d’Espelette, typique du Pays basque.',
                'createdAt'   => '2025-04-10 19:40:00',
                'category'    => 'Plat'
            ],

            8 => [
                'id'          => 8,
                'title'       => 'Mousse au Chocolat',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJiNY4vISE7JRIYOfpcKEgqz2DiqM6uqQy8w&s',
                'ingredients' => [
                    '200 g de chocolat noir',
                    '6 œufs',
                    '1 pincée de sel'
                ],
                'description' => 'La mousse au chocolat légère et aérienne, pour les amateurs de cacao intense.',
                'createdAt'   => '2025-04-05 17:05:00',
                'category'    => 'Dessert'
            ]

        ];

		return $this->render('list-recipes.html.twig', [
			'recipes' => $recipes
		]);
	}

}