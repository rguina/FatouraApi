<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FactureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $htArray = [];
        $ttcArray = [];

        foreach ($this->articles as $article) {
            array_push($htArray, $article->total_ht);
            array_push($ttcArray, $article->total_ttc);
        }

        return [
            "Facture_id"        => $this->id,
            "Facture_uid"       => $this->uid,
            "User_id"           =>  $this->user_id,
            "Statut_id"         => $this->status_id,
            "Total_ht"          => array_sum($htArray),
            "Total_ttc"         => array_sum($ttcArray),
            "Articles"           => ArticleResource::collection($this->articles),
            "Keywords"          => MotCleResource::collection($this->mot_cles),
            "Reglement"         => new ReglementResource($this->reglements),
            "Text_Document"     => new TextDocumentResource($this->textDocument),
        ];
    }
}
