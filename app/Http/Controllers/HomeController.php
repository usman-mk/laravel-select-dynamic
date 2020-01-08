<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_json(Request $request)
    {
        $data = '{
            "1":{
                "2019":[5.55,6.00,6.45,7.15],
                "2014":[9.45,9.55,9.65],
                "2011":[10.80,10.90,11.00],
                "2009":[12.45,12.55,12.65],
                "2008":[14.35,14.45,14.55],
                "2007":[14.45,14.55],
                "2006":[14.55,14.75],
                "2005":[18.65]
            },
            "2":{
                "2019":[6.05,6.50,6.95,7.65],
                "2014":[9.45,9.55,9.65],
                "2011":[10.80,10.90,11.00],
                "2009":[12.60,12.70,12.80],
                "2008":[14.50,14.60,14.70],
                "2007":[14.60,14.70],
                "2006":[14.70,14.90],
                "2005":[19.00]
            }
        }';

        $json_data = json_decode($data);
        // dd($json_data);
        $type = $request->type;
        $year = $request->year;
        switch ($request->action) {
            case 'type':
                echo "<option value='0'>- เลือกปี -</option>";
                foreach ($json_data->$type as $year => $value) {
                    echo "<option value='$year' >$year</option>" ;
                }
                break;
            case 'year':
                foreach ($json_data->$type->$year as $value) {
                    echo "<option value='$value' >$value</option>" ;
                }
                break;

            default:
                # code...
                break;
        }
    }
}
