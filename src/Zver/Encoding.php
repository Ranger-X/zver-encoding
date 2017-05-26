<?php
namespace Zver
{
    
    use Zver\Exceptions\Encoding\UnknownEncodingException;

    /**
     * Class Encoding provides static access to use in all project classes/functions.
     *
     * @package Zver
     */
    class Encoding
    {

        /**
         * Default encoding of project
         *
         * @var string
         */
        protected static $encoding = 'UTF-8';

        /**
         * Set encoding of project.
         * If encoding is unknown - exception raised.
         *
         * @param string $encoding Encoding to set
         *
         * @throws \Zver\Exceptions\Encoding\UnknownEncodingException
         *
         * @example
         * <code>
         * <?php
         * Encoding::set('Windows-1251');
         * Encoding::get(); //return Windows-1251;
         * ?>
         * </code>
         *
         * @return void
         *
         */
        public static function set($encoding)
        {
            if (!in_array($encoding, mb_list_encodings()))
            {
                throw new UnknownEncodingException('Encoding with name ' . $encoding . ' is not available');
            }
            static::$encoding = $encoding;
        }

        /**
         * Get project encoding
         *
         * @example
         * <code>
         * <?php
         * Encoding::set('Windows-1251');
         * Encoding::get(); //return Windows-1251;
         * ?>
         * </code>
         * @return string
         */
        public static function get()
        {
            return static::$encoding;
        }
        
    }
    
}