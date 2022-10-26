<?php //0279e86c6809f987dbde7c7cd2fcb521
/** @noinspection all */

namespace LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use SebaCarrasco93\LaravelPayku\Models\PaykuPayment;
    use SebaCarrasco93\LaravelPayku\Models\PaykuTransaction;

    /**
     * @method PaykuPayment|null getOrPut($key, $value)
     * @method PaykuPayment|$this shift(int $count = 1)
     * @method PaykuPayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PaykuPayment|$this pop(int $count = 1)
     * @method PaykuPayment|null pull($key, $default = null)
     * @method PaykuPayment|null last(callable $callback = null, $default = null)
     * @method PaykuPayment|$this random(int|null $number = null)
     * @method PaykuPayment|null sole($key = null, $operator = null, $value = null)
     * @method PaykuPayment|null get($key, $default = null)
     * @method PaykuPayment|null first(callable $callback = null, $default = null)
     * @method PaykuPayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method PaykuPayment|null find($key, $default = null)
     * @method PaykuPayment[] all()
     */
    class _IH_PaykuPayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaykuPayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PaykuPayment baseSole(array|string $columns = ['*'])
     * @method PaykuPayment create(array $attributes = [])
     * @method _IH_PaykuPayment_C|PaykuPayment[] cursor()
     * @method PaykuPayment|null|_IH_PaykuPayment_C|PaykuPayment[] find($id, array $columns = ['*'])
     * @method _IH_PaykuPayment_C|PaykuPayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PaykuPayment|_IH_PaykuPayment_C|PaykuPayment[] findOrFail($id, array $columns = ['*'])
     * @method PaykuPayment|_IH_PaykuPayment_C|PaykuPayment[] findOrNew($id, array $columns = ['*'])
     * @method PaykuPayment first(array|string $columns = ['*'])
     * @method PaykuPayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PaykuPayment firstOrCreate(array $attributes = [], array $values = [])
     * @method PaykuPayment firstOrFail(array $columns = ['*'])
     * @method PaykuPayment firstOrNew(array $attributes = [], array $values = [])
     * @method PaykuPayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaykuPayment forceCreate(array $attributes)
     * @method _IH_PaykuPayment_C|PaykuPayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaykuPayment_C|PaykuPayment[] get(array|string $columns = ['*'])
     * @method PaykuPayment getModel()
     * @method PaykuPayment[] getModels(array|string $columns = ['*'])
     * @method _IH_PaykuPayment_C|PaykuPayment[] hydrate(array $items)
     * @method PaykuPayment make(array $attributes = [])
     * @method PaykuPayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaykuPayment[]|_IH_PaykuPayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaykuPayment[]|_IH_PaykuPayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuPayment sole(array|string $columns = ['*'])
     * @method PaykuPayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PaykuPayment_QB extends _BaseBuilder {}

    /**
     * @method PaykuTransaction|null getOrPut($key, $value)
     * @method PaykuTransaction|$this shift(int $count = 1)
     * @method PaykuTransaction|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PaykuTransaction|$this pop(int $count = 1)
     * @method PaykuTransaction|null pull($key, $default = null)
     * @method PaykuTransaction|null last(callable $callback = null, $default = null)
     * @method PaykuTransaction|$this random(int|null $number = null)
     * @method PaykuTransaction|null sole($key = null, $operator = null, $value = null)
     * @method PaykuTransaction|null get($key, $default = null)
     * @method PaykuTransaction|null first(callable $callback = null, $default = null)
     * @method PaykuTransaction|null firstWhere(string $key, $operator = null, $value = null)
     * @method PaykuTransaction|null find($key, $default = null)
     * @method PaykuTransaction[] all()
     */
    class _IH_PaykuTransaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaykuTransaction[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PaykuTransaction baseSole(array|string $columns = ['*'])
     * @method PaykuTransaction create(array $attributes = [])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] cursor()
     * @method PaykuTransaction|null|_IH_PaykuTransaction_C|PaykuTransaction[] find($id, array $columns = ['*'])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PaykuTransaction|_IH_PaykuTransaction_C|PaykuTransaction[] findOrFail($id, array $columns = ['*'])
     * @method PaykuTransaction|_IH_PaykuTransaction_C|PaykuTransaction[] findOrNew($id, array $columns = ['*'])
     * @method PaykuTransaction first(array|string $columns = ['*'])
     * @method PaykuTransaction firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PaykuTransaction firstOrCreate(array $attributes = [], array $values = [])
     * @method PaykuTransaction firstOrFail(array $columns = ['*'])
     * @method PaykuTransaction firstOrNew(array $attributes = [], array $values = [])
     * @method PaykuTransaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaykuTransaction forceCreate(array $attributes)
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] get(array|string $columns = ['*'])
     * @method PaykuTransaction getModel()
     * @method PaykuTransaction[] getModels(array|string $columns = ['*'])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] hydrate(array $items)
     * @method PaykuTransaction make(array $attributes = [])
     * @method PaykuTransaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaykuTransaction[]|_IH_PaykuTransaction_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaykuTransaction[]|_IH_PaykuTransaction_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuTransaction sole(array|string $columns = ['*'])
     * @method PaykuTransaction updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PaykuTransaction_QB pending()
     * @method _IH_PaykuTransaction_QB register()
     * @method _IH_PaykuTransaction_QB success()
     */
    class _IH_PaykuTransaction_QB extends _BaseBuilder {}
}
