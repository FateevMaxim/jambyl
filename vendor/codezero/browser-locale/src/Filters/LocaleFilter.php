<?php

namespace CodeZero\BrowserLocale\Filters;

class LocaleFilter extends PropertyFilter implements Filter
{
    /**
     * Filter the locales.
     *
     * @param array $locales
     *
     * @return array
     */
    public function filter(array $locales)
    {
        return $this->filterByProperty($locales, 'locale');
    }
}
