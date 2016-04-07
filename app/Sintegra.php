<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Sintegra extends Model
{
    public function allSintegra()
    {
        return self::all();
    }
    
    public function deleteSintegra($id)
    {
        $sintegra = self::find($id);
        if(isNull($sintegra))
        {
            return FALSE;
        }
        
        return $sintegra->delete();
    }
}
