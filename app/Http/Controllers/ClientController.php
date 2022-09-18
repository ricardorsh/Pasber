<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class ClientController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }
    public function edit($id){
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }
    public function create(){
        return view('client.create');
    }
    public function store(Request $Request){
        if ((int)$Request->typeClient == 0) {
            $Request->validate([
                'type_client' =>['string', 'max:8'],
                'name'=>['required', 'string', 'max:200'],
                'last_name'=>['required', 'string', 'max:200'],
                'client_id'=>['string', 'max:8'],
                'email'=>['string', 'email', 'max:100'],
                'telf'=>['required', 'string', 'max:50'],
                'direction'=>['required', 'string', 'max:100'],
            ]);
            Client::create([
                'type_client' => (int)$Request->typeClient,
                'name' => $Request->name,
                'last_name' => $Request->last_name,
                'personal_identify' => $Request->client_id,
                'email' => $Request->email,
                'telf' => $Request->telf,
                'direction' => $Request->direction,
            ]);
        }elseif((int)$Request->typeClient == 1){
            $Request->validate([
                'legalname'=>['required', 'string', 'max:200'],
                'legalclient_id'=>['required', 'string', 'max:8'],
                'legalemail'=>['string', 'email', 'max:100'],
                'legaltelf'=>['required', 'string', 'max:50'],
                'legaldirection'=>['string', 'max:100'],
            ]);
            Client::create([
                'type_client' => (int)$Request->typeClient,
                'name' => $Request->legalname,
                'personal_identify' => $Request->legalclient_id,
                'email' => $Request->legalemail,
                'telf' => $Request->legaltelf,
                'direction' => $Request->legaldirection,
            ]);
        }
        return view('client.create');
    }
    public function update(Request $Request, $id){
        $client = Client::find($id);
        if ((int)$Request->typeClient == 0) {
            $Request->validate([
                'type_client' =>['string', 'max:8'],
                'name'=>['required', 'string', 'max:200'],
                'last_name'=>['required', 'string', 'max:200'],
                'email'=>['string', 'email', 'max:100'],
                'telf'=>['required', 'string', 'max:50'],
                'direction'=>['required', 'string', 'max:100'],
            ]);
            $client->name = $Request->name;
            $client->last_name = $Request->last_name;
            $client->email = $Request->email;
            $client->telf = $Request->telf;
            $client->direction = $Request->direction;
            $client->save();
        }elseif((int)$Request->typeClient == 1){
            $Request->validate([
                'legalname'=>['required', 'string', 'max:200'],
                'legalemail'=>['string', 'email', 'max:100'],
                'legaltelf'=>['required', 'string', 'max:50'],
                'legaldirection'=>['string', 'max:100'],
            ]);
            $client->name = $Request->legalname;
            $client->email = $Request->legalemail;
            $client->telf = $Request->legaltelf;
            $client->direction = $Request->legaldirection;
            $client->save();
        }
        return to_route('client.index');
    }
    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return to_route('client.index');
    }
}
