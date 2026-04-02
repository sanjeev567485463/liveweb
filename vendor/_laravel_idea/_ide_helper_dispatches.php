<?php //7acc786b42b1c675ad3adbd4d7b69307
/** @noinspection all */

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;
    
    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static mixed dispatchNow(array $data)
     * @method static mixed dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Foundation\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    
    /**
     * @method static void dispatch(array $stubs)
     * @method static PendingBroadcast broadcast(array $stubs)
     */
    class PublishingStubs {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;
    
    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static mixed dispatchNow(SerializableClosure $closure)
     * @method static mixed dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Maatwebsite\Excel\Jobs {

    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Maatwebsite\Excel\Concerns\FromQuery;
    use Maatwebsite\Excel\Concerns\FromView;
    use Maatwebsite\Excel\Files\TemporaryFile;
    
    /**
     * @method static PendingDispatch dispatch(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static mixed dispatchNow(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static mixed dispatchSync(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     */
    class AppendDataToSheet {}
    
    /**
     * @method static PendingDispatch dispatch(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $perPage)
     * @method static mixed dispatchNow(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $perPage)
     * @method static mixed dispatchSync(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $perPage)
     */
    class AppendPaginatedToSheet {}
    
    /**
     * @method static PendingDispatch dispatch(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static mixed dispatchNow(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static mixed dispatchSync(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     */
    class AppendQueryToSheet {}
    
    /**
     * @method static PendingDispatch dispatch(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static mixed dispatchNow(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static mixed dispatchSync(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     */
    class AppendViewToSheet {}
    
    /**
     * @method static PendingDispatch dispatch(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static mixed dispatchNow(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static mixed dispatchSync(object $export, TemporaryFile $temporaryFile, string $writerType)
     */
    class QueueExport {}
    
    /**
     * @method static PendingDispatch dispatch(ShouldQueue|null $import = null)
     * @method static mixed dispatchNow(ShouldQueue|null $import = null)
     * @method static mixed dispatchSync(ShouldQueue|null $import = null)
     */
    class QueueImport {}
}

namespace Tzsk\Payu\Events {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Tzsk\Payu\Models\PayuTransaction;
    
    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static mixed dispatchNow(PayuTransaction $transaction)
     * @method static mixed dispatchSync(PayuTransaction $transaction)
     */
    class TransactionFailed {}
    
    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static mixed dispatchNow(PayuTransaction $transaction)
     * @method static mixed dispatchSync(PayuTransaction $transaction)
     */
    class TransactionInitiated {}
    
    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static mixed dispatchNow(PayuTransaction $transaction)
     * @method static mixed dispatchSync(PayuTransaction $transaction)
     */
    class TransactionInvalidated {}
    
    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static mixed dispatchNow(PayuTransaction $transaction)
     * @method static mixed dispatchSync(PayuTransaction $transaction)
     */
    class TransactionSuccessful {}
}

namespace Tzsk\Payu\Jobs {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Tzsk\Payu\Models\PayuTransaction;
    
    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static mixed dispatchNow(PayuTransaction $transaction)
     * @method static mixed dispatchSync(PayuTransaction $transaction)
     */
    class VerifyTransaction {}
}

namespace Vrajroham\LaravelBitpay\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    
    /**
     * @method static void dispatch(array $payload)
     * @method static PendingBroadcast broadcast(array $payload)
     */
    class BitpayWebhookReceived {}
}
