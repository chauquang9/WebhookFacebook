<?php

namespace App\Http\Facade\Support;

use App\Http\Facade\Constant;
use Illuminate\Support\Facades\App;

/**
 * Class Token
 * @package App\Http\Facade\Support
 */
class Token implements TokenInterface
{
    /**
     * @return string
     */
    public function getAccessToken() {
        if(App::environment('local')) {
            // https://developers.facebook.com/tools/explorer/
            return 'EAAEmBQCEPTcBAI86w2ynjlEoIaQ9BDdWMw7DmNFz7wTPjtAgFcSmIeMMiiBZCn7tGPhsOW2wKiMvZB7yoHozkft4KyPgZBheFBe6baF1B0VhTNYZCNfC91hN2hjl2YjjleNmGZAHqoux8RDuZAKfZCXMh9RfqndxIndpbhTXfgHe2ohAbOGvMnDglRgUI4ljmv4T60RVXSS23mOfSxiptFW';
        }

        return Constant::FACEBOOK_APP_ID.'|'.Constant::FACEBOOK_APP_SECRET;
    }
}
