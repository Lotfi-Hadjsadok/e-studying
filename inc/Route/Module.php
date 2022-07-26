<?php

namespace Inc\Route;

class Module
{
    public function __construct()
    {
        add_action('request', array($this, 'module_url_overwrite'));
    }
    public function module_url_overwrite($query)
    {
        if (empty($query['post_type']) || $query['course_name'] != '' || empty($query['subject'])) {
            return $query;
        }

        $query = array(
            'page' => '',
            'post_type' => 'subject',
            'name' => $query['subject'],
            'course_type' => $query['course_type'],
            'subject' => $query['subject'],
            'speciality' => $query['speciality'],
            'semester' => $query['semester']
        );

        return $query;
    }
}
