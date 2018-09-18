<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Repositories\ItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Item;
use Auth;

class ItemController extends AppBaseController
{
    /** @var  ItemRepository */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itemRepository->pushCriteria(new RequestCriteria($request));
        $items = Item::sortable()->paginate(10);

        return view('items.index')
            ->with('items', $items);
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItemRequest $request
     *
     * @return Response
     */
    public function store(CreateItemRequest $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'
        ]);
        $input = $request->all();

        if ($request->file('image')) {
            $image = $request->file('image');
            $input['image'] = $image->getClientOriginalName();
        }

        $item = $this->itemRepository->create($input);

        if ($item) {
            if ($request->file('image')) {
                $destinationPath = public_path('/images/items/' . $item->id . '/');
                $image->move($destinationPath, $input['image']);
            }
        }

        Flash::success('Item saved successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Display the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        if (Auth::check() && Auth::user()->role_id == 1) {
            return view('items.show', compact('item'));
        } else {
            return view('items.show_frontend', compact('item'));
        }
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('items.edit')->with('item', $item);
    }

    /**
     * Update the specified Item in storage.
     *
     * @param  int              $id
     * @param UpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemRequest $request)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'
        ]);
        $input = $request->all();

        if ($request->file('image')) {
            $image = $request->file('image');
            $input['image'] = $image->getClientOriginalName();
        }

        $item = $this->itemRepository->update($input, $id);

        if ($item) {
            if ($request->file('image')) {
                $destinationPath = public_path('images/items/' . $item->id . '/');
                $image->move($destinationPath, $input['image']);
            }
        }

        Flash::success('Item updated successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success('Item deleted successfully.');

        return redirect(route('items.index'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        if (filled($q)) {
            $items = Item::where('name', 'LIKE', '%' . $q . '%')
                ->orWhere('price', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);
            Flash::success('Search results  "' . $q . '"');
        } else {
            $items = Item::sortable()->paginate(10);
        }

        return view('items.index', compact('items', 'q'));
    }
}
