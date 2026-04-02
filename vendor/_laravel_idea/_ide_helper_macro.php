<?php //5e59322df7042725a2f55cfa4e7c3b21
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;
    
    /**
     * @method mixed downloadExcel(string $fileName, null|string $writerType = null, $withHeadings = false)
     * @method mixed import(string $filename, null|string $disk = null, null|string $readerType = null)
     * @method mixed importAs(string $filename, callable $mapping, null|string $disk = null, null|string $readerType = null)
     * @method $this onlyTrashed()
     * @method int restore()
     * @method $this|Model|HigherOrderTapProxy|mixed restoreOrCreate(array $attributes = [], array $values = [])
     * @method mixed storeExcel(string $filePath, null|string $disk = null, null|string $writerType = null, $withHeadings = false)
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Redis {
    
    /**
     * @mixin \Illuminate\Redis\Connections\PhpRedisConnection
     * @mixin \Redis
     */
    class RedisManager {}
}

namespace Illuminate\Routing {
    
    /**
     * @method void auth($options = [])
     * @method void bitPayWebhook(string $uri = 'laravel-bitpay/webhook')
     * @method void confirmPassword()
     * @method void emailVerification()
     * @method void resetPassword()
     */
    class Router {}
}

namespace Illuminate\Support {
    
    /**
     * @method $this debug()
     * @method mixed downloadExcel(string $fileName, null|string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method mixed storeExcel(string $filePath, null|string $disk = null, null|string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Validation {

    use Astrotomic\Translatable\Validation\Rules\TranslatableExists;
    use Astrotomic\Translatable\Validation\Rules\TranslatableUnique;
    
    /**
     * @method TranslatableExists translatableExists(string $model, string $field)
     * @method TranslatableUnique translatableUnique(string $model, string $field)
     */
    class Rule {}
}
