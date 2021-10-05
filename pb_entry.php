<?php
    namespace Module;

    use Registry\Event;

    class SampleModule {
        public function initialize() {
            Event::listen('meta_class_generation', function($meta) {
                return array(
                    "title" => "Sample: " . $meta->title
                );
            });
        }
    }
