<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function index()
    {
        // supported locales by bookings.com => 
        // en-gb,en-us,de,nl,fr,es,es-ar,es-mx,ca,
        // it,pt-pt,pt-br,no,fi,sv,da,cs,hu,ro,ja,
        // zh-cn,zh-tw,pl,el,ru,tr,bg,ar,ko,he,lv,
        // uk,id,ms,th,et,hr,lt,sk,sr,sl,vi,tl,is
        $session = session();
        $locale = $this->request->getLocale();
        // $session->remove('lang');
        $session->set('lang', $locale);
        return redirect()->back();
    }
}
