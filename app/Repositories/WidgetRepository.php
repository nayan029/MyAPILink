<?php

namespace App\Repositories;

use App\Http\Traits\ImageUploadTrait;
use App\Interfaces\WidgetRepositoryInterface;
use App\Models\Widget;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class WidgetRepository implements WidgetRepositoryInterface
{
    use ImageUploadTrait;

    public function storeWidget(Request $request)
    {
        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'widgets');
        }
        $data = $request->all();
        $data['image'] = $image;
        return Widget::create($data);
    }

    public function updateWidget(Request $request, $id)
    {
        $data = $request->all();

        $image = "";
        $widget = $this->getSingleWidget($id);
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'widgets');
        } else {
            $image = $widget->image;
        }
        $data['image'] = $image;
        $widget->update($data);
        return $widget;
    }

    public function deleteWidget($id)
    {
        $widget = $this->getSingleWidget($id);

        if (File::exists($widget->image)) {
            unlink("" . $widget->image);
        }
        $widget->delete();
        return $widget;
    }

    public function getSingleWidget($id)
    {
        return Widget::findorfail($id);
    }

    public function getWidgetdata(Request $request)
    {

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'widgets.title',
            1 => 'widgets.slug',
            2 => 'widgets.image',
            3 => 'widgets.description',

        );

        $query = Widget::select('*');
        $recordstotal = $query->count();
        $sortColumnName = $sortcolumns[$order[0]['column']];

        $query->orderBy($sortColumnName, $order[0]['dir'])
            ->take($length)
            ->skip($start);

        $json = array(
            'draw' => $draw,
            'recordsTotal' => $recordstotal,
            'recordsFiltered' => $recordstotal,
            'data' => [],
        );

        $widgets = $query->orderBy('created_at', 'desc')->get();
        foreach ($widgets as $widget) {
            $url = route("widget.show", $widget->id);
            $nameAction = "<a href='" . $url . "'>" . $widget->title . "</a>";
            $slugCon = str_replace('_', ' ', ucwords($widget->slug, '_'));
            $slug = "<a href='" . $url . "'>" . $slugCon . "</a>";
            $Image = "<img src='" . url($widget->image) . "' height='50px' width='50px'>";
            $json['data'][] = [
                $nameAction,
                $slug,
                $Image,
                $widget->description,
            ];
        }
        return $json;
    }
}
