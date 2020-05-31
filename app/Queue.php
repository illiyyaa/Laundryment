<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
class Queue extends Model
{
 	public $timestamps = false;
 	public function toggleStatus(){
 	$this->status = ! $this->status;
 	return $this;
 	}
}