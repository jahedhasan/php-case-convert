<?php 
namespace Polodev\ConvertCase;
class Convert {
  public $text = '';
  public $parts = [];
  public $output = '';
  public function __construct($text)
  {
    $this->text = $text;
    $this->remove_punctuation();
    $this->generate_parts();
  }
  public function remove_punctuation()
  {
    $this->text = preg_replace('/\p{P}/', '', $this->text);
  }
  public function generate_parts()
  {
    $this->parts = preg_split('/ +/', $this->text);
  }
  public function output()
  {
    return $this->output;
  }

  public function title_case()
  {
    $title_case_parts = array_map(function ($each) {
      return ucfirst( strtolower( $each ) );
    }, $this->parts);
    $this->output = implode(' ', $title_case_parts);
    return $this;
  }
  public function upper_case()
  {
    $parts_text = implode(' ', $this->parts);
    $this->output = strtoupper($parts_text);
    return $this;
  }
  public function lower_case()
  {
    $parts_text = implode(' ', $this->parts);
    $this->output = strtolower($parts_text);
    return $this;
  }
  public function swap_case()
  {
    return $this;
  }
  public function snake_case()
  {
    $snake_case = implode('_', $this->parts);
    $this->output = strtolower( $snake_case );
    return $this;
  }

  public function screaming_snake_case()
  {
    $this->snake_case();
    $this->output = strtoupper($this->output);
    return $this;
  }
  public function camel_case()
  {
    $case_parts = array_map(function ($each) {
      return ucfirst( strtolower( $each ) );
    }, $this->parts);
    $this->output = lcfirst( implode('', $case_parts) );
    return $this;
  }
  public function pascal_case()
  {
    $case_parts = array_map(function ($each) {
      return ucfirst( strtolower( $each ) );
    }, $this->parts);
    $this->output = implode('', $case_parts);
    return $this;
  }
  public function separate_words($glue)
  {
    $parts = array_map(function ($each) {
      return strtolower( $each );
    }, $this->parts);
    $this->output = implode($glue, $parts);
    return $this;
  }
  public function dot_case()
  {
    $this->separate_words('.');
    return $this;
  }
  public function dash_case()
  {
    $this->separate_words('-');
    return $this;
  }
  public function separate_with_forward_slashes()
  {
    $this->separate_words('/');
    return $this;
  }
  public function separate_with_back_slashes()
  {
    $this->separate_words('\\');
    return $this;
  }
}





