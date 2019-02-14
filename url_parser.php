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
<<<<<<< HEAD
	if ((($value = parse_url($url, PHP_URL_SCHEME)) === null)){
		exit("URL is not Valid! Protocol doesn`t mentioned!" . PHP_EOL);
	}

    return $value;
=======
	if (($value = parse_url($url, PHP_URL_SCHEME)) === null) {
		exit("URL is not Valid! Protocol doesn`t mentioned!".PHP_EOL);
	} 

		return $value;
>>>>>>> a2c67abca82f415cc474ae0d6078c2a747f4996a
}

function getHost($url)
{
<<<<<<< HEAD
    if ((($value = parse_url($url, PHP_URL_HOST)) === null)){
        exit("URL has no Host!" . PHP_EOL);
    }

    return $value;
=======
    if (($value = parse_url($url, PHP_URL_HOST)) === null) {
        exit("URL has no Host!".PHP_EOL);
    } 

        return $value;
>>>>>>> a2c67abca82f415cc474ae0d6078c2a747f4996a
}

function getPath($url)
{
    if (($value = parse_url($url, PHP_URL_PATH)) === null) {
        return null;
<<<<<<< HEAD
    }

    return $value;
=======
    } 

        return $value;
>>>>>>> a2c67abca82f415cc474ae0d6078c2a747f4996a
}

function getQuery($url)
{
    if (($value = parse_url($url, PHP_URL_QUERY)) === null) {
        return null;
<<<<<<< HEAD
    }
    return $value;
=======
    } 

        return $value;
>>>>>>> a2c67abca82f415cc474ae0d6078c2a747f4996a
}

function getFragment($url)
{
    if (($value = parse_url($url, PHP_URL_FRAGMENT)) === null) {
        return null;
    } 

        return $value;
}

print_r($result);
