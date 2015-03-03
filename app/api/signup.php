<?php

namespace Api;

use \Exception;

try {
    // Prevent displaying errors
    ob_start();

    $response = array();
    $allowedMethods = array('POST');
    $allowedHeaders = array();

    $resources = array(
        'html5-boilerplate' => array(
            'name' => 'HTML5 Boilerplate',
            'description' => 'HTML5 Boilerplate is a professional front-end template'
                . ' for building fast, robust, and adaptable web apps or sites.',
        ),
        'bootstrap' => array(
            'name' => 'Bootstrap',
            'description' => 'Sleek, intuitive, and powerful mobile first front-end'
                . ' framework for faster and easier web development.',
        ),
        'modernizr' => array(
            'name' => 'Modernizr',
            'description' => 'Modernizr is an open-source JavaScript library that'
                .   ' helps you build the next generation of HTML5 and CSS3-powered'
                .   ' websites.',
        ),
    );

    // Get headers and normalize them
    if (function_exists('getallheaders')) {
        $headers = getallheaders();
    }
    else {
        $headers = array();
        foreach ($_SERVER as $name => $value) {
            if (preg_match('/^HTTP_(.*)$/', $name, $matches)) {
                $headers[str_replace('_', '-', $matches[1])] = $value;
            }
        }
    }
    foreach ($headers as $name => $value) {
        unset($headers[$name]);
        $headers[ucwords(strtolower($name))] = $value;
    }

    // Handle OPTIONS method
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Allow: ' . implode(', ', $allowedMethods));
        header('Access-Control-Allow-Methods: ' . implode(', ', $allowedMethods));
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Request-Headers: ' . implode(', ', $allowedHeaders));
        exit();
    }

    // Reject if method is not allowed
    if (!in_array($_SERVER['REQUEST_METHOD'], $allowedMethods)) {
        throw new Exception(
            'Only ' . implode(', ', $allowedMethods)
            . (count($allowedMethods) === 1 ? ' method is' : ' methods are')
            . ' allowed',
            405
        );
    }

    /**
     * -------------------------------------------------------------------------
     * Check that "email" exists
     * -------------------------------------------------------------------------
     */
    if (isset($_POST['email'])) {
        $to = "contact@pinpo.fr";
        $subject = "Add this address to your mailing list";
        $email_field = $_POST['email'];
        $body = "E-Mail\n$email_field";

        $success = mail($to, $subject, $body);

        $response = array(
          'success' => $success,
          'message' => $success ? "Your email has been sent successfully." : "An error occured while sending your email<br> Please try again later",
        );
    }
    /**
     * -------------------------------------------------------------------------
     * No email specified
     * -------------------------------------------------------------------------
     */
    else {
        throw new Exception(
            'Email is missing',
            400
        );
    }

    // Catch non-exception errors
    $output = ob_get_clean();
    if ($output !== '') {
        throw new Exception(trim($output), 500);
    }

    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode($response);
}
catch(Exception $e) {

    $response = array(
        'status' => $e->getCode(),
        'statusText' => null,
        'description' => $e->getMessage(),
        'stack' => $e->getTrace(),
    );

    switch ($response['status']) {
        case 400:
            $response['statusText'] = 'Bad Request';
            break;
        case 404:
            $response['statusText'] = 'Not Found';
            break;
        case 405:
            $response['statusText'] = 'Method Not Allowed';
            break;
        case 405:
            $response['statusText'] = 'Not Acceptable';
            break;
        default:
            $response['statusText'] = 'Internal Server Error';
            $response['status'] = 500;
            break;
    }

    header('HTTP/1.1 ' . $response['status'] . ' ' . $response['statusText']);
    header('Content-Type: application/json');
    echo json_encode($response);
}
