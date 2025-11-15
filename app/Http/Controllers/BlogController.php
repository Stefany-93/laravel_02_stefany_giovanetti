<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getArticles()
    {
        return [
            ['id' => 1, 'name' => 'Articolo 1', 'description' => 'Come nasce questo mondo', 'img' => asset('media/onsen.png'), 'articolo' => '🌿 Come nasce Cappyblog: il diario digitale dei capibara
            Tutto è iniziato con un sorriso. Non il nostro, ma quello di un capibara. Quell’espressione serena, quasi filosofica, ha acceso una scintilla: perché non dedicare uno spazio online a queste creature straordinariamente tranquille?
            🐹 L’ispirazione: un animale fuori dal comune
            Il capibara non è solo il roditore più grande del mondo, è anche un simbolo di calma, convivenza e gentilezza. Vive in armonia con altri animali, ama l’acqua, e sembra sempre in pace con sé stesso. In un mondo frenetico, il capibara è un promemoria vivente di come si può esistere con grazia.
            💡 L’idea: un blog che racconta, esplora e ispira
            Cappyblog nasce dal desiderio di condividere questa filosofia capibaresca. Non è solo un blog naturalistico: è un luogo dove si raccontano curiosità, si esplorano habitat, si celebrano incontri ravvicinati e si riflette sullo stile di vita slow. Ogni articolo è pensato per informare, divertire e far sorridere — proprio come farebbe un capibara.'],
            ['id' => 2, 'name' => 'Articolo 2', 'description' => 'Tutto sui capibara', 'img' => asset('media/baby.png'), 'articolo' => '🐾 Capibara: i giganti gentili del mondo animale
            Nel vasto panorama della fauna sudamericana, c’è un animale che conquista tutti con la sua calma disarmante e il suo aspetto bonario: il capibara. Considerato il roditore più grande del mondo, questo curioso mammifero semi-acquatico è diventato negli ultimi anni una vera star del web e un simbolo di serenità.
            Con un corpo tozzo e robusto, zampe corte e piedi palmati, il capibara può raggiungere i 60 cm di altezza e pesare fino a 65 kg. Il suo pelo è ruvido, di colore marrone chiaro o rossiccio, e non ha coda. Il muso è largo e piatto, con occhi e narici posizionati in alto per facilitare la respirazione mentre è immerso.
            Erbivori convinti, si nutrono di erba, piante acquatiche, frutta e cortecce. Come altri roditori, praticano la coprofagia, ovvero ingeriscono le proprie feci per assorbire meglio i nutrienti. Sono attivi soprattutto all’alba e al tramonto, mentre durante il giorno preferiscono riposare all’ombra o nell’acqua.
            Le femmine partoriscono da 2 a 8 cuccioli per volta, che nascono già in grado di camminare e nuotare. Incredibilmente, i piccoli vengono allattati anche da altre femmine del gruppo, in un sistema cooperativo che rafforza i legami sociali.
            Negli ultimi anni, il capibara ha conquistato il mondo grazie alla sua indole pacifica e alla capacità di convivere con altre specie — gatti, anatre, scimmie e persino tartarughe. In Giappone, è protagonista di spa e onsen dove si rilassa davvero nell’acqua calda, diventando un’icona del relax.
            Il capibara ci insegna che la forza può essere silenziosa, che la calma è contagiosa e che la convivenza è possibile. In un mondo frenetico, il suo passo lento e il suo sguardo placido ci invitano a rallentare… e a respirare.']
        ];
    }

    public function articoli(){
        return view('articoli', ['articles' => $this->getArticles()]);
    }

    public function dettaglio($id){
        foreach($this->getArticles() as $article){
            if($id == $article['id']){
                return view('articoli/articleDetail', ['article' => $article]);
            }
        }

        abort(404);

    }
}
