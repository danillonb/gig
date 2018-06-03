<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembroRequest;
use App\Membro;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MembrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::paginate(10);
        $listaMembros = Membro::all();

        return view('membros.indexMembros', compact('listaMembros'));
    }

    public function listaMembros()
    {
        return view('membros.listaMembros');
    }

    /**
     * @param MembroRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function cadastrarMembro(MembroRequest $request)
    {

        $dtaNascimento = str_replace("/", "-", $request->dtaNascimento);
        $dtaNascimentoSql = date('Y-m-d', strtotime($dtaNascimento));

        if ($request->dtaBatismoAguas != null) {
            $dtaBatismoAguas = str_replace("/", "-", $request->dtaBatismoAguas);
            $dtaBatismoAguasSql = date('Y-m-d', strtotime($dtaBatismoAguas));
        }else{
            $dtaBatismoAguasSql = $request->dtaBatismoAguas;
        }
        if ($request->dtaBatismoEs != null) {
            $dtaBatismoEs = str_replace("/", "-", $request->dtaBatismoEs);
            $dtaBatismoEsSql = date('Y-m-d', strtotime($dtaBatismoEs));
        }else{
            $dtaBatismoEsSql = $request->dtaBatismoEs;
        }
        if ($request->dtaDesligamento != null) {
            $dtaDesligamento = str_replace("/", "-", $request->dtaDesligamento);
            $dtaDesligamentoSql = date('Y-m-d', strtotime($dtaDesligamento));
        }else{
            $dtaDesligamentoSql = $request->dtaDesligamento;
        }

        $membroCriado = Membro::create([
            'nome' => $request->nome,
            'pai' => $request->pai,
            'mae' => $request->mae,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'uf' => $request->uf,
            'tel1' => $request->tel1,
            'tel2' => $request->tel2,
            'cel' => $request->cel,
            'email' => $request->email,
            'dtaNascimento' => $dtaNascimentoSql,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'orgaoExp' => $request->orgaoExp,
            'igreja' => $request->igreja,
            'dtaDesligamento' => $dtaDesligamentoSql,
            'motivoDesligamento' => $request->motivoDesligamento,
            'dtaBatismoAguas' => $dtaBatismoAguasSql,
            'dtaBatismoEs' => $dtaBatismoEsSql,
            'procedencia' => $request->procedencia,
            'funcaoEclesiastica' => $request->funcaoEclesiastica,
            'funcaoMinisterial' => $request->funcaoMinisterial,
            'tipoSanguineo' => $request->tipoSanguineo,
            'fatorRh' => $request->fatorRh,
            'naturalidade' => $request->naturalidade,
            'nacionalidade' => $request->nacionalidade,
            'estadoCivil' => $request->estadoCivil,
            'etinia' => $request->etinia,
            'profissao' => $request->profissao,
            'departamento' => $request->departamento,
            'destino' => $request->destino,
            'sexo' => $request->sexo,
            'obs' => $request->obs,
            'status' => $request->status
        ]);

        if ($request->foto != null) {
            $fotoId = Storage::disk('img_profile')->putFile('',$request->foto);

            $membro = Membro::find($membroCriado->id);
            $membro->update([
                'fotoId' => $fotoId
            ]);


            Session::flash('message', 'Membro cadastrado com sucesso!');

            return redirect(route('Membros'));

        } else {

            Session::flash('message', 'Membro cadastrado com sucesso!');

            return redirect(route('Membros'));

        }

    }

    public function atualizarMembro(MembroRequest $request)
    {

        $dtaNascimento = str_replace("/", "-", $request->dtaNascimento);
        $dtaNascimentoSql = date('Y-m-d', strtotime($dtaNascimento));

        if ($request->dtaBatismoAguas != null) {
            $dtaBatismoAguas = str_replace("/", "-", $request->dtaBatismoAguas);
            $dtaBatismoAguasSql = date('Y-m-d', strtotime($dtaBatismoAguas));
        }else{
            $dtaBatismoAguasSql = $request->dtaBatismoAguas;
        }
        if ($request->dtaBatismoEs != null) {
            $dtaBatismoEs = str_replace("/", "-", $request->dtaBatismoEs);
            $dtaBatismoEsSql = date('Y-m-d', strtotime($dtaBatismoEs));
        }else{
            $dtaBatismoEsSql = $request->dtaBatismoEs;
        }
        if ($request->dtaDesligamento != null) {
            $dtaDesligamento = str_replace("/", "-", $request->dtaDesligamento);
            $dtaDesligamentoSql = date('Y-m-d', strtotime($dtaDesligamento));
        }else{
            $dtaDesligamentoSql = $request->dtaDesligamento;
        }
        $oldFotoId = Membro::find($request->id);
        Membro::find($request->id)->update([
            'nome' => $request->nome,
            'pai' => $request->pai,
            'mae' => $request->mae,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'uf' => $request->uf,
            'tel1' => $request->tel1,
            'tel2' => $request->tel2,
            'cel' => $request->cel,
            'email' => $request->email,
            'dtaNascimento' => $dtaNascimentoSql,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'orgaoExp' => $request->orgaoExp,
            'igreja' => $request->igreja,
            'dtaDesligamento' => $dtaDesligamentoSql,
            'motivoDesligamento' => $request->motivoDesligamento,
            'dtaBatismoAguas' => $dtaBatismoAguasSql,
            'dtaBatismoEs' => $dtaBatismoEsSql,
            'procedencia' => $request->procedencia,
            'funcaoEclesiastica' => $request->funcaoEclesiastica,
            'funcaoMinisterial' => $request->funcaoMinisterial,
            'tipoSanguineo' => $request->tipoSanguineo,
            'fatorRh' => $request->fatorRh,
            'naturalidade' => $request->naturalidade,
            'nacionalidade' => $request->nacionalidade,
            'estadoCivil' => $request->estadoCivil,
            'etinia' => $request->etinia,
            'profissao' => $request->profissao,
            'departamento' => $request->departamento,
            'destino' => $request->destino,
            'sexo' => $request->sexo,
            'obs' => $request->obs,
            'status' => $request->status
        ]);

        if ($request->foto != null) {

            Storage::disk('img_profile')->delete('', $oldFotoId['fotoId']);
            $fotoId = Storage::disk('img_profile')->putFile('',$request->foto);

            $membro = Membro::find($request->id);
            $membro->update([
                'fotoId' => $fotoId
            ]);


            Session::flash('message', 'Membro atualizado com sucesso!');

            return redirect(route('Membros'));

        } else {

            Session::flash('message', 'Membro atualizado com sucesso!');

            return redirect(route('Membros'));

        }

    }
}
