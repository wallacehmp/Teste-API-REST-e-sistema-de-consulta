<?php
namespace App\Http\Controllers;
use App\Sintegra;
use Illuminate\Support\Facades\Input;

class SintegraController extends Controller
{
    protected $sintegra = null;
    protected $fillable = ['id','idusuario','cnpj','resultado_json'];
    
    private function curlSintegra($cnpj)
    {
        $ch = curl_init();        
        curl_setopt($ch, CURLOPT_URL, 'http://www.sintegra.es.gov.br');        
        curl_setopt ($ch, CURLOPT_POST, 1);        
        curl_setopt ($ch, CURLOPT_POSTFIELDS, 'num_cnpj='.$cnpj);        
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);        
        $result = curl_exec ($ch);         
        curl_close ($ch);
        
        return $result;
    }
    
    public function __construct(Sintegra $sintegra) 
    {
        $this->sintegra = $sintegra;
    }
    
    public function getCNPJ($cnpj) 
    {
        $result = $this->curlSintegra($cnpj);
        
        return Response::json($result);
    }
    
    public function saveDados() 
    {
        $input = Input::all();
		dd($input);
		$sintegra = new Sintegra();
		$sintegra->fill($input);
		$sintegra->save();
		return $sintegra;
    }
    
    public function getListaConsultas() 
    {
        return $this->sintegra->allSintegra();
    }
    
    public function deleteRegistros($id) 
    {
        $sintegra = $this->sintegra->deleteSintegra($id);
        
        if(!$sintegra)
        {
            return Response::json(['response' => 'Item não encontrado!'], 400);
        }
        
        return Response::json(['response' => 'Item removido com sucesso!'], 200);
    }
}
