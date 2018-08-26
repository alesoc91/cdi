<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

    protected $table = 'appointments';

    protected $date;
    protected $collaborator_service_id;
    protected $validated;
    protected $note;

    /**
     * @return mixed
     */
    public function getDate(): date {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCollaboratorServiceId(): int {
        return $this->collaborator_service_id;
    }

    /**
     * @param mixed $collaborator_service_id
     */
    public function setCollaboratorServiceId($collaborator_service_id): void {
        $this->collaborator_service_id = $collaborator_service_id;
    }

    /**
     * @return mixed
     */
    public function getValidated(): boolean  {
        return $this->validated;
    }

    /**
     * @param mixed $validated
     */
    public function setValidated($validated): void {
        $this->validated = $validated;
    }

    /**
     * @return mixed
     */
    public function getNote(): string {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void {
        $this->note = $note;
    }




    // TODO: da controllare che sia corretto
    public function collaboratorServiceId(){
        return $this->belongsTo('App\CollaboratorService');
    }
}
