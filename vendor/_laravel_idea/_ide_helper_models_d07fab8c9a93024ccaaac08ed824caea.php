<?php //aa194122036def1f76f643119d7bdffa
/** @noinspection all */

namespace SebaCarrasco93\LaravelPayku\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuPayment_C;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuPayment_QB;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuTransaction_C;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuTransaction_QB;

    /**
     * @method static _IH_PaykuPayment_QB onWriteConnection()
     * @method _IH_PaykuPayment_QB newQuery()
     * @method static _IH_PaykuPayment_QB on(null|string $connection = null)
     * @method static _IH_PaykuPayment_QB query()
     * @method static _IH_PaykuPayment_QB with(array|string $relations)
     * @method _IH_PaykuPayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaykuPayment_C|PaykuPayment[] all()
     * @mixin _IH_PaykuPayment_QB
     */
    class PaykuPayment extends Model {}

    /**
     * @property PaykuPayment $payment
     * @method HasOne|_IH_PaykuPayment_QB payment()
     * @method static _IH_PaykuTransaction_QB onWriteConnection()
     * @method _IH_PaykuTransaction_QB newQuery()
     * @method static _IH_PaykuTransaction_QB on(null|string $connection = null)
     * @method static _IH_PaykuTransaction_QB query()
     * @method static _IH_PaykuTransaction_QB with(array|string $relations)
     * @method _IH_PaykuTransaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaykuTransaction_C|PaykuTransaction[] all()
     * @mixin _IH_PaykuTransaction_QB
     */
    class PaykuTransaction extends Model {}
}
