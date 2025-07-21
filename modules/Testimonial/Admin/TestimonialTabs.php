<?php

namespace Modules\Testimonial\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;

class TestimonialTabs extends Tabs
{
    public function make()
    {
        $this->group('testimonial_information', trans('testimonial::testimonials.tabs.group.testimonial_information'))
            ->active()
            ->add($this->general())
            ->add($this->images());
    }


    private function general()
    {
        return tap(new Tab('general', trans('testimonial::testimonials.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['name']);
            $tab->view('testimonial::admin.testimonials.tabs.general');
        });
    }


    private function images()
    {
        if (!auth()->user()->hasAccess('admin.media.index')) {
            return;
        }

        return tap(new Tab('images', trans('testimonial::testimonials.tabs.images')), function (Tab $tab) {
            $tab->weight(10);
            $tab->view('testimonial::admin.testimonials.tabs.images');
        });
    }


    private function seo()
    {
        return tap(new Tab('seo', trans('testimonial::testimonials.tabs.seo')), function (Tab $tab) {
            $tab->weight(15);
            $tab->fields(['slug']);
            $tab->view('testimonial::admin.testimonials.tabs.seo');
        });
    }
}