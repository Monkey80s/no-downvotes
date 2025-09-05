<?php

class no_downvotes_event
{
    function process_event($event, $userid, $handle, $cookieid, $params)
    {
        if ($event === 'q_vote' || $event === 'a_vote' || $event === 'c_vote') {
            if (isset($params['vote']) && (int)$params['vote'] === -1) {
                // Bloquear voto negativo
                return false;
            }
        }
    }
}
