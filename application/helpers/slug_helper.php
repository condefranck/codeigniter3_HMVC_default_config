<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Slug()
 * A function to generate slug.
 *
 * @access public
 * @param string $text
 *
 */



function slug($text)
{
  $idalias = substr(time(), -3);
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);
  // trim
  $text = trim($text, '-');
  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);
  // lowercase
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }

  return $text.$idalias;
}

/* End of file thumb_helper.php */
/* Location: ./application/helpers/MY_slug_helper.php */
