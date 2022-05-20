<?php

namespace Adw\Http;

class Response {
    
    const SUCCESS = 200;
	const BAD_REQUEST = 400;
	const UNATHORIZED = 401;
    
    private static function render($data, $message, $code = self::SUCCESS) {
        if ($message) {
            $response['message'] = $message;
        }
        
        if ($data) {
            $response['data'] = $data;
        }

		return response()->json($response, $code);
    }
    
    public static function success($data, $message = null, $code = self::SUCCESS) {
        return self::render($data, $message, $code);
    }
    
    public static function error($message = 'Something went wrong', $code = self::BAD_REQUEST) {        
        if (is_array($message)) {
            $errorMessage = null;
            if (isset($message['message'])) {
                $errorMessage = $message['message'];
                unset($message['message']);
            }
            $data = $message;
            return self::render($data, $errorMessage, $code);
        } else {
            return self::render(null, $message, $code);
        }
    }
}