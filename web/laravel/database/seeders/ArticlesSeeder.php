<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;


class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérification et création du lien symbolique pour le stockage
        if (!file_exists(public_path('storage'))) {
            $this->command->warn('Création du lien symbolique vers le stockage...');
            Artisan::call('storage:link');
            $this->command->info('Lien symbolique créé avec succès.');
        }

        // Assurez-vous que le dossier public/images existe
        Storage::disk('public')->makeDirectory('images');

        // Données des articles
        $articles = [
            [
                'id' => 1,
                'titre' => 'Casque M1',
                'description' => 'Casque utilisé par les forces américaines durant la Seconde Guerre mondiale.',
                'descriptionLongue' => 'Le casque M1 a été introduit en 1941, conçu pour remplacer les précédents casques en métal utilisés par l’armée américaine.',
                'prix' => 120,
                'quantiteDispo' => 10,
                'categorie_id' => 1,
                'image_id' => 1
            ],
            [
                'id' => 2,
                'titre' => 'Enigma',
                'description' => 'Machine de cryptage utilisée par les Allemands.',
                'descriptionLongue' => 'La machine Enigma a été conçue dans les années 1920 par l’ingénieur allemand Arthur Scherbius pour sécuriser les communications militaires et diplomatiques.',
                'prix' => 500000,
                'quantiteDispo' => 5,
                'categorie_id' => 4,
                'image_id' => 2
            ],
            [
                'id' => 3,
                'titre' => 'Panzer IV',
                'description' => 'Char de combat allemand, modèle très utilisé sur le front.',
                'descriptionLongue' => 'Le Panzer IV, introduit en 1937, fut l’un des principaux chars de combat de l’armée allemande pendant la Seconde Guerre mondiale.',
                'prix' => 300000,
                'quantiteDispo' => 2,
                'categorie_id' => 3,
                'image_id' => 3
            ],
            [
                'id' => 4,
                'titre' => 'Grenade Manche',
                'description' => 'Grenade à main utilisée par les soldats allemands.',
                'descriptionLongue' => 'La grenade à main allemande, surnommée “Stielhandgranate”, fut l’une des armes de base les plus redoutées par les soldats alliés pendant la Seconde Guerre mondiale.',
                'prix' => 25,
                'quantiteDispo' => 15,
                'categorie_id' => 7,
                'image_id' => 4
            ],
            [
                'id' => 5,
                'titre' => 'Grenade Mk 2',
                'description' => 'Grenade standard des forces américaines.',
                'descriptionLongue' => 'La grenade Mk 2, surnommée “pineapple” en raison de sa forme, fut utilisée par les forces américaines pendant la Seconde Guerre mondiale.',
                'prix' => 30,
                'quantiteDispo' => 20,
                'categorie_id' => 6,
                'image_id' => 5
            ],
            [
                'id' => 7,
                'titre' => 'Masque à Gaz',
                'description' => 'Masque utilisé pour protéger contre les gaz toxiques.',
                'descriptionLongue' => 'Le masque à gaz a été une pièce essentielle du matériel militaire pendant la Première et la Seconde Guerre mondiale, offrant une protection contre les attaques chimiques.',
                'prix' => 80,
                'quantiteDispo' => 12,
                'categorie_id' => 4,
                'image_id' => 7
            ],
            [
                'id' => 10,
                'titre' => 'Tank Panzer',
                'description' => 'Tank de la Wehrmacht, célèbre pour sa robustesse.',
                'descriptionLongue' => 'Le char Panzer fut l’une des pierres angulaires de la Wehrmacht, l’armée allemande, durant la Seconde Guerre mondiale.',
                'prix' => 250000,
                'quantiteDispo' => 1,
                'categorie_id' => 3,
                'image_id' => 10
            ],
            [
                'id' => 11,
                'titre' => 'Thompson 1928',
                'description' => 'Mitraillette américaine de la Seconde Guerre mondiale.',
                'descriptionLongue' => 'La mitraillette Thompson 1928, également surnommée “Tommy Gun”, est l’un des fusils d’assaut les plus célèbres utilisés pendant la Seconde Guerre mondiale.',
                'prix' => 75000,
                'quantiteDispo' => 3,
                'categorie_id' => 2,
                'image_id' => 11
            ],
            [
                'id' => 12,
                'titre' => 'Voiture d\'Adolf Hitler',
                'description' => 'Voiture officielle d\’Adolf Hitler.',
                'descriptionLongue' => 'La voiture personnelle d’Adolf Hitler, un modèle très exclusif conçu spécialement pour ses déplacements, était un symbole du pouvoir nazi.',
                'prix' => 6000000,
                'quantiteDispo' => 1,
                'categorie_id' => 3,
                'image_id' => 12
            ],
        ];
        

        // Insérer les articles dans la base de données
        DB::table('article')->insert($articles);
    }
}

