<?php

namespace App\Faker;

use Faker\Provider\Base;


class SpecialityProvider extends Base {
    protected static $usedSpecialities = [];

    protected static $specialities = [
        'General Medicine',
        'Family Medicine',
        'Internal Medicine',
        'Pediatrics',
        'General Surgery',
        'Emergency Medicine',
        'Orthopedic Surgery',
        'Neurosurgery',
        'Cardiothoracic Surgery',
        'Plastic Surgery',
        'Ophthalmology',
        'Otolaryngology (ENT)',
        'Dermatology',
        'Obstetrics and Gynecology',
        'Urology',
        'Radiology',
        'Anesthesiology',
        'Neurology',
        'Psychiatry',
        'Cardiology',
        'Oncology',
        'Hematology',
        'Gastroenterology',
        'Nephrology',
        'Endocrinology',
        'Pulmonology',
        'Intensive Care Medicine',
        'Sports Medicine',
        'Geriatrics',
        'Infectious Diseases',
        'Forensic Medicine',
    ];

    public function uniqueSpeciality()
    {
        $available = array_filter(static::$specialities, function($speciality)
        {
            return !in_array($speciality, static::$usedSpecialities);
        });

        if(empty($available)) throw new \Exception("No unique titles left.");

        $speciality = static::randomElement($available);

        static::$usedSpecialities[] = $speciality;

        return $speciality;
    }
}
