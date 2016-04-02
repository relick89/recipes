<?php

use Illuminate\Database\Seeder;
use Recipes\User;
use Recipes\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([ 
        				'title' => 'Pasta al sugo',
        				'description' => "Scaldate in padella l'olio d'oliva, l'aglio e le erbe aromatiche (escluso il basilico). Lasciate ammorbidire l'aglio e aggiungete i pomodori. Mescolateli al condimento.
									Lasciate sobbollire a fuoco lento per 20-30 minuti o finché il sugo non diventa denso. Mescolate di tanto in tanto per evitare che si attacchi.
									Cuocete la pasta al dente in una pentola d'acqua bollente e salata. Scolatela e versate nei piatti. Aggiungete il basilico al sugo e usate la salsa per condire la pasta insieme al parmigiano grattugiato.",
        				'user_id' => 3
        ]);

        Recipe::create([ 
        				'title' => 'Pizza bianca',
        				'description' => "1. Far sciogliere il lievito e lo zucchero in una ciotolina con 200 ml di acqua quindi una volta che questi due ingredienti si sono sciolti versare il liquido in un’altra ciotola con la farina. Accendere il forno per farlo scaldare quindi una volta caldo spegnerlo e chiudere lo sportello.
									2. Impastare tutto con le mani quindi aggiungere l’acqua restante, il sale e infine l’olio. Impastare il tutto usando le mani oppure un’impastatrice da cucina fin quando la pasta non è liscia; coprire la ciotola con uno strofinaccio e metterla in forno caldo lasciandola lievitare per 2 ore.
									3. Trascorso questo tempo, infarinare il tavolo, ungersi le mani e versare l’impasto (ormai triplicato) sullo base. Lavorare l’impasto ripiegandolo spesso su sè stesso quindi dividere la pasta in due panetti, lavorare ancora i due panetti come sopra e alla fine coprirli con uno strofinaccio bagnato lasciandoli stare per almeno 15 minuti.
									4. Passati i 15 minuti ungersi nuovamente le mani e stendere la pasta nelle teglie da pizza unte a loro volta di olio e ricoperte di pangrattato, spargere poco sale grosso sulla superficie e lasciar lievitare per altri 20 minuti.
									5. Cuocere in forno caldissimo a 220° per circa 15 minuti (se ventilato), sfornare, tagliare e mangiare subito o lascia raffreddare!",		
						'user_id' => 2
        ]);

        Recipe::create([ 
        				'title' => 'Merluzzo con patate, olive e pomodorini',
        				'description' => "Disponete i filetti di merluzzo in una terrina, spruzzateli con il succo filtrato del limone, conditeli con una presa di sale, pepe macinato al momento e 2 cucchiai di olio; rigirateli in modo che si insaporiscano bene nel condimento e lasciateli marinare per circa 30 minuti.
									Nel frattempo lavate accuratamente le patate e lessatele al dente in abbondate acqua salata inizialmente fredda per circa 20 minuti dal momento dell’ebollizione; scolatele, sbucciatele e tagliatele a rondelle spesse. Lavate, mondate e asciugate bene i pomodorini.
									Adagiate i filetti di merluzzo in una pirofila, lasciando un po’ di spazio tra l’uno e l’altro, distribuite tutt’intorno le patate, i pomodorini e le olive, regolate di sale e pepe e condite con 2 cucchiai di olio. Scaldate il forno a 200 °C e cuocete il pesce per circa 20-25 minuti, o fino a quando la superficie delle patate sarà ben dorata.
									Sfornate, cospargete con le foglie di basilico tagliate a julienne e servite subito.",				
        				'user_id' => 3
        ]);
		
		Recipe::create([ 
        				'title' => 'Gelato Don Pedro',
        				'description' => "Calcolate due palline di gelato per persona. Mettete il gelato nel blende o frullatore, insieme con il whisky. Fate andare il blender a piccoli impulsi. Il gelato ed il whisky devono mescolarsi, ma dovreste cercare di lasciare qualche grumo di gelato intatto.
									Versate in bicchieri largì e bassi, da whisky (tumbler) e decorate con le noci tritate.",				
        				'user_id' => 2
        ]);

        Recipe::create([
        				'title' => 'Bistecca alla piastra',
        				'description' => "Prima di tutto togliete le bistecche dal frigo almeno 10 minuti prima della cottura: in questo modo la carne perderà l'acqua in eccesso e, messa a contatto con la piastra, non rischierà di raffreddare la temperatura.
									Scaldate la piastra a fiamma viva e, appena percepite un lieve fumo provenire dalla ghisa, mettete le bistecche sul fuoco, lasciandole 3 minuti per lato.
									Aggiustate di sale, aggiungete un filo d'olio extravergine d'oliva e avrete le vostre bistecche alla piastra pronte per essere gustate!",
        				'user_id' => 2
        ]);

        Recipe::create([
        				'title' => 'Insalata lattuga e arancia',
        				'description' => "Lavate la lattuga e asciugatela con cura, meglio se utilizzando una centrifuga o anche con uno strofinaccio. Poi spezzate le foglie. 
									Togliete la scorza, che terrete da parte, e pelate con il pelapatate l'arancia a vivo togliendo quindi la pellicina bianca. Tagliatela a fette sottili eliminando i semi.  
									Poi tritate le noci e le mandorle in pezzi grossi. Unite la panna e il succo di limone in una insalatiera, salate e aggiungete il peperoncino, e le scorza d'arancia tagliate a listarelle, e la frutta secca precedentemente tritata. 
									Versate quindi anche le foglie di insalata e le fette di arancia, mescolando al momento di portare in tavola.",
        				'user_id' => 2
        ]);
    }
}