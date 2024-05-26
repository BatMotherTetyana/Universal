<?php
    function copyfiles($sourceD, $targetD, $filesL) {
        foreach ($filesL as $keyO => $keyN) {
            $pathO = $sourceD . '/' . $keyO;
            $pathN = $targetD . '/' . $keyN;
            copy($pathO, $pathN);
        };
    }