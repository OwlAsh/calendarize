<?php
/**
 * Link to the booking page
 *
 * @author  Tim Lochmüller
 */

namespace HDNET\Calendarize\ViewHelpers\Link;

use HDNET\Calendarize\Domain\Model\Index;

/**
 * Link to the booking page
 *
 * @author Tim Lochmüller
 */
class BookingViewHelper extends AbstractLinkViewHelper
{

    /**
     * Render the link to the given booking page for the index
     *
     * @param Index $index
     * @param int   $pageUid
     *
     * @return string
     */
    public function render(Index $index, $pageUid = null)
    {
        $additionalParams = [
            'tx_calendarize_calendarbooking' => [
                'index' => $index->getUid()
            ],
        ];
        return parent::render($this->getPageUid($pageUid, 'bookingPid'), $additionalParams);
    }
}
