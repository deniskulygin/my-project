<?php
$result = [];
$url = end($argv);


$result['scheme'] = getScheme($url);
$result['host'] = getHost($url);
getPath($url) === null ? : $result['path'] = getPath($url);
getQuery($url) === null ? : $result['query'] = getQuery($url);
getFragment($url) === null ? : $result['fragment'] = getFragment($url);

function getScheme($url)
{
    if ((($value = parse_url($url, PHP_URL_SCHEME)) === null)){
        exit("URL is not Valid! Protocol doesn`t mentioned!" . PHP_EOL);
    }

    return $value;
}

function getHost($url)
{
    if ((($value = parse_url($url, PHP_URL_HOST)) === null)){
        exit("URL has no Host!" . PHP_EOL);
    }

    return $value;
}

function getPath($url)
{
    if ((($value = parse_url($url, PHP_URL_PATH)) === null)){
        return null;
    }

    return $value;
}

function getQuery($url)
{
    if ((($value = parse_url($url, PHP_URL_QUERY)) === null)){
        return null;
    }
    return $value;
}

function getFragment($url)
{
    if ((($value = parse_url($url, PHP_URL_FRAGMENT)) === null)){
        return null;
    } else {
        return $value;
    }
}

print_r($result);
