<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This is the index-action, it can be used as a dashboard.
 *
 * @author Lester Lievens <lester@netlash.com>
 * @author Dieter Vanden Eynde <dieter@netlash.com>
 */
class FrontendProfilesIndex extends FrontendBaseBlock
{
	/**
	 * Execute the extra.
	 */
	public function execute()
	{
		// no url parameter
		if(FrontendProfilesAuthentication::isLoggedIn())
		{
			// call the parent
			parent::execute();

			/*
			 * You could use this as some kind of dashboard where you can show an activity
			 * stream, some statistics, ...
			 */

			$this->loadTemplate();
		}

		// only if you are logged in, baby.
		else $this->redirect(FrontendNavigation::getURL(404));
	}
}

