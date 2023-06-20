<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;
use App\Http\Resources\StartupResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;





class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Startup::with('user')->with('category')->paginate(4);

        return response()->json(['status' => '200', 'data' =>$data], 200);

    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'website' => 'required|url',
            'email' => 'required|email',
            'Startup_Description_Short'=>'required|string',
            'location' => 'required',
            'Overview_desc' => 'required',
            'NB_customers' => 'required|integer',
            'date_launch' => 'required|string',
            'Businessmodel_pricing' => 'required|string',
            'Competitors' => 'required',
            'target_customer' => 'required',
            'assets' => 'required',
            'Tech_Stack' => 'required',
            'ARR' => 'required',
            'Expenses' => 'required',
            'price' => 'required',
            'categorie_id' => 'required',
            'user_id' => 'required',
            'Revenue_Metrics' => 'required|string',
            'Traffic_Metrics' => 'required|string',
            'Revenue_Metrics_blur' => 'required|string',
            'Traffic_Metrics_blur' => 'required|string',


        ]);


   

        Startup::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'Startup_Description_Short' => $request->Startup_Description_Short,
            'location' => $request->location,
            'Overview_desc' => $request->Overview_desc,
            'NB_customers' => $request->NB_customers,
            'date_launch' => $request->date_launch,
            'Businessmodel_pricing' => $request->Businessmodel_pricing, // Updated column name
            'Competitors' => $request->Competitors,
            'target_customer' => $request->target_customer,
            'assets' => $request->assets,
            'Tech_Stack' => $request->Tech_Stack,
            'ARR' => $request->ARR,
            'Expenses' => $request->Expenses,
            'user_id' => $request->user_id,
            'categorie_id' => $request->categorie_id,
            'price' => $request->price,
            'Video' => $request->Video,
            'Revenue_Metrics' => $request->Revenue_Metrics,
            'Traffic_Metrics' => $request->Traffic_Metrics,
            'Revenue_Metrics_blur' => $request->Revenue_Metrics_blur,
            'Traffic_Metrics_blur' => $request->Traffic_Metrics_blur ,
        ]);
    

        return response()->json(['status' => '200', 'message' => 'Startup Added With Successfully']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $startup = Startup::with('category')->with('user')->findOrFail($id);
        
        $dateString = $startup->created_at ;
         $date = Carbon::parse($dateString);
        $formattedDate = $date->format('d M,Y');
         
        return response()->json(['data'=>$startup,'PublishDate'=>$formattedDate]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Startup $startup ,Request $request)
    {

        if (!$startup) {
            return response()->json(['error' => 'Startup not found'], 404);
        }
        $startup = Startup::find($request->id);
        $startup->update($request->all());
   

        return response()->json(['message' => 'Startup state edit successfully', 'data' => $startup]);


    }






    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        $startup = Startup::findOrfail($request->id);

        if (!$startup) {
            return response()->json(['error' => 'Startup not found'], 404);
        }
    
        // $newState = $startup->state === 'active' ? 'inactive' : 'active';
        $startup->status = $request->status;
        $startup->save();
    
        return response()->json(['message' => 'Startup state updated successfully', 'data' => $startup]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {  
        $startup = Startup::find($id);

        $startup->delete();

        return response()->json(['message'=>'Startup has been deleted successfully']);
    }
    //  Function for Archive Or Accept the startup
      public function Update_statu(Request $request,$id){
          
        $startup = Startup::find($id);
         
        $startup->status = $request->status;
        $startup->save();



            
                
            
        return response()->json(['message' => 'Startup Statu has been Updated']);
            

      }

    public function getStartup_for_card(Request $request)
    {
        $startups = Startup::with('category')
        ->with('user')
        ->where('status','=','1')
        ->paginate(6);

        return StartupResource::collection($startups);


    }

static public function getMarkStartup(){
    try {
        $startup = Startup::where('mark','1')->firstOrFail();
        // The startup was found, perform further operations
        $startupName = $startup->name;
        return $startup;
        // ...
    } catch (ModelNotFoundException $e) {
        $randomStartup = Startup::inRandomOrder()->first();
        return $randomStartup;
    }
    
}



   static public function switchMark($id)
    {
        $startup = Startup::find($id);
        if (!$startup) {
            return response()->json(['message' => 'Startup not found'], 404);
        }
    
     
        $startup->mark = '0';

        // Save the changes
        $startup->save();

    
        return response()->json(['message'=>'Startup state edited successfully', 'data' => $startup]);
    }
}
