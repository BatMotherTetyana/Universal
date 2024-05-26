<?php
    $text = "In the ever-evolving landscape of technology, constant innovation is the driving force shaping our digital reality. From groundbreaking advancements in artificial intelligence and cybersecurity to revolutionary developments in data analytics, the boundaries of what is possible are continually being pushed. The integration of smart devices and the Internet of Things creates a seamlessly connected world, revolutionizing the way we interact with technology in our daily lives. However, alongside these advancements come significant challenges that must be addressed, such as ensuring robust privacy measures and promoting sustainable practices in technological development.

Simultaneously, the realm of science propels us into uncharted territories, pushing the boundaries of human knowledge and understanding. Whether it's unlocking the mysteries of the cosmos or making groundbreaking discoveries in medicine and biotechnology, scientific endeavors play a vital role in shaping our future. Collaboration across disciplines and borders fosters a global exchange of ideas and drives progress forward at an unprecedented pace.

As we navigate this intersection of technology and science, we are faced with both tremendous opportunities and profound responsibilities. It is through the synergy of innovation, collaboration, and ethical consideration that we can harness the full potential of these advancements to create a better future for all.";
    function textRedact($text) {
        $uns_text = str_replace(' ', '', $text);
        $red_text = str_split($uns_text);

        for ($i = 0; $i < count($red_text); $i++) {
            if ($i % 2 == 0) {
                $red_text[$i] = mb_strtoupper($red_text[$i]);
            } else {
                $red_text[$i] = mb_strtolower($red_text[$i]);
            }
        }
        return implode('', $red_text);
    }

    $fin_text = textRedact($text);
    echo $fin_text;


