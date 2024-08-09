<?php

return [


    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | تحتوي السطور التالية على رسائل الخطأ الافتراضية المستخدمة من قبل
    | فئة المدقق. تحتوي بعض هذه القواعد على نسخ متعددة مثل قواعد الحجم.
    | لا تتردد في تعديل كل من هذه الرسائل هنا.
    |
    */
    'attributes' => [
        'email' => 'البريد الالكتروني ',
    ],
    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other :value.',
    'active_url' => ':attribute ليس عنوان URL صالحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا مساويًا أو بعد :date.',
    'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على حروف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي :attribute على أحرف وأرقام ورموز ذات بايت واحد فقط.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا مساويًا أو قبل :date.',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute على عناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'string' => 'يجب أن يكون طول النص :attribute بين :min و :max حروف.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute صحيحة أو خاطئة.',
    'can' => 'يحتوي :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => ':attribute ليس تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا مساويًا لـ :date.',
    'date_format' => 'لا يتطابق :attribute مع الصيغة :format.',
    'decimal' => 'يجب أن يحتوي :attribute على :decimal خانات عشرية.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما يكون :other :value.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا.',
    'digits_between' => 'يجب أن يحتوي :attribute على أرقام بين :min و :max.',
    'dimensions' => 'أبعاد الصورة في :attribute غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن لا ينتهي :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن لا يبدأ :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'enum' => ':attribute المختار غير صالح.',
    'exists' => ':attribute المختار غير صالح.',
    'extensions' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
    'file' => 'يجب أن يكون ملفًا.',
    'filled' => 'يجب أن يحتوي :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول النص :attribute أكبر من :value حروف.',
    ],
    'gte' => [
        'array' => 'حقل :attribute يجب أن يحتوي على :value عنصر أو أكثر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
    ],
    'hex_color' => 'حقل :attribute يجب أن يكون لونًا سداسيًا صالحًا.',
    'image' => 'حقل :attribute يجب أن يكون صورة.',
    'in' => 'القيمة المختارة في :attribute غير صالحة.',
    'in_array' => 'حقل :attribute يجب أن يكون موجودًا في :other.',
    'integer' => 'حقل :attribute يجب أن يكون عددًا صحيحًا.',
    'ip' => 'حقل :attribute يجب أن يكون عنوان IP صالحًا.',
    'ipv4' => 'حقل :attribute يجب أن يكون عنوان IPv4 صالحًا.',
    'ipv6' => 'حقل :attribute يجب أن يكون عنوان IPv6 صالحًا.',
    'json' => 'حقل :attribute يجب أن يكون نص JSON صالحًا.',
    'lowercase' => 'حقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أقل من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'حقل :attribute يجب أن لا يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
    ],

    'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صالح.',
    'max' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max عنصر.',
        'file' => 'حقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'حقل :attribute يجب ألا يكون أكبر من :max حرفًا.',
    ],
    'max_digits' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max رقمًا.',
    'mimes' => 'حقل :attribute يجب أن يكون ملفًا من نوع: :values.',
    'mimetypes' => 'حقل :attribute يجب أن يكون ملفًا من نوع: :values.',
    'min' => [
        'array' => 'حقل :attribute يجب أن يحتوي على الأقل على :min عنصر.',
        'file' => 'حقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'حقل :attribute يجب أن يكون على الأقل :min حرفًا.',
    ],
    'min_digits' => 'حقل :attribute يجب أن يحتوي على الأقل على :min رقمًا.',
    'missing' => 'حقل :attribute يجب أن يكون مفقودًا.',
    'missing_if' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'حقل :attribute يجب أن يكون مفقودًا إلا إذا كان :other هو :value.',
    'missing_with' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'حقل :attribute يجب أن يكون مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'حقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => 'القيمة المختارة في :attribute غير صالحة.',
    'not_regex' => 'تنسيق حقل :attribute غير صالح.',
    'numeric' => 'حقل :attribute يجب أن يكون رقمًا.',
    'password' => [
        'letters' => 'حقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'حقل :attribute يجب أن يحتوي على حرف واحد كبير وحرف واحد صغير على الأقل.',
        'numbers' => 'حقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'حقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المقدمة في :attribute ظهرت في تسريب بيانات. الرجاء اختيار :attribute آخر.',
    ],

    'present' => 'حقل :attribute يجب أن يكون موجودًا.',
    'present_if' => 'حقل :attribute يجب أن يكون موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'حقل :attribute يجب أن يكون موجودًا إلا إذا كان :other هو :value.',
    'present_with' => 'حقل :attribute يجب أن يكون موجودًا عندما يكون :values موجودًا.',
    'present_with_all' => 'حقل :attribute يجب أن يكون موجودًا عندما تكون :values موجودة.',
    'prohibited' => 'حقل :attribute ممنوع.',
    'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute ممنوع إلا إذا كان :other في :values.',
    'prohibits' => 'حقل :attribute يمنع وجود :other.',
    'regex' => 'تنسيق حقل :attribute غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'حقل :attribute يجب أن يحتوي على مدخلات لـ: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
    'required_unless' => 'حقل :attribute مطلوب إلا إذا كان :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا يكون أي من :values موجودًا.',
    'same' => 'حقل :attribute يجب أن يطابق :other.',
    'size' => [
        'array' => 'حقل :attribute يجب أن يحتوي على :size عنصرًا.',
        'file' => 'حقل :attribute يجب أن يكون :size كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون :size.',
        'string' => 'حقل :attribute يجب أن يكون :size حرفًا.',
    ],
    'starts_with' => 'حقل :attribute يجب أن يبدأ بأحد القيم التالية: :values.',
    'string' => 'حقل :attribute يجب أن يكون نصًا.',
    'timezone' => 'حقل :attribute يجب أن يكون منطقة زمنية صالحة.',
    'unique' => ':attribute مستخدم من قبل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'uppercase' => 'حقل :attribute يجب أن يكون بأحرف كبيرة.',
    'url' => 'حقل :attribute يجب أن يكون عنوان URL صالحًا.',
    'ulid' => 'حقل :attribute يجب أن يكون ULID صالحًا.',
    'uuid' => 'حقل :attribute يجب أن يكون UUID صالحًا.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
|--------------------------------------------------------------------------
| خصائص التحقق المخصصة
|--------------------------------------------------------------------------
|
| الأسطر التالية تستخدم لاستبدال العنصر النائب للخاصية بشيء أكثر
| ملائمة للقارئ مثل "عنوان البريد الإلكتروني" بدلاً من "email".
| هذا يساعد في جعل رسائلنا أكثر تعبيرًا.
|
*/

    'attributes' => [],


];
