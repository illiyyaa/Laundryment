<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
class Queue extends Model
{
	
	protected $table = 'queues';
	public $fillable = ['name', 'is_done'];	
//  	public $timestamps = false;
//  	public function toggleStatus(){
//  	$this->status = ! $this->status;
//  	return $this;
//  	}
// 

}