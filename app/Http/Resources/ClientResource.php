<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"                    => $this->id,
            "user_id"               => $this->user_id,
            "societe_id"            => $this->societe_id,
            "Client_Nom"            => $this->Client_Nom,
            "Client_Prenom"         => $this->Client_Prenom,
            "Client_Ville"          => $this->Client_Ville,
            "Client_Code_Postal"    => $this->Client_Code_Postal,
            "Client_Pays"           => $this->Client_Pays,
            "Client_Fonction"       => $this->Client_Fonction,
            "Client_SiteInternet"   => $this->Client_SiteInternet,
            "Client_Note"           => $this->Client_Note,

            "Adresses"              => AdressResource::collection($this->adresses),
            "Phones"                => PhoneNumberResource::collection($this->nums),
            "keywords"              => MotCleResource::collection($this->mot_cles)

        ];
    }
}
