<?php

namespace App\Traits;

trait HasLocalizedArray
{
    public function toArray()
    {
        $array = parent::toArray();

        if (property_exists($this, 'translatable') && is_array($this->translatable)) {
            $locale = app()->getLocale();

            foreach ($this->translatable as $field) {
                $array[$field] = $this->getTranslation($field, $locale);
            }
        }

        return $array;
    }
}