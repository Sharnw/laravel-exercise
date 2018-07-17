<?php

namespace App\ViewComposers;

use Illuminate\View\View;

class AppComposer {

	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 * @return void
	 */
	public function compose(View $view) {
		// don't have much planned to put here yet
		$view->with([
			'request_time' => time(),
			// will be default option on country selection box
			'default_country_code' => 'US',
			// will be default option on state selection box
			'default_state_code' => 'NEV'
		]);
	}
}