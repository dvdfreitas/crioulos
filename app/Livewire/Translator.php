<?php

namespace App\Livewire;

use App\Models\Sentence;
use App\Models\Translation;
use App\Models\Word;
use Livewire\Component;
use Livewire\WithPagination;

class Translator extends Component
{
    public $sourceLanguage;
    public $targetLanguage;
    public $text;
    public $translations;
    public $sentences;

    public function render()
    {
        return view('livewire.translator');
    }

    public function translate()
    {
        $this->sourceLanguage = 1;
        $this->targetLanguage = 2;

        $this->translations = null;
        $this->sentences = null;

        $word = Word::where('text', $this->text)
            ->where('language_code_id', $this->sourceLanguage)
            ->first();

        if ($word) {
            $this->translations = Translation::where('source_id', $word->id)
                ->with('target')
                ->get();

            if ($this->translations) {

                $wordToSearch = $this->translations->first()->target->text;

                # HLD1.0                                
                $this->sentences = Sentence::where('language_code_id', $this->targetLanguage)
                    ->where(function ($query) use ($wordToSearch) {
                        $query->where("text", "regexp", "(^| )" . preg_quote($wordToSearch, '/') . ".*( |$)");
                    })
                    ->limit(5)
                    ->get();

                $this->highlightTranslatedWord();
            }
        }
    }

    public function highlightTranslatedWord()
    {
        if ($this->sentences && $wordToSearch = $this->translations->first()->target->text) {

            foreach ($this->sentences as $sentence) {
                
                $highlightedWordSentence = preg_replace(
                    "/\b(" . preg_quote($wordToSearch, '/') . ")\b/i",
                    "<span class='text-amber-700'>$1</span>",
                    $sentence->text
                );

                $sentence->text = $highlightedWordSentence;
            }
        }
    }
}
