<?php 

namespace App\Interfaces;

use Illuminate\Http\Request;

interface WidgetRepositoryInterface
{
    public function getWidgetdata(Request $request);
    
    public function storeWidget(Request $request);

    public function getSingleWidget($id);

    public function updateWidget(Request $request, $id);

    public function deleteWidget($id);
}