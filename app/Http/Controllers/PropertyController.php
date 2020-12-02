<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Property;
use App\Models\Booking;
use App\Models\Amenity;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function showAddForm()
    {
        return view('add-properties');
    }

    public function deleteProperty($id=null)
    {
        Property::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Product has been deleted successfully!');
    }

    public function viewProperties()
    {
        $seller_id =  auth()->user()->id;
        $properties = Property::where('seller_id',$seller_id)->get();
        $properties = json_decode(json_encode($properties));
        // echo "<pre>"; print_r($properties); die;
        return view('view-properties')->with(compact('properties'));
    }

    public function addProperties(Request $request)
    {
        $seller_id =  auth()->user()->id;
        // $image = $request['image'];
        $image = $request->file('image');
        $imagename = NULL;
        //  = $request['image'];
        // $image->move('images',$imagename);
        if($image) {
            $imagename=$image->getClientOriginalName();
            $image->move('images',$imagename);
        }
        $properties = Property::create([
            'seller_id' => $seller_id,
            'carpet_area' => $request['carpet_area'],
            'price' => $request['price'],
            'sale_rent' => $request['sale_rent'],
            'category' => $request['category'],
            'deposit' => $request['deposit'],
            'city' => $request['city'],
            'area' => $request['area'],
            'address' => $request['address'],
            'image' => $imagename
        ]);

        $property_id = DB::table('properties')->get()->last()->id;
        // Property::last()->pluck('id');

        $amenities = Amenity::create([
            'property_id' => $property_id,
            'parking' => $request['parking'],
            'security_services' => $request['security_services'],
            'water_supply' => $request['water_supply'],
            'power_backup' => $request['power_backup'],
            'daily_maintenance' => $request['daily_maintenance'],
            'wifi' => $request['wifi'],
            'jogging_track' => $request['jogging_track'],
            'lawn' => $request['lawn'],
            'clubhouse' => $request['clubhouse'],
            'pool' => $request['pool'],
            'gym' => $request['gym'],
            'party_hall' => $request['party_hall'],
            'temple' => $request['temple'],
            'school' => $request['school'],
            'hospital' => $request['hospital'],
            'station' => $request['station'],
            'airport' => $request['airport'],
            'cinema_hall' => $request['cinema_hall'],
            'restaurants' => $request['restaurants'],
        ]);
        return redirect()->intended('admin/');
    }

    public function editProperties(Request $request, $id=null)
    {
        if($request->isMethod('POST')){
            $image = $request->file('image');
            $imagename = NULL;
            //  = $request['image'];
            // $image->move('images',$imagename);
            if($image) {
                $imagename=$image->getClientOriginalName();
                $image->move('images',$imagename);
            }
            
            Property::where('id',$id)->update([
                'carpet_area' => $request['carpet_area'],
                'price' => $request['price'],
                'sale_rent' => $request['sale_rent'],
                'category' => $request['category'],
                'deposit' => $request['deposit'],
                'city' => $request['city'],
                'area' => $request['area'],
                'address' => $request['address'],
                'image' => $imagename,
            ]);

            Amenity::where('property_id',$id)->update([
                'parking' => $request['parking'],
                'security_services' => $request['security_services'],
                'water_supply' => $request['water_supply'],
                'power_backup' => $request['power_backup'],
                'daily_maintenance' => $request['daily_maintenance'],
                'wifi' => $request['wifi'],
                'jogging_track' => $request['jogging_track'],
                'lawn' => $request['lawn'],
                'clubhouse' => $request['clubhouse'],
                'pool' => $request['pool'],
                'gym' => $request['gym'],
                'party_hall' => $request['party_hall'],
                'temple' => $request['temple'],
                'school' => $request['school'],
                'hospital' => $request['hospital'],
                'station' => $request['station'],
                'airport' => $request['airport'],
                'cinema_hall' => $request['cinema_hall'],
                'restaurants' => $request['restaurants'],
            ]);
            return redirect()->intended('/admin');
        }
        
        $property_id = $id; 
        $property_details = Property::where('id',$property_id)->get();
        $amenity_details = Amenity::where('property_id',$property_id)->get();
        $property_id = json_decode(json_encode($property_id));
        $property_details = json_decode(json_encode($property_details));
        $amenity_details = json_decode(json_encode($amenity_details));
        $amenity_details = $amenity_details[0];
        // echo "<pre>"; print_r($amenity_details[0]); die;
        return view('edit-properties')->with(compact('property_id','property_details','amenity_details'));
    }
}
