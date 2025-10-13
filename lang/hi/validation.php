<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute फ़ील्ड को स्वीकार किया जाना चाहिए।',
    'accepted_if' => 'जब :other का मान :value हो, तो :attribute फ़ील्ड को स्वीकार किया जाना चाहिए।',
    'active_url' => ':attribute फ़ील्ड एक मान्य URL होना चाहिए।',
    'after' => ':attribute फ़ील्ड की तारीख :date के बाद की होनी चाहिए।',
    'after_or_equal' => ':attribute फ़ील्ड की तारीख :date के बाद या उसके बराबर होनी चाहिए।',
    'alpha' => ':attribute फ़ील्ड में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute फ़ील्ड में केवल अक्षर, अंक, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute फ़ील्ड में केवल अक्षर और अंक होने चाहिए।',
    'any_of' => ':attribute फ़ील्ड अमान्य है।',
    'array' => ':attribute फ़ील्ड एक एरे होना चाहिए।',
    'ascii' => ':attribute फ़ील्ड में केवल सिंगल-बाइट अल्फ़ान्यूमेरिक अक्षर और चिन्ह होने चाहिए।',
    'before' => ':attribute फ़ील्ड की तारीख :date से पहले की होनी चाहिए।',
    'before_or_equal' => ':attribute फ़ील्ड की तारीख :date से पहले या उसके बराबर होनी चाहिए।',
    'between' => [
        'array' => ':attribute फ़ील्ड में :min से :max आइटम के बीच होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :min से :max किलोबाइट के बीच होना चाहिए।',
        'numeric' => ':attribute का मान :min और :max के बीच होना चाहिए।',
        'string' => ':attribute में :min से :max अक्षर होने चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड true या false होना चाहिए।',
    'can' => ':attribute फ़ील्ड में अनधिकृत मान शामिल है।',
    'confirmed' => ':attribute की पुष्टि मेल नहीं खाती।',
    'contains' => ':attribute फ़ील्ड में आवश्यक मान नहीं है।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute फ़ील्ड एक मान्य तारीख होनी चाहिए।',
    'date_equals' => ':attribute फ़ील्ड की तारीख :date के बराबर होनी चाहिए।',
    'date_format' => ':attribute फ़ील्ड का प्रारूप :format से मेल खाना चाहिए।',
    'decimal' => ':attribute फ़ील्ड में :decimal दशमलव स्थान होने चाहिए।',
    'declined' => ':attribute फ़ील्ड को अस्वीकार किया जाना चाहिए।',
    'declined_if' => 'जब :other का मान :value हो, तो :attribute फ़ील्ड को अस्वीकार किया जाना चाहिए।',
    'different' => ':attribute और :other अलग-अलग होने चाहिए।',
    'digits' => ':attribute फ़ील्ड में :digits अंक होने चाहिए।',
    'digits_between' => ':attribute फ़ील्ड में :min से :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute फ़ील्ड की छवि के आयाम अमान्य हैं।',
    'distinct' => ':attribute फ़ील्ड में डुप्लिकेट मान है।',
    'doesnt_contain' => ':attribute फ़ील्ड में निम्न में से कोई भी मान नहीं होना चाहिए: :values।',
    'doesnt_end_with' => ':attribute फ़ील्ड निम्न में से किसी एक पर समाप्त नहीं होना चाहिए: :values।',
    'doesnt_start_with' => ':attribute फ़ील्ड निम्न में से किसी एक से शुरू नहीं होना चाहिए: :values।',
    'email' => ':attribute फ़ील्ड एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute फ़ील्ड निम्न में से किसी एक पर समाप्त होना चाहिए: :values।',
    'enum' => 'चयनित :attribute अमान्य है।',
    'exists' => 'चयनित :attribute अमान्य है।',
    'extensions' => ':attribute फ़ाइल में निम्न एक्सटेंशन में से एक होना चाहिए: :values।',
    'file' => ':attribute फ़ील्ड एक फ़ाइल होना चाहिए।',
    'filled' => ':attribute फ़ील्ड में मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute फ़ील्ड में :value से अधिक आइटम होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :value किलोबाइट से अधिक होना चाहिए।',
        'numeric' => ':attribute का मान :value से अधिक होना चाहिए।',
        'string' => ':attribute में :value से अधिक अक्षर होने चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute फ़ील्ड में कम से कम :value आइटम या अधिक होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :value किलोबाइट से अधिक या बराबर होना चाहिए।',
        'numeric' => ':attribute का मान :value से अधिक या बराबर होना चाहिए।',
        'string' => ':attribute में :value से अधिक या बराबर अक्षर होने चाहिए।',
    ],
    'hex_color' => ':attribute फ़ील्ड एक मान्य हेक्साडेसिमल रंग होना चाहिए।',
    'image' => ':attribute फ़ील्ड एक छवि (image) होना चाहिए।',
    'in' => 'चयनित :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद होना चाहिए।',
    'in_array_keys' => ':attribute फ़ील्ड में निम्न में से कम से कम एक कुंजी (key) होनी चाहिए: :values।',
    'integer' => ':attribute फ़ील्ड एक पूर्णांक (integer) होना चाहिए।',
    'ip' => ':attribute फ़ील्ड एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute फ़ील्ड एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute फ़ील्ड एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute फ़ील्ड एक मान्य JSON स्ट्रिंग होना चाहिए।',
    'list' => ':attribute फ़ील्ड एक सूची (list) होना चाहिए।',
    'lowercase' => ':attribute फ़ील्ड लोअरकेस (छोटे अक्षरों) में होना चाहिए।',
    'lt' => [
        'array' => ':attribute फ़ील्ड में :value से कम आइटम होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :value किलोबाइट से कम होना चाहिए।',
        'numeric' => ':attribute का मान :value से कम होना चाहिए।',
        'string' => ':attribute में :value से कम अक्षर होने चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute फ़ील्ड में :value से अधिक आइटम नहीं होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :value किलोबाइट से कम या बराबर होना चाहिए।',
        'numeric' => ':attribute का मान :value से कम या बराबर होना चाहिए।',
        'string' => ':attribute में :value से कम या बराबर अक्षर होने चाहिए।',
    ],
    'mac_address' => ':attribute फ़ील्ड एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute फ़ील्ड में :max से अधिक आइटम नहीं होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :max किलोबाइट से अधिक नहीं होना चाहिए।',
        'numeric' => ':attribute का मान :max से अधिक नहीं होना चाहिए।',
        'string' => ':attribute में :max से अधिक अक्षर नहीं होने चाहिए।',
    ],
    'max_digits' => ':attribute फ़ील्ड में :max से अधिक अंक नहीं होने चाहिए।',
    'mimes' => ':attribute फ़ाइल निम्न प्रकारों में से एक होनी चाहिए: :values।',
    'mimetypes' => ':attribute फ़ाइल निम्न प्रकारों में से एक होनी चाहिए: :values।',
    'min' => [
        'array' => ':attribute फ़ील्ड में कम से कम :min आइटम होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार कम से कम :min किलोबाइट होना चाहिए।',
        'numeric' => ':attribute का मान कम से कम :min होना चाहिए।',
        'string' => ':attribute में कम से कम :min अक्षर होने चाहिए।',
    ],
    'min_digits' => ':attribute फ़ील्ड में कम से कम :min अंक होने चाहिए।',
    'missing' => ':attribute फ़ील्ड अनुपस्थित (missing) होना चाहिए।',
    'missing_if' => 'जब :other का मान :value हो, तो :attribute फ़ील्ड अनुपस्थित होना चाहिए।',
    'missing_unless' => 'जब तक :other का मान :value न हो, :attribute फ़ील्ड अनुपस्थित होना चाहिए।',
    'missing_with' => 'जब :values मौजूद हो, तो :attribute फ़ील्ड अनुपस्थित होना चाहिए।',
    'missing_with_all' => 'जब :values मौजूद हों, तो :attribute फ़ील्ड अनुपस्थित होना चाहिए।',
    'multiple_of' => ':attribute का मान :value का गुणक (multiple) होना चाहिए।',
    'not_in' => 'चयनित :attribute अमान्य है।',
    'not_regex' => ':attribute फ़ील्ड का प्रारूप अमान्य है।',
    'numeric' => ':attribute फ़ील्ड एक संख्या (number) होना चाहिए।',
    'password' => [
        'letters' => ':attribute फ़ील्ड में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute फ़ील्ड में कम से कम एक बड़े और एक छोटे अक्षर होना चाहिए।',
        'numbers' => ':attribute फ़ील्ड में कम से कम एक अंक होना चाहिए।',
        'symbols' => ':attribute फ़ील्ड में कम से कम एक प्रतीक (symbol) होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute डेटा लीक में पाया गया है। कृपया कोई अन्य :attribute चुनें।',
    ],
    'present' => ':attribute फ़ील्ड मौजूद होना चाहिए।',
    'present_if' => 'जब :other का मान :value हो, तो :attribute फ़ील्ड मौजूद होना चाहिए।',
    'present_unless' => 'जब तक :other का मान :value न हो, :attribute फ़ील्ड मौजूद होना चाहिए।',
    'present_with' => 'जब :values मौजूद हो, तो :attribute फ़ील्ड मौजूद होना चाहिए।',
    'present_with_all' => 'जब :values मौजूद हों, तो :attribute फ़ील्ड मौजूद होना चाहिए।',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध (prohibited) है।',
    'prohibited_if' => 'जब :other का मान :value हो, तो :attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if_accepted' => 'जब :other स्वीकार किया गया हो, तो :attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if_declined' => 'जब :other अस्वीकार किया गया हो, तो :attribute फ़ील्ड निषिद्ध है।',
    'prohibited_unless' => 'जब तक :other :values में न हो, :attribute फ़ील्ड निषिद्ध है।',
    'prohibits' => ':attribute फ़ील्ड :other को मौजूद होने से रोकता है।',
    'regex' => ':attribute फ़ील्ड का प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'required_array_keys' => ':attribute फ़ील्ड में निम्न प्रविष्टियाँ (entries) होनी चाहिए: :values।',
    'required_if' => 'जब :other का मान :value हो, तब :attribute फ़ील्ड आवश्यक है।',
    'required_if_accepted' => 'जब :other स्वीकार किया गया हो, तब :attribute फ़ील्ड आवश्यक है।',
    'required_if_declined' => 'जब :other अस्वीकार किया गया हो, तब :attribute फ़ील्ड आवश्यक है।',
    'required_unless' => 'जब तक :other का मान :values में न हो, तब तक :attribute फ़ील्ड आवश्यक है।',
    'required_with' => 'जब :values मौजूद हो, तब :attribute फ़ील्ड आवश्यक है।',
    'required_with_all' => 'जब :values मौजूद हों, तब :attribute फ़ील्ड आवश्यक है।',
    'required_without' => 'जब :values मौजूद न हो, तब :attribute फ़ील्ड आवश्यक है।',
    'required_without_all' => 'जब :values में से कोई भी मौजूद न हो, तब :attribute फ़ील्ड आवश्यक है।',

    'same' => ':attribute और :other का मान समान होना चाहिए।',

    'size' => [
        'array' => ':attribute फ़ील्ड में ठीक :size आइटम होने चाहिए।',
        'file' => ':attribute फ़ाइल का आकार :size किलोबाइट होना चाहिए।',
        'numeric' => ':attribute का मान :size होना चाहिए।',
        'string' => ':attribute में :size अक्षर होने चाहिए।',
    ],

    'starts_with' => ':attribute फ़ील्ड निम्न में से किसी एक से शुरू होना चाहिए: :values।',
    'string' => ':attribute फ़ील्ड एक स्ट्रिंग होना चाहिए।',
    'timezone' => ':attribute फ़ील्ड एक मान्य टाइमज़ोन होना चाहिए।',
    'unique' => ':attribute पहले से उपयोग में है।',
    'uploaded' => ':attribute अपलोड करने में विफल रहा।',
    'uppercase' => ':attribute फ़ील्ड अपरकेस (बड़े अक्षरों) में होना चाहिए।',
    'url' => ':attribute फ़ील्ड एक मान्य URL होना चाहिए।',
    'ulid' => ':attribute फ़ील्ड एक मान्य ULID होना चाहिए।',
    'uuid' => ':attribute फ़ील्ड एक मान्य UUID होना चाहिए।',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'कस्टम संदेश',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
