<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Van;
use Illuminate\Support\Facades\Session;

class VanController extends Controller
{

    public function index()
    {
        $title = 'Vans';
	    return view('admin.vans.index',compact('title'));
    }


    public function getVans(Request $request)
    {
        $columns = array(
			0 => 'id',
			1 => 'name',
			2 => 'model',
			3 => 'created_at',
			4 => 'action'
		);

		$totalData = Van::count();
		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');

		if(empty($request->input('search.value'))){
			$vans = Van::offset($start)
				->limit($limit)
				->orderBy($order,$dir)
				->get();
			$totalFiltered = Van::count();
		}else{
			$search = $request->input('search.value');
			$vans = Van::where([
				['name', 'like', "%{$search}%"],
			])
				->orWhere('model','like',"%{$search}%")
				->orWhere('created_at','like',"%{$search}%")
				->offset($start)
				->limit($limit)
				->orderBy($order, $dir)
				->get();
			$totalFiltered = Van::where([
				['name', 'like', "%{$search}%"],
			])
				->orWhere('model', 'like', "%{$search}%")
				->orWhere('created_at','like',"%{$search}%")
				->count();
		}


		$data = array();

		if($vans){
			foreach($vans as $r){
				$edit_url = route('vans.edit',$r->id);
				$nestedData['id'] = '<td><div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" name="vans[]" value="'.$r->id.'"></div></td>';
				$nestedData['name'] = $r->name;
				$nestedData['model'] = $r->model;
				if($r->active){
					$nestedData['active'] = '<span class="badge py-3 px-4 fs-7 badge-light-success">Active</span>';
				}else{
					$nestedData['active'] = '<span class="badge py-3 px-4 fs-7 badge-light-danger">Inactive</span>';
				}

				$nestedData['created_at'] = date('d-m-Y',strtotime($r->created_at));
				$nestedData['action'] = '
                                <div>
                                <td>

                                    <a title="Edit Van" class="btn btn-icon btn-sm btn-success"
                                       href="'.$edit_url.'">
                                       <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-danger" onclick="event.preventDefault();del('.$r->id.');" title="Delete Van" href="javascript:void(0)">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                                </div>
                            ';
				$data[] = $nestedData;
			}
		}

		$json_data = array(
			"draw"			=> intval($request->input('draw')),
			"recordsTotal"	=> intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data"			=> $data
		);

		echo json_encode($json_data);
    }


    public function vanDetail()
    {

    }

    public function create()
    {
        $title = 'Add New Van';
	    return view('admin.vans.create',compact('title'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
		    'name' => 'required|max:255',
	    ]);
        $van = Van::create([
            'name'  => $request->name,
            'model' => $request->model,
        ]);
        Session::flash('success_message', 'Great! Van has been saved successfully!');
	    return redirect()->route('vans.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = 'Edit Van';
        $van = Van::find($id);
	    return view('admin.vans.edit',compact('title','van'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
		    'name' => 'required|max:255',
	    ]);
        $van = Van::where('id',$id)->update([
            'name'  => $request->name,
            'model' => $request->model,
        ]);
        Session::flash('success_message', 'Great! Van has been saved successfully!');
	    return redirect()->route('vans.index');
    }

    public function destroy($id)
    {
	    $van = Van::find($id);
	    if($van){
		    $van->delete();
		    Session::flash('success_message', 'Van successfully deleted!');
	    }
	    return redirect()->route('vans.index');

    }
	public function deleteSelectedVans(Request $request)
	{
		$input = $request->all();
		$this->validate($request, [
			'vans' => 'required',

		]);
		foreach ($input['vans'] as $index => $id) {
			$van = Van::find($id);
            $van->delete();
		}
		Session::flash('success_message', 'Van successfully deleted!');
		return redirect()->back();

	}
}
