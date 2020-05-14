<?php
if (! function_exists('include_route_files')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function include_route_files($folder)
    {
        try {
            $rdi = new recursiveDirectoryIterator($folder);
            $it = new recursiveIteratorIterator($rdi);

            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }

                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


if (! function_exists('format_price')) {
    function format_price($number)
    {
        $number = intval($number);
        return $number = number_format($number,0,',','.') ." VND/đêm" ;
    }
}

if (! function_exists('format_price_book')) {
    function format_price_book($number)
    {
        $number = intval($number);
        return $number = number_format($number,0,',','.');
    }
}
