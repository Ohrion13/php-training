<?php

// --------------
// SERIES
// --------------

/**
 * get the platform from the series data.
 *
 * @param array $seriesData the array entry
 * @return array the list of platform
 */
function getPlatformsFromSeries(array $seriesData): array
{
    $platforms = [];

    foreach ($seriesData as $show) {
        $platforms[] = $show["availableOn"];
    }

    $platforms = excludeDuplicates($platforms);
    sort($platforms);

    return $platforms;
}


/**
 * Generate and return HTML code to display the show with the details in parameter.
 *
 * @param array $show An array containing show details
 * @return string HTML code to display the show
 */
function generateShow(array $show): string
{
    return '<a href="exo5.php?serie=' . $show['id'] . '#question4">'
        . '<h3 class="series__ttl">' . $show['name'] . '</h3>'
        . '<img class="series__img" src="' . $show['image'] . '" alt="' . $show['name'] . '">'
        . '</a>';
}


/**
 * Generate and return HTML code to display a series list.
 *
 * @param array $series An array that provides a list of series with all their details
 * @return string HTML code to display the list of series
 */
function generateSeries(array $series): string
{
    return getArrayAsHTMLList(
        array_map("generateShow", $series),
        'series',
        'series__itm'
    );
}