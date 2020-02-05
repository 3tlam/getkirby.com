<?php

return function($kirby, $page) {

  $errorMessage = null;
  if ($error = param('error')) {
    switch ($error) {
      case 'not-found':
        $errorMessage = 'The requested demo instance does not exist or has expired. ' .
                        'Feel free to create a new instance.';
        break;
      case 'rate-limit':
        $errorMessage = 'Your IP address has reached the maximum number of concurrent demo ' .
                        'instances. Please try again later or continue with one of your ' .
                        'existing instances.';
        break;
      case 'overload':
        $errorMessage = 'Our demo server is currently being used by a lot of users, please ' .
                        'try again later. Sorry for the inconvenience!';
        break;
      default:
        $errorMessage = 'An unexpected error occured in the demo manager. Please let us know ' .
                        'if this keeps happening. Thanks!';
    }
  }

  return [
    'errorMessage' => $errorMessage
  ];

};
