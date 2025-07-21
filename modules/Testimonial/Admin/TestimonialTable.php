<?php

namespace Modules\Testimonial\Admin;

use Modules\Admin\Ui\AdminTable;
use Modules\Testimonial\Entities\Testimonial;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Exceptions\Exception;

class TestimonialTable extends AdminTable
{
    /**
     * Make table response for the resource.
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function make()
    {
        return $this->newTable()
            ->addColumn('logo', function (Testimonial $testimonial) {
                return view('admin::partials.table.image', [
                    'file' => $testimonial->logo,
                ]);
            });
    }
}