<?php //53326bc3a260f4e797c2b37e08574ca9
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;
    
    /**
     * @method static mixed downloadExcel(string $fileName, null|string $writerType = null, $withHeadings = false)
     * @method static mixed import(string $filename, null|string $disk = null, null|string $readerType = null)
     * @method static mixed importAs(string $filename, callable $mapping, null|string $disk = null, null|string $readerType = null)
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static $this|Model|HigherOrderTapProxy|mixed restoreOrCreate(array $attributes = [], array $values = [])
     * @method static mixed storeExcel(string $filePath, null|string $disk = null, null|string $writerType = null, $withHeadings = false)
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Routing {
    
    /**
     * @method static void auth($options = [])
     * @method static void bitPayWebhook(string $uri = 'laravel-bitpay/webhook')
     * @method static void confirmPassword()
     * @method static void emailVerification()
     * @method static void resetPassword()
     */
    class Router {}
}

namespace Illuminate\Support {
    
    /**
     * @method static $this debug()
     * @method static mixed downloadExcel(string $fileName, null|string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method static mixed storeExcel(string $filePath, null|string $disk = null, null|string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Validation {

    use Astrotomic\Translatable\Validation\Rules\TranslatableExists;
    use Astrotomic\Translatable\Validation\Rules\TranslatableUnique;
    
    /**
     * @method static TranslatableExists translatableExists(string $model, string $field)
     * @method static TranslatableUnique translatableUnique(string $model, string $field)
     */
    class Rule {}
}
