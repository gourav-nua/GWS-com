<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V1\Flow\Engagement;

use Twilio\ListResource;
use Twilio\Version;

class EngagementContextList extends ListResource {
    /**
     * Construct the EngagementContextList
     *
     * @param Version $version Version that contains the resource
     * @param string $flowSid Flow SID
     * @param string $engagementSid Engagement SID
     * @return \Twilio\Rest\Studio\V1\Flow\Engagement\EngagementContextList
     */
    public function __construct(Version $version, $flowSid, $engagementSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('flowSid' => $flowSid, 'engagementSid' => $engagementSid, );
    }

    /**
     * Constructs a EngagementContextContext
     *
     * @return \Twilio\Rest\Studio\V1\Flow\Engagement\EngagementContextContext
     */
    public function getContext() {
        return new EngagementContextContext(
            $this->version,
            $this->solution['flowSid'],
            $this->solution['engagementSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Studio.V1.EngagementContextList]';
    }
}