<?php //1944f4130650cf8c24216b82237d5047
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Addon;
    use App\Models\Address;
    use App\Models\AffiliateConfig;
    use App\Models\AffiliateEarningDetail;
    use App\Models\AffiliateLog;
    use App\Models\AffiliateOption;
    use App\Models\AffiliatePayment;
    use App\Models\AffiliateStats;
    use App\Models\AffiliateUser;
    use App\Models\AffiliateWithdrawRequest;
    use App\Models\AppSettings;
    use App\Models\AppTranslation;
    use App\Models\Attribute;
    use App\Models\AttributeCategory;
    use App\Models\AttributeTranslation;
    use App\Models\AttributeValue;
    use App\Models\AuctionProductBid;
    use App\Models\Banner;
    use App\Models\Blog;
    use App\Models\BlogCategory;
    use App\Models\Brand;
    use App\Models\BrandTranslation;
    use App\Models\BusinessSetting;
    use App\Models\Carrier;
    use App\Models\CarrierRange;
    use App\Models\CarrierRangePrice;
    use App\Models\Cart;
    use App\Models\CartProduct;
    use App\Models\Category;
    use App\Models\CategoryTranslation;
    use App\Models\City;
    use App\Models\CityTranslation;
    use App\Models\ClubPoint;
    use App\Models\ClubPointDetail;
    use App\Models\Color;
    use App\Models\CombinedOrder;
    use App\Models\CommissionHistory;
    use App\Models\Conversation;
    use App\Models\Country;
    use App\Models\Coupon;
    use App\Models\CouponUsage;
    use App\Models\Currency;
    use App\Models\Customer;
    use App\Models\CustomerPackage;
    use App\Models\CustomerPackagePayment;
    use App\Models\CustomerPackageTranslation;
    use App\Models\CustomerProduct;
    use App\Models\CustomerProductTranslation;
    use App\Models\DeliveryBoy;
    use App\Models\DeliveryBoyCollection;
    use App\Models\DeliveryBoyPayment;
    use App\Models\DeliveryHistory;
    use App\Models\FirebaseNotification;
    use App\Models\FlashDeal;
    use App\Models\FlashDealProduct;
    use App\Models\FlashDealTranslation;
    use App\Models\Language;
    use App\Models\ManualPaymentMethod;
    use App\Models\Message;
    use App\Models\Order;
    use App\Models\OrderDetail;
    use App\Models\OtpConfiguration;
    use App\Models\Page;
    use App\Models\PageTranslation;
    use App\Models\PasswordReset;
    use App\Models\Payment;
    use App\Models\Permission;
    use App\Models\PickupPoint;
    use App\Models\PickupPointTranslation;
    use App\Models\Policy;
    use App\Models\Product;
    use App\Models\ProductQuery;
    use App\Models\ProductStock;
    use App\Models\ProductTax;
    use App\Models\ProductTranslation;
    use App\Models\ProxyPayment;
    use App\Models\RefundRequest;
    use App\Models\Review;
    use App\Models\Role;
    use App\Models\RoleTranslation;
    use App\Models\Search;
    use App\Models\Seller;
    use App\Models\SellerPackage;
    use App\Models\SellerPackagePayment;
    use App\Models\SellerPackageTranslation;
    use App\Models\SellerWithdrawRequest;
    use App\Models\Shop;
    use App\Models\Slider;
    use App\Models\SmsTemplate;
    use App\Models\Staff;
    use App\Models\State;
    use App\Models\SubCategory;
    use App\Models\Subscriber;
    use App\Models\SubSubCategory;
    use App\Models\Tax;
    use App\Models\Ticket;
    use App\Models\TicketReply;
    use App\Models\Transaction;
    use App\Models\Translation;
    use App\Models\Upload;
    use App\Models\User;
    use App\Models\Wallet;
    use App\Models\WholesalePrice;
    use App\Models\Wishlist;
    use App\Models\Zone;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission as Permission1;
    use Spatie\Permission\Contracts\Role as Role1;

    /**
     * @method Addon|null getOrPut($key, $value)
     * @method Addon|$this shift(int $count = 1)
     * @method Addon|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Addon|$this pop(int $count = 1)
     * @method Addon|null pull($key, $default = null)
     * @method Addon|null last(callable $callback = null, $default = null)
     * @method Addon|$this random(int|null $number = null)
     * @method Addon|null sole($key = null, $operator = null, $value = null)
     * @method Addon|null get($key, $default = null)
     * @method Addon|null first(callable $callback = null, $default = null)
     * @method Addon|null firstWhere(string $key, $operator = null, $value = null)
     * @method Addon|null find($key, $default = null)
     * @method Addon[] all()
     */
    class _IH_Addon_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Addon[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Addon baseSole(array|string $columns = ['*'])
     * @method Addon create(array $attributes = [])
     * @method _IH_Addon_C|Addon[] cursor()
     * @method Addon|null|_IH_Addon_C|Addon[] find($id, array $columns = ['*'])
     * @method _IH_Addon_C|Addon[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Addon|_IH_Addon_C|Addon[] findOrFail($id, array $columns = ['*'])
     * @method Addon|_IH_Addon_C|Addon[] findOrNew($id, array $columns = ['*'])
     * @method Addon first(array|string $columns = ['*'])
     * @method Addon firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Addon firstOrCreate(array $attributes = [], array $values = [])
     * @method Addon firstOrFail(array $columns = ['*'])
     * @method Addon firstOrNew(array $attributes = [], array $values = [])
     * @method Addon firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Addon forceCreate(array $attributes)
     * @method _IH_Addon_C|Addon[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Addon_C|Addon[] get(array|string $columns = ['*'])
     * @method Addon getModel()
     * @method Addon[] getModels(array|string $columns = ['*'])
     * @method _IH_Addon_C|Addon[] hydrate(array $items)
     * @method Addon make(array $attributes = [])
     * @method Addon newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Addon[]|_IH_Addon_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Addon[]|_IH_Addon_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Addon sole(array|string $columns = ['*'])
     * @method Addon updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Addon_QB extends _BaseBuilder {}

    /**
     * @method Address|null getOrPut($key, $value)
     * @method Address|$this shift(int $count = 1)
     * @method Address|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Address|$this pop(int $count = 1)
     * @method Address|null pull($key, $default = null)
     * @method Address|null last(callable $callback = null, $default = null)
     * @method Address|$this random(int|null $number = null)
     * @method Address|null sole($key = null, $operator = null, $value = null)
     * @method Address|null get($key, $default = null)
     * @method Address|null first(callable $callback = null, $default = null)
     * @method Address|null firstWhere(string $key, $operator = null, $value = null)
     * @method Address|null find($key, $default = null)
     * @method Address[] all()
     */
    class _IH_Address_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Address[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Address baseSole(array|string $columns = ['*'])
     * @method Address create(array $attributes = [])
     * @method _IH_Address_C|Address[] cursor()
     * @method Address|null|_IH_Address_C|Address[] find($id, array $columns = ['*'])
     * @method _IH_Address_C|Address[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrFail($id, array $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrNew($id, array $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes = [], array $values = [])
     * @method Address firstOrFail(array $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _IH_Address_C|Address[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Address_C|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Address[]|_IH_Address_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Address[]|_IH_Address_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Address sole(array|string $columns = ['*'])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Address_QB extends _BaseBuilder {}

    /**
     * @method AffiliateConfig|null getOrPut($key, $value)
     * @method AffiliateConfig|$this shift(int $count = 1)
     * @method AffiliateConfig|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateConfig|$this pop(int $count = 1)
     * @method AffiliateConfig|null pull($key, $default = null)
     * @method AffiliateConfig|null last(callable $callback = null, $default = null)
     * @method AffiliateConfig|$this random(int|null $number = null)
     * @method AffiliateConfig|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateConfig|null get($key, $default = null)
     * @method AffiliateConfig|null first(callable $callback = null, $default = null)
     * @method AffiliateConfig|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateConfig|null find($key, $default = null)
     * @method AffiliateConfig[] all()
     */
    class _IH_AffiliateConfig_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateConfig[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateConfig baseSole(array|string $columns = ['*'])
     * @method AffiliateConfig create(array $attributes = [])
     * @method _IH_AffiliateConfig_C|AffiliateConfig[] cursor()
     * @method AffiliateConfig|null|_IH_AffiliateConfig_C|AffiliateConfig[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateConfig_C|AffiliateConfig[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateConfig|_IH_AffiliateConfig_C|AffiliateConfig[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateConfig|_IH_AffiliateConfig_C|AffiliateConfig[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateConfig first(array|string $columns = ['*'])
     * @method AffiliateConfig firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateConfig firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateConfig firstOrFail(array $columns = ['*'])
     * @method AffiliateConfig firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateConfig firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateConfig forceCreate(array $attributes)
     * @method _IH_AffiliateConfig_C|AffiliateConfig[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateConfig_C|AffiliateConfig[] get(array|string $columns = ['*'])
     * @method AffiliateConfig getModel()
     * @method AffiliateConfig[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateConfig_C|AffiliateConfig[] hydrate(array $items)
     * @method AffiliateConfig make(array $attributes = [])
     * @method AffiliateConfig newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateConfig[]|_IH_AffiliateConfig_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateConfig[]|_IH_AffiliateConfig_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateConfig sole(array|string $columns = ['*'])
     * @method AffiliateConfig updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateConfig_QB extends _BaseBuilder {}

    /**
     * @method AffiliateEarningDetail|null getOrPut($key, $value)
     * @method AffiliateEarningDetail|$this shift(int $count = 1)
     * @method AffiliateEarningDetail|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateEarningDetail|$this pop(int $count = 1)
     * @method AffiliateEarningDetail|null pull($key, $default = null)
     * @method AffiliateEarningDetail|null last(callable $callback = null, $default = null)
     * @method AffiliateEarningDetail|$this random(int|null $number = null)
     * @method AffiliateEarningDetail|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateEarningDetail|null get($key, $default = null)
     * @method AffiliateEarningDetail|null first(callable $callback = null, $default = null)
     * @method AffiliateEarningDetail|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateEarningDetail|null find($key, $default = null)
     * @method AffiliateEarningDetail[] all()
     */
    class _IH_AffiliateEarningDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateEarningDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateEarningDetail baseSole(array|string $columns = ['*'])
     * @method AffiliateEarningDetail create(array $attributes = [])
     * @method _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] cursor()
     * @method AffiliateEarningDetail|null|_IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateEarningDetail|_IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateEarningDetail|_IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateEarningDetail first(array|string $columns = ['*'])
     * @method AffiliateEarningDetail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateEarningDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateEarningDetail firstOrFail(array $columns = ['*'])
     * @method AffiliateEarningDetail firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateEarningDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateEarningDetail forceCreate(array $attributes)
     * @method _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] get(array|string $columns = ['*'])
     * @method AffiliateEarningDetail getModel()
     * @method AffiliateEarningDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] hydrate(array $items)
     * @method AffiliateEarningDetail make(array $attributes = [])
     * @method AffiliateEarningDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateEarningDetail[]|_IH_AffiliateEarningDetail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateEarningDetail[]|_IH_AffiliateEarningDetail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateEarningDetail sole(array|string $columns = ['*'])
     * @method AffiliateEarningDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateEarningDetail_QB extends _BaseBuilder {}

    /**
     * @method AffiliateLog|null getOrPut($key, $value)
     * @method AffiliateLog|$this shift(int $count = 1)
     * @method AffiliateLog|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateLog|$this pop(int $count = 1)
     * @method AffiliateLog|null pull($key, $default = null)
     * @method AffiliateLog|null last(callable $callback = null, $default = null)
     * @method AffiliateLog|$this random(int|null $number = null)
     * @method AffiliateLog|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateLog|null get($key, $default = null)
     * @method AffiliateLog|null first(callable $callback = null, $default = null)
     * @method AffiliateLog|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateLog|null find($key, $default = null)
     * @method AffiliateLog[] all()
     */
    class _IH_AffiliateLog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateLog[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateLog baseSole(array|string $columns = ['*'])
     * @method AffiliateLog create(array $attributes = [])
     * @method _IH_AffiliateLog_C|AffiliateLog[] cursor()
     * @method AffiliateLog|null|_IH_AffiliateLog_C|AffiliateLog[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateLog_C|AffiliateLog[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateLog|_IH_AffiliateLog_C|AffiliateLog[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateLog|_IH_AffiliateLog_C|AffiliateLog[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateLog first(array|string $columns = ['*'])
     * @method AffiliateLog firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateLog firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateLog firstOrFail(array $columns = ['*'])
     * @method AffiliateLog firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateLog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateLog forceCreate(array $attributes)
     * @method _IH_AffiliateLog_C|AffiliateLog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateLog_C|AffiliateLog[] get(array|string $columns = ['*'])
     * @method AffiliateLog getModel()
     * @method AffiliateLog[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateLog_C|AffiliateLog[] hydrate(array $items)
     * @method AffiliateLog make(array $attributes = [])
     * @method AffiliateLog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateLog[]|_IH_AffiliateLog_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateLog[]|_IH_AffiliateLog_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateLog sole(array|string $columns = ['*'])
     * @method AffiliateLog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateLog_QB extends _BaseBuilder {}

    /**
     * @method AffiliateOption|null getOrPut($key, $value)
     * @method AffiliateOption|$this shift(int $count = 1)
     * @method AffiliateOption|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateOption|$this pop(int $count = 1)
     * @method AffiliateOption|null pull($key, $default = null)
     * @method AffiliateOption|null last(callable $callback = null, $default = null)
     * @method AffiliateOption|$this random(int|null $number = null)
     * @method AffiliateOption|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateOption|null get($key, $default = null)
     * @method AffiliateOption|null first(callable $callback = null, $default = null)
     * @method AffiliateOption|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateOption|null find($key, $default = null)
     * @method AffiliateOption[] all()
     */
    class _IH_AffiliateOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateOption baseSole(array|string $columns = ['*'])
     * @method AffiliateOption create(array $attributes = [])
     * @method _IH_AffiliateOption_C|AffiliateOption[] cursor()
     * @method AffiliateOption|null|_IH_AffiliateOption_C|AffiliateOption[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateOption_C|AffiliateOption[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateOption|_IH_AffiliateOption_C|AffiliateOption[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateOption|_IH_AffiliateOption_C|AffiliateOption[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateOption first(array|string $columns = ['*'])
     * @method AffiliateOption firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateOption firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateOption firstOrFail(array $columns = ['*'])
     * @method AffiliateOption firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateOption forceCreate(array $attributes)
     * @method _IH_AffiliateOption_C|AffiliateOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateOption_C|AffiliateOption[] get(array|string $columns = ['*'])
     * @method AffiliateOption getModel()
     * @method AffiliateOption[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateOption_C|AffiliateOption[] hydrate(array $items)
     * @method AffiliateOption make(array $attributes = [])
     * @method AffiliateOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateOption[]|_IH_AffiliateOption_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateOption[]|_IH_AffiliateOption_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateOption sole(array|string $columns = ['*'])
     * @method AffiliateOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateOption_QB extends _BaseBuilder {}

    /**
     * @method AffiliatePayment|null getOrPut($key, $value)
     * @method AffiliatePayment|$this shift(int $count = 1)
     * @method AffiliatePayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliatePayment|$this pop(int $count = 1)
     * @method AffiliatePayment|null pull($key, $default = null)
     * @method AffiliatePayment|null last(callable $callback = null, $default = null)
     * @method AffiliatePayment|$this random(int|null $number = null)
     * @method AffiliatePayment|null sole($key = null, $operator = null, $value = null)
     * @method AffiliatePayment|null get($key, $default = null)
     * @method AffiliatePayment|null first(callable $callback = null, $default = null)
     * @method AffiliatePayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliatePayment|null find($key, $default = null)
     * @method AffiliatePayment[] all()
     */
    class _IH_AffiliatePayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliatePayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliatePayment baseSole(array|string $columns = ['*'])
     * @method AffiliatePayment create(array $attributes = [])
     * @method _IH_AffiliatePayment_C|AffiliatePayment[] cursor()
     * @method AffiliatePayment|null|_IH_AffiliatePayment_C|AffiliatePayment[] find($id, array $columns = ['*'])
     * @method _IH_AffiliatePayment_C|AffiliatePayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliatePayment|_IH_AffiliatePayment_C|AffiliatePayment[] findOrFail($id, array $columns = ['*'])
     * @method AffiliatePayment|_IH_AffiliatePayment_C|AffiliatePayment[] findOrNew($id, array $columns = ['*'])
     * @method AffiliatePayment first(array|string $columns = ['*'])
     * @method AffiliatePayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliatePayment firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliatePayment firstOrFail(array $columns = ['*'])
     * @method AffiliatePayment firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliatePayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliatePayment forceCreate(array $attributes)
     * @method _IH_AffiliatePayment_C|AffiliatePayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliatePayment_C|AffiliatePayment[] get(array|string $columns = ['*'])
     * @method AffiliatePayment getModel()
     * @method AffiliatePayment[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliatePayment_C|AffiliatePayment[] hydrate(array $items)
     * @method AffiliatePayment make(array $attributes = [])
     * @method AffiliatePayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliatePayment[]|_IH_AffiliatePayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliatePayment[]|_IH_AffiliatePayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliatePayment sole(array|string $columns = ['*'])
     * @method AffiliatePayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliatePayment_QB extends _BaseBuilder {}

    /**
     * @method AffiliateStats|null getOrPut($key, $value)
     * @method AffiliateStats|$this shift(int $count = 1)
     * @method AffiliateStats|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateStats|$this pop(int $count = 1)
     * @method AffiliateStats|null pull($key, $default = null)
     * @method AffiliateStats|null last(callable $callback = null, $default = null)
     * @method AffiliateStats|$this random(int|null $number = null)
     * @method AffiliateStats|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateStats|null get($key, $default = null)
     * @method AffiliateStats|null first(callable $callback = null, $default = null)
     * @method AffiliateStats|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateStats|null find($key, $default = null)
     * @method AffiliateStats[] all()
     */
    class _IH_AffiliateStats_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateStats[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateStats baseSole(array|string $columns = ['*'])
     * @method AffiliateStats create(array $attributes = [])
     * @method _IH_AffiliateStats_C|AffiliateStats[] cursor()
     * @method AffiliateStats|null|_IH_AffiliateStats_C|AffiliateStats[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateStats_C|AffiliateStats[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateStats|_IH_AffiliateStats_C|AffiliateStats[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateStats|_IH_AffiliateStats_C|AffiliateStats[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateStats first(array|string $columns = ['*'])
     * @method AffiliateStats firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateStats firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateStats firstOrFail(array $columns = ['*'])
     * @method AffiliateStats firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateStats firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateStats forceCreate(array $attributes)
     * @method _IH_AffiliateStats_C|AffiliateStats[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateStats_C|AffiliateStats[] get(array|string $columns = ['*'])
     * @method AffiliateStats getModel()
     * @method AffiliateStats[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateStats_C|AffiliateStats[] hydrate(array $items)
     * @method AffiliateStats make(array $attributes = [])
     * @method AffiliateStats newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateStats[]|_IH_AffiliateStats_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateStats[]|_IH_AffiliateStats_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateStats sole(array|string $columns = ['*'])
     * @method AffiliateStats updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateStats_QB extends _BaseBuilder {}

    /**
     * @method AffiliateUser|null getOrPut($key, $value)
     * @method AffiliateUser|$this shift(int $count = 1)
     * @method AffiliateUser|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateUser|$this pop(int $count = 1)
     * @method AffiliateUser|null pull($key, $default = null)
     * @method AffiliateUser|null last(callable $callback = null, $default = null)
     * @method AffiliateUser|$this random(int|null $number = null)
     * @method AffiliateUser|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateUser|null get($key, $default = null)
     * @method AffiliateUser|null first(callable $callback = null, $default = null)
     * @method AffiliateUser|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateUser|null find($key, $default = null)
     * @method AffiliateUser[] all()
     */
    class _IH_AffiliateUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateUser[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateUser baseSole(array|string $columns = ['*'])
     * @method AffiliateUser create(array $attributes = [])
     * @method _IH_AffiliateUser_C|AffiliateUser[] cursor()
     * @method AffiliateUser|null|_IH_AffiliateUser_C|AffiliateUser[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateUser_C|AffiliateUser[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateUser|_IH_AffiliateUser_C|AffiliateUser[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateUser|_IH_AffiliateUser_C|AffiliateUser[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateUser first(array|string $columns = ['*'])
     * @method AffiliateUser firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateUser firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateUser firstOrFail(array $columns = ['*'])
     * @method AffiliateUser firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateUser forceCreate(array $attributes)
     * @method _IH_AffiliateUser_C|AffiliateUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateUser_C|AffiliateUser[] get(array|string $columns = ['*'])
     * @method AffiliateUser getModel()
     * @method AffiliateUser[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateUser_C|AffiliateUser[] hydrate(array $items)
     * @method AffiliateUser make(array $attributes = [])
     * @method AffiliateUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateUser[]|_IH_AffiliateUser_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateUser[]|_IH_AffiliateUser_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateUser sole(array|string $columns = ['*'])
     * @method AffiliateUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateUser_QB extends _BaseBuilder {}

    /**
     * @method AffiliateWithdrawRequest|null getOrPut($key, $value)
     * @method AffiliateWithdrawRequest|$this shift(int $count = 1)
     * @method AffiliateWithdrawRequest|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AffiliateWithdrawRequest|$this pop(int $count = 1)
     * @method AffiliateWithdrawRequest|null pull($key, $default = null)
     * @method AffiliateWithdrawRequest|null last(callable $callback = null, $default = null)
     * @method AffiliateWithdrawRequest|$this random(int|null $number = null)
     * @method AffiliateWithdrawRequest|null sole($key = null, $operator = null, $value = null)
     * @method AffiliateWithdrawRequest|null get($key, $default = null)
     * @method AffiliateWithdrawRequest|null first(callable $callback = null, $default = null)
     * @method AffiliateWithdrawRequest|null firstWhere(string $key, $operator = null, $value = null)
     * @method AffiliateWithdrawRequest|null find($key, $default = null)
     * @method AffiliateWithdrawRequest[] all()
     */
    class _IH_AffiliateWithdrawRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateWithdrawRequest[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AffiliateWithdrawRequest baseSole(array|string $columns = ['*'])
     * @method AffiliateWithdrawRequest create(array $attributes = [])
     * @method _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] cursor()
     * @method AffiliateWithdrawRequest|null|_IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] find($id, array $columns = ['*'])
     * @method _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AffiliateWithdrawRequest|_IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] findOrFail($id, array $columns = ['*'])
     * @method AffiliateWithdrawRequest|_IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] findOrNew($id, array $columns = ['*'])
     * @method AffiliateWithdrawRequest first(array|string $columns = ['*'])
     * @method AffiliateWithdrawRequest firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AffiliateWithdrawRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateWithdrawRequest firstOrFail(array $columns = ['*'])
     * @method AffiliateWithdrawRequest firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateWithdrawRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateWithdrawRequest forceCreate(array $attributes)
     * @method _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] get(array|string $columns = ['*'])
     * @method AffiliateWithdrawRequest getModel()
     * @method AffiliateWithdrawRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] hydrate(array $items)
     * @method AffiliateWithdrawRequest make(array $attributes = [])
     * @method AffiliateWithdrawRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateWithdrawRequest[]|_IH_AffiliateWithdrawRequest_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AffiliateWithdrawRequest[]|_IH_AffiliateWithdrawRequest_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateWithdrawRequest sole(array|string $columns = ['*'])
     * @method AffiliateWithdrawRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateWithdrawRequest_QB extends _BaseBuilder {}

    /**
     * @method AppSettings|null getOrPut($key, $value)
     * @method AppSettings|$this shift(int $count = 1)
     * @method AppSettings|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AppSettings|$this pop(int $count = 1)
     * @method AppSettings|null pull($key, $default = null)
     * @method AppSettings|null last(callable $callback = null, $default = null)
     * @method AppSettings|$this random(int|null $number = null)
     * @method AppSettings|null sole($key = null, $operator = null, $value = null)
     * @method AppSettings|null get($key, $default = null)
     * @method AppSettings|null first(callable $callback = null, $default = null)
     * @method AppSettings|null firstWhere(string $key, $operator = null, $value = null)
     * @method AppSettings|null find($key, $default = null)
     * @method AppSettings[] all()
     */
    class _IH_AppSettings_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AppSettings[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AppSettings baseSole(array|string $columns = ['*'])
     * @method AppSettings create(array $attributes = [])
     * @method _IH_AppSettings_C|AppSettings[] cursor()
     * @method AppSettings|null|_IH_AppSettings_C|AppSettings[] find($id, array $columns = ['*'])
     * @method _IH_AppSettings_C|AppSettings[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AppSettings|_IH_AppSettings_C|AppSettings[] findOrFail($id, array $columns = ['*'])
     * @method AppSettings|_IH_AppSettings_C|AppSettings[] findOrNew($id, array $columns = ['*'])
     * @method AppSettings first(array|string $columns = ['*'])
     * @method AppSettings firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AppSettings firstOrCreate(array $attributes = [], array $values = [])
     * @method AppSettings firstOrFail(array $columns = ['*'])
     * @method AppSettings firstOrNew(array $attributes = [], array $values = [])
     * @method AppSettings firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AppSettings forceCreate(array $attributes)
     * @method _IH_AppSettings_C|AppSettings[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AppSettings_C|AppSettings[] get(array|string $columns = ['*'])
     * @method AppSettings getModel()
     * @method AppSettings[] getModels(array|string $columns = ['*'])
     * @method _IH_AppSettings_C|AppSettings[] hydrate(array $items)
     * @method AppSettings make(array $attributes = [])
     * @method AppSettings newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AppSettings[]|_IH_AppSettings_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AppSettings[]|_IH_AppSettings_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AppSettings sole(array|string $columns = ['*'])
     * @method AppSettings updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AppSettings_QB extends _BaseBuilder {}

    /**
     * @method AppTranslation|null getOrPut($key, $value)
     * @method AppTranslation|$this shift(int $count = 1)
     * @method AppTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AppTranslation|$this pop(int $count = 1)
     * @method AppTranslation|null pull($key, $default = null)
     * @method AppTranslation|null last(callable $callback = null, $default = null)
     * @method AppTranslation|$this random(int|null $number = null)
     * @method AppTranslation|null sole($key = null, $operator = null, $value = null)
     * @method AppTranslation|null get($key, $default = null)
     * @method AppTranslation|null first(callable $callback = null, $default = null)
     * @method AppTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method AppTranslation|null find($key, $default = null)
     * @method AppTranslation[] all()
     */
    class _IH_AppTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AppTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AppTranslation baseSole(array|string $columns = ['*'])
     * @method AppTranslation create(array $attributes = [])
     * @method _IH_AppTranslation_C|AppTranslation[] cursor()
     * @method AppTranslation|null|_IH_AppTranslation_C|AppTranslation[] find($id, array $columns = ['*'])
     * @method _IH_AppTranslation_C|AppTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AppTranslation|_IH_AppTranslation_C|AppTranslation[] findOrFail($id, array $columns = ['*'])
     * @method AppTranslation|_IH_AppTranslation_C|AppTranslation[] findOrNew($id, array $columns = ['*'])
     * @method AppTranslation first(array|string $columns = ['*'])
     * @method AppTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AppTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AppTranslation firstOrFail(array $columns = ['*'])
     * @method AppTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AppTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AppTranslation forceCreate(array $attributes)
     * @method _IH_AppTranslation_C|AppTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AppTranslation_C|AppTranslation[] get(array|string $columns = ['*'])
     * @method AppTranslation getModel()
     * @method AppTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AppTranslation_C|AppTranslation[] hydrate(array $items)
     * @method AppTranslation make(array $attributes = [])
     * @method AppTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AppTranslation[]|_IH_AppTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AppTranslation[]|_IH_AppTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AppTranslation sole(array|string $columns = ['*'])
     * @method AppTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AppTranslation_QB extends _BaseBuilder {}

    /**
     * @method AttributeCategory|null getOrPut($key, $value)
     * @method AttributeCategory|$this shift(int $count = 1)
     * @method AttributeCategory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AttributeCategory|$this pop(int $count = 1)
     * @method AttributeCategory|null pull($key, $default = null)
     * @method AttributeCategory|null last(callable $callback = null, $default = null)
     * @method AttributeCategory|$this random(int|null $number = null)
     * @method AttributeCategory|null sole($key = null, $operator = null, $value = null)
     * @method AttributeCategory|null get($key, $default = null)
     * @method AttributeCategory|null first(callable $callback = null, $default = null)
     * @method AttributeCategory|null firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeCategory|null find($key, $default = null)
     * @method AttributeCategory[] all()
     */
    class _IH_AttributeCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AttributeCategory baseSole(array|string $columns = ['*'])
     * @method AttributeCategory create(array $attributes = [])
     * @method _IH_AttributeCategory_C|AttributeCategory[] cursor()
     * @method AttributeCategory|null|_IH_AttributeCategory_C|AttributeCategory[] find($id, array $columns = ['*'])
     * @method _IH_AttributeCategory_C|AttributeCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeCategory|_IH_AttributeCategory_C|AttributeCategory[] findOrFail($id, array $columns = ['*'])
     * @method AttributeCategory|_IH_AttributeCategory_C|AttributeCategory[] findOrNew($id, array $columns = ['*'])
     * @method AttributeCategory first(array|string $columns = ['*'])
     * @method AttributeCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeCategory firstOrFail(array $columns = ['*'])
     * @method AttributeCategory firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeCategory forceCreate(array $attributes)
     * @method _IH_AttributeCategory_C|AttributeCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeCategory_C|AttributeCategory[] get(array|string $columns = ['*'])
     * @method AttributeCategory getModel()
     * @method AttributeCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeCategory_C|AttributeCategory[] hydrate(array $items)
     * @method AttributeCategory make(array $attributes = [])
     * @method AttributeCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeCategory[]|_IH_AttributeCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeCategory[]|_IH_AttributeCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeCategory sole(array|string $columns = ['*'])
     * @method AttributeCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AttributeCategory_QB extends _BaseBuilder {}

    /**
     * @method AttributeTranslation|null getOrPut($key, $value)
     * @method AttributeTranslation|$this shift(int $count = 1)
     * @method AttributeTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AttributeTranslation|$this pop(int $count = 1)
     * @method AttributeTranslation|null pull($key, $default = null)
     * @method AttributeTranslation|null last(callable $callback = null, $default = null)
     * @method AttributeTranslation|$this random(int|null $number = null)
     * @method AttributeTranslation|null sole($key = null, $operator = null, $value = null)
     * @method AttributeTranslation|null get($key, $default = null)
     * @method AttributeTranslation|null first(callable $callback = null, $default = null)
     * @method AttributeTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeTranslation|null find($key, $default = null)
     * @method AttributeTranslation[] all()
     */
    class _IH_AttributeTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AttributeTranslation baseSole(array|string $columns = ['*'])
     * @method AttributeTranslation create(array $attributes = [])
     * @method _IH_AttributeTranslation_C|AttributeTranslation[] cursor()
     * @method AttributeTranslation|null|_IH_AttributeTranslation_C|AttributeTranslation[] find($id, array $columns = ['*'])
     * @method _IH_AttributeTranslation_C|AttributeTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeTranslation|_IH_AttributeTranslation_C|AttributeTranslation[] findOrFail($id, array $columns = ['*'])
     * @method AttributeTranslation|_IH_AttributeTranslation_C|AttributeTranslation[] findOrNew($id, array $columns = ['*'])
     * @method AttributeTranslation first(array|string $columns = ['*'])
     * @method AttributeTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeTranslation firstOrFail(array $columns = ['*'])
     * @method AttributeTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeTranslation forceCreate(array $attributes)
     * @method _IH_AttributeTranslation_C|AttributeTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeTranslation_C|AttributeTranslation[] get(array|string $columns = ['*'])
     * @method AttributeTranslation getModel()
     * @method AttributeTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeTranslation_C|AttributeTranslation[] hydrate(array $items)
     * @method AttributeTranslation make(array $attributes = [])
     * @method AttributeTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeTranslation[]|_IH_AttributeTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeTranslation[]|_IH_AttributeTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeTranslation sole(array|string $columns = ['*'])
     * @method AttributeTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AttributeTranslation_QB extends _BaseBuilder {}

    /**
     * @method AttributeValue|null getOrPut($key, $value)
     * @method AttributeValue|$this shift(int $count = 1)
     * @method AttributeValue|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AttributeValue|$this pop(int $count = 1)
     * @method AttributeValue|null pull($key, $default = null)
     * @method AttributeValue|null last(callable $callback = null, $default = null)
     * @method AttributeValue|$this random(int|null $number = null)
     * @method AttributeValue|null sole($key = null, $operator = null, $value = null)
     * @method AttributeValue|null get($key, $default = null)
     * @method AttributeValue|null first(callable $callback = null, $default = null)
     * @method AttributeValue|null firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeValue|null find($key, $default = null)
     * @method AttributeValue[] all()
     */
    class _IH_AttributeValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeValue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AttributeValue baseSole(array|string $columns = ['*'])
     * @method AttributeValue create(array $attributes = [])
     * @method _IH_AttributeValue_C|AttributeValue[] cursor()
     * @method AttributeValue|null|_IH_AttributeValue_C|AttributeValue[] find($id, array $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeValue|_IH_AttributeValue_C|AttributeValue[] findOrFail($id, array $columns = ['*'])
     * @method AttributeValue|_IH_AttributeValue_C|AttributeValue[] findOrNew($id, array $columns = ['*'])
     * @method AttributeValue first(array|string $columns = ['*'])
     * @method AttributeValue firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeValue firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeValue firstOrFail(array $columns = ['*'])
     * @method AttributeValue firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeValue forceCreate(array $attributes)
     * @method _IH_AttributeValue_C|AttributeValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeValue_C|AttributeValue[] get(array|string $columns = ['*'])
     * @method AttributeValue getModel()
     * @method AttributeValue[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] hydrate(array $items)
     * @method AttributeValue make(array $attributes = [])
     * @method AttributeValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeValue[]|_IH_AttributeValue_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeValue[]|_IH_AttributeValue_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeValue sole(array|string $columns = ['*'])
     * @method AttributeValue updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AttributeValue_QB extends _BaseBuilder {}

    /**
     * @method Attribute|null getOrPut($key, $value)
     * @method Attribute|$this shift(int $count = 1)
     * @method Attribute|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Attribute|$this pop(int $count = 1)
     * @method Attribute|null pull($key, $default = null)
     * @method Attribute|null last(callable $callback = null, $default = null)
     * @method Attribute|$this random(int|null $number = null)
     * @method Attribute|null sole($key = null, $operator = null, $value = null)
     * @method Attribute|null get($key, $default = null)
     * @method Attribute|null first(callable $callback = null, $default = null)
     * @method Attribute|null firstWhere(string $key, $operator = null, $value = null)
     * @method Attribute|null find($key, $default = null)
     * @method Attribute[] all()
     */
    class _IH_Attribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Attribute baseSole(array|string $columns = ['*'])
     * @method Attribute create(array $attributes = [])
     * @method _IH_Attribute_C|Attribute[] cursor()
     * @method Attribute|null|_IH_Attribute_C|Attribute[] find($id, array $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrFail($id, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrNew($id, array $columns = ['*'])
     * @method Attribute first(array|string $columns = ['*'])
     * @method Attribute firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Attribute firstOrCreate(array $attributes = [], array $values = [])
     * @method Attribute firstOrFail(array $columns = ['*'])
     * @method Attribute firstOrNew(array $attributes = [], array $values = [])
     * @method Attribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attribute forceCreate(array $attributes)
     * @method _IH_Attribute_C|Attribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attribute_C|Attribute[] get(array|string $columns = ['*'])
     * @method Attribute getModel()
     * @method Attribute[] getModels(array|string $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] hydrate(array $items)
     * @method Attribute make(array $attributes = [])
     * @method Attribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attribute[]|_IH_Attribute_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attribute[]|_IH_Attribute_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attribute sole(array|string $columns = ['*'])
     * @method Attribute updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Attribute_QB extends _BaseBuilder {}

    /**
     * @method AuctionProductBid|null getOrPut($key, $value)
     * @method AuctionProductBid|$this shift(int $count = 1)
     * @method AuctionProductBid|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AuctionProductBid|$this pop(int $count = 1)
     * @method AuctionProductBid|null pull($key, $default = null)
     * @method AuctionProductBid|null last(callable $callback = null, $default = null)
     * @method AuctionProductBid|$this random(int|null $number = null)
     * @method AuctionProductBid|null sole($key = null, $operator = null, $value = null)
     * @method AuctionProductBid|null get($key, $default = null)
     * @method AuctionProductBid|null first(callable $callback = null, $default = null)
     * @method AuctionProductBid|null firstWhere(string $key, $operator = null, $value = null)
     * @method AuctionProductBid|null find($key, $default = null)
     * @method AuctionProductBid[] all()
     */
    class _IH_AuctionProductBid_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuctionProductBid[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AuctionProductBid baseSole(array|string $columns = ['*'])
     * @method AuctionProductBid create(array $attributes = [])
     * @method _IH_AuctionProductBid_C|AuctionProductBid[] cursor()
     * @method AuctionProductBid|null|_IH_AuctionProductBid_C|AuctionProductBid[] find($id, array $columns = ['*'])
     * @method _IH_AuctionProductBid_C|AuctionProductBid[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AuctionProductBid|_IH_AuctionProductBid_C|AuctionProductBid[] findOrFail($id, array $columns = ['*'])
     * @method AuctionProductBid|_IH_AuctionProductBid_C|AuctionProductBid[] findOrNew($id, array $columns = ['*'])
     * @method AuctionProductBid first(array|string $columns = ['*'])
     * @method AuctionProductBid firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AuctionProductBid firstOrCreate(array $attributes = [], array $values = [])
     * @method AuctionProductBid firstOrFail(array $columns = ['*'])
     * @method AuctionProductBid firstOrNew(array $attributes = [], array $values = [])
     * @method AuctionProductBid firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuctionProductBid forceCreate(array $attributes)
     * @method _IH_AuctionProductBid_C|AuctionProductBid[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuctionProductBid_C|AuctionProductBid[] get(array|string $columns = ['*'])
     * @method AuctionProductBid getModel()
     * @method AuctionProductBid[] getModels(array|string $columns = ['*'])
     * @method _IH_AuctionProductBid_C|AuctionProductBid[] hydrate(array $items)
     * @method AuctionProductBid make(array $attributes = [])
     * @method AuctionProductBid newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuctionProductBid[]|_IH_AuctionProductBid_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuctionProductBid[]|_IH_AuctionProductBid_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuctionProductBid sole(array|string $columns = ['*'])
     * @method AuctionProductBid updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuctionProductBid_QB extends _BaseBuilder {}

    /**
     * @method Banner|null getOrPut($key, $value)
     * @method Banner|$this shift(int $count = 1)
     * @method Banner|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Banner|$this pop(int $count = 1)
     * @method Banner|null pull($key, $default = null)
     * @method Banner|null last(callable $callback = null, $default = null)
     * @method Banner|$this random(int|null $number = null)
     * @method Banner|null sole($key = null, $operator = null, $value = null)
     * @method Banner|null get($key, $default = null)
     * @method Banner|null first(callable $callback = null, $default = null)
     * @method Banner|null firstWhere(string $key, $operator = null, $value = null)
     * @method Banner|null find($key, $default = null)
     * @method Banner[] all()
     */
    class _IH_Banner_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Banner[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Banner baseSole(array|string $columns = ['*'])
     * @method Banner create(array $attributes = [])
     * @method _IH_Banner_C|Banner[] cursor()
     * @method Banner|null|_IH_Banner_C|Banner[] find($id, array $columns = ['*'])
     * @method _IH_Banner_C|Banner[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Banner|_IH_Banner_C|Banner[] findOrFail($id, array $columns = ['*'])
     * @method Banner|_IH_Banner_C|Banner[] findOrNew($id, array $columns = ['*'])
     * @method Banner first(array|string $columns = ['*'])
     * @method Banner firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Banner firstOrCreate(array $attributes = [], array $values = [])
     * @method Banner firstOrFail(array $columns = ['*'])
     * @method Banner firstOrNew(array $attributes = [], array $values = [])
     * @method Banner firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Banner forceCreate(array $attributes)
     * @method _IH_Banner_C|Banner[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Banner_C|Banner[] get(array|string $columns = ['*'])
     * @method Banner getModel()
     * @method Banner[] getModels(array|string $columns = ['*'])
     * @method _IH_Banner_C|Banner[] hydrate(array $items)
     * @method Banner make(array $attributes = [])
     * @method Banner newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Banner[]|_IH_Banner_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Banner[]|_IH_Banner_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Banner sole(array|string $columns = ['*'])
     * @method Banner updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Banner_QB extends _BaseBuilder {}

    /**
     * @method BlogCategory|null getOrPut($key, $value)
     * @method BlogCategory|$this shift(int $count = 1)
     * @method BlogCategory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method BlogCategory|$this pop(int $count = 1)
     * @method BlogCategory|null pull($key, $default = null)
     * @method BlogCategory|null last(callable $callback = null, $default = null)
     * @method BlogCategory|$this random(int|null $number = null)
     * @method BlogCategory|null sole($key = null, $operator = null, $value = null)
     * @method BlogCategory|null get($key, $default = null)
     * @method BlogCategory|null first(callable $callback = null, $default = null)
     * @method BlogCategory|null firstWhere(string $key, $operator = null, $value = null)
     * @method BlogCategory|null find($key, $default = null)
     * @method BlogCategory[] all()
     */
    class _IH_BlogCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method BlogCategory baseSole(array|string $columns = ['*'])
     * @method BlogCategory create(array $attributes = [])
     * @method _IH_BlogCategory_C|BlogCategory[] cursor()
     * @method BlogCategory|null|_IH_BlogCategory_C|BlogCategory[] find($id, array $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrFail($id, array $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrNew($id, array $columns = ['*'])
     * @method BlogCategory first(array|string $columns = ['*'])
     * @method BlogCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method BlogCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogCategory firstOrFail(array $columns = ['*'])
     * @method BlogCategory firstOrNew(array $attributes = [], array $values = [])
     * @method BlogCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogCategory forceCreate(array $attributes)
     * @method _IH_BlogCategory_C|BlogCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogCategory_C|BlogCategory[] get(array|string $columns = ['*'])
     * @method BlogCategory getModel()
     * @method BlogCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] hydrate(array $items)
     * @method BlogCategory make(array $attributes = [])
     * @method BlogCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogCategory[]|_IH_BlogCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BlogCategory[]|_IH_BlogCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategory sole(array|string $columns = ['*'])
     * @method BlogCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogCategory_QB extends _BaseBuilder {}

    /**
     * @method Blog|null getOrPut($key, $value)
     * @method Blog|$this shift(int $count = 1)
     * @method Blog|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Blog|$this pop(int $count = 1)
     * @method Blog|null pull($key, $default = null)
     * @method Blog|null last(callable $callback = null, $default = null)
     * @method Blog|$this random(int|null $number = null)
     * @method Blog|null sole($key = null, $operator = null, $value = null)
     * @method Blog|null get($key, $default = null)
     * @method Blog|null first(callable $callback = null, $default = null)
     * @method Blog|null firstWhere(string $key, $operator = null, $value = null)
     * @method Blog|null find($key, $default = null)
     * @method Blog[] all()
     */
    class _IH_Blog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Blog[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Blog baseSole(array|string $columns = ['*'])
     * @method Blog create(array $attributes = [])
     * @method _IH_Blog_C|Blog[] cursor()
     * @method Blog|null|_IH_Blog_C|Blog[] find($id, array $columns = ['*'])
     * @method _IH_Blog_C|Blog[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrFail($id, array $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrNew($id, array $columns = ['*'])
     * @method Blog first(array|string $columns = ['*'])
     * @method Blog firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Blog firstOrCreate(array $attributes = [], array $values = [])
     * @method Blog firstOrFail(array $columns = ['*'])
     * @method Blog firstOrNew(array $attributes = [], array $values = [])
     * @method Blog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Blog forceCreate(array $attributes)
     * @method _IH_Blog_C|Blog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Blog_C|Blog[] get(array|string $columns = ['*'])
     * @method Blog getModel()
     * @method Blog[] getModels(array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] hydrate(array $items)
     * @method Blog make(array $attributes = [])
     * @method Blog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Blog[]|_IH_Blog_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Blog[]|_IH_Blog_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog sole(array|string $columns = ['*'])
     * @method Blog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Blog_QB extends _BaseBuilder {}

    /**
     * @method BrandTranslation|null getOrPut($key, $value)
     * @method BrandTranslation|$this shift(int $count = 1)
     * @method BrandTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method BrandTranslation|$this pop(int $count = 1)
     * @method BrandTranslation|null pull($key, $default = null)
     * @method BrandTranslation|null last(callable $callback = null, $default = null)
     * @method BrandTranslation|$this random(int|null $number = null)
     * @method BrandTranslation|null sole($key = null, $operator = null, $value = null)
     * @method BrandTranslation|null get($key, $default = null)
     * @method BrandTranslation|null first(callable $callback = null, $default = null)
     * @method BrandTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method BrandTranslation|null find($key, $default = null)
     * @method BrandTranslation[] all()
     */
    class _IH_BrandTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BrandTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method BrandTranslation baseSole(array|string $columns = ['*'])
     * @method BrandTranslation create(array $attributes = [])
     * @method _IH_BrandTranslation_C|BrandTranslation[] cursor()
     * @method BrandTranslation|null|_IH_BrandTranslation_C|BrandTranslation[] find($id, array $columns = ['*'])
     * @method _IH_BrandTranslation_C|BrandTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method BrandTranslation|_IH_BrandTranslation_C|BrandTranslation[] findOrFail($id, array $columns = ['*'])
     * @method BrandTranslation|_IH_BrandTranslation_C|BrandTranslation[] findOrNew($id, array $columns = ['*'])
     * @method BrandTranslation first(array|string $columns = ['*'])
     * @method BrandTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method BrandTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BrandTranslation firstOrFail(array $columns = ['*'])
     * @method BrandTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BrandTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BrandTranslation forceCreate(array $attributes)
     * @method _IH_BrandTranslation_C|BrandTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BrandTranslation_C|BrandTranslation[] get(array|string $columns = ['*'])
     * @method BrandTranslation getModel()
     * @method BrandTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BrandTranslation_C|BrandTranslation[] hydrate(array $items)
     * @method BrandTranslation make(array $attributes = [])
     * @method BrandTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BrandTranslation[]|_IH_BrandTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BrandTranslation[]|_IH_BrandTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BrandTranslation sole(array|string $columns = ['*'])
     * @method BrandTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BrandTranslation_QB extends _BaseBuilder {}

    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, $default = null)
     * @method Brand|null last(callable $callback = null, $default = null)
     * @method Brand|$this random(int|null $number = null)
     * @method Brand|null sole($key = null, $operator = null, $value = null)
     * @method Brand|null get($key, $default = null)
     * @method Brand|null first(callable $callback = null, $default = null)
     * @method Brand|null firstWhere(string $key, $operator = null, $value = null)
     * @method Brand|null find($key, $default = null)
     * @method Brand[] all()
     */
    class _IH_Brand_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Brand[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array $columns = ['*'])
     * @method Brand firstOrNew(array $attributes = [], array $values = [])
     * @method Brand firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Brand forceCreate(array $attributes)
     * @method _IH_Brand_C|Brand[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Brand_C|Brand[] get(array|string $columns = ['*'])
     * @method Brand getModel()
     * @method Brand[] getModels(array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] hydrate(array $items)
     * @method Brand make(array $attributes = [])
     * @method Brand newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Brand_QB extends _BaseBuilder {}

    /**
     * @method BusinessSetting|null getOrPut($key, $value)
     * @method BusinessSetting|$this shift(int $count = 1)
     * @method BusinessSetting|null firstOrFail($key = null, $operator = null, $value = null)
     * @method BusinessSetting|$this pop(int $count = 1)
     * @method BusinessSetting|null pull($key, $default = null)
     * @method BusinessSetting|null last(callable $callback = null, $default = null)
     * @method BusinessSetting|$this random(int|null $number = null)
     * @method BusinessSetting|null sole($key = null, $operator = null, $value = null)
     * @method BusinessSetting|null get($key, $default = null)
     * @method BusinessSetting|null first(callable $callback = null, $default = null)
     * @method BusinessSetting|null firstWhere(string $key, $operator = null, $value = null)
     * @method BusinessSetting|null find($key, $default = null)
     * @method BusinessSetting[] all()
     */
    class _IH_BusinessSetting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BusinessSetting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method BusinessSetting baseSole(array|string $columns = ['*'])
     * @method BusinessSetting create(array $attributes = [])
     * @method _IH_BusinessSetting_C|BusinessSetting[] cursor()
     * @method BusinessSetting|null|_IH_BusinessSetting_C|BusinessSetting[] find($id, array $columns = ['*'])
     * @method _IH_BusinessSetting_C|BusinessSetting[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method BusinessSetting|_IH_BusinessSetting_C|BusinessSetting[] findOrFail($id, array $columns = ['*'])
     * @method BusinessSetting|_IH_BusinessSetting_C|BusinessSetting[] findOrNew($id, array $columns = ['*'])
     * @method BusinessSetting first(array|string $columns = ['*'])
     * @method BusinessSetting firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method BusinessSetting firstOrCreate(array $attributes = [], array $values = [])
     * @method BusinessSetting firstOrFail(array $columns = ['*'])
     * @method BusinessSetting firstOrNew(array $attributes = [], array $values = [])
     * @method BusinessSetting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BusinessSetting forceCreate(array $attributes)
     * @method _IH_BusinessSetting_C|BusinessSetting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BusinessSetting_C|BusinessSetting[] get(array|string $columns = ['*'])
     * @method BusinessSetting getModel()
     * @method BusinessSetting[] getModels(array|string $columns = ['*'])
     * @method _IH_BusinessSetting_C|BusinessSetting[] hydrate(array $items)
     * @method BusinessSetting make(array $attributes = [])
     * @method BusinessSetting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BusinessSetting[]|_IH_BusinessSetting_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BusinessSetting[]|_IH_BusinessSetting_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BusinessSetting sole(array|string $columns = ['*'])
     * @method BusinessSetting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BusinessSetting_QB extends _BaseBuilder {}

    /**
     * @method CarrierRangePrice|null getOrPut($key, $value)
     * @method CarrierRangePrice|$this shift(int $count = 1)
     * @method CarrierRangePrice|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CarrierRangePrice|$this pop(int $count = 1)
     * @method CarrierRangePrice|null pull($key, $default = null)
     * @method CarrierRangePrice|null last(callable $callback = null, $default = null)
     * @method CarrierRangePrice|$this random(int|null $number = null)
     * @method CarrierRangePrice|null sole($key = null, $operator = null, $value = null)
     * @method CarrierRangePrice|null get($key, $default = null)
     * @method CarrierRangePrice|null first(callable $callback = null, $default = null)
     * @method CarrierRangePrice|null firstWhere(string $key, $operator = null, $value = null)
     * @method CarrierRangePrice|null find($key, $default = null)
     * @method CarrierRangePrice[] all()
     */
    class _IH_CarrierRangePrice_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CarrierRangePrice[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CarrierRangePrice baseSole(array|string $columns = ['*'])
     * @method CarrierRangePrice create(array $attributes = [])
     * @method _IH_CarrierRangePrice_C|CarrierRangePrice[] cursor()
     * @method CarrierRangePrice|null|_IH_CarrierRangePrice_C|CarrierRangePrice[] find($id, array $columns = ['*'])
     * @method _IH_CarrierRangePrice_C|CarrierRangePrice[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CarrierRangePrice|_IH_CarrierRangePrice_C|CarrierRangePrice[] findOrFail($id, array $columns = ['*'])
     * @method CarrierRangePrice|_IH_CarrierRangePrice_C|CarrierRangePrice[] findOrNew($id, array $columns = ['*'])
     * @method CarrierRangePrice first(array|string $columns = ['*'])
     * @method CarrierRangePrice firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CarrierRangePrice firstOrCreate(array $attributes = [], array $values = [])
     * @method CarrierRangePrice firstOrFail(array $columns = ['*'])
     * @method CarrierRangePrice firstOrNew(array $attributes = [], array $values = [])
     * @method CarrierRangePrice firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CarrierRangePrice forceCreate(array $attributes)
     * @method _IH_CarrierRangePrice_C|CarrierRangePrice[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CarrierRangePrice_C|CarrierRangePrice[] get(array|string $columns = ['*'])
     * @method CarrierRangePrice getModel()
     * @method CarrierRangePrice[] getModels(array|string $columns = ['*'])
     * @method _IH_CarrierRangePrice_C|CarrierRangePrice[] hydrate(array $items)
     * @method CarrierRangePrice make(array $attributes = [])
     * @method CarrierRangePrice newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CarrierRangePrice[]|_IH_CarrierRangePrice_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CarrierRangePrice[]|_IH_CarrierRangePrice_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CarrierRangePrice sole(array|string $columns = ['*'])
     * @method CarrierRangePrice updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CarrierRangePrice_QB extends _BaseBuilder {}

    /**
     * @method CarrierRange|null getOrPut($key, $value)
     * @method CarrierRange|$this shift(int $count = 1)
     * @method CarrierRange|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CarrierRange|$this pop(int $count = 1)
     * @method CarrierRange|null pull($key, $default = null)
     * @method CarrierRange|null last(callable $callback = null, $default = null)
     * @method CarrierRange|$this random(int|null $number = null)
     * @method CarrierRange|null sole($key = null, $operator = null, $value = null)
     * @method CarrierRange|null get($key, $default = null)
     * @method CarrierRange|null first(callable $callback = null, $default = null)
     * @method CarrierRange|null firstWhere(string $key, $operator = null, $value = null)
     * @method CarrierRange|null find($key, $default = null)
     * @method CarrierRange[] all()
     */
    class _IH_CarrierRange_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CarrierRange[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CarrierRange baseSole(array|string $columns = ['*'])
     * @method CarrierRange create(array $attributes = [])
     * @method _IH_CarrierRange_C|CarrierRange[] cursor()
     * @method CarrierRange|null|_IH_CarrierRange_C|CarrierRange[] find($id, array $columns = ['*'])
     * @method _IH_CarrierRange_C|CarrierRange[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CarrierRange|_IH_CarrierRange_C|CarrierRange[] findOrFail($id, array $columns = ['*'])
     * @method CarrierRange|_IH_CarrierRange_C|CarrierRange[] findOrNew($id, array $columns = ['*'])
     * @method CarrierRange first(array|string $columns = ['*'])
     * @method CarrierRange firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CarrierRange firstOrCreate(array $attributes = [], array $values = [])
     * @method CarrierRange firstOrFail(array $columns = ['*'])
     * @method CarrierRange firstOrNew(array $attributes = [], array $values = [])
     * @method CarrierRange firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CarrierRange forceCreate(array $attributes)
     * @method _IH_CarrierRange_C|CarrierRange[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CarrierRange_C|CarrierRange[] get(array|string $columns = ['*'])
     * @method CarrierRange getModel()
     * @method CarrierRange[] getModels(array|string $columns = ['*'])
     * @method _IH_CarrierRange_C|CarrierRange[] hydrate(array $items)
     * @method CarrierRange make(array $attributes = [])
     * @method CarrierRange newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CarrierRange[]|_IH_CarrierRange_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CarrierRange[]|_IH_CarrierRange_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CarrierRange sole(array|string $columns = ['*'])
     * @method CarrierRange updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CarrierRange_QB extends _BaseBuilder {}

    /**
     * @method Carrier|null getOrPut($key, $value)
     * @method Carrier|$this shift(int $count = 1)
     * @method Carrier|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Carrier|$this pop(int $count = 1)
     * @method Carrier|null pull($key, $default = null)
     * @method Carrier|null last(callable $callback = null, $default = null)
     * @method Carrier|$this random(int|null $number = null)
     * @method Carrier|null sole($key = null, $operator = null, $value = null)
     * @method Carrier|null get($key, $default = null)
     * @method Carrier|null first(callable $callback = null, $default = null)
     * @method Carrier|null firstWhere(string $key, $operator = null, $value = null)
     * @method Carrier|null find($key, $default = null)
     * @method Carrier[] all()
     */
    class _IH_Carrier_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Carrier[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Carrier baseSole(array|string $columns = ['*'])
     * @method Carrier create(array $attributes = [])
     * @method _IH_Carrier_C|Carrier[] cursor()
     * @method Carrier|null|_IH_Carrier_C|Carrier[] find($id, array $columns = ['*'])
     * @method _IH_Carrier_C|Carrier[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Carrier|_IH_Carrier_C|Carrier[] findOrFail($id, array $columns = ['*'])
     * @method Carrier|_IH_Carrier_C|Carrier[] findOrNew($id, array $columns = ['*'])
     * @method Carrier first(array|string $columns = ['*'])
     * @method Carrier firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Carrier firstOrCreate(array $attributes = [], array $values = [])
     * @method Carrier firstOrFail(array $columns = ['*'])
     * @method Carrier firstOrNew(array $attributes = [], array $values = [])
     * @method Carrier firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Carrier forceCreate(array $attributes)
     * @method _IH_Carrier_C|Carrier[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Carrier_C|Carrier[] get(array|string $columns = ['*'])
     * @method Carrier getModel()
     * @method Carrier[] getModels(array|string $columns = ['*'])
     * @method _IH_Carrier_C|Carrier[] hydrate(array $items)
     * @method Carrier make(array $attributes = [])
     * @method Carrier newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Carrier[]|_IH_Carrier_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Carrier[]|_IH_Carrier_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Carrier sole(array|string $columns = ['*'])
     * @method Carrier updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Carrier_QB active()
     */
    class _IH_Carrier_QB extends _BaseBuilder {}

    /**
     * @method CartProduct|null getOrPut($key, $value)
     * @method CartProduct|$this shift(int $count = 1)
     * @method CartProduct|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CartProduct|$this pop(int $count = 1)
     * @method CartProduct|null pull($key, $default = null)
     * @method CartProduct|null last(callable $callback = null, $default = null)
     * @method CartProduct|$this random(int|null $number = null)
     * @method CartProduct|null sole($key = null, $operator = null, $value = null)
     * @method CartProduct|null get($key, $default = null)
     * @method CartProduct|null first(callable $callback = null, $default = null)
     * @method CartProduct|null firstWhere(string $key, $operator = null, $value = null)
     * @method CartProduct|null find($key, $default = null)
     * @method CartProduct[] all()
     */
    class _IH_CartProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CartProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CartProduct baseSole(array|string $columns = ['*'])
     * @method CartProduct create(array $attributes = [])
     * @method _IH_CartProduct_C|CartProduct[] cursor()
     * @method CartProduct|null|_IH_CartProduct_C|CartProduct[] find($id, array $columns = ['*'])
     * @method _IH_CartProduct_C|CartProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CartProduct|_IH_CartProduct_C|CartProduct[] findOrFail($id, array $columns = ['*'])
     * @method CartProduct|_IH_CartProduct_C|CartProduct[] findOrNew($id, array $columns = ['*'])
     * @method CartProduct first(array|string $columns = ['*'])
     * @method CartProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CartProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CartProduct firstOrFail(array $columns = ['*'])
     * @method CartProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CartProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CartProduct forceCreate(array $attributes)
     * @method _IH_CartProduct_C|CartProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CartProduct_C|CartProduct[] get(array|string $columns = ['*'])
     * @method CartProduct getModel()
     * @method CartProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CartProduct_C|CartProduct[] hydrate(array $items)
     * @method CartProduct make(array $attributes = [])
     * @method CartProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CartProduct[]|_IH_CartProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CartProduct[]|_IH_CartProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CartProduct sole(array|string $columns = ['*'])
     * @method CartProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CartProduct_QB extends _BaseBuilder {}

    /**
     * @method Cart|null getOrPut($key, $value)
     * @method Cart|$this shift(int $count = 1)
     * @method Cart|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Cart|$this pop(int $count = 1)
     * @method Cart|null pull($key, $default = null)
     * @method Cart|null last(callable $callback = null, $default = null)
     * @method Cart|$this random(int|null $number = null)
     * @method Cart|null sole($key = null, $operator = null, $value = null)
     * @method Cart|null get($key, $default = null)
     * @method Cart|null first(callable $callback = null, $default = null)
     * @method Cart|null firstWhere(string $key, $operator = null, $value = null)
     * @method Cart|null find($key, $default = null)
     * @method Cart[] all()
     */
    class _IH_Cart_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Cart[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Cart baseSole(array|string $columns = ['*'])
     * @method Cart create(array $attributes = [])
     * @method _IH_Cart_C|Cart[] cursor()
     * @method Cart|null|_IH_Cart_C|Cart[] find($id, array $columns = ['*'])
     * @method _IH_Cart_C|Cart[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrFail($id, array $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrNew($id, array $columns = ['*'])
     * @method Cart first(array|string $columns = ['*'])
     * @method Cart firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Cart firstOrCreate(array $attributes = [], array $values = [])
     * @method Cart firstOrFail(array $columns = ['*'])
     * @method Cart firstOrNew(array $attributes = [], array $values = [])
     * @method Cart firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Cart forceCreate(array $attributes)
     * @method _IH_Cart_C|Cart[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Cart_C|Cart[] get(array|string $columns = ['*'])
     * @method Cart getModel()
     * @method Cart[] getModels(array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] hydrate(array $items)
     * @method Cart make(array $attributes = [])
     * @method Cart newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Cart[]|_IH_Cart_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Cart[]|_IH_Cart_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Cart sole(array|string $columns = ['*'])
     * @method Cart updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Cart_QB extends _BaseBuilder {}

    /**
     * @method CategoryTranslation|null getOrPut($key, $value)
     * @method CategoryTranslation|$this shift(int $count = 1)
     * @method CategoryTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CategoryTranslation|$this pop(int $count = 1)
     * @method CategoryTranslation|null pull($key, $default = null)
     * @method CategoryTranslation|null last(callable $callback = null, $default = null)
     * @method CategoryTranslation|$this random(int|null $number = null)
     * @method CategoryTranslation|null sole($key = null, $operator = null, $value = null)
     * @method CategoryTranslation|null get($key, $default = null)
     * @method CategoryTranslation|null first(callable $callback = null, $default = null)
     * @method CategoryTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method CategoryTranslation|null find($key, $default = null)
     * @method CategoryTranslation[] all()
     */
    class _IH_CategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CategoryTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CategoryTranslation baseSole(array|string $columns = ['*'])
     * @method CategoryTranslation create(array $attributes = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] cursor()
     * @method CategoryTranslation|null|_IH_CategoryTranslation_C|CategoryTranslation[] find($id, array $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrFail($id, array $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrNew($id, array $columns = ['*'])
     * @method CategoryTranslation first(array|string $columns = ['*'])
     * @method CategoryTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstOrFail(array $columns = ['*'])
     * @method CategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CategoryTranslation forceCreate(array $attributes)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] get(array|string $columns = ['*'])
     * @method CategoryTranslation getModel()
     * @method CategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] hydrate(array $items)
     * @method CategoryTranslation make(array $attributes = [])
     * @method CategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CategoryTranslation[]|_IH_CategoryTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CategoryTranslation[]|_IH_CategoryTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CategoryTranslation sole(array|string $columns = ['*'])
     * @method CategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CategoryTranslation_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, $default = null)
     * @method Category|null last(callable $callback = null, $default = null)
     * @method Category|$this random(int|null $number = null)
     * @method Category|null sole($key = null, $operator = null, $value = null)
     * @method Category|null get($key, $default = null)
     * @method Category|null first(callable $callback = null, $default = null)
     * @method Category|null firstWhere(string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method CityTranslation|null getOrPut($key, $value)
     * @method CityTranslation|$this shift(int $count = 1)
     * @method CityTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CityTranslation|$this pop(int $count = 1)
     * @method CityTranslation|null pull($key, $default = null)
     * @method CityTranslation|null last(callable $callback = null, $default = null)
     * @method CityTranslation|$this random(int|null $number = null)
     * @method CityTranslation|null sole($key = null, $operator = null, $value = null)
     * @method CityTranslation|null get($key, $default = null)
     * @method CityTranslation|null first(callable $callback = null, $default = null)
     * @method CityTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method CityTranslation|null find($key, $default = null)
     * @method CityTranslation[] all()
     */
    class _IH_CityTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CityTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CityTranslation baseSole(array|string $columns = ['*'])
     * @method CityTranslation create(array $attributes = [])
     * @method _IH_CityTranslation_C|CityTranslation[] cursor()
     * @method CityTranslation|null|_IH_CityTranslation_C|CityTranslation[] find($id, array $columns = ['*'])
     * @method _IH_CityTranslation_C|CityTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CityTranslation|_IH_CityTranslation_C|CityTranslation[] findOrFail($id, array $columns = ['*'])
     * @method CityTranslation|_IH_CityTranslation_C|CityTranslation[] findOrNew($id, array $columns = ['*'])
     * @method CityTranslation first(array|string $columns = ['*'])
     * @method CityTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CityTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CityTranslation firstOrFail(array $columns = ['*'])
     * @method CityTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CityTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CityTranslation forceCreate(array $attributes)
     * @method _IH_CityTranslation_C|CityTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CityTranslation_C|CityTranslation[] get(array|string $columns = ['*'])
     * @method CityTranslation getModel()
     * @method CityTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CityTranslation_C|CityTranslation[] hydrate(array $items)
     * @method CityTranslation make(array $attributes = [])
     * @method CityTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CityTranslation[]|_IH_CityTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CityTranslation[]|_IH_CityTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CityTranslation sole(array|string $columns = ['*'])
     * @method CityTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CityTranslation_QB extends _BaseBuilder {}

    /**
     * @method City|null getOrPut($key, $value)
     * @method City|$this shift(int $count = 1)
     * @method City|null firstOrFail($key = null, $operator = null, $value = null)
     * @method City|$this pop(int $count = 1)
     * @method City|null pull($key, $default = null)
     * @method City|null last(callable $callback = null, $default = null)
     * @method City|$this random(int|null $number = null)
     * @method City|null sole($key = null, $operator = null, $value = null)
     * @method City|null get($key, $default = null)
     * @method City|null first(callable $callback = null, $default = null)
     * @method City|null firstWhere(string $key, $operator = null, $value = null)
     * @method City|null find($key, $default = null)
     * @method City[] all()
     */
    class _IH_City_C extends _BaseCollection {
        /**
         * @param int $size
         * @return City[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method City baseSole(array|string $columns = ['*'])
     * @method City create(array $attributes = [])
     * @method _IH_City_C|City[] cursor()
     * @method City|null|_IH_City_C|City[] find($id, array $columns = ['*'])
     * @method _IH_City_C|City[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method City|_IH_City_C|City[] findOrFail($id, array $columns = ['*'])
     * @method City|_IH_City_C|City[] findOrNew($id, array $columns = ['*'])
     * @method City first(array|string $columns = ['*'])
     * @method City firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method City firstOrCreate(array $attributes = [], array $values = [])
     * @method City firstOrFail(array $columns = ['*'])
     * @method City firstOrNew(array $attributes = [], array $values = [])
     * @method City firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method City forceCreate(array $attributes)
     * @method _IH_City_C|City[] fromQuery(string $query, array $bindings = [])
     * @method _IH_City_C|City[] get(array|string $columns = ['*'])
     * @method City getModel()
     * @method City[] getModels(array|string $columns = ['*'])
     * @method _IH_City_C|City[] hydrate(array $items)
     * @method City make(array $attributes = [])
     * @method City newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|City[]|_IH_City_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|City[]|_IH_City_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method City sole(array|string $columns = ['*'])
     * @method City updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_City_QB extends _BaseBuilder {}

    /**
     * @method ClubPointDetail|null getOrPut($key, $value)
     * @method ClubPointDetail|$this shift(int $count = 1)
     * @method ClubPointDetail|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ClubPointDetail|$this pop(int $count = 1)
     * @method ClubPointDetail|null pull($key, $default = null)
     * @method ClubPointDetail|null last(callable $callback = null, $default = null)
     * @method ClubPointDetail|$this random(int|null $number = null)
     * @method ClubPointDetail|null sole($key = null, $operator = null, $value = null)
     * @method ClubPointDetail|null get($key, $default = null)
     * @method ClubPointDetail|null first(callable $callback = null, $default = null)
     * @method ClubPointDetail|null firstWhere(string $key, $operator = null, $value = null)
     * @method ClubPointDetail|null find($key, $default = null)
     * @method ClubPointDetail[] all()
     */
    class _IH_ClubPointDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ClubPointDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ClubPointDetail baseSole(array|string $columns = ['*'])
     * @method ClubPointDetail create(array $attributes = [])
     * @method _IH_ClubPointDetail_C|ClubPointDetail[] cursor()
     * @method ClubPointDetail|null|_IH_ClubPointDetail_C|ClubPointDetail[] find($id, array $columns = ['*'])
     * @method _IH_ClubPointDetail_C|ClubPointDetail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ClubPointDetail|_IH_ClubPointDetail_C|ClubPointDetail[] findOrFail($id, array $columns = ['*'])
     * @method ClubPointDetail|_IH_ClubPointDetail_C|ClubPointDetail[] findOrNew($id, array $columns = ['*'])
     * @method ClubPointDetail first(array|string $columns = ['*'])
     * @method ClubPointDetail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ClubPointDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method ClubPointDetail firstOrFail(array $columns = ['*'])
     * @method ClubPointDetail firstOrNew(array $attributes = [], array $values = [])
     * @method ClubPointDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ClubPointDetail forceCreate(array $attributes)
     * @method _IH_ClubPointDetail_C|ClubPointDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ClubPointDetail_C|ClubPointDetail[] get(array|string $columns = ['*'])
     * @method ClubPointDetail getModel()
     * @method ClubPointDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_ClubPointDetail_C|ClubPointDetail[] hydrate(array $items)
     * @method ClubPointDetail make(array $attributes = [])
     * @method ClubPointDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ClubPointDetail[]|_IH_ClubPointDetail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ClubPointDetail[]|_IH_ClubPointDetail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ClubPointDetail sole(array|string $columns = ['*'])
     * @method ClubPointDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ClubPointDetail_QB extends _BaseBuilder {}

    /**
     * @method ClubPoint|null getOrPut($key, $value)
     * @method ClubPoint|$this shift(int $count = 1)
     * @method ClubPoint|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ClubPoint|$this pop(int $count = 1)
     * @method ClubPoint|null pull($key, $default = null)
     * @method ClubPoint|null last(callable $callback = null, $default = null)
     * @method ClubPoint|$this random(int|null $number = null)
     * @method ClubPoint|null sole($key = null, $operator = null, $value = null)
     * @method ClubPoint|null get($key, $default = null)
     * @method ClubPoint|null first(callable $callback = null, $default = null)
     * @method ClubPoint|null firstWhere(string $key, $operator = null, $value = null)
     * @method ClubPoint|null find($key, $default = null)
     * @method ClubPoint[] all()
     */
    class _IH_ClubPoint_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ClubPoint[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ClubPoint baseSole(array|string $columns = ['*'])
     * @method ClubPoint create(array $attributes = [])
     * @method _IH_ClubPoint_C|ClubPoint[] cursor()
     * @method ClubPoint|null|_IH_ClubPoint_C|ClubPoint[] find($id, array $columns = ['*'])
     * @method _IH_ClubPoint_C|ClubPoint[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ClubPoint|_IH_ClubPoint_C|ClubPoint[] findOrFail($id, array $columns = ['*'])
     * @method ClubPoint|_IH_ClubPoint_C|ClubPoint[] findOrNew($id, array $columns = ['*'])
     * @method ClubPoint first(array|string $columns = ['*'])
     * @method ClubPoint firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ClubPoint firstOrCreate(array $attributes = [], array $values = [])
     * @method ClubPoint firstOrFail(array $columns = ['*'])
     * @method ClubPoint firstOrNew(array $attributes = [], array $values = [])
     * @method ClubPoint firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ClubPoint forceCreate(array $attributes)
     * @method _IH_ClubPoint_C|ClubPoint[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ClubPoint_C|ClubPoint[] get(array|string $columns = ['*'])
     * @method ClubPoint getModel()
     * @method ClubPoint[] getModels(array|string $columns = ['*'])
     * @method _IH_ClubPoint_C|ClubPoint[] hydrate(array $items)
     * @method ClubPoint make(array $attributes = [])
     * @method ClubPoint newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ClubPoint[]|_IH_ClubPoint_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ClubPoint[]|_IH_ClubPoint_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ClubPoint sole(array|string $columns = ['*'])
     * @method ClubPoint updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ClubPoint_QB extends _BaseBuilder {}

    /**
     * @method Color|null getOrPut($key, $value)
     * @method Color|$this shift(int $count = 1)
     * @method Color|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Color|$this pop(int $count = 1)
     * @method Color|null pull($key, $default = null)
     * @method Color|null last(callable $callback = null, $default = null)
     * @method Color|$this random(int|null $number = null)
     * @method Color|null sole($key = null, $operator = null, $value = null)
     * @method Color|null get($key, $default = null)
     * @method Color|null first(callable $callback = null, $default = null)
     * @method Color|null firstWhere(string $key, $operator = null, $value = null)
     * @method Color|null find($key, $default = null)
     * @method Color[] all()
     */
    class _IH_Color_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Color[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Color baseSole(array|string $columns = ['*'])
     * @method Color create(array $attributes = [])
     * @method _IH_Color_C|Color[] cursor()
     * @method Color|null|_IH_Color_C|Color[] find($id, array $columns = ['*'])
     * @method _IH_Color_C|Color[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Color|_IH_Color_C|Color[] findOrFail($id, array $columns = ['*'])
     * @method Color|_IH_Color_C|Color[] findOrNew($id, array $columns = ['*'])
     * @method Color first(array|string $columns = ['*'])
     * @method Color firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Color firstOrCreate(array $attributes = [], array $values = [])
     * @method Color firstOrFail(array $columns = ['*'])
     * @method Color firstOrNew(array $attributes = [], array $values = [])
     * @method Color firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Color forceCreate(array $attributes)
     * @method _IH_Color_C|Color[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Color_C|Color[] get(array|string $columns = ['*'])
     * @method Color getModel()
     * @method Color[] getModels(array|string $columns = ['*'])
     * @method _IH_Color_C|Color[] hydrate(array $items)
     * @method Color make(array $attributes = [])
     * @method Color newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Color[]|_IH_Color_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Color[]|_IH_Color_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Color sole(array|string $columns = ['*'])
     * @method Color updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Color_QB extends _BaseBuilder {}

    /**
     * @method CombinedOrder|null getOrPut($key, $value)
     * @method CombinedOrder|$this shift(int $count = 1)
     * @method CombinedOrder|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CombinedOrder|$this pop(int $count = 1)
     * @method CombinedOrder|null pull($key, $default = null)
     * @method CombinedOrder|null last(callable $callback = null, $default = null)
     * @method CombinedOrder|$this random(int|null $number = null)
     * @method CombinedOrder|null sole($key = null, $operator = null, $value = null)
     * @method CombinedOrder|null get($key, $default = null)
     * @method CombinedOrder|null first(callable $callback = null, $default = null)
     * @method CombinedOrder|null firstWhere(string $key, $operator = null, $value = null)
     * @method CombinedOrder|null find($key, $default = null)
     * @method CombinedOrder[] all()
     */
    class _IH_CombinedOrder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CombinedOrder[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CombinedOrder baseSole(array|string $columns = ['*'])
     * @method CombinedOrder create(array $attributes = [])
     * @method _IH_CombinedOrder_C|CombinedOrder[] cursor()
     * @method CombinedOrder|null|_IH_CombinedOrder_C|CombinedOrder[] find($id, array $columns = ['*'])
     * @method _IH_CombinedOrder_C|CombinedOrder[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CombinedOrder|_IH_CombinedOrder_C|CombinedOrder[] findOrFail($id, array $columns = ['*'])
     * @method CombinedOrder|_IH_CombinedOrder_C|CombinedOrder[] findOrNew($id, array $columns = ['*'])
     * @method CombinedOrder first(array|string $columns = ['*'])
     * @method CombinedOrder firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CombinedOrder firstOrCreate(array $attributes = [], array $values = [])
     * @method CombinedOrder firstOrFail(array $columns = ['*'])
     * @method CombinedOrder firstOrNew(array $attributes = [], array $values = [])
     * @method CombinedOrder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CombinedOrder forceCreate(array $attributes)
     * @method _IH_CombinedOrder_C|CombinedOrder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CombinedOrder_C|CombinedOrder[] get(array|string $columns = ['*'])
     * @method CombinedOrder getModel()
     * @method CombinedOrder[] getModels(array|string $columns = ['*'])
     * @method _IH_CombinedOrder_C|CombinedOrder[] hydrate(array $items)
     * @method CombinedOrder make(array $attributes = [])
     * @method CombinedOrder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CombinedOrder[]|_IH_CombinedOrder_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CombinedOrder[]|_IH_CombinedOrder_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CombinedOrder sole(array|string $columns = ['*'])
     * @method CombinedOrder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CombinedOrder_QB extends _BaseBuilder {}

    /**
     * @method CommissionHistory|null getOrPut($key, $value)
     * @method CommissionHistory|$this shift(int $count = 1)
     * @method CommissionHistory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CommissionHistory|$this pop(int $count = 1)
     * @method CommissionHistory|null pull($key, $default = null)
     * @method CommissionHistory|null last(callable $callback = null, $default = null)
     * @method CommissionHistory|$this random(int|null $number = null)
     * @method CommissionHistory|null sole($key = null, $operator = null, $value = null)
     * @method CommissionHistory|null get($key, $default = null)
     * @method CommissionHistory|null first(callable $callback = null, $default = null)
     * @method CommissionHistory|null firstWhere(string $key, $operator = null, $value = null)
     * @method CommissionHistory|null find($key, $default = null)
     * @method CommissionHistory[] all()
     */
    class _IH_CommissionHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CommissionHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CommissionHistory baseSole(array|string $columns = ['*'])
     * @method CommissionHistory create(array $attributes = [])
     * @method _IH_CommissionHistory_C|CommissionHistory[] cursor()
     * @method CommissionHistory|null|_IH_CommissionHistory_C|CommissionHistory[] find($id, array $columns = ['*'])
     * @method _IH_CommissionHistory_C|CommissionHistory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CommissionHistory|_IH_CommissionHistory_C|CommissionHistory[] findOrFail($id, array $columns = ['*'])
     * @method CommissionHistory|_IH_CommissionHistory_C|CommissionHistory[] findOrNew($id, array $columns = ['*'])
     * @method CommissionHistory first(array|string $columns = ['*'])
     * @method CommissionHistory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CommissionHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method CommissionHistory firstOrFail(array $columns = ['*'])
     * @method CommissionHistory firstOrNew(array $attributes = [], array $values = [])
     * @method CommissionHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CommissionHistory forceCreate(array $attributes)
     * @method _IH_CommissionHistory_C|CommissionHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CommissionHistory_C|CommissionHistory[] get(array|string $columns = ['*'])
     * @method CommissionHistory getModel()
     * @method CommissionHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_CommissionHistory_C|CommissionHistory[] hydrate(array $items)
     * @method CommissionHistory make(array $attributes = [])
     * @method CommissionHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CommissionHistory[]|_IH_CommissionHistory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CommissionHistory[]|_IH_CommissionHistory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CommissionHistory sole(array|string $columns = ['*'])
     * @method CommissionHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CommissionHistory_QB extends _BaseBuilder {}

    /**
     * @method Conversation|null getOrPut($key, $value)
     * @method Conversation|$this shift(int $count = 1)
     * @method Conversation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Conversation|$this pop(int $count = 1)
     * @method Conversation|null pull($key, $default = null)
     * @method Conversation|null last(callable $callback = null, $default = null)
     * @method Conversation|$this random(int|null $number = null)
     * @method Conversation|null sole($key = null, $operator = null, $value = null)
     * @method Conversation|null get($key, $default = null)
     * @method Conversation|null first(callable $callback = null, $default = null)
     * @method Conversation|null firstWhere(string $key, $operator = null, $value = null)
     * @method Conversation|null find($key, $default = null)
     * @method Conversation[] all()
     */
    class _IH_Conversation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Conversation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Conversation baseSole(array|string $columns = ['*'])
     * @method Conversation create(array $attributes = [])
     * @method _IH_Conversation_C|Conversation[] cursor()
     * @method Conversation|null|_IH_Conversation_C|Conversation[] find($id, array $columns = ['*'])
     * @method _IH_Conversation_C|Conversation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Conversation|_IH_Conversation_C|Conversation[] findOrFail($id, array $columns = ['*'])
     * @method Conversation|_IH_Conversation_C|Conversation[] findOrNew($id, array $columns = ['*'])
     * @method Conversation first(array|string $columns = ['*'])
     * @method Conversation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Conversation firstOrCreate(array $attributes = [], array $values = [])
     * @method Conversation firstOrFail(array $columns = ['*'])
     * @method Conversation firstOrNew(array $attributes = [], array $values = [])
     * @method Conversation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Conversation forceCreate(array $attributes)
     * @method _IH_Conversation_C|Conversation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Conversation_C|Conversation[] get(array|string $columns = ['*'])
     * @method Conversation getModel()
     * @method Conversation[] getModels(array|string $columns = ['*'])
     * @method _IH_Conversation_C|Conversation[] hydrate(array $items)
     * @method Conversation make(array $attributes = [])
     * @method Conversation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Conversation[]|_IH_Conversation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Conversation[]|_IH_Conversation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Conversation sole(array|string $columns = ['*'])
     * @method Conversation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Conversation_QB extends _BaseBuilder {}

    /**
     * @method Country|null getOrPut($key, $value)
     * @method Country|$this shift(int $count = 1)
     * @method Country|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Country|$this pop(int $count = 1)
     * @method Country|null pull($key, $default = null)
     * @method Country|null last(callable $callback = null, $default = null)
     * @method Country|$this random(int|null $number = null)
     * @method Country|null sole($key = null, $operator = null, $value = null)
     * @method Country|null get($key, $default = null)
     * @method Country|null first(callable $callback = null, $default = null)
     * @method Country|null firstWhere(string $key, $operator = null, $value = null)
     * @method Country|null find($key, $default = null)
     * @method Country[] all()
     */
    class _IH_Country_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Country[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Country baseSole(array|string $columns = ['*'])
     * @method Country create(array $attributes = [])
     * @method _IH_Country_C|Country[] cursor()
     * @method Country|null|_IH_Country_C|Country[] find($id, array $columns = ['*'])
     * @method _IH_Country_C|Country[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOrFail($id, array $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOrNew($id, array $columns = ['*'])
     * @method Country first(array|string $columns = ['*'])
     * @method Country firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Country firstOrCreate(array $attributes = [], array $values = [])
     * @method Country firstOrFail(array $columns = ['*'])
     * @method Country firstOrNew(array $attributes = [], array $values = [])
     * @method Country firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Country forceCreate(array $attributes)
     * @method _IH_Country_C|Country[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Country_C|Country[] get(array|string $columns = ['*'])
     * @method Country getModel()
     * @method Country[] getModels(array|string $columns = ['*'])
     * @method _IH_Country_C|Country[] hydrate(array $items)
     * @method Country make(array $attributes = [])
     * @method Country newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Country[]|_IH_Country_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Country[]|_IH_Country_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Country sole(array|string $columns = ['*'])
     * @method Country updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Country_QB extends _BaseBuilder {}

    /**
     * @method CouponUsage|null getOrPut($key, $value)
     * @method CouponUsage|$this shift(int $count = 1)
     * @method CouponUsage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CouponUsage|$this pop(int $count = 1)
     * @method CouponUsage|null pull($key, $default = null)
     * @method CouponUsage|null last(callable $callback = null, $default = null)
     * @method CouponUsage|$this random(int|null $number = null)
     * @method CouponUsage|null sole($key = null, $operator = null, $value = null)
     * @method CouponUsage|null get($key, $default = null)
     * @method CouponUsage|null first(callable $callback = null, $default = null)
     * @method CouponUsage|null firstWhere(string $key, $operator = null, $value = null)
     * @method CouponUsage|null find($key, $default = null)
     * @method CouponUsage[] all()
     */
    class _IH_CouponUsage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CouponUsage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CouponUsage baseSole(array|string $columns = ['*'])
     * @method CouponUsage create(array $attributes = [])
     * @method _IH_CouponUsage_C|CouponUsage[] cursor()
     * @method CouponUsage|null|_IH_CouponUsage_C|CouponUsage[] find($id, array $columns = ['*'])
     * @method _IH_CouponUsage_C|CouponUsage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CouponUsage|_IH_CouponUsage_C|CouponUsage[] findOrFail($id, array $columns = ['*'])
     * @method CouponUsage|_IH_CouponUsage_C|CouponUsage[] findOrNew($id, array $columns = ['*'])
     * @method CouponUsage first(array|string $columns = ['*'])
     * @method CouponUsage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CouponUsage firstOrCreate(array $attributes = [], array $values = [])
     * @method CouponUsage firstOrFail(array $columns = ['*'])
     * @method CouponUsage firstOrNew(array $attributes = [], array $values = [])
     * @method CouponUsage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CouponUsage forceCreate(array $attributes)
     * @method _IH_CouponUsage_C|CouponUsage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CouponUsage_C|CouponUsage[] get(array|string $columns = ['*'])
     * @method CouponUsage getModel()
     * @method CouponUsage[] getModels(array|string $columns = ['*'])
     * @method _IH_CouponUsage_C|CouponUsage[] hydrate(array $items)
     * @method CouponUsage make(array $attributes = [])
     * @method CouponUsage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CouponUsage[]|_IH_CouponUsage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CouponUsage[]|_IH_CouponUsage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CouponUsage sole(array|string $columns = ['*'])
     * @method CouponUsage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CouponUsage_QB extends _BaseBuilder {}

    /**
     * @method Coupon|null getOrPut($key, $value)
     * @method Coupon|$this shift(int $count = 1)
     * @method Coupon|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Coupon|$this pop(int $count = 1)
     * @method Coupon|null pull($key, $default = null)
     * @method Coupon|null last(callable $callback = null, $default = null)
     * @method Coupon|$this random(int|null $number = null)
     * @method Coupon|null sole($key = null, $operator = null, $value = null)
     * @method Coupon|null get($key, $default = null)
     * @method Coupon|null first(callable $callback = null, $default = null)
     * @method Coupon|null firstWhere(string $key, $operator = null, $value = null)
     * @method Coupon|null find($key, $default = null)
     * @method Coupon[] all()
     */
    class _IH_Coupon_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Coupon[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Coupon baseSole(array|string $columns = ['*'])
     * @method Coupon create(array $attributes = [])
     * @method _IH_Coupon_C|Coupon[] cursor()
     * @method Coupon|null|_IH_Coupon_C|Coupon[] find($id, array $columns = ['*'])
     * @method _IH_Coupon_C|Coupon[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Coupon|_IH_Coupon_C|Coupon[] findOrFail($id, array $columns = ['*'])
     * @method Coupon|_IH_Coupon_C|Coupon[] findOrNew($id, array $columns = ['*'])
     * @method Coupon first(array|string $columns = ['*'])
     * @method Coupon firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Coupon firstOrCreate(array $attributes = [], array $values = [])
     * @method Coupon firstOrFail(array $columns = ['*'])
     * @method Coupon firstOrNew(array $attributes = [], array $values = [])
     * @method Coupon firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Coupon forceCreate(array $attributes)
     * @method _IH_Coupon_C|Coupon[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Coupon_C|Coupon[] get(array|string $columns = ['*'])
     * @method Coupon getModel()
     * @method Coupon[] getModels(array|string $columns = ['*'])
     * @method _IH_Coupon_C|Coupon[] hydrate(array $items)
     * @method Coupon make(array $attributes = [])
     * @method Coupon newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Coupon[]|_IH_Coupon_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Coupon[]|_IH_Coupon_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Coupon sole(array|string $columns = ['*'])
     * @method Coupon updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Coupon_QB extends _BaseBuilder {}

    /**
     * @method Currency|null getOrPut($key, $value)
     * @method Currency|$this shift(int $count = 1)
     * @method Currency|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Currency|$this pop(int $count = 1)
     * @method Currency|null pull($key, $default = null)
     * @method Currency|null last(callable $callback = null, $default = null)
     * @method Currency|$this random(int|null $number = null)
     * @method Currency|null sole($key = null, $operator = null, $value = null)
     * @method Currency|null get($key, $default = null)
     * @method Currency|null first(callable $callback = null, $default = null)
     * @method Currency|null firstWhere(string $key, $operator = null, $value = null)
     * @method Currency|null find($key, $default = null)
     * @method Currency[] all()
     */
    class _IH_Currency_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Currency[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Currency baseSole(array|string $columns = ['*'])
     * @method Currency create(array $attributes = [])
     * @method _IH_Currency_C|Currency[] cursor()
     * @method Currency|null|_IH_Currency_C|Currency[] find($id, array $columns = ['*'])
     * @method _IH_Currency_C|Currency[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrFail($id, array $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrNew($id, array $columns = ['*'])
     * @method Currency first(array|string $columns = ['*'])
     * @method Currency firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Currency firstOrCreate(array $attributes = [], array $values = [])
     * @method Currency firstOrFail(array $columns = ['*'])
     * @method Currency firstOrNew(array $attributes = [], array $values = [])
     * @method Currency firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Currency forceCreate(array $attributes)
     * @method _IH_Currency_C|Currency[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Currency_C|Currency[] get(array|string $columns = ['*'])
     * @method Currency getModel()
     * @method Currency[] getModels(array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] hydrate(array $items)
     * @method Currency make(array $attributes = [])
     * @method Currency newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Currency[]|_IH_Currency_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Currency[]|_IH_Currency_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Currency sole(array|string $columns = ['*'])
     * @method Currency updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Currency_QB extends _BaseBuilder {}

    /**
     * @method CustomerPackagePayment|null getOrPut($key, $value)
     * @method CustomerPackagePayment|$this shift(int $count = 1)
     * @method CustomerPackagePayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CustomerPackagePayment|$this pop(int $count = 1)
     * @method CustomerPackagePayment|null pull($key, $default = null)
     * @method CustomerPackagePayment|null last(callable $callback = null, $default = null)
     * @method CustomerPackagePayment|$this random(int|null $number = null)
     * @method CustomerPackagePayment|null sole($key = null, $operator = null, $value = null)
     * @method CustomerPackagePayment|null get($key, $default = null)
     * @method CustomerPackagePayment|null first(callable $callback = null, $default = null)
     * @method CustomerPackagePayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomerPackagePayment|null find($key, $default = null)
     * @method CustomerPackagePayment[] all()
     */
    class _IH_CustomerPackagePayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomerPackagePayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CustomerPackagePayment baseSole(array|string $columns = ['*'])
     * @method CustomerPackagePayment create(array $attributes = [])
     * @method _IH_CustomerPackagePayment_C|CustomerPackagePayment[] cursor()
     * @method CustomerPackagePayment|null|_IH_CustomerPackagePayment_C|CustomerPackagePayment[] find($id, array $columns = ['*'])
     * @method _IH_CustomerPackagePayment_C|CustomerPackagePayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomerPackagePayment|_IH_CustomerPackagePayment_C|CustomerPackagePayment[] findOrFail($id, array $columns = ['*'])
     * @method CustomerPackagePayment|_IH_CustomerPackagePayment_C|CustomerPackagePayment[] findOrNew($id, array $columns = ['*'])
     * @method CustomerPackagePayment first(array|string $columns = ['*'])
     * @method CustomerPackagePayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomerPackagePayment firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomerPackagePayment firstOrFail(array $columns = ['*'])
     * @method CustomerPackagePayment firstOrNew(array $attributes = [], array $values = [])
     * @method CustomerPackagePayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomerPackagePayment forceCreate(array $attributes)
     * @method _IH_CustomerPackagePayment_C|CustomerPackagePayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomerPackagePayment_C|CustomerPackagePayment[] get(array|string $columns = ['*'])
     * @method CustomerPackagePayment getModel()
     * @method CustomerPackagePayment[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomerPackagePayment_C|CustomerPackagePayment[] hydrate(array $items)
     * @method CustomerPackagePayment make(array $attributes = [])
     * @method CustomerPackagePayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomerPackagePayment[]|_IH_CustomerPackagePayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomerPackagePayment[]|_IH_CustomerPackagePayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomerPackagePayment sole(array|string $columns = ['*'])
     * @method CustomerPackagePayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomerPackagePayment_QB extends _BaseBuilder {}

    /**
     * @method CustomerPackageTranslation|null getOrPut($key, $value)
     * @method CustomerPackageTranslation|$this shift(int $count = 1)
     * @method CustomerPackageTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CustomerPackageTranslation|$this pop(int $count = 1)
     * @method CustomerPackageTranslation|null pull($key, $default = null)
     * @method CustomerPackageTranslation|null last(callable $callback = null, $default = null)
     * @method CustomerPackageTranslation|$this random(int|null $number = null)
     * @method CustomerPackageTranslation|null sole($key = null, $operator = null, $value = null)
     * @method CustomerPackageTranslation|null get($key, $default = null)
     * @method CustomerPackageTranslation|null first(callable $callback = null, $default = null)
     * @method CustomerPackageTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomerPackageTranslation|null find($key, $default = null)
     * @method CustomerPackageTranslation[] all()
     */
    class _IH_CustomerPackageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomerPackageTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CustomerPackageTranslation baseSole(array|string $columns = ['*'])
     * @method CustomerPackageTranslation create(array $attributes = [])
     * @method _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] cursor()
     * @method CustomerPackageTranslation|null|_IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] find($id, array $columns = ['*'])
     * @method _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomerPackageTranslation|_IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] findOrFail($id, array $columns = ['*'])
     * @method CustomerPackageTranslation|_IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] findOrNew($id, array $columns = ['*'])
     * @method CustomerPackageTranslation first(array|string $columns = ['*'])
     * @method CustomerPackageTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomerPackageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomerPackageTranslation firstOrFail(array $columns = ['*'])
     * @method CustomerPackageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CustomerPackageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomerPackageTranslation forceCreate(array $attributes)
     * @method _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] get(array|string $columns = ['*'])
     * @method CustomerPackageTranslation getModel()
     * @method CustomerPackageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] hydrate(array $items)
     * @method CustomerPackageTranslation make(array $attributes = [])
     * @method CustomerPackageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomerPackageTranslation[]|_IH_CustomerPackageTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomerPackageTranslation[]|_IH_CustomerPackageTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomerPackageTranslation sole(array|string $columns = ['*'])
     * @method CustomerPackageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomerPackageTranslation_QB extends _BaseBuilder {}

    /**
     * @method CustomerPackage|null getOrPut($key, $value)
     * @method CustomerPackage|$this shift(int $count = 1)
     * @method CustomerPackage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CustomerPackage|$this pop(int $count = 1)
     * @method CustomerPackage|null pull($key, $default = null)
     * @method CustomerPackage|null last(callable $callback = null, $default = null)
     * @method CustomerPackage|$this random(int|null $number = null)
     * @method CustomerPackage|null sole($key = null, $operator = null, $value = null)
     * @method CustomerPackage|null get($key, $default = null)
     * @method CustomerPackage|null first(callable $callback = null, $default = null)
     * @method CustomerPackage|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomerPackage|null find($key, $default = null)
     * @method CustomerPackage[] all()
     */
    class _IH_CustomerPackage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomerPackage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CustomerPackage baseSole(array|string $columns = ['*'])
     * @method CustomerPackage create(array $attributes = [])
     * @method _IH_CustomerPackage_C|CustomerPackage[] cursor()
     * @method CustomerPackage|null|_IH_CustomerPackage_C|CustomerPackage[] find($id, array $columns = ['*'])
     * @method _IH_CustomerPackage_C|CustomerPackage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomerPackage|_IH_CustomerPackage_C|CustomerPackage[] findOrFail($id, array $columns = ['*'])
     * @method CustomerPackage|_IH_CustomerPackage_C|CustomerPackage[] findOrNew($id, array $columns = ['*'])
     * @method CustomerPackage first(array|string $columns = ['*'])
     * @method CustomerPackage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomerPackage firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomerPackage firstOrFail(array $columns = ['*'])
     * @method CustomerPackage firstOrNew(array $attributes = [], array $values = [])
     * @method CustomerPackage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomerPackage forceCreate(array $attributes)
     * @method _IH_CustomerPackage_C|CustomerPackage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomerPackage_C|CustomerPackage[] get(array|string $columns = ['*'])
     * @method CustomerPackage getModel()
     * @method CustomerPackage[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomerPackage_C|CustomerPackage[] hydrate(array $items)
     * @method CustomerPackage make(array $attributes = [])
     * @method CustomerPackage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomerPackage[]|_IH_CustomerPackage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomerPackage[]|_IH_CustomerPackage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomerPackage sole(array|string $columns = ['*'])
     * @method CustomerPackage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomerPackage_QB extends _BaseBuilder {}

    /**
     * @method CustomerProductTranslation|null getOrPut($key, $value)
     * @method CustomerProductTranslation|$this shift(int $count = 1)
     * @method CustomerProductTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CustomerProductTranslation|$this pop(int $count = 1)
     * @method CustomerProductTranslation|null pull($key, $default = null)
     * @method CustomerProductTranslation|null last(callable $callback = null, $default = null)
     * @method CustomerProductTranslation|$this random(int|null $number = null)
     * @method CustomerProductTranslation|null sole($key = null, $operator = null, $value = null)
     * @method CustomerProductTranslation|null get($key, $default = null)
     * @method CustomerProductTranslation|null first(callable $callback = null, $default = null)
     * @method CustomerProductTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomerProductTranslation|null find($key, $default = null)
     * @method CustomerProductTranslation[] all()
     */
    class _IH_CustomerProductTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomerProductTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CustomerProductTranslation baseSole(array|string $columns = ['*'])
     * @method CustomerProductTranslation create(array $attributes = [])
     * @method _IH_CustomerProductTranslation_C|CustomerProductTranslation[] cursor()
     * @method CustomerProductTranslation|null|_IH_CustomerProductTranslation_C|CustomerProductTranslation[] find($id, array $columns = ['*'])
     * @method _IH_CustomerProductTranslation_C|CustomerProductTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomerProductTranslation|_IH_CustomerProductTranslation_C|CustomerProductTranslation[] findOrFail($id, array $columns = ['*'])
     * @method CustomerProductTranslation|_IH_CustomerProductTranslation_C|CustomerProductTranslation[] findOrNew($id, array $columns = ['*'])
     * @method CustomerProductTranslation first(array|string $columns = ['*'])
     * @method CustomerProductTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomerProductTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomerProductTranslation firstOrFail(array $columns = ['*'])
     * @method CustomerProductTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CustomerProductTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomerProductTranslation forceCreate(array $attributes)
     * @method _IH_CustomerProductTranslation_C|CustomerProductTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomerProductTranslation_C|CustomerProductTranslation[] get(array|string $columns = ['*'])
     * @method CustomerProductTranslation getModel()
     * @method CustomerProductTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomerProductTranslation_C|CustomerProductTranslation[] hydrate(array $items)
     * @method CustomerProductTranslation make(array $attributes = [])
     * @method CustomerProductTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomerProductTranslation[]|_IH_CustomerProductTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomerProductTranslation[]|_IH_CustomerProductTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomerProductTranslation sole(array|string $columns = ['*'])
     * @method CustomerProductTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomerProductTranslation_QB extends _BaseBuilder {}

    /**
     * @method CustomerProduct|null getOrPut($key, $value)
     * @method CustomerProduct|$this shift(int $count = 1)
     * @method CustomerProduct|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CustomerProduct|$this pop(int $count = 1)
     * @method CustomerProduct|null pull($key, $default = null)
     * @method CustomerProduct|null last(callable $callback = null, $default = null)
     * @method CustomerProduct|$this random(int|null $number = null)
     * @method CustomerProduct|null sole($key = null, $operator = null, $value = null)
     * @method CustomerProduct|null get($key, $default = null)
     * @method CustomerProduct|null first(callable $callback = null, $default = null)
     * @method CustomerProduct|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomerProduct|null find($key, $default = null)
     * @method CustomerProduct[] all()
     */
    class _IH_CustomerProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomerProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method CustomerProduct baseSole(array|string $columns = ['*'])
     * @method CustomerProduct create(array $attributes = [])
     * @method _IH_CustomerProduct_C|CustomerProduct[] cursor()
     * @method CustomerProduct|null|_IH_CustomerProduct_C|CustomerProduct[] find($id, array $columns = ['*'])
     * @method _IH_CustomerProduct_C|CustomerProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomerProduct|_IH_CustomerProduct_C|CustomerProduct[] findOrFail($id, array $columns = ['*'])
     * @method CustomerProduct|_IH_CustomerProduct_C|CustomerProduct[] findOrNew($id, array $columns = ['*'])
     * @method CustomerProduct first(array|string $columns = ['*'])
     * @method CustomerProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomerProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomerProduct firstOrFail(array $columns = ['*'])
     * @method CustomerProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CustomerProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomerProduct forceCreate(array $attributes)
     * @method _IH_CustomerProduct_C|CustomerProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomerProduct_C|CustomerProduct[] get(array|string $columns = ['*'])
     * @method CustomerProduct getModel()
     * @method CustomerProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomerProduct_C|CustomerProduct[] hydrate(array $items)
     * @method CustomerProduct make(array $attributes = [])
     * @method CustomerProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomerProduct[]|_IH_CustomerProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomerProduct[]|_IH_CustomerProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomerProduct sole(array|string $columns = ['*'])
     * @method CustomerProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomerProduct_QB extends _BaseBuilder {}

    /**
     * @method Customer|null getOrPut($key, $value)
     * @method Customer|$this shift(int $count = 1)
     * @method Customer|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Customer|$this pop(int $count = 1)
     * @method Customer|null pull($key, $default = null)
     * @method Customer|null last(callable $callback = null, $default = null)
     * @method Customer|$this random(int|null $number = null)
     * @method Customer|null sole($key = null, $operator = null, $value = null)
     * @method Customer|null get($key, $default = null)
     * @method Customer|null first(callable $callback = null, $default = null)
     * @method Customer|null firstWhere(string $key, $operator = null, $value = null)
     * @method Customer|null find($key, $default = null)
     * @method Customer[] all()
     */
    class _IH_Customer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Customer[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Customer baseSole(array|string $columns = ['*'])
     * @method Customer create(array $attributes = [])
     * @method _IH_Customer_C|Customer[] cursor()
     * @method Customer|null|_IH_Customer_C|Customer[] find($id, array $columns = ['*'])
     * @method _IH_Customer_C|Customer[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOrFail($id, array $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOrNew($id, array $columns = ['*'])
     * @method Customer first(array|string $columns = ['*'])
     * @method Customer firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Customer firstOrCreate(array $attributes = [], array $values = [])
     * @method Customer firstOrFail(array $columns = ['*'])
     * @method Customer firstOrNew(array $attributes = [], array $values = [])
     * @method Customer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Customer forceCreate(array $attributes)
     * @method _IH_Customer_C|Customer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Customer_C|Customer[] get(array|string $columns = ['*'])
     * @method Customer getModel()
     * @method Customer[] getModels(array|string $columns = ['*'])
     * @method _IH_Customer_C|Customer[] hydrate(array $items)
     * @method Customer make(array $attributes = [])
     * @method Customer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Customer[]|_IH_Customer_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Customer[]|_IH_Customer_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Customer sole(array|string $columns = ['*'])
     * @method Customer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Customer_QB extends _BaseBuilder {}

    /**
     * @method DeliveryBoyCollection|null getOrPut($key, $value)
     * @method DeliveryBoyCollection|$this shift(int $count = 1)
     * @method DeliveryBoyCollection|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DeliveryBoyCollection|$this pop(int $count = 1)
     * @method DeliveryBoyCollection|null pull($key, $default = null)
     * @method DeliveryBoyCollection|null last(callable $callback = null, $default = null)
     * @method DeliveryBoyCollection|$this random(int|null $number = null)
     * @method DeliveryBoyCollection|null sole($key = null, $operator = null, $value = null)
     * @method DeliveryBoyCollection|null get($key, $default = null)
     * @method DeliveryBoyCollection|null first(callable $callback = null, $default = null)
     * @method DeliveryBoyCollection|null firstWhere(string $key, $operator = null, $value = null)
     * @method DeliveryBoyCollection|null find($key, $default = null)
     * @method DeliveryBoyCollection[] all()
     */
    class _IH_DeliveryBoyCollection_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeliveryBoyCollection[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DeliveryBoyCollection baseSole(array|string $columns = ['*'])
     * @method DeliveryBoyCollection create(array $attributes = [])
     * @method _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] cursor()
     * @method DeliveryBoyCollection|null|_IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] find($id, array $columns = ['*'])
     * @method _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DeliveryBoyCollection|_IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] findOrFail($id, array $columns = ['*'])
     * @method DeliveryBoyCollection|_IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] findOrNew($id, array $columns = ['*'])
     * @method DeliveryBoyCollection first(array|string $columns = ['*'])
     * @method DeliveryBoyCollection firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DeliveryBoyCollection firstOrCreate(array $attributes = [], array $values = [])
     * @method DeliveryBoyCollection firstOrFail(array $columns = ['*'])
     * @method DeliveryBoyCollection firstOrNew(array $attributes = [], array $values = [])
     * @method DeliveryBoyCollection firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeliveryBoyCollection forceCreate(array $attributes)
     * @method _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] get(array|string $columns = ['*'])
     * @method DeliveryBoyCollection getModel()
     * @method DeliveryBoyCollection[] getModels(array|string $columns = ['*'])
     * @method _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] hydrate(array $items)
     * @method DeliveryBoyCollection make(array $attributes = [])
     * @method DeliveryBoyCollection newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeliveryBoyCollection[]|_IH_DeliveryBoyCollection_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DeliveryBoyCollection[]|_IH_DeliveryBoyCollection_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeliveryBoyCollection sole(array|string $columns = ['*'])
     * @method DeliveryBoyCollection updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DeliveryBoyCollection_QB extends _BaseBuilder {}

    /**
     * @method DeliveryBoyPayment|null getOrPut($key, $value)
     * @method DeliveryBoyPayment|$this shift(int $count = 1)
     * @method DeliveryBoyPayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DeliveryBoyPayment|$this pop(int $count = 1)
     * @method DeliveryBoyPayment|null pull($key, $default = null)
     * @method DeliveryBoyPayment|null last(callable $callback = null, $default = null)
     * @method DeliveryBoyPayment|$this random(int|null $number = null)
     * @method DeliveryBoyPayment|null sole($key = null, $operator = null, $value = null)
     * @method DeliveryBoyPayment|null get($key, $default = null)
     * @method DeliveryBoyPayment|null first(callable $callback = null, $default = null)
     * @method DeliveryBoyPayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method DeliveryBoyPayment|null find($key, $default = null)
     * @method DeliveryBoyPayment[] all()
     */
    class _IH_DeliveryBoyPayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeliveryBoyPayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DeliveryBoyPayment baseSole(array|string $columns = ['*'])
     * @method DeliveryBoyPayment create(array $attributes = [])
     * @method _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] cursor()
     * @method DeliveryBoyPayment|null|_IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] find($id, array $columns = ['*'])
     * @method _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DeliveryBoyPayment|_IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] findOrFail($id, array $columns = ['*'])
     * @method DeliveryBoyPayment|_IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] findOrNew($id, array $columns = ['*'])
     * @method DeliveryBoyPayment first(array|string $columns = ['*'])
     * @method DeliveryBoyPayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DeliveryBoyPayment firstOrCreate(array $attributes = [], array $values = [])
     * @method DeliveryBoyPayment firstOrFail(array $columns = ['*'])
     * @method DeliveryBoyPayment firstOrNew(array $attributes = [], array $values = [])
     * @method DeliveryBoyPayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeliveryBoyPayment forceCreate(array $attributes)
     * @method _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] get(array|string $columns = ['*'])
     * @method DeliveryBoyPayment getModel()
     * @method DeliveryBoyPayment[] getModels(array|string $columns = ['*'])
     * @method _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] hydrate(array $items)
     * @method DeliveryBoyPayment make(array $attributes = [])
     * @method DeliveryBoyPayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeliveryBoyPayment[]|_IH_DeliveryBoyPayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DeliveryBoyPayment[]|_IH_DeliveryBoyPayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeliveryBoyPayment sole(array|string $columns = ['*'])
     * @method DeliveryBoyPayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DeliveryBoyPayment_QB extends _BaseBuilder {}

    /**
     * @method DeliveryBoy|null getOrPut($key, $value)
     * @method DeliveryBoy|$this shift(int $count = 1)
     * @method DeliveryBoy|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DeliveryBoy|$this pop(int $count = 1)
     * @method DeliveryBoy|null pull($key, $default = null)
     * @method DeliveryBoy|null last(callable $callback = null, $default = null)
     * @method DeliveryBoy|$this random(int|null $number = null)
     * @method DeliveryBoy|null sole($key = null, $operator = null, $value = null)
     * @method DeliveryBoy|null get($key, $default = null)
     * @method DeliveryBoy|null first(callable $callback = null, $default = null)
     * @method DeliveryBoy|null firstWhere(string $key, $operator = null, $value = null)
     * @method DeliveryBoy|null find($key, $default = null)
     * @method DeliveryBoy[] all()
     */
    class _IH_DeliveryBoy_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeliveryBoy[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DeliveryBoy baseSole(array|string $columns = ['*'])
     * @method DeliveryBoy create(array $attributes = [])
     * @method _IH_DeliveryBoy_C|DeliveryBoy[] cursor()
     * @method DeliveryBoy|null|_IH_DeliveryBoy_C|DeliveryBoy[] find($id, array $columns = ['*'])
     * @method _IH_DeliveryBoy_C|DeliveryBoy[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DeliveryBoy|_IH_DeliveryBoy_C|DeliveryBoy[] findOrFail($id, array $columns = ['*'])
     * @method DeliveryBoy|_IH_DeliveryBoy_C|DeliveryBoy[] findOrNew($id, array $columns = ['*'])
     * @method DeliveryBoy first(array|string $columns = ['*'])
     * @method DeliveryBoy firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DeliveryBoy firstOrCreate(array $attributes = [], array $values = [])
     * @method DeliveryBoy firstOrFail(array $columns = ['*'])
     * @method DeliveryBoy firstOrNew(array $attributes = [], array $values = [])
     * @method DeliveryBoy firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeliveryBoy forceCreate(array $attributes)
     * @method _IH_DeliveryBoy_C|DeliveryBoy[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeliveryBoy_C|DeliveryBoy[] get(array|string $columns = ['*'])
     * @method DeliveryBoy getModel()
     * @method DeliveryBoy[] getModels(array|string $columns = ['*'])
     * @method _IH_DeliveryBoy_C|DeliveryBoy[] hydrate(array $items)
     * @method DeliveryBoy make(array $attributes = [])
     * @method DeliveryBoy newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeliveryBoy[]|_IH_DeliveryBoy_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DeliveryBoy[]|_IH_DeliveryBoy_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeliveryBoy sole(array|string $columns = ['*'])
     * @method DeliveryBoy updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DeliveryBoy_QB extends _BaseBuilder {}

    /**
     * @method DeliveryHistory|null getOrPut($key, $value)
     * @method DeliveryHistory|$this shift(int $count = 1)
     * @method DeliveryHistory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DeliveryHistory|$this pop(int $count = 1)
     * @method DeliveryHistory|null pull($key, $default = null)
     * @method DeliveryHistory|null last(callable $callback = null, $default = null)
     * @method DeliveryHistory|$this random(int|null $number = null)
     * @method DeliveryHistory|null sole($key = null, $operator = null, $value = null)
     * @method DeliveryHistory|null get($key, $default = null)
     * @method DeliveryHistory|null first(callable $callback = null, $default = null)
     * @method DeliveryHistory|null firstWhere(string $key, $operator = null, $value = null)
     * @method DeliveryHistory|null find($key, $default = null)
     * @method DeliveryHistory[] all()
     */
    class _IH_DeliveryHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeliveryHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DeliveryHistory baseSole(array|string $columns = ['*'])
     * @method DeliveryHistory create(array $attributes = [])
     * @method _IH_DeliveryHistory_C|DeliveryHistory[] cursor()
     * @method DeliveryHistory|null|_IH_DeliveryHistory_C|DeliveryHistory[] find($id, array $columns = ['*'])
     * @method _IH_DeliveryHistory_C|DeliveryHistory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DeliveryHistory|_IH_DeliveryHistory_C|DeliveryHistory[] findOrFail($id, array $columns = ['*'])
     * @method DeliveryHistory|_IH_DeliveryHistory_C|DeliveryHistory[] findOrNew($id, array $columns = ['*'])
     * @method DeliveryHistory first(array|string $columns = ['*'])
     * @method DeliveryHistory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DeliveryHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method DeliveryHistory firstOrFail(array $columns = ['*'])
     * @method DeliveryHistory firstOrNew(array $attributes = [], array $values = [])
     * @method DeliveryHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeliveryHistory forceCreate(array $attributes)
     * @method _IH_DeliveryHistory_C|DeliveryHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeliveryHistory_C|DeliveryHistory[] get(array|string $columns = ['*'])
     * @method DeliveryHistory getModel()
     * @method DeliveryHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_DeliveryHistory_C|DeliveryHistory[] hydrate(array $items)
     * @method DeliveryHistory make(array $attributes = [])
     * @method DeliveryHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeliveryHistory[]|_IH_DeliveryHistory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DeliveryHistory[]|_IH_DeliveryHistory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeliveryHistory sole(array|string $columns = ['*'])
     * @method DeliveryHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DeliveryHistory_QB extends _BaseBuilder {}

    /**
     * @method FirebaseNotification|null getOrPut($key, $value)
     * @method FirebaseNotification|$this shift(int $count = 1)
     * @method FirebaseNotification|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FirebaseNotification|$this pop(int $count = 1)
     * @method FirebaseNotification|null pull($key, $default = null)
     * @method FirebaseNotification|null last(callable $callback = null, $default = null)
     * @method FirebaseNotification|$this random(int|null $number = null)
     * @method FirebaseNotification|null sole($key = null, $operator = null, $value = null)
     * @method FirebaseNotification|null get($key, $default = null)
     * @method FirebaseNotification|null first(callable $callback = null, $default = null)
     * @method FirebaseNotification|null firstWhere(string $key, $operator = null, $value = null)
     * @method FirebaseNotification|null find($key, $default = null)
     * @method FirebaseNotification[] all()
     */
    class _IH_FirebaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FirebaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method FirebaseNotification baseSole(array|string $columns = ['*'])
     * @method FirebaseNotification create(array $attributes = [])
     * @method _IH_FirebaseNotification_C|FirebaseNotification[] cursor()
     * @method FirebaseNotification|null|_IH_FirebaseNotification_C|FirebaseNotification[] find($id, array $columns = ['*'])
     * @method _IH_FirebaseNotification_C|FirebaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FirebaseNotification|_IH_FirebaseNotification_C|FirebaseNotification[] findOrFail($id, array $columns = ['*'])
     * @method FirebaseNotification|_IH_FirebaseNotification_C|FirebaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method FirebaseNotification first(array|string $columns = ['*'])
     * @method FirebaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FirebaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method FirebaseNotification firstOrFail(array $columns = ['*'])
     * @method FirebaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method FirebaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FirebaseNotification forceCreate(array $attributes)
     * @method _IH_FirebaseNotification_C|FirebaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FirebaseNotification_C|FirebaseNotification[] get(array|string $columns = ['*'])
     * @method FirebaseNotification getModel()
     * @method FirebaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_FirebaseNotification_C|FirebaseNotification[] hydrate(array $items)
     * @method FirebaseNotification make(array $attributes = [])
     * @method FirebaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FirebaseNotification[]|_IH_FirebaseNotification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FirebaseNotification[]|_IH_FirebaseNotification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FirebaseNotification sole(array|string $columns = ['*'])
     * @method FirebaseNotification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FirebaseNotification_QB extends _BaseBuilder {}

    /**
     * @method FlashDealProduct|null getOrPut($key, $value)
     * @method FlashDealProduct|$this shift(int $count = 1)
     * @method FlashDealProduct|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FlashDealProduct|$this pop(int $count = 1)
     * @method FlashDealProduct|null pull($key, $default = null)
     * @method FlashDealProduct|null last(callable $callback = null, $default = null)
     * @method FlashDealProduct|$this random(int|null $number = null)
     * @method FlashDealProduct|null sole($key = null, $operator = null, $value = null)
     * @method FlashDealProduct|null get($key, $default = null)
     * @method FlashDealProduct|null first(callable $callback = null, $default = null)
     * @method FlashDealProduct|null firstWhere(string $key, $operator = null, $value = null)
     * @method FlashDealProduct|null find($key, $default = null)
     * @method FlashDealProduct[] all()
     */
    class _IH_FlashDealProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FlashDealProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method FlashDealProduct baseSole(array|string $columns = ['*'])
     * @method FlashDealProduct create(array $attributes = [])
     * @method _IH_FlashDealProduct_C|FlashDealProduct[] cursor()
     * @method FlashDealProduct|null|_IH_FlashDealProduct_C|FlashDealProduct[] find($id, array $columns = ['*'])
     * @method _IH_FlashDealProduct_C|FlashDealProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FlashDealProduct|_IH_FlashDealProduct_C|FlashDealProduct[] findOrFail($id, array $columns = ['*'])
     * @method FlashDealProduct|_IH_FlashDealProduct_C|FlashDealProduct[] findOrNew($id, array $columns = ['*'])
     * @method FlashDealProduct first(array|string $columns = ['*'])
     * @method FlashDealProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FlashDealProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method FlashDealProduct firstOrFail(array $columns = ['*'])
     * @method FlashDealProduct firstOrNew(array $attributes = [], array $values = [])
     * @method FlashDealProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FlashDealProduct forceCreate(array $attributes)
     * @method _IH_FlashDealProduct_C|FlashDealProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FlashDealProduct_C|FlashDealProduct[] get(array|string $columns = ['*'])
     * @method FlashDealProduct getModel()
     * @method FlashDealProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_FlashDealProduct_C|FlashDealProduct[] hydrate(array $items)
     * @method FlashDealProduct make(array $attributes = [])
     * @method FlashDealProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FlashDealProduct[]|_IH_FlashDealProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FlashDealProduct[]|_IH_FlashDealProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FlashDealProduct sole(array|string $columns = ['*'])
     * @method FlashDealProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FlashDealProduct_QB extends _BaseBuilder {}

    /**
     * @method FlashDealTranslation|null getOrPut($key, $value)
     * @method FlashDealTranslation|$this shift(int $count = 1)
     * @method FlashDealTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FlashDealTranslation|$this pop(int $count = 1)
     * @method FlashDealTranslation|null pull($key, $default = null)
     * @method FlashDealTranslation|null last(callable $callback = null, $default = null)
     * @method FlashDealTranslation|$this random(int|null $number = null)
     * @method FlashDealTranslation|null sole($key = null, $operator = null, $value = null)
     * @method FlashDealTranslation|null get($key, $default = null)
     * @method FlashDealTranslation|null first(callable $callback = null, $default = null)
     * @method FlashDealTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method FlashDealTranslation|null find($key, $default = null)
     * @method FlashDealTranslation[] all()
     */
    class _IH_FlashDealTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FlashDealTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method FlashDealTranslation baseSole(array|string $columns = ['*'])
     * @method FlashDealTranslation create(array $attributes = [])
     * @method _IH_FlashDealTranslation_C|FlashDealTranslation[] cursor()
     * @method FlashDealTranslation|null|_IH_FlashDealTranslation_C|FlashDealTranslation[] find($id, array $columns = ['*'])
     * @method _IH_FlashDealTranslation_C|FlashDealTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FlashDealTranslation|_IH_FlashDealTranslation_C|FlashDealTranslation[] findOrFail($id, array $columns = ['*'])
     * @method FlashDealTranslation|_IH_FlashDealTranslation_C|FlashDealTranslation[] findOrNew($id, array $columns = ['*'])
     * @method FlashDealTranslation first(array|string $columns = ['*'])
     * @method FlashDealTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FlashDealTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FlashDealTranslation firstOrFail(array $columns = ['*'])
     * @method FlashDealTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FlashDealTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FlashDealTranslation forceCreate(array $attributes)
     * @method _IH_FlashDealTranslation_C|FlashDealTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FlashDealTranslation_C|FlashDealTranslation[] get(array|string $columns = ['*'])
     * @method FlashDealTranslation getModel()
     * @method FlashDealTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FlashDealTranslation_C|FlashDealTranslation[] hydrate(array $items)
     * @method FlashDealTranslation make(array $attributes = [])
     * @method FlashDealTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FlashDealTranslation[]|_IH_FlashDealTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FlashDealTranslation[]|_IH_FlashDealTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FlashDealTranslation sole(array|string $columns = ['*'])
     * @method FlashDealTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FlashDealTranslation_QB extends _BaseBuilder {}

    /**
     * @method FlashDeal|null getOrPut($key, $value)
     * @method FlashDeal|$this shift(int $count = 1)
     * @method FlashDeal|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FlashDeal|$this pop(int $count = 1)
     * @method FlashDeal|null pull($key, $default = null)
     * @method FlashDeal|null last(callable $callback = null, $default = null)
     * @method FlashDeal|$this random(int|null $number = null)
     * @method FlashDeal|null sole($key = null, $operator = null, $value = null)
     * @method FlashDeal|null get($key, $default = null)
     * @method FlashDeal|null first(callable $callback = null, $default = null)
     * @method FlashDeal|null firstWhere(string $key, $operator = null, $value = null)
     * @method FlashDeal|null find($key, $default = null)
     * @method FlashDeal[] all()
     */
    class _IH_FlashDeal_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FlashDeal[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method FlashDeal baseSole(array|string $columns = ['*'])
     * @method FlashDeal create(array $attributes = [])
     * @method _IH_FlashDeal_C|FlashDeal[] cursor()
     * @method FlashDeal|null|_IH_FlashDeal_C|FlashDeal[] find($id, array $columns = ['*'])
     * @method _IH_FlashDeal_C|FlashDeal[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FlashDeal|_IH_FlashDeal_C|FlashDeal[] findOrFail($id, array $columns = ['*'])
     * @method FlashDeal|_IH_FlashDeal_C|FlashDeal[] findOrNew($id, array $columns = ['*'])
     * @method FlashDeal first(array|string $columns = ['*'])
     * @method FlashDeal firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FlashDeal firstOrCreate(array $attributes = [], array $values = [])
     * @method FlashDeal firstOrFail(array $columns = ['*'])
     * @method FlashDeal firstOrNew(array $attributes = [], array $values = [])
     * @method FlashDeal firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FlashDeal forceCreate(array $attributes)
     * @method _IH_FlashDeal_C|FlashDeal[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FlashDeal_C|FlashDeal[] get(array|string $columns = ['*'])
     * @method FlashDeal getModel()
     * @method FlashDeal[] getModels(array|string $columns = ['*'])
     * @method _IH_FlashDeal_C|FlashDeal[] hydrate(array $items)
     * @method FlashDeal make(array $attributes = [])
     * @method FlashDeal newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FlashDeal[]|_IH_FlashDeal_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FlashDeal[]|_IH_FlashDeal_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FlashDeal sole(array|string $columns = ['*'])
     * @method FlashDeal updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FlashDeal_QB extends _BaseBuilder {}

    /**
     * @method Language|null getOrPut($key, $value)
     * @method Language|$this shift(int $count = 1)
     * @method Language|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Language|$this pop(int $count = 1)
     * @method Language|null pull($key, $default = null)
     * @method Language|null last(callable $callback = null, $default = null)
     * @method Language|$this random(int|null $number = null)
     * @method Language|null sole($key = null, $operator = null, $value = null)
     * @method Language|null get($key, $default = null)
     * @method Language|null first(callable $callback = null, $default = null)
     * @method Language|null firstWhere(string $key, $operator = null, $value = null)
     * @method Language|null find($key, $default = null)
     * @method Language[] all()
     */
    class _IH_Language_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Language[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Language baseSole(array|string $columns = ['*'])
     * @method Language create(array $attributes = [])
     * @method _IH_Language_C|Language[] cursor()
     * @method Language|null|_IH_Language_C|Language[] find($id, array $columns = ['*'])
     * @method _IH_Language_C|Language[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrFail($id, array $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrNew($id, array $columns = ['*'])
     * @method Language first(array|string $columns = ['*'])
     * @method Language firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Language firstOrCreate(array $attributes = [], array $values = [])
     * @method Language firstOrFail(array $columns = ['*'])
     * @method Language firstOrNew(array $attributes = [], array $values = [])
     * @method Language firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Language forceCreate(array $attributes)
     * @method _IH_Language_C|Language[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Language_C|Language[] get(array|string $columns = ['*'])
     * @method Language getModel()
     * @method Language[] getModels(array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] hydrate(array $items)
     * @method Language make(array $attributes = [])
     * @method Language newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Language[]|_IH_Language_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Language[]|_IH_Language_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Language sole(array|string $columns = ['*'])
     * @method Language updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Language_QB extends _BaseBuilder {}

    /**
     * @method ManualPaymentMethod|null getOrPut($key, $value)
     * @method ManualPaymentMethod|$this shift(int $count = 1)
     * @method ManualPaymentMethod|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ManualPaymentMethod|$this pop(int $count = 1)
     * @method ManualPaymentMethod|null pull($key, $default = null)
     * @method ManualPaymentMethod|null last(callable $callback = null, $default = null)
     * @method ManualPaymentMethod|$this random(int|null $number = null)
     * @method ManualPaymentMethod|null sole($key = null, $operator = null, $value = null)
     * @method ManualPaymentMethod|null get($key, $default = null)
     * @method ManualPaymentMethod|null first(callable $callback = null, $default = null)
     * @method ManualPaymentMethod|null firstWhere(string $key, $operator = null, $value = null)
     * @method ManualPaymentMethod|null find($key, $default = null)
     * @method ManualPaymentMethod[] all()
     */
    class _IH_ManualPaymentMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ManualPaymentMethod[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ManualPaymentMethod baseSole(array|string $columns = ['*'])
     * @method ManualPaymentMethod create(array $attributes = [])
     * @method _IH_ManualPaymentMethod_C|ManualPaymentMethod[] cursor()
     * @method ManualPaymentMethod|null|_IH_ManualPaymentMethod_C|ManualPaymentMethod[] find($id, array $columns = ['*'])
     * @method _IH_ManualPaymentMethod_C|ManualPaymentMethod[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ManualPaymentMethod|_IH_ManualPaymentMethod_C|ManualPaymentMethod[] findOrFail($id, array $columns = ['*'])
     * @method ManualPaymentMethod|_IH_ManualPaymentMethod_C|ManualPaymentMethod[] findOrNew($id, array $columns = ['*'])
     * @method ManualPaymentMethod first(array|string $columns = ['*'])
     * @method ManualPaymentMethod firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ManualPaymentMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method ManualPaymentMethod firstOrFail(array $columns = ['*'])
     * @method ManualPaymentMethod firstOrNew(array $attributes = [], array $values = [])
     * @method ManualPaymentMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ManualPaymentMethod forceCreate(array $attributes)
     * @method _IH_ManualPaymentMethod_C|ManualPaymentMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ManualPaymentMethod_C|ManualPaymentMethod[] get(array|string $columns = ['*'])
     * @method ManualPaymentMethod getModel()
     * @method ManualPaymentMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_ManualPaymentMethod_C|ManualPaymentMethod[] hydrate(array $items)
     * @method ManualPaymentMethod make(array $attributes = [])
     * @method ManualPaymentMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ManualPaymentMethod[]|_IH_ManualPaymentMethod_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ManualPaymentMethod[]|_IH_ManualPaymentMethod_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ManualPaymentMethod sole(array|string $columns = ['*'])
     * @method ManualPaymentMethod updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ManualPaymentMethod_QB extends _BaseBuilder {}

    /**
     * @method Message|null getOrPut($key, $value)
     * @method Message|$this shift(int $count = 1)
     * @method Message|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Message|$this pop(int $count = 1)
     * @method Message|null pull($key, $default = null)
     * @method Message|null last(callable $callback = null, $default = null)
     * @method Message|$this random(int|null $number = null)
     * @method Message|null sole($key = null, $operator = null, $value = null)
     * @method Message|null get($key, $default = null)
     * @method Message|null first(callable $callback = null, $default = null)
     * @method Message|null firstWhere(string $key, $operator = null, $value = null)
     * @method Message|null find($key, $default = null)
     * @method Message[] all()
     */
    class _IH_Message_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Message[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Message baseSole(array|string $columns = ['*'])
     * @method Message create(array $attributes = [])
     * @method _IH_Message_C|Message[] cursor()
     * @method Message|null|_IH_Message_C|Message[] find($id, array $columns = ['*'])
     * @method _IH_Message_C|Message[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOrFail($id, array $columns = ['*'])
     * @method Message|_IH_Message_C|Message[] findOrNew($id, array $columns = ['*'])
     * @method Message first(array|string $columns = ['*'])
     * @method Message firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Message firstOrCreate(array $attributes = [], array $values = [])
     * @method Message firstOrFail(array $columns = ['*'])
     * @method Message firstOrNew(array $attributes = [], array $values = [])
     * @method Message firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Message forceCreate(array $attributes)
     * @method _IH_Message_C|Message[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Message_C|Message[] get(array|string $columns = ['*'])
     * @method Message getModel()
     * @method Message[] getModels(array|string $columns = ['*'])
     * @method _IH_Message_C|Message[] hydrate(array $items)
     * @method Message make(array $attributes = [])
     * @method Message newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Message[]|_IH_Message_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Message[]|_IH_Message_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Message sole(array|string $columns = ['*'])
     * @method Message updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Message_QB extends _BaseBuilder {}

    /**
     * @method OrderDetail|null getOrPut($key, $value)
     * @method OrderDetail|$this shift(int $count = 1)
     * @method OrderDetail|null firstOrFail($key = null, $operator = null, $value = null)
     * @method OrderDetail|$this pop(int $count = 1)
     * @method OrderDetail|null pull($key, $default = null)
     * @method OrderDetail|null last(callable $callback = null, $default = null)
     * @method OrderDetail|$this random(int|null $number = null)
     * @method OrderDetail|null sole($key = null, $operator = null, $value = null)
     * @method OrderDetail|null get($key, $default = null)
     * @method OrderDetail|null first(callable $callback = null, $default = null)
     * @method OrderDetail|null firstWhere(string $key, $operator = null, $value = null)
     * @method OrderDetail|null find($key, $default = null)
     * @method OrderDetail[] all()
     */
    class _IH_OrderDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method OrderDetail baseSole(array|string $columns = ['*'])
     * @method OrderDetail create(array $attributes = [])
     * @method _IH_OrderDetail_C|OrderDetail[] cursor()
     * @method OrderDetail|null|_IH_OrderDetail_C|OrderDetail[] find($id, array $columns = ['*'])
     * @method _IH_OrderDetail_C|OrderDetail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OrderDetail|_IH_OrderDetail_C|OrderDetail[] findOrFail($id, array $columns = ['*'])
     * @method OrderDetail|_IH_OrderDetail_C|OrderDetail[] findOrNew($id, array $columns = ['*'])
     * @method OrderDetail first(array|string $columns = ['*'])
     * @method OrderDetail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OrderDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderDetail firstOrFail(array $columns = ['*'])
     * @method OrderDetail firstOrNew(array $attributes = [], array $values = [])
     * @method OrderDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderDetail forceCreate(array $attributes)
     * @method _IH_OrderDetail_C|OrderDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderDetail_C|OrderDetail[] get(array|string $columns = ['*'])
     * @method OrderDetail getModel()
     * @method OrderDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderDetail_C|OrderDetail[] hydrate(array $items)
     * @method OrderDetail make(array $attributes = [])
     * @method OrderDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderDetail[]|_IH_OrderDetail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderDetail[]|_IH_OrderDetail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderDetail sole(array|string $columns = ['*'])
     * @method OrderDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderDetail_QB extends _BaseBuilder {}

    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, $default = null)
     * @method Order|null last(callable $callback = null, $default = null)
     * @method Order|$this random(int|null $number = null)
     * @method Order|null sole($key = null, $operator = null, $value = null)
     * @method Order|null get($key, $default = null)
     * @method Order|null first(callable $callback = null, $default = null)
     * @method Order|null firstWhere(string $key, $operator = null, $value = null)
     * @method Order|null find($key, $default = null)
     * @method Order[] all()
     */
    class _IH_Order_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Order[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array $columns = ['*'])
     * @method Order firstOrNew(array $attributes = [], array $values = [])
     * @method Order firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _IH_Order_C|Order[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Order_C|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] hydrate(array $items)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Order_QB extends _BaseBuilder {}

    /**
     * @method OtpConfiguration|null getOrPut($key, $value)
     * @method OtpConfiguration|$this shift(int $count = 1)
     * @method OtpConfiguration|null firstOrFail($key = null, $operator = null, $value = null)
     * @method OtpConfiguration|$this pop(int $count = 1)
     * @method OtpConfiguration|null pull($key, $default = null)
     * @method OtpConfiguration|null last(callable $callback = null, $default = null)
     * @method OtpConfiguration|$this random(int|null $number = null)
     * @method OtpConfiguration|null sole($key = null, $operator = null, $value = null)
     * @method OtpConfiguration|null get($key, $default = null)
     * @method OtpConfiguration|null first(callable $callback = null, $default = null)
     * @method OtpConfiguration|null firstWhere(string $key, $operator = null, $value = null)
     * @method OtpConfiguration|null find($key, $default = null)
     * @method OtpConfiguration[] all()
     */
    class _IH_OtpConfiguration_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OtpConfiguration[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method OtpConfiguration baseSole(array|string $columns = ['*'])
     * @method OtpConfiguration create(array $attributes = [])
     * @method _IH_OtpConfiguration_C|OtpConfiguration[] cursor()
     * @method OtpConfiguration|null|_IH_OtpConfiguration_C|OtpConfiguration[] find($id, array $columns = ['*'])
     * @method _IH_OtpConfiguration_C|OtpConfiguration[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OtpConfiguration|_IH_OtpConfiguration_C|OtpConfiguration[] findOrFail($id, array $columns = ['*'])
     * @method OtpConfiguration|_IH_OtpConfiguration_C|OtpConfiguration[] findOrNew($id, array $columns = ['*'])
     * @method OtpConfiguration first(array|string $columns = ['*'])
     * @method OtpConfiguration firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OtpConfiguration firstOrCreate(array $attributes = [], array $values = [])
     * @method OtpConfiguration firstOrFail(array $columns = ['*'])
     * @method OtpConfiguration firstOrNew(array $attributes = [], array $values = [])
     * @method OtpConfiguration firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OtpConfiguration forceCreate(array $attributes)
     * @method _IH_OtpConfiguration_C|OtpConfiguration[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OtpConfiguration_C|OtpConfiguration[] get(array|string $columns = ['*'])
     * @method OtpConfiguration getModel()
     * @method OtpConfiguration[] getModels(array|string $columns = ['*'])
     * @method _IH_OtpConfiguration_C|OtpConfiguration[] hydrate(array $items)
     * @method OtpConfiguration make(array $attributes = [])
     * @method OtpConfiguration newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OtpConfiguration[]|_IH_OtpConfiguration_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OtpConfiguration[]|_IH_OtpConfiguration_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OtpConfiguration sole(array|string $columns = ['*'])
     * @method OtpConfiguration updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OtpConfiguration_QB extends _BaseBuilder {}

    /**
     * @method PageTranslation|null getOrPut($key, $value)
     * @method PageTranslation|$this shift(int $count = 1)
     * @method PageTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PageTranslation|$this pop(int $count = 1)
     * @method PageTranslation|null pull($key, $default = null)
     * @method PageTranslation|null last(callable $callback = null, $default = null)
     * @method PageTranslation|$this random(int|null $number = null)
     * @method PageTranslation|null sole($key = null, $operator = null, $value = null)
     * @method PageTranslation|null get($key, $default = null)
     * @method PageTranslation|null first(callable $callback = null, $default = null)
     * @method PageTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method PageTranslation|null find($key, $default = null)
     * @method PageTranslation[] all()
     */
    class _IH_PageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PageTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PageTranslation baseSole(array|string $columns = ['*'])
     * @method PageTranslation create(array $attributes = [])
     * @method _IH_PageTranslation_C|PageTranslation[] cursor()
     * @method PageTranslation|null|_IH_PageTranslation_C|PageTranslation[] find($id, array $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrFail($id, array $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrNew($id, array $columns = ['*'])
     * @method PageTranslation first(array|string $columns = ['*'])
     * @method PageTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PageTranslation firstOrFail(array $columns = ['*'])
     * @method PageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PageTranslation forceCreate(array $attributes)
     * @method _IH_PageTranslation_C|PageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PageTranslation_C|PageTranslation[] get(array|string $columns = ['*'])
     * @method PageTranslation getModel()
     * @method PageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] hydrate(array $items)
     * @method PageTranslation make(array $attributes = [])
     * @method PageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PageTranslation[]|_IH_PageTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PageTranslation[]|_IH_PageTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageTranslation sole(array|string $columns = ['*'])
     * @method PageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PageTranslation_QB extends _BaseBuilder {}

    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, $default = null)
     * @method Page|null last(callable $callback = null, $default = null)
     * @method Page|$this random(int|null $number = null)
     * @method Page|null sole($key = null, $operator = null, $value = null)
     * @method Page|null get($key, $default = null)
     * @method Page|null first(callable $callback = null, $default = null)
     * @method Page|null firstWhere(string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Page_QB extends _BaseBuilder {}

    /**
     * @method PasswordReset|null getOrPut($key, $value)
     * @method PasswordReset|$this shift(int $count = 1)
     * @method PasswordReset|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PasswordReset|$this pop(int $count = 1)
     * @method PasswordReset|null pull($key, $default = null)
     * @method PasswordReset|null last(callable $callback = null, $default = null)
     * @method PasswordReset|$this random(int|null $number = null)
     * @method PasswordReset|null sole($key = null, $operator = null, $value = null)
     * @method PasswordReset|null get($key, $default = null)
     * @method PasswordReset|null first(callable $callback = null, $default = null)
     * @method PasswordReset|null firstWhere(string $key, $operator = null, $value = null)
     * @method PasswordReset|null find($key, $default = null)
     * @method PasswordReset[] all()
     */
    class _IH_PasswordReset_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PasswordReset[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PasswordReset_QB whereEmail($value)
     * @method _IH_PasswordReset_QB whereToken($value)
     * @method _IH_PasswordReset_QB whereCreatedAt($value)
     * @method PasswordReset baseSole(array|string $columns = ['*'])
     * @method PasswordReset create(array $attributes = [])
     * @method _IH_PasswordReset_C|PasswordReset[] cursor()
     * @method PasswordReset|null|_IH_PasswordReset_C|PasswordReset[] find($id, array $columns = ['*'])
     * @method _IH_PasswordReset_C|PasswordReset[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PasswordReset|_IH_PasswordReset_C|PasswordReset[] findOrFail($id, array $columns = ['*'])
     * @method PasswordReset|_IH_PasswordReset_C|PasswordReset[] findOrNew($id, array $columns = ['*'])
     * @method PasswordReset first(array|string $columns = ['*'])
     * @method PasswordReset firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PasswordReset firstOrCreate(array $attributes = [], array $values = [])
     * @method PasswordReset firstOrFail(array $columns = ['*'])
     * @method PasswordReset firstOrNew(array $attributes = [], array $values = [])
     * @method PasswordReset firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PasswordReset forceCreate(array $attributes)
     * @method _IH_PasswordReset_C|PasswordReset[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PasswordReset_C|PasswordReset[] get(array|string $columns = ['*'])
     * @method PasswordReset getModel()
     * @method PasswordReset[] getModels(array|string $columns = ['*'])
     * @method _IH_PasswordReset_C|PasswordReset[] hydrate(array $items)
     * @method PasswordReset make(array $attributes = [])
     * @method PasswordReset newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PasswordReset[]|_IH_PasswordReset_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PasswordReset[]|_IH_PasswordReset_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PasswordReset sole(array|string $columns = ['*'])
     * @method PasswordReset updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PasswordReset_QB extends _BaseBuilder {}

    /**
     * @method Payment|null getOrPut($key, $value)
     * @method Payment|$this shift(int $count = 1)
     * @method Payment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Payment|$this pop(int $count = 1)
     * @method Payment|null pull($key, $default = null)
     * @method Payment|null last(callable $callback = null, $default = null)
     * @method Payment|$this random(int|null $number = null)
     * @method Payment|null sole($key = null, $operator = null, $value = null)
     * @method Payment|null get($key, $default = null)
     * @method Payment|null first(callable $callback = null, $default = null)
     * @method Payment|null firstWhere(string $key, $operator = null, $value = null)
     * @method Payment|null find($key, $default = null)
     * @method Payment[] all()
     */
    class _IH_Payment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Payment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Payment baseSole(array|string $columns = ['*'])
     * @method Payment create(array $attributes = [])
     * @method _IH_Payment_C|Payment[] cursor()
     * @method Payment|null|_IH_Payment_C|Payment[] find($id, array $columns = ['*'])
     * @method _IH_Payment_C|Payment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOrFail($id, array $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOrNew($id, array $columns = ['*'])
     * @method Payment first(array|string $columns = ['*'])
     * @method Payment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Payment firstOrCreate(array $attributes = [], array $values = [])
     * @method Payment firstOrFail(array $columns = ['*'])
     * @method Payment firstOrNew(array $attributes = [], array $values = [])
     * @method Payment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payment forceCreate(array $attributes)
     * @method _IH_Payment_C|Payment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Payment_C|Payment[] get(array|string $columns = ['*'])
     * @method Payment getModel()
     * @method Payment[] getModels(array|string $columns = ['*'])
     * @method _IH_Payment_C|Payment[] hydrate(array $items)
     * @method Payment make(array $attributes = [])
     * @method Payment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payment[]|_IH_Payment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Payment[]|_IH_Payment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payment sole(array|string $columns = ['*'])
     * @method Payment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Payment_QB extends _BaseBuilder {}

    /**
     * @method Permission|null getOrPut($key, $value)
     * @method Permission|$this shift(int $count = 1)
     * @method Permission|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null pull($key, $default = null)
     * @method Permission|null last(callable $callback = null, $default = null)
     * @method Permission|$this random(int|null $number = null)
     * @method Permission|null sole($key = null, $operator = null, $value = null)
     * @method Permission|null get($key, $default = null)
     * @method Permission|null first(callable $callback = null, $default = null)
     * @method Permission|null firstWhere(string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Permission_QB extends _BaseBuilder {}

    /**
     * @method PickupPointTranslation|null getOrPut($key, $value)
     * @method PickupPointTranslation|$this shift(int $count = 1)
     * @method PickupPointTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PickupPointTranslation|$this pop(int $count = 1)
     * @method PickupPointTranslation|null pull($key, $default = null)
     * @method PickupPointTranslation|null last(callable $callback = null, $default = null)
     * @method PickupPointTranslation|$this random(int|null $number = null)
     * @method PickupPointTranslation|null sole($key = null, $operator = null, $value = null)
     * @method PickupPointTranslation|null get($key, $default = null)
     * @method PickupPointTranslation|null first(callable $callback = null, $default = null)
     * @method PickupPointTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method PickupPointTranslation|null find($key, $default = null)
     * @method PickupPointTranslation[] all()
     */
    class _IH_PickupPointTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PickupPointTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PickupPointTranslation baseSole(array|string $columns = ['*'])
     * @method PickupPointTranslation create(array $attributes = [])
     * @method _IH_PickupPointTranslation_C|PickupPointTranslation[] cursor()
     * @method PickupPointTranslation|null|_IH_PickupPointTranslation_C|PickupPointTranslation[] find($id, array $columns = ['*'])
     * @method _IH_PickupPointTranslation_C|PickupPointTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PickupPointTranslation|_IH_PickupPointTranslation_C|PickupPointTranslation[] findOrFail($id, array $columns = ['*'])
     * @method PickupPointTranslation|_IH_PickupPointTranslation_C|PickupPointTranslation[] findOrNew($id, array $columns = ['*'])
     * @method PickupPointTranslation first(array|string $columns = ['*'])
     * @method PickupPointTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PickupPointTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PickupPointTranslation firstOrFail(array $columns = ['*'])
     * @method PickupPointTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PickupPointTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PickupPointTranslation forceCreate(array $attributes)
     * @method _IH_PickupPointTranslation_C|PickupPointTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PickupPointTranslation_C|PickupPointTranslation[] get(array|string $columns = ['*'])
     * @method PickupPointTranslation getModel()
     * @method PickupPointTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PickupPointTranslation_C|PickupPointTranslation[] hydrate(array $items)
     * @method PickupPointTranslation make(array $attributes = [])
     * @method PickupPointTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PickupPointTranslation[]|_IH_PickupPointTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PickupPointTranslation[]|_IH_PickupPointTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PickupPointTranslation sole(array|string $columns = ['*'])
     * @method PickupPointTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PickupPointTranslation_QB extends _BaseBuilder {}

    /**
     * @method PickupPoint|null getOrPut($key, $value)
     * @method PickupPoint|$this shift(int $count = 1)
     * @method PickupPoint|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PickupPoint|$this pop(int $count = 1)
     * @method PickupPoint|null pull($key, $default = null)
     * @method PickupPoint|null last(callable $callback = null, $default = null)
     * @method PickupPoint|$this random(int|null $number = null)
     * @method PickupPoint|null sole($key = null, $operator = null, $value = null)
     * @method PickupPoint|null get($key, $default = null)
     * @method PickupPoint|null first(callable $callback = null, $default = null)
     * @method PickupPoint|null firstWhere(string $key, $operator = null, $value = null)
     * @method PickupPoint|null find($key, $default = null)
     * @method PickupPoint[] all()
     */
    class _IH_PickupPoint_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PickupPoint[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PickupPoint baseSole(array|string $columns = ['*'])
     * @method PickupPoint create(array $attributes = [])
     * @method _IH_PickupPoint_C|PickupPoint[] cursor()
     * @method PickupPoint|null|_IH_PickupPoint_C|PickupPoint[] find($id, array $columns = ['*'])
     * @method _IH_PickupPoint_C|PickupPoint[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PickupPoint|_IH_PickupPoint_C|PickupPoint[] findOrFail($id, array $columns = ['*'])
     * @method PickupPoint|_IH_PickupPoint_C|PickupPoint[] findOrNew($id, array $columns = ['*'])
     * @method PickupPoint first(array|string $columns = ['*'])
     * @method PickupPoint firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PickupPoint firstOrCreate(array $attributes = [], array $values = [])
     * @method PickupPoint firstOrFail(array $columns = ['*'])
     * @method PickupPoint firstOrNew(array $attributes = [], array $values = [])
     * @method PickupPoint firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PickupPoint forceCreate(array $attributes)
     * @method _IH_PickupPoint_C|PickupPoint[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PickupPoint_C|PickupPoint[] get(array|string $columns = ['*'])
     * @method PickupPoint getModel()
     * @method PickupPoint[] getModels(array|string $columns = ['*'])
     * @method _IH_PickupPoint_C|PickupPoint[] hydrate(array $items)
     * @method PickupPoint make(array $attributes = [])
     * @method PickupPoint newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PickupPoint[]|_IH_PickupPoint_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PickupPoint[]|_IH_PickupPoint_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PickupPoint sole(array|string $columns = ['*'])
     * @method PickupPoint updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PickupPoint_QB extends _BaseBuilder {}

    /**
     * @method Policy|null getOrPut($key, $value)
     * @method Policy|$this shift(int $count = 1)
     * @method Policy|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Policy|$this pop(int $count = 1)
     * @method Policy|null pull($key, $default = null)
     * @method Policy|null last(callable $callback = null, $default = null)
     * @method Policy|$this random(int|null $number = null)
     * @method Policy|null sole($key = null, $operator = null, $value = null)
     * @method Policy|null get($key, $default = null)
     * @method Policy|null first(callable $callback = null, $default = null)
     * @method Policy|null firstWhere(string $key, $operator = null, $value = null)
     * @method Policy|null find($key, $default = null)
     * @method Policy[] all()
     */
    class _IH_Policy_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Policy[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Policy baseSole(array|string $columns = ['*'])
     * @method Policy create(array $attributes = [])
     * @method _IH_Policy_C|Policy[] cursor()
     * @method Policy|null|_IH_Policy_C|Policy[] find($id, array $columns = ['*'])
     * @method _IH_Policy_C|Policy[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Policy|_IH_Policy_C|Policy[] findOrFail($id, array $columns = ['*'])
     * @method Policy|_IH_Policy_C|Policy[] findOrNew($id, array $columns = ['*'])
     * @method Policy first(array|string $columns = ['*'])
     * @method Policy firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Policy firstOrCreate(array $attributes = [], array $values = [])
     * @method Policy firstOrFail(array $columns = ['*'])
     * @method Policy firstOrNew(array $attributes = [], array $values = [])
     * @method Policy firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Policy forceCreate(array $attributes)
     * @method _IH_Policy_C|Policy[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Policy_C|Policy[] get(array|string $columns = ['*'])
     * @method Policy getModel()
     * @method Policy[] getModels(array|string $columns = ['*'])
     * @method _IH_Policy_C|Policy[] hydrate(array $items)
     * @method Policy make(array $attributes = [])
     * @method Policy newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Policy[]|_IH_Policy_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Policy[]|_IH_Policy_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Policy sole(array|string $columns = ['*'])
     * @method Policy updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Policy_QB extends _BaseBuilder {}

    /**
     * @method ProductQuery|null getOrPut($key, $value)
     * @method ProductQuery|$this shift(int $count = 1)
     * @method ProductQuery|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductQuery|$this pop(int $count = 1)
     * @method ProductQuery|null pull($key, $default = null)
     * @method ProductQuery|null last(callable $callback = null, $default = null)
     * @method ProductQuery|$this random(int|null $number = null)
     * @method ProductQuery|null sole($key = null, $operator = null, $value = null)
     * @method ProductQuery|null get($key, $default = null)
     * @method ProductQuery|null first(callable $callback = null, $default = null)
     * @method ProductQuery|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductQuery|null find($key, $default = null)
     * @method ProductQuery[] all()
     */
    class _IH_ProductQuery_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductQuery[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductQuery_QB whereId($value)
     * @method _IH_ProductQuery_QB whereCustomerId($value)
     * @method _IH_ProductQuery_QB whereSellerId($value)
     * @method _IH_ProductQuery_QB whereProductId($value)
     * @method _IH_ProductQuery_QB whereQuestion($value)
     * @method _IH_ProductQuery_QB whereReply($value)
     * @method _IH_ProductQuery_QB whereCreatedAt($value)
     * @method _IH_ProductQuery_QB whereUpdatedAt($value)
     * @method ProductQuery baseSole(array|string $columns = ['*'])
     * @method ProductQuery create(array $attributes = [])
     * @method _IH_ProductQuery_C|ProductQuery[] cursor()
     * @method ProductQuery|null|_IH_ProductQuery_C|ProductQuery[] find($id, array $columns = ['*'])
     * @method _IH_ProductQuery_C|ProductQuery[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductQuery|_IH_ProductQuery_C|ProductQuery[] findOrFail($id, array $columns = ['*'])
     * @method ProductQuery|_IH_ProductQuery_C|ProductQuery[] findOrNew($id, array $columns = ['*'])
     * @method ProductQuery first(array|string $columns = ['*'])
     * @method ProductQuery firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductQuery firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductQuery firstOrFail(array $columns = ['*'])
     * @method ProductQuery firstOrNew(array $attributes = [], array $values = [])
     * @method ProductQuery firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductQuery forceCreate(array $attributes)
     * @method _IH_ProductQuery_C|ProductQuery[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductQuery_C|ProductQuery[] get(array|string $columns = ['*'])
     * @method ProductQuery getModel()
     * @method ProductQuery[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductQuery_C|ProductQuery[] hydrate(array $items)
     * @method ProductQuery make(array $attributes = [])
     * @method ProductQuery newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductQuery[]|_IH_ProductQuery_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductQuery[]|_IH_ProductQuery_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductQuery sole(array|string $columns = ['*'])
     * @method ProductQuery updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductQuery_QB extends _BaseBuilder {}

    /**
     * @method ProductStock|null getOrPut($key, $value)
     * @method ProductStock|$this shift(int $count = 1)
     * @method ProductStock|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductStock|$this pop(int $count = 1)
     * @method ProductStock|null pull($key, $default = null)
     * @method ProductStock|null last(callable $callback = null, $default = null)
     * @method ProductStock|$this random(int|null $number = null)
     * @method ProductStock|null sole($key = null, $operator = null, $value = null)
     * @method ProductStock|null get($key, $default = null)
     * @method ProductStock|null first(callable $callback = null, $default = null)
     * @method ProductStock|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductStock|null find($key, $default = null)
     * @method ProductStock[] all()
     */
    class _IH_ProductStock_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductStock[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductStock baseSole(array|string $columns = ['*'])
     * @method ProductStock create(array $attributes = [])
     * @method _IH_ProductStock_C|ProductStock[] cursor()
     * @method ProductStock|null|_IH_ProductStock_C|ProductStock[] find($id, array $columns = ['*'])
     * @method _IH_ProductStock_C|ProductStock[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductStock|_IH_ProductStock_C|ProductStock[] findOrFail($id, array $columns = ['*'])
     * @method ProductStock|_IH_ProductStock_C|ProductStock[] findOrNew($id, array $columns = ['*'])
     * @method ProductStock first(array|string $columns = ['*'])
     * @method ProductStock firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductStock firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductStock firstOrFail(array $columns = ['*'])
     * @method ProductStock firstOrNew(array $attributes = [], array $values = [])
     * @method ProductStock firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductStock forceCreate(array $attributes)
     * @method _IH_ProductStock_C|ProductStock[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductStock_C|ProductStock[] get(array|string $columns = ['*'])
     * @method ProductStock getModel()
     * @method ProductStock[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductStock_C|ProductStock[] hydrate(array $items)
     * @method ProductStock make(array $attributes = [])
     * @method ProductStock newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductStock[]|_IH_ProductStock_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductStock[]|_IH_ProductStock_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductStock sole(array|string $columns = ['*'])
     * @method ProductStock updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductStock_QB extends _BaseBuilder {}

    /**
     * @method ProductTax|null getOrPut($key, $value)
     * @method ProductTax|$this shift(int $count = 1)
     * @method ProductTax|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductTax|$this pop(int $count = 1)
     * @method ProductTax|null pull($key, $default = null)
     * @method ProductTax|null last(callable $callback = null, $default = null)
     * @method ProductTax|$this random(int|null $number = null)
     * @method ProductTax|null sole($key = null, $operator = null, $value = null)
     * @method ProductTax|null get($key, $default = null)
     * @method ProductTax|null first(callable $callback = null, $default = null)
     * @method ProductTax|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductTax|null find($key, $default = null)
     * @method ProductTax[] all()
     */
    class _IH_ProductTax_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTax[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductTax baseSole(array|string $columns = ['*'])
     * @method ProductTax create(array $attributes = [])
     * @method _IH_ProductTax_C|ProductTax[] cursor()
     * @method ProductTax|null|_IH_ProductTax_C|ProductTax[] find($id, array $columns = ['*'])
     * @method _IH_ProductTax_C|ProductTax[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductTax|_IH_ProductTax_C|ProductTax[] findOrFail($id, array $columns = ['*'])
     * @method ProductTax|_IH_ProductTax_C|ProductTax[] findOrNew($id, array $columns = ['*'])
     * @method ProductTax first(array|string $columns = ['*'])
     * @method ProductTax firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductTax firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTax firstOrFail(array $columns = ['*'])
     * @method ProductTax firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTax firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTax forceCreate(array $attributes)
     * @method _IH_ProductTax_C|ProductTax[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTax_C|ProductTax[] get(array|string $columns = ['*'])
     * @method ProductTax getModel()
     * @method ProductTax[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTax_C|ProductTax[] hydrate(array $items)
     * @method ProductTax make(array $attributes = [])
     * @method ProductTax newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTax[]|_IH_ProductTax_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTax[]|_IH_ProductTax_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTax sole(array|string $columns = ['*'])
     * @method ProductTax updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTax_QB extends _BaseBuilder {}

    /**
     * @method ProductTranslation|null getOrPut($key, $value)
     * @method ProductTranslation|$this shift(int $count = 1)
     * @method ProductTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductTranslation|$this pop(int $count = 1)
     * @method ProductTranslation|null pull($key, $default = null)
     * @method ProductTranslation|null last(callable $callback = null, $default = null)
     * @method ProductTranslation|$this random(int|null $number = null)
     * @method ProductTranslation|null sole($key = null, $operator = null, $value = null)
     * @method ProductTranslation|null get($key, $default = null)
     * @method ProductTranslation|null first(callable $callback = null, $default = null)
     * @method ProductTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductTranslation|null find($key, $default = null)
     * @method ProductTranslation[] all()
     */
    class _IH_ProductTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductTranslation baseSole(array|string $columns = ['*'])
     * @method ProductTranslation create(array $attributes = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] cursor()
     * @method ProductTranslation|null|_IH_ProductTranslation_C|ProductTranslation[] find($id, array $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrFail($id, array $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrNew($id, array $columns = ['*'])
     * @method ProductTranslation first(array|string $columns = ['*'])
     * @method ProductTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTranslation firstOrFail(array $columns = ['*'])
     * @method ProductTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTranslation forceCreate(array $attributes)
     * @method _IH_ProductTranslation_C|ProductTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] get(array|string $columns = ['*'])
     * @method ProductTranslation getModel()
     * @method ProductTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] hydrate(array $items)
     * @method ProductTranslation make(array $attributes = [])
     * @method ProductTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTranslation[]|_IH_ProductTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTranslation[]|_IH_ProductTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTranslation sole(array|string $columns = ['*'])
     * @method ProductTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTranslation_QB extends _BaseBuilder {}

    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, $default = null)
     * @method Product|null last(callable $callback = null, $default = null)
     * @method Product|$this random(int|null $number = null)
     * @method Product|null sole($key = null, $operator = null, $value = null)
     * @method Product|null get($key, $default = null)
     * @method Product|null first(callable $callback = null, $default = null)
     * @method Product|null firstWhere(string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Product_QB physical()
     */
    class _IH_Product_QB extends _BaseBuilder {}

    /**
     * @method ProxyPayment|null getOrPut($key, $value)
     * @method ProxyPayment|$this shift(int $count = 1)
     * @method ProxyPayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProxyPayment|$this pop(int $count = 1)
     * @method ProxyPayment|null pull($key, $default = null)
     * @method ProxyPayment|null last(callable $callback = null, $default = null)
     * @method ProxyPayment|$this random(int|null $number = null)
     * @method ProxyPayment|null sole($key = null, $operator = null, $value = null)
     * @method ProxyPayment|null get($key, $default = null)
     * @method ProxyPayment|null first(callable $callback = null, $default = null)
     * @method ProxyPayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProxyPayment|null find($key, $default = null)
     * @method ProxyPayment[] all()
     */
    class _IH_ProxyPayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProxyPayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProxyPayment baseSole(array|string $columns = ['*'])
     * @method ProxyPayment create(array $attributes = [])
     * @method _IH_ProxyPayment_C|ProxyPayment[] cursor()
     * @method ProxyPayment|null|_IH_ProxyPayment_C|ProxyPayment[] find($id, array $columns = ['*'])
     * @method _IH_ProxyPayment_C|ProxyPayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProxyPayment|_IH_ProxyPayment_C|ProxyPayment[] findOrFail($id, array $columns = ['*'])
     * @method ProxyPayment|_IH_ProxyPayment_C|ProxyPayment[] findOrNew($id, array $columns = ['*'])
     * @method ProxyPayment first(array|string $columns = ['*'])
     * @method ProxyPayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProxyPayment firstOrCreate(array $attributes = [], array $values = [])
     * @method ProxyPayment firstOrFail(array $columns = ['*'])
     * @method ProxyPayment firstOrNew(array $attributes = [], array $values = [])
     * @method ProxyPayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProxyPayment forceCreate(array $attributes)
     * @method _IH_ProxyPayment_C|ProxyPayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProxyPayment_C|ProxyPayment[] get(array|string $columns = ['*'])
     * @method ProxyPayment getModel()
     * @method ProxyPayment[] getModels(array|string $columns = ['*'])
     * @method _IH_ProxyPayment_C|ProxyPayment[] hydrate(array $items)
     * @method ProxyPayment make(array $attributes = [])
     * @method ProxyPayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProxyPayment[]|_IH_ProxyPayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProxyPayment[]|_IH_ProxyPayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProxyPayment sole(array|string $columns = ['*'])
     * @method ProxyPayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProxyPayment_QB extends _BaseBuilder {}

    /**
     * @method RefundRequest|null getOrPut($key, $value)
     * @method RefundRequest|$this shift(int $count = 1)
     * @method RefundRequest|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RefundRequest|$this pop(int $count = 1)
     * @method RefundRequest|null pull($key, $default = null)
     * @method RefundRequest|null last(callable $callback = null, $default = null)
     * @method RefundRequest|$this random(int|null $number = null)
     * @method RefundRequest|null sole($key = null, $operator = null, $value = null)
     * @method RefundRequest|null get($key, $default = null)
     * @method RefundRequest|null first(callable $callback = null, $default = null)
     * @method RefundRequest|null firstWhere(string $key, $operator = null, $value = null)
     * @method RefundRequest|null find($key, $default = null)
     * @method RefundRequest[] all()
     */
    class _IH_RefundRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RefundRequest[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method RefundRequest baseSole(array|string $columns = ['*'])
     * @method RefundRequest create(array $attributes = [])
     * @method _IH_RefundRequest_C|RefundRequest[] cursor()
     * @method RefundRequest|null|_IH_RefundRequest_C|RefundRequest[] find($id, array $columns = ['*'])
     * @method _IH_RefundRequest_C|RefundRequest[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RefundRequest|_IH_RefundRequest_C|RefundRequest[] findOrFail($id, array $columns = ['*'])
     * @method RefundRequest|_IH_RefundRequest_C|RefundRequest[] findOrNew($id, array $columns = ['*'])
     * @method RefundRequest first(array|string $columns = ['*'])
     * @method RefundRequest firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RefundRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method RefundRequest firstOrFail(array $columns = ['*'])
     * @method RefundRequest firstOrNew(array $attributes = [], array $values = [])
     * @method RefundRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RefundRequest forceCreate(array $attributes)
     * @method _IH_RefundRequest_C|RefundRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RefundRequest_C|RefundRequest[] get(array|string $columns = ['*'])
     * @method RefundRequest getModel()
     * @method RefundRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_RefundRequest_C|RefundRequest[] hydrate(array $items)
     * @method RefundRequest make(array $attributes = [])
     * @method RefundRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RefundRequest[]|_IH_RefundRequest_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RefundRequest[]|_IH_RefundRequest_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RefundRequest sole(array|string $columns = ['*'])
     * @method RefundRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RefundRequest_QB extends _BaseBuilder {}

    /**
     * @method Review|null getOrPut($key, $value)
     * @method Review|$this shift(int $count = 1)
     * @method Review|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Review|$this pop(int $count = 1)
     * @method Review|null pull($key, $default = null)
     * @method Review|null last(callable $callback = null, $default = null)
     * @method Review|$this random(int|null $number = null)
     * @method Review|null sole($key = null, $operator = null, $value = null)
     * @method Review|null get($key, $default = null)
     * @method Review|null first(callable $callback = null, $default = null)
     * @method Review|null firstWhere(string $key, $operator = null, $value = null)
     * @method Review|null find($key, $default = null)
     * @method Review[] all()
     */
    class _IH_Review_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Review[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Review baseSole(array|string $columns = ['*'])
     * @method Review create(array $attributes = [])
     * @method _IH_Review_C|Review[] cursor()
     * @method Review|null|_IH_Review_C|Review[] find($id, array $columns = ['*'])
     * @method _IH_Review_C|Review[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Review|_IH_Review_C|Review[] findOrFail($id, array $columns = ['*'])
     * @method Review|_IH_Review_C|Review[] findOrNew($id, array $columns = ['*'])
     * @method Review first(array|string $columns = ['*'])
     * @method Review firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Review firstOrCreate(array $attributes = [], array $values = [])
     * @method Review firstOrFail(array $columns = ['*'])
     * @method Review firstOrNew(array $attributes = [], array $values = [])
     * @method Review firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Review forceCreate(array $attributes)
     * @method _IH_Review_C|Review[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Review_C|Review[] get(array|string $columns = ['*'])
     * @method Review getModel()
     * @method Review[] getModels(array|string $columns = ['*'])
     * @method _IH_Review_C|Review[] hydrate(array $items)
     * @method Review make(array $attributes = [])
     * @method Review newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Review[]|_IH_Review_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Review[]|_IH_Review_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Review sole(array|string $columns = ['*'])
     * @method Review updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Review_QB extends _BaseBuilder {}

    /**
     * @method RoleTranslation|null getOrPut($key, $value)
     * @method RoleTranslation|$this shift(int $count = 1)
     * @method RoleTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RoleTranslation|$this pop(int $count = 1)
     * @method RoleTranslation|null pull($key, $default = null)
     * @method RoleTranslation|null last(callable $callback = null, $default = null)
     * @method RoleTranslation|$this random(int|null $number = null)
     * @method RoleTranslation|null sole($key = null, $operator = null, $value = null)
     * @method RoleTranslation|null get($key, $default = null)
     * @method RoleTranslation|null first(callable $callback = null, $default = null)
     * @method RoleTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method RoleTranslation|null find($key, $default = null)
     * @method RoleTranslation[] all()
     */
    class _IH_RoleTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RoleTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method RoleTranslation baseSole(array|string $columns = ['*'])
     * @method RoleTranslation create(array $attributes = [])
     * @method _IH_RoleTranslation_C|RoleTranslation[] cursor()
     * @method RoleTranslation|null|_IH_RoleTranslation_C|RoleTranslation[] find($id, array $columns = ['*'])
     * @method _IH_RoleTranslation_C|RoleTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RoleTranslation|_IH_RoleTranslation_C|RoleTranslation[] findOrFail($id, array $columns = ['*'])
     * @method RoleTranslation|_IH_RoleTranslation_C|RoleTranslation[] findOrNew($id, array $columns = ['*'])
     * @method RoleTranslation first(array|string $columns = ['*'])
     * @method RoleTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RoleTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method RoleTranslation firstOrFail(array $columns = ['*'])
     * @method RoleTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method RoleTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RoleTranslation forceCreate(array $attributes)
     * @method _IH_RoleTranslation_C|RoleTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RoleTranslation_C|RoleTranslation[] get(array|string $columns = ['*'])
     * @method RoleTranslation getModel()
     * @method RoleTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_RoleTranslation_C|RoleTranslation[] hydrate(array $items)
     * @method RoleTranslation make(array $attributes = [])
     * @method RoleTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RoleTranslation[]|_IH_RoleTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RoleTranslation[]|_IH_RoleTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RoleTranslation sole(array|string $columns = ['*'])
     * @method RoleTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RoleTranslation_QB extends _BaseBuilder {}

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random(int|null $number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method Search|null getOrPut($key, $value)
     * @method Search|$this shift(int $count = 1)
     * @method Search|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Search|$this pop(int $count = 1)
     * @method Search|null pull($key, $default = null)
     * @method Search|null last(callable $callback = null, $default = null)
     * @method Search|$this random(int|null $number = null)
     * @method Search|null sole($key = null, $operator = null, $value = null)
     * @method Search|null get($key, $default = null)
     * @method Search|null first(callable $callback = null, $default = null)
     * @method Search|null firstWhere(string $key, $operator = null, $value = null)
     * @method Search|null find($key, $default = null)
     * @method Search[] all()
     */
    class _IH_Search_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Search[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Search baseSole(array|string $columns = ['*'])
     * @method Search create(array $attributes = [])
     * @method _IH_Search_C|Search[] cursor()
     * @method Search|null|_IH_Search_C|Search[] find($id, array $columns = ['*'])
     * @method _IH_Search_C|Search[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Search|_IH_Search_C|Search[] findOrFail($id, array $columns = ['*'])
     * @method Search|_IH_Search_C|Search[] findOrNew($id, array $columns = ['*'])
     * @method Search first(array|string $columns = ['*'])
     * @method Search firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Search firstOrCreate(array $attributes = [], array $values = [])
     * @method Search firstOrFail(array $columns = ['*'])
     * @method Search firstOrNew(array $attributes = [], array $values = [])
     * @method Search firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Search forceCreate(array $attributes)
     * @method _IH_Search_C|Search[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Search_C|Search[] get(array|string $columns = ['*'])
     * @method Search getModel()
     * @method Search[] getModels(array|string $columns = ['*'])
     * @method _IH_Search_C|Search[] hydrate(array $items)
     * @method Search make(array $attributes = [])
     * @method Search newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Search[]|_IH_Search_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Search[]|_IH_Search_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Search sole(array|string $columns = ['*'])
     * @method Search updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Search_QB extends _BaseBuilder {}

    /**
     * @method SellerPackagePayment|null getOrPut($key, $value)
     * @method SellerPackagePayment|$this shift(int $count = 1)
     * @method SellerPackagePayment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SellerPackagePayment|$this pop(int $count = 1)
     * @method SellerPackagePayment|null pull($key, $default = null)
     * @method SellerPackagePayment|null last(callable $callback = null, $default = null)
     * @method SellerPackagePayment|$this random(int|null $number = null)
     * @method SellerPackagePayment|null sole($key = null, $operator = null, $value = null)
     * @method SellerPackagePayment|null get($key, $default = null)
     * @method SellerPackagePayment|null first(callable $callback = null, $default = null)
     * @method SellerPackagePayment|null firstWhere(string $key, $operator = null, $value = null)
     * @method SellerPackagePayment|null find($key, $default = null)
     * @method SellerPackagePayment[] all()
     */
    class _IH_SellerPackagePayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SellerPackagePayment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SellerPackagePayment baseSole(array|string $columns = ['*'])
     * @method SellerPackagePayment create(array $attributes = [])
     * @method _IH_SellerPackagePayment_C|SellerPackagePayment[] cursor()
     * @method SellerPackagePayment|null|_IH_SellerPackagePayment_C|SellerPackagePayment[] find($id, array $columns = ['*'])
     * @method _IH_SellerPackagePayment_C|SellerPackagePayment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SellerPackagePayment|_IH_SellerPackagePayment_C|SellerPackagePayment[] findOrFail($id, array $columns = ['*'])
     * @method SellerPackagePayment|_IH_SellerPackagePayment_C|SellerPackagePayment[] findOrNew($id, array $columns = ['*'])
     * @method SellerPackagePayment first(array|string $columns = ['*'])
     * @method SellerPackagePayment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SellerPackagePayment firstOrCreate(array $attributes = [], array $values = [])
     * @method SellerPackagePayment firstOrFail(array $columns = ['*'])
     * @method SellerPackagePayment firstOrNew(array $attributes = [], array $values = [])
     * @method SellerPackagePayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SellerPackagePayment forceCreate(array $attributes)
     * @method _IH_SellerPackagePayment_C|SellerPackagePayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SellerPackagePayment_C|SellerPackagePayment[] get(array|string $columns = ['*'])
     * @method SellerPackagePayment getModel()
     * @method SellerPackagePayment[] getModels(array|string $columns = ['*'])
     * @method _IH_SellerPackagePayment_C|SellerPackagePayment[] hydrate(array $items)
     * @method SellerPackagePayment make(array $attributes = [])
     * @method SellerPackagePayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SellerPackagePayment[]|_IH_SellerPackagePayment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SellerPackagePayment[]|_IH_SellerPackagePayment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SellerPackagePayment sole(array|string $columns = ['*'])
     * @method SellerPackagePayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SellerPackagePayment_QB extends _BaseBuilder {}

    /**
     * @method SellerPackageTranslation|null getOrPut($key, $value)
     * @method SellerPackageTranslation|$this shift(int $count = 1)
     * @method SellerPackageTranslation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SellerPackageTranslation|$this pop(int $count = 1)
     * @method SellerPackageTranslation|null pull($key, $default = null)
     * @method SellerPackageTranslation|null last(callable $callback = null, $default = null)
     * @method SellerPackageTranslation|$this random(int|null $number = null)
     * @method SellerPackageTranslation|null sole($key = null, $operator = null, $value = null)
     * @method SellerPackageTranslation|null get($key, $default = null)
     * @method SellerPackageTranslation|null first(callable $callback = null, $default = null)
     * @method SellerPackageTranslation|null firstWhere(string $key, $operator = null, $value = null)
     * @method SellerPackageTranslation|null find($key, $default = null)
     * @method SellerPackageTranslation[] all()
     */
    class _IH_SellerPackageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SellerPackageTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SellerPackageTranslation baseSole(array|string $columns = ['*'])
     * @method SellerPackageTranslation create(array $attributes = [])
     * @method _IH_SellerPackageTranslation_C|SellerPackageTranslation[] cursor()
     * @method SellerPackageTranslation|null|_IH_SellerPackageTranslation_C|SellerPackageTranslation[] find($id, array $columns = ['*'])
     * @method _IH_SellerPackageTranslation_C|SellerPackageTranslation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SellerPackageTranslation|_IH_SellerPackageTranslation_C|SellerPackageTranslation[] findOrFail($id, array $columns = ['*'])
     * @method SellerPackageTranslation|_IH_SellerPackageTranslation_C|SellerPackageTranslation[] findOrNew($id, array $columns = ['*'])
     * @method SellerPackageTranslation first(array|string $columns = ['*'])
     * @method SellerPackageTranslation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SellerPackageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method SellerPackageTranslation firstOrFail(array $columns = ['*'])
     * @method SellerPackageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method SellerPackageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SellerPackageTranslation forceCreate(array $attributes)
     * @method _IH_SellerPackageTranslation_C|SellerPackageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SellerPackageTranslation_C|SellerPackageTranslation[] get(array|string $columns = ['*'])
     * @method SellerPackageTranslation getModel()
     * @method SellerPackageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_SellerPackageTranslation_C|SellerPackageTranslation[] hydrate(array $items)
     * @method SellerPackageTranslation make(array $attributes = [])
     * @method SellerPackageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SellerPackageTranslation[]|_IH_SellerPackageTranslation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SellerPackageTranslation[]|_IH_SellerPackageTranslation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SellerPackageTranslation sole(array|string $columns = ['*'])
     * @method SellerPackageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SellerPackageTranslation_QB extends _BaseBuilder {}

    /**
     * @method SellerPackage|null getOrPut($key, $value)
     * @method SellerPackage|$this shift(int $count = 1)
     * @method SellerPackage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SellerPackage|$this pop(int $count = 1)
     * @method SellerPackage|null pull($key, $default = null)
     * @method SellerPackage|null last(callable $callback = null, $default = null)
     * @method SellerPackage|$this random(int|null $number = null)
     * @method SellerPackage|null sole($key = null, $operator = null, $value = null)
     * @method SellerPackage|null get($key, $default = null)
     * @method SellerPackage|null first(callable $callback = null, $default = null)
     * @method SellerPackage|null firstWhere(string $key, $operator = null, $value = null)
     * @method SellerPackage|null find($key, $default = null)
     * @method SellerPackage[] all()
     */
    class _IH_SellerPackage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SellerPackage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SellerPackage baseSole(array|string $columns = ['*'])
     * @method SellerPackage create(array $attributes = [])
     * @method _IH_SellerPackage_C|SellerPackage[] cursor()
     * @method SellerPackage|null|_IH_SellerPackage_C|SellerPackage[] find($id, array $columns = ['*'])
     * @method _IH_SellerPackage_C|SellerPackage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SellerPackage|_IH_SellerPackage_C|SellerPackage[] findOrFail($id, array $columns = ['*'])
     * @method SellerPackage|_IH_SellerPackage_C|SellerPackage[] findOrNew($id, array $columns = ['*'])
     * @method SellerPackage first(array|string $columns = ['*'])
     * @method SellerPackage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SellerPackage firstOrCreate(array $attributes = [], array $values = [])
     * @method SellerPackage firstOrFail(array $columns = ['*'])
     * @method SellerPackage firstOrNew(array $attributes = [], array $values = [])
     * @method SellerPackage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SellerPackage forceCreate(array $attributes)
     * @method _IH_SellerPackage_C|SellerPackage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SellerPackage_C|SellerPackage[] get(array|string $columns = ['*'])
     * @method SellerPackage getModel()
     * @method SellerPackage[] getModels(array|string $columns = ['*'])
     * @method _IH_SellerPackage_C|SellerPackage[] hydrate(array $items)
     * @method SellerPackage make(array $attributes = [])
     * @method SellerPackage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SellerPackage[]|_IH_SellerPackage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SellerPackage[]|_IH_SellerPackage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SellerPackage sole(array|string $columns = ['*'])
     * @method SellerPackage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SellerPackage_QB extends _BaseBuilder {}

    /**
     * @method SellerWithdrawRequest|null getOrPut($key, $value)
     * @method SellerWithdrawRequest|$this shift(int $count = 1)
     * @method SellerWithdrawRequest|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SellerWithdrawRequest|$this pop(int $count = 1)
     * @method SellerWithdrawRequest|null pull($key, $default = null)
     * @method SellerWithdrawRequest|null last(callable $callback = null, $default = null)
     * @method SellerWithdrawRequest|$this random(int|null $number = null)
     * @method SellerWithdrawRequest|null sole($key = null, $operator = null, $value = null)
     * @method SellerWithdrawRequest|null get($key, $default = null)
     * @method SellerWithdrawRequest|null first(callable $callback = null, $default = null)
     * @method SellerWithdrawRequest|null firstWhere(string $key, $operator = null, $value = null)
     * @method SellerWithdrawRequest|null find($key, $default = null)
     * @method SellerWithdrawRequest[] all()
     */
    class _IH_SellerWithdrawRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SellerWithdrawRequest[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SellerWithdrawRequest baseSole(array|string $columns = ['*'])
     * @method SellerWithdrawRequest create(array $attributes = [])
     * @method _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] cursor()
     * @method SellerWithdrawRequest|null|_IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] find($id, array $columns = ['*'])
     * @method _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SellerWithdrawRequest|_IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] findOrFail($id, array $columns = ['*'])
     * @method SellerWithdrawRequest|_IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] findOrNew($id, array $columns = ['*'])
     * @method SellerWithdrawRequest first(array|string $columns = ['*'])
     * @method SellerWithdrawRequest firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SellerWithdrawRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method SellerWithdrawRequest firstOrFail(array $columns = ['*'])
     * @method SellerWithdrawRequest firstOrNew(array $attributes = [], array $values = [])
     * @method SellerWithdrawRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SellerWithdrawRequest forceCreate(array $attributes)
     * @method _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] get(array|string $columns = ['*'])
     * @method SellerWithdrawRequest getModel()
     * @method SellerWithdrawRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] hydrate(array $items)
     * @method SellerWithdrawRequest make(array $attributes = [])
     * @method SellerWithdrawRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SellerWithdrawRequest[]|_IH_SellerWithdrawRequest_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SellerWithdrawRequest[]|_IH_SellerWithdrawRequest_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SellerWithdrawRequest sole(array|string $columns = ['*'])
     * @method SellerWithdrawRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SellerWithdrawRequest_QB extends _BaseBuilder {}

    /**
     * @method Seller|null getOrPut($key, $value)
     * @method Seller|$this shift(int $count = 1)
     * @method Seller|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Seller|$this pop(int $count = 1)
     * @method Seller|null pull($key, $default = null)
     * @method Seller|null last(callable $callback = null, $default = null)
     * @method Seller|$this random(int|null $number = null)
     * @method Seller|null sole($key = null, $operator = null, $value = null)
     * @method Seller|null get($key, $default = null)
     * @method Seller|null first(callable $callback = null, $default = null)
     * @method Seller|null firstWhere(string $key, $operator = null, $value = null)
     * @method Seller|null find($key, $default = null)
     * @method Seller[] all()
     */
    class _IH_Seller_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Seller[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Seller baseSole(array|string $columns = ['*'])
     * @method Seller create(array $attributes = [])
     * @method _IH_Seller_C|Seller[] cursor()
     * @method Seller|null|_IH_Seller_C|Seller[] find($id, array $columns = ['*'])
     * @method _IH_Seller_C|Seller[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Seller|_IH_Seller_C|Seller[] findOrFail($id, array $columns = ['*'])
     * @method Seller|_IH_Seller_C|Seller[] findOrNew($id, array $columns = ['*'])
     * @method Seller first(array|string $columns = ['*'])
     * @method Seller firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Seller firstOrCreate(array $attributes = [], array $values = [])
     * @method Seller firstOrFail(array $columns = ['*'])
     * @method Seller firstOrNew(array $attributes = [], array $values = [])
     * @method Seller firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Seller forceCreate(array $attributes)
     * @method _IH_Seller_C|Seller[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Seller_C|Seller[] get(array|string $columns = ['*'])
     * @method Seller getModel()
     * @method Seller[] getModels(array|string $columns = ['*'])
     * @method _IH_Seller_C|Seller[] hydrate(array $items)
     * @method Seller make(array $attributes = [])
     * @method Seller newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Seller[]|_IH_Seller_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Seller[]|_IH_Seller_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Seller sole(array|string $columns = ['*'])
     * @method Seller updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Seller_QB extends _BaseBuilder {}

    /**
     * @method Shop|null getOrPut($key, $value)
     * @method Shop|$this shift(int $count = 1)
     * @method Shop|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Shop|$this pop(int $count = 1)
     * @method Shop|null pull($key, $default = null)
     * @method Shop|null last(callable $callback = null, $default = null)
     * @method Shop|$this random(int|null $number = null)
     * @method Shop|null sole($key = null, $operator = null, $value = null)
     * @method Shop|null get($key, $default = null)
     * @method Shop|null first(callable $callback = null, $default = null)
     * @method Shop|null firstWhere(string $key, $operator = null, $value = null)
     * @method Shop|null find($key, $default = null)
     * @method Shop[] all()
     */
    class _IH_Shop_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Shop[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Shop baseSole(array|string $columns = ['*'])
     * @method Shop create(array $attributes = [])
     * @method _IH_Shop_C|Shop[] cursor()
     * @method Shop|null|_IH_Shop_C|Shop[] find($id, array $columns = ['*'])
     * @method _IH_Shop_C|Shop[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Shop|_IH_Shop_C|Shop[] findOrFail($id, array $columns = ['*'])
     * @method Shop|_IH_Shop_C|Shop[] findOrNew($id, array $columns = ['*'])
     * @method Shop first(array|string $columns = ['*'])
     * @method Shop firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Shop firstOrCreate(array $attributes = [], array $values = [])
     * @method Shop firstOrFail(array $columns = ['*'])
     * @method Shop firstOrNew(array $attributes = [], array $values = [])
     * @method Shop firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Shop forceCreate(array $attributes)
     * @method _IH_Shop_C|Shop[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Shop_C|Shop[] get(array|string $columns = ['*'])
     * @method Shop getModel()
     * @method Shop[] getModels(array|string $columns = ['*'])
     * @method _IH_Shop_C|Shop[] hydrate(array $items)
     * @method Shop make(array $attributes = [])
     * @method Shop newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Shop[]|_IH_Shop_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Shop[]|_IH_Shop_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Shop sole(array|string $columns = ['*'])
     * @method Shop updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Shop_QB extends _BaseBuilder {}

    /**
     * @method Slider|null getOrPut($key, $value)
     * @method Slider|$this shift(int $count = 1)
     * @method Slider|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Slider|$this pop(int $count = 1)
     * @method Slider|null pull($key, $default = null)
     * @method Slider|null last(callable $callback = null, $default = null)
     * @method Slider|$this random(int|null $number = null)
     * @method Slider|null sole($key = null, $operator = null, $value = null)
     * @method Slider|null get($key, $default = null)
     * @method Slider|null first(callable $callback = null, $default = null)
     * @method Slider|null firstWhere(string $key, $operator = null, $value = null)
     * @method Slider|null find($key, $default = null)
     * @method Slider[] all()
     */
    class _IH_Slider_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Slider[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Slider baseSole(array|string $columns = ['*'])
     * @method Slider create(array $attributes = [])
     * @method _IH_Slider_C|Slider[] cursor()
     * @method Slider|null|_IH_Slider_C|Slider[] find($id, array $columns = ['*'])
     * @method _IH_Slider_C|Slider[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Slider|_IH_Slider_C|Slider[] findOrFail($id, array $columns = ['*'])
     * @method Slider|_IH_Slider_C|Slider[] findOrNew($id, array $columns = ['*'])
     * @method Slider first(array|string $columns = ['*'])
     * @method Slider firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Slider firstOrCreate(array $attributes = [], array $values = [])
     * @method Slider firstOrFail(array $columns = ['*'])
     * @method Slider firstOrNew(array $attributes = [], array $values = [])
     * @method Slider firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Slider forceCreate(array $attributes)
     * @method _IH_Slider_C|Slider[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Slider_C|Slider[] get(array|string $columns = ['*'])
     * @method Slider getModel()
     * @method Slider[] getModels(array|string $columns = ['*'])
     * @method _IH_Slider_C|Slider[] hydrate(array $items)
     * @method Slider make(array $attributes = [])
     * @method Slider newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Slider[]|_IH_Slider_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Slider[]|_IH_Slider_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Slider sole(array|string $columns = ['*'])
     * @method Slider updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Slider_QB extends _BaseBuilder {}

    /**
     * @method SmsTemplate|null getOrPut($key, $value)
     * @method SmsTemplate|$this shift(int $count = 1)
     * @method SmsTemplate|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SmsTemplate|$this pop(int $count = 1)
     * @method SmsTemplate|null pull($key, $default = null)
     * @method SmsTemplate|null last(callable $callback = null, $default = null)
     * @method SmsTemplate|$this random(int|null $number = null)
     * @method SmsTemplate|null sole($key = null, $operator = null, $value = null)
     * @method SmsTemplate|null get($key, $default = null)
     * @method SmsTemplate|null first(callable $callback = null, $default = null)
     * @method SmsTemplate|null firstWhere(string $key, $operator = null, $value = null)
     * @method SmsTemplate|null find($key, $default = null)
     * @method SmsTemplate[] all()
     */
    class _IH_SmsTemplate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SmsTemplate[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SmsTemplate baseSole(array|string $columns = ['*'])
     * @method SmsTemplate create(array $attributes = [])
     * @method _IH_SmsTemplate_C|SmsTemplate[] cursor()
     * @method SmsTemplate|null|_IH_SmsTemplate_C|SmsTemplate[] find($id, array $columns = ['*'])
     * @method _IH_SmsTemplate_C|SmsTemplate[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SmsTemplate|_IH_SmsTemplate_C|SmsTemplate[] findOrFail($id, array $columns = ['*'])
     * @method SmsTemplate|_IH_SmsTemplate_C|SmsTemplate[] findOrNew($id, array $columns = ['*'])
     * @method SmsTemplate first(array|string $columns = ['*'])
     * @method SmsTemplate firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SmsTemplate firstOrCreate(array $attributes = [], array $values = [])
     * @method SmsTemplate firstOrFail(array $columns = ['*'])
     * @method SmsTemplate firstOrNew(array $attributes = [], array $values = [])
     * @method SmsTemplate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SmsTemplate forceCreate(array $attributes)
     * @method _IH_SmsTemplate_C|SmsTemplate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SmsTemplate_C|SmsTemplate[] get(array|string $columns = ['*'])
     * @method SmsTemplate getModel()
     * @method SmsTemplate[] getModels(array|string $columns = ['*'])
     * @method _IH_SmsTemplate_C|SmsTemplate[] hydrate(array $items)
     * @method SmsTemplate make(array $attributes = [])
     * @method SmsTemplate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SmsTemplate[]|_IH_SmsTemplate_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SmsTemplate[]|_IH_SmsTemplate_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SmsTemplate sole(array|string $columns = ['*'])
     * @method SmsTemplate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SmsTemplate_QB extends _BaseBuilder {}

    /**
     * @method Staff|null getOrPut($key, $value)
     * @method Staff|$this shift(int $count = 1)
     * @method Staff|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Staff|$this pop(int $count = 1)
     * @method Staff|null pull($key, $default = null)
     * @method Staff|null last(callable $callback = null, $default = null)
     * @method Staff|$this random(int|null $number = null)
     * @method Staff|null sole($key = null, $operator = null, $value = null)
     * @method Staff|null get($key, $default = null)
     * @method Staff|null first(callable $callback = null, $default = null)
     * @method Staff|null firstWhere(string $key, $operator = null, $value = null)
     * @method Staff|null find($key, $default = null)
     * @method Staff[] all()
     */
    class _IH_Staff_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Staff[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Staff baseSole(array|string $columns = ['*'])
     * @method Staff create(array $attributes = [])
     * @method _IH_Staff_C|Staff[] cursor()
     * @method Staff|null|_IH_Staff_C|Staff[] find($id, array $columns = ['*'])
     * @method _IH_Staff_C|Staff[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Staff|_IH_Staff_C|Staff[] findOrFail($id, array $columns = ['*'])
     * @method Staff|_IH_Staff_C|Staff[] findOrNew($id, array $columns = ['*'])
     * @method Staff first(array|string $columns = ['*'])
     * @method Staff firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Staff firstOrCreate(array $attributes = [], array $values = [])
     * @method Staff firstOrFail(array $columns = ['*'])
     * @method Staff firstOrNew(array $attributes = [], array $values = [])
     * @method Staff firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Staff forceCreate(array $attributes)
     * @method _IH_Staff_C|Staff[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Staff_C|Staff[] get(array|string $columns = ['*'])
     * @method Staff getModel()
     * @method Staff[] getModels(array|string $columns = ['*'])
     * @method _IH_Staff_C|Staff[] hydrate(array $items)
     * @method Staff make(array $attributes = [])
     * @method Staff newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Staff[]|_IH_Staff_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Staff[]|_IH_Staff_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Staff sole(array|string $columns = ['*'])
     * @method Staff updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Staff_QB extends _BaseBuilder {}

    /**
     * @method State|null getOrPut($key, $value)
     * @method State|$this shift(int $count = 1)
     * @method State|null firstOrFail($key = null, $operator = null, $value = null)
     * @method State|$this pop(int $count = 1)
     * @method State|null pull($key, $default = null)
     * @method State|null last(callable $callback = null, $default = null)
     * @method State|$this random(int|null $number = null)
     * @method State|null sole($key = null, $operator = null, $value = null)
     * @method State|null get($key, $default = null)
     * @method State|null first(callable $callback = null, $default = null)
     * @method State|null firstWhere(string $key, $operator = null, $value = null)
     * @method State|null find($key, $default = null)
     * @method State[] all()
     */
    class _IH_State_C extends _BaseCollection {
        /**
         * @param int $size
         * @return State[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method State baseSole(array|string $columns = ['*'])
     * @method State create(array $attributes = [])
     * @method _IH_State_C|State[] cursor()
     * @method State|null|_IH_State_C|State[] find($id, array $columns = ['*'])
     * @method _IH_State_C|State[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method State|_IH_State_C|State[] findOrFail($id, array $columns = ['*'])
     * @method State|_IH_State_C|State[] findOrNew($id, array $columns = ['*'])
     * @method State first(array|string $columns = ['*'])
     * @method State firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method State firstOrCreate(array $attributes = [], array $values = [])
     * @method State firstOrFail(array $columns = ['*'])
     * @method State firstOrNew(array $attributes = [], array $values = [])
     * @method State firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method State forceCreate(array $attributes)
     * @method _IH_State_C|State[] fromQuery(string $query, array $bindings = [])
     * @method _IH_State_C|State[] get(array|string $columns = ['*'])
     * @method State getModel()
     * @method State[] getModels(array|string $columns = ['*'])
     * @method _IH_State_C|State[] hydrate(array $items)
     * @method State make(array $attributes = [])
     * @method State newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|State[]|_IH_State_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|State[]|_IH_State_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method State sole(array|string $columns = ['*'])
     * @method State updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_State_QB extends _BaseBuilder {}

    /**
     * @method SubCategory|null getOrPut($key, $value)
     * @method SubCategory|$this shift(int $count = 1)
     * @method SubCategory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SubCategory|$this pop(int $count = 1)
     * @method SubCategory|null pull($key, $default = null)
     * @method SubCategory|null last(callable $callback = null, $default = null)
     * @method SubCategory|$this random(int|null $number = null)
     * @method SubCategory|null sole($key = null, $operator = null, $value = null)
     * @method SubCategory|null get($key, $default = null)
     * @method SubCategory|null first(callable $callback = null, $default = null)
     * @method SubCategory|null firstWhere(string $key, $operator = null, $value = null)
     * @method SubCategory|null find($key, $default = null)
     * @method SubCategory[] all()
     */
    class _IH_SubCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SubCategory baseSole(array|string $columns = ['*'])
     * @method SubCategory create(array $attributes = [])
     * @method _IH_SubCategory_C|SubCategory[] cursor()
     * @method SubCategory|null|_IH_SubCategory_C|SubCategory[] find($id, array $columns = ['*'])
     * @method _IH_SubCategory_C|SubCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SubCategory|_IH_SubCategory_C|SubCategory[] findOrFail($id, array $columns = ['*'])
     * @method SubCategory|_IH_SubCategory_C|SubCategory[] findOrNew($id, array $columns = ['*'])
     * @method SubCategory first(array|string $columns = ['*'])
     * @method SubCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SubCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method SubCategory firstOrFail(array $columns = ['*'])
     * @method SubCategory firstOrNew(array $attributes = [], array $values = [])
     * @method SubCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubCategory forceCreate(array $attributes)
     * @method _IH_SubCategory_C|SubCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubCategory_C|SubCategory[] get(array|string $columns = ['*'])
     * @method SubCategory getModel()
     * @method SubCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_SubCategory_C|SubCategory[] hydrate(array $items)
     * @method SubCategory make(array $attributes = [])
     * @method SubCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubCategory[]|_IH_SubCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SubCategory[]|_IH_SubCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubCategory sole(array|string $columns = ['*'])
     * @method SubCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubCategory_QB extends _BaseBuilder {}

    /**
     * @method SubSubCategory|null getOrPut($key, $value)
     * @method SubSubCategory|$this shift(int $count = 1)
     * @method SubSubCategory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SubSubCategory|$this pop(int $count = 1)
     * @method SubSubCategory|null pull($key, $default = null)
     * @method SubSubCategory|null last(callable $callback = null, $default = null)
     * @method SubSubCategory|$this random(int|null $number = null)
     * @method SubSubCategory|null sole($key = null, $operator = null, $value = null)
     * @method SubSubCategory|null get($key, $default = null)
     * @method SubSubCategory|null first(callable $callback = null, $default = null)
     * @method SubSubCategory|null firstWhere(string $key, $operator = null, $value = null)
     * @method SubSubCategory|null find($key, $default = null)
     * @method SubSubCategory[] all()
     */
    class _IH_SubSubCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubSubCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method SubSubCategory baseSole(array|string $columns = ['*'])
     * @method SubSubCategory create(array $attributes = [])
     * @method _IH_SubSubCategory_C|SubSubCategory[] cursor()
     * @method SubSubCategory|null|_IH_SubSubCategory_C|SubSubCategory[] find($id, array $columns = ['*'])
     * @method _IH_SubSubCategory_C|SubSubCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SubSubCategory|_IH_SubSubCategory_C|SubSubCategory[] findOrFail($id, array $columns = ['*'])
     * @method SubSubCategory|_IH_SubSubCategory_C|SubSubCategory[] findOrNew($id, array $columns = ['*'])
     * @method SubSubCategory first(array|string $columns = ['*'])
     * @method SubSubCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SubSubCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method SubSubCategory firstOrFail(array $columns = ['*'])
     * @method SubSubCategory firstOrNew(array $attributes = [], array $values = [])
     * @method SubSubCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubSubCategory forceCreate(array $attributes)
     * @method _IH_SubSubCategory_C|SubSubCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubSubCategory_C|SubSubCategory[] get(array|string $columns = ['*'])
     * @method SubSubCategory getModel()
     * @method SubSubCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_SubSubCategory_C|SubSubCategory[] hydrate(array $items)
     * @method SubSubCategory make(array $attributes = [])
     * @method SubSubCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubSubCategory[]|_IH_SubSubCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SubSubCategory[]|_IH_SubSubCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubSubCategory sole(array|string $columns = ['*'])
     * @method SubSubCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubSubCategory_QB extends _BaseBuilder {}

    /**
     * @method Subscriber|null getOrPut($key, $value)
     * @method Subscriber|$this shift(int $count = 1)
     * @method Subscriber|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Subscriber|$this pop(int $count = 1)
     * @method Subscriber|null pull($key, $default = null)
     * @method Subscriber|null last(callable $callback = null, $default = null)
     * @method Subscriber|$this random(int|null $number = null)
     * @method Subscriber|null sole($key = null, $operator = null, $value = null)
     * @method Subscriber|null get($key, $default = null)
     * @method Subscriber|null first(callable $callback = null, $default = null)
     * @method Subscriber|null firstWhere(string $key, $operator = null, $value = null)
     * @method Subscriber|null find($key, $default = null)
     * @method Subscriber[] all()
     */
    class _IH_Subscriber_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Subscriber[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Subscriber baseSole(array|string $columns = ['*'])
     * @method Subscriber create(array $attributes = [])
     * @method _IH_Subscriber_C|Subscriber[] cursor()
     * @method Subscriber|null|_IH_Subscriber_C|Subscriber[] find($id, array $columns = ['*'])
     * @method _IH_Subscriber_C|Subscriber[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Subscriber|_IH_Subscriber_C|Subscriber[] findOrFail($id, array $columns = ['*'])
     * @method Subscriber|_IH_Subscriber_C|Subscriber[] findOrNew($id, array $columns = ['*'])
     * @method Subscriber first(array|string $columns = ['*'])
     * @method Subscriber firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Subscriber firstOrCreate(array $attributes = [], array $values = [])
     * @method Subscriber firstOrFail(array $columns = ['*'])
     * @method Subscriber firstOrNew(array $attributes = [], array $values = [])
     * @method Subscriber firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Subscriber forceCreate(array $attributes)
     * @method _IH_Subscriber_C|Subscriber[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Subscriber_C|Subscriber[] get(array|string $columns = ['*'])
     * @method Subscriber getModel()
     * @method Subscriber[] getModels(array|string $columns = ['*'])
     * @method _IH_Subscriber_C|Subscriber[] hydrate(array $items)
     * @method Subscriber make(array $attributes = [])
     * @method Subscriber newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Subscriber[]|_IH_Subscriber_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Subscriber[]|_IH_Subscriber_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscriber sole(array|string $columns = ['*'])
     * @method Subscriber updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Subscriber_QB extends _BaseBuilder {}

    /**
     * @method Tax|null getOrPut($key, $value)
     * @method Tax|$this shift(int $count = 1)
     * @method Tax|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Tax|$this pop(int $count = 1)
     * @method Tax|null pull($key, $default = null)
     * @method Tax|null last(callable $callback = null, $default = null)
     * @method Tax|$this random(int|null $number = null)
     * @method Tax|null sole($key = null, $operator = null, $value = null)
     * @method Tax|null get($key, $default = null)
     * @method Tax|null first(callable $callback = null, $default = null)
     * @method Tax|null firstWhere(string $key, $operator = null, $value = null)
     * @method Tax|null find($key, $default = null)
     * @method Tax[] all()
     */
    class _IH_Tax_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tax[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Tax baseSole(array|string $columns = ['*'])
     * @method Tax create(array $attributes = [])
     * @method _IH_Tax_C|Tax[] cursor()
     * @method Tax|null|_IH_Tax_C|Tax[] find($id, array $columns = ['*'])
     * @method _IH_Tax_C|Tax[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tax|_IH_Tax_C|Tax[] findOrFail($id, array $columns = ['*'])
     * @method Tax|_IH_Tax_C|Tax[] findOrNew($id, array $columns = ['*'])
     * @method Tax first(array|string $columns = ['*'])
     * @method Tax firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tax firstOrCreate(array $attributes = [], array $values = [])
     * @method Tax firstOrFail(array $columns = ['*'])
     * @method Tax firstOrNew(array $attributes = [], array $values = [])
     * @method Tax firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tax forceCreate(array $attributes)
     * @method _IH_Tax_C|Tax[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tax_C|Tax[] get(array|string $columns = ['*'])
     * @method Tax getModel()
     * @method Tax[] getModels(array|string $columns = ['*'])
     * @method _IH_Tax_C|Tax[] hydrate(array $items)
     * @method Tax make(array $attributes = [])
     * @method Tax newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tax[]|_IH_Tax_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tax[]|_IH_Tax_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tax sole(array|string $columns = ['*'])
     * @method Tax updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tax_QB extends _BaseBuilder {}

    /**
     * @method TicketReply|null getOrPut($key, $value)
     * @method TicketReply|$this shift(int $count = 1)
     * @method TicketReply|null firstOrFail($key = null, $operator = null, $value = null)
     * @method TicketReply|$this pop(int $count = 1)
     * @method TicketReply|null pull($key, $default = null)
     * @method TicketReply|null last(callable $callback = null, $default = null)
     * @method TicketReply|$this random(int|null $number = null)
     * @method TicketReply|null sole($key = null, $operator = null, $value = null)
     * @method TicketReply|null get($key, $default = null)
     * @method TicketReply|null first(callable $callback = null, $default = null)
     * @method TicketReply|null firstWhere(string $key, $operator = null, $value = null)
     * @method TicketReply|null find($key, $default = null)
     * @method TicketReply[] all()
     */
    class _IH_TicketReply_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TicketReply[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method TicketReply baseSole(array|string $columns = ['*'])
     * @method TicketReply create(array $attributes = [])
     * @method _IH_TicketReply_C|TicketReply[] cursor()
     * @method TicketReply|null|_IH_TicketReply_C|TicketReply[] find($id, array $columns = ['*'])
     * @method _IH_TicketReply_C|TicketReply[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TicketReply|_IH_TicketReply_C|TicketReply[] findOrFail($id, array $columns = ['*'])
     * @method TicketReply|_IH_TicketReply_C|TicketReply[] findOrNew($id, array $columns = ['*'])
     * @method TicketReply first(array|string $columns = ['*'])
     * @method TicketReply firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TicketReply firstOrCreate(array $attributes = [], array $values = [])
     * @method TicketReply firstOrFail(array $columns = ['*'])
     * @method TicketReply firstOrNew(array $attributes = [], array $values = [])
     * @method TicketReply firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TicketReply forceCreate(array $attributes)
     * @method _IH_TicketReply_C|TicketReply[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TicketReply_C|TicketReply[] get(array|string $columns = ['*'])
     * @method TicketReply getModel()
     * @method TicketReply[] getModels(array|string $columns = ['*'])
     * @method _IH_TicketReply_C|TicketReply[] hydrate(array $items)
     * @method TicketReply make(array $attributes = [])
     * @method TicketReply newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TicketReply[]|_IH_TicketReply_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TicketReply[]|_IH_TicketReply_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketReply sole(array|string $columns = ['*'])
     * @method TicketReply updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TicketReply_QB extends _BaseBuilder {}

    /**
     * @method Ticket|null getOrPut($key, $value)
     * @method Ticket|$this shift(int $count = 1)
     * @method Ticket|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Ticket|$this pop(int $count = 1)
     * @method Ticket|null pull($key, $default = null)
     * @method Ticket|null last(callable $callback = null, $default = null)
     * @method Ticket|$this random(int|null $number = null)
     * @method Ticket|null sole($key = null, $operator = null, $value = null)
     * @method Ticket|null get($key, $default = null)
     * @method Ticket|null first(callable $callback = null, $default = null)
     * @method Ticket|null firstWhere(string $key, $operator = null, $value = null)
     * @method Ticket|null find($key, $default = null)
     * @method Ticket[] all()
     */
    class _IH_Ticket_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ticket[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Ticket baseSole(array|string $columns = ['*'])
     * @method Ticket create(array $attributes = [])
     * @method _IH_Ticket_C|Ticket[] cursor()
     * @method Ticket|null|_IH_Ticket_C|Ticket[] find($id, array $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrFail($id, array $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrNew($id, array $columns = ['*'])
     * @method Ticket first(array|string $columns = ['*'])
     * @method Ticket firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Ticket firstOrCreate(array $attributes = [], array $values = [])
     * @method Ticket firstOrFail(array $columns = ['*'])
     * @method Ticket firstOrNew(array $attributes = [], array $values = [])
     * @method Ticket firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ticket forceCreate(array $attributes)
     * @method _IH_Ticket_C|Ticket[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ticket_C|Ticket[] get(array|string $columns = ['*'])
     * @method Ticket getModel()
     * @method Ticket[] getModels(array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] hydrate(array $items)
     * @method Ticket make(array $attributes = [])
     * @method Ticket newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ticket[]|_IH_Ticket_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ticket[]|_IH_Ticket_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ticket sole(array|string $columns = ['*'])
     * @method Ticket updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Ticket_QB extends _BaseBuilder {}

    /**
     * @method Transaction|null getOrPut($key, $value)
     * @method Transaction|$this shift(int $count = 1)
     * @method Transaction|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Transaction|$this pop(int $count = 1)
     * @method Transaction|null pull($key, $default = null)
     * @method Transaction|null last(callable $callback = null, $default = null)
     * @method Transaction|$this random(int|null $number = null)
     * @method Transaction|null sole($key = null, $operator = null, $value = null)
     * @method Transaction|null get($key, $default = null)
     * @method Transaction|null first(callable $callback = null, $default = null)
     * @method Transaction|null firstWhere(string $key, $operator = null, $value = null)
     * @method Transaction|null find($key, $default = null)
     * @method Transaction[] all()
     */
    class _IH_Transaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Transaction[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Transaction baseSole(array|string $columns = ['*'])
     * @method Transaction create(array $attributes = [])
     * @method _IH_Transaction_C|Transaction[] cursor()
     * @method Transaction|null|_IH_Transaction_C|Transaction[] find($id, array $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrFail($id, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrNew($id, array $columns = ['*'])
     * @method Transaction first(array|string $columns = ['*'])
     * @method Transaction firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Transaction firstOrCreate(array $attributes = [], array $values = [])
     * @method Transaction firstOrFail(array $columns = ['*'])
     * @method Transaction firstOrNew(array $attributes = [], array $values = [])
     * @method Transaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Transaction forceCreate(array $attributes)
     * @method _IH_Transaction_C|Transaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Transaction_C|Transaction[] get(array|string $columns = ['*'])
     * @method Transaction getModel()
     * @method Transaction[] getModels(array|string $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] hydrate(array $items)
     * @method Transaction make(array $attributes = [])
     * @method Transaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Transaction[]|_IH_Transaction_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Transaction[]|_IH_Transaction_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Transaction sole(array|string $columns = ['*'])
     * @method Transaction updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Transaction_QB extends _BaseBuilder {}

    /**
     * @method Translation|null getOrPut($key, $value)
     * @method Translation|$this shift(int $count = 1)
     * @method Translation|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Translation|$this pop(int $count = 1)
     * @method Translation|null pull($key, $default = null)
     * @method Translation|null last(callable $callback = null, $default = null)
     * @method Translation|$this random(int|null $number = null)
     * @method Translation|null sole($key = null, $operator = null, $value = null)
     * @method Translation|null get($key, $default = null)
     * @method Translation|null first(callable $callback = null, $default = null)
     * @method Translation|null firstWhere(string $key, $operator = null, $value = null)
     * @method Translation|null find($key, $default = null)
     * @method Translation[] all()
     */
    class _IH_Translation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Translation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Translation baseSole(array|string $columns = ['*'])
     * @method Translation create(array $attributes = [])
     * @method _IH_Translation_C|Translation[] cursor()
     * @method Translation|null|_IH_Translation_C|Translation[] find($id, array $columns = ['*'])
     * @method _IH_Translation_C|Translation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOrFail($id, array $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOrNew($id, array $columns = ['*'])
     * @method Translation first(array|string $columns = ['*'])
     * @method Translation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Translation firstOrCreate(array $attributes = [], array $values = [])
     * @method Translation firstOrFail(array $columns = ['*'])
     * @method Translation firstOrNew(array $attributes = [], array $values = [])
     * @method Translation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Translation forceCreate(array $attributes)
     * @method _IH_Translation_C|Translation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Translation_C|Translation[] get(array|string $columns = ['*'])
     * @method Translation getModel()
     * @method Translation[] getModels(array|string $columns = ['*'])
     * @method _IH_Translation_C|Translation[] hydrate(array $items)
     * @method Translation make(array $attributes = [])
     * @method Translation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Translation[]|_IH_Translation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Translation[]|_IH_Translation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Translation sole(array|string $columns = ['*'])
     * @method Translation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Translation_QB extends _BaseBuilder {}

    /**
     * @method Upload|null getOrPut($key, $value)
     * @method Upload|$this shift(int $count = 1)
     * @method Upload|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Upload|$this pop(int $count = 1)
     * @method Upload|null pull($key, $default = null)
     * @method Upload|null last(callable $callback = null, $default = null)
     * @method Upload|$this random(int|null $number = null)
     * @method Upload|null sole($key = null, $operator = null, $value = null)
     * @method Upload|null get($key, $default = null)
     * @method Upload|null first(callable $callback = null, $default = null)
     * @method Upload|null firstWhere(string $key, $operator = null, $value = null)
     * @method Upload|null find($key, $default = null)
     * @method Upload[] all()
     */
    class _IH_Upload_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Upload[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Upload baseSole(array|string $columns = ['*'])
     * @method Upload create(array $attributes = [])
     * @method _IH_Upload_C|Upload[] cursor()
     * @method Upload|null|_IH_Upload_C|Upload[] find($id, array $columns = ['*'])
     * @method _IH_Upload_C|Upload[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Upload|_IH_Upload_C|Upload[] findOrFail($id, array $columns = ['*'])
     * @method Upload|_IH_Upload_C|Upload[] findOrNew($id, array $columns = ['*'])
     * @method Upload first(array|string $columns = ['*'])
     * @method Upload firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Upload firstOrCreate(array $attributes = [], array $values = [])
     * @method Upload firstOrFail(array $columns = ['*'])
     * @method Upload firstOrNew(array $attributes = [], array $values = [])
     * @method Upload firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Upload forceCreate(array $attributes)
     * @method _IH_Upload_C|Upload[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Upload_C|Upload[] get(array|string $columns = ['*'])
     * @method Upload getModel()
     * @method Upload[] getModels(array|string $columns = ['*'])
     * @method _IH_Upload_C|Upload[] hydrate(array $items)
     * @method Upload make(array $attributes = [])
     * @method Upload newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Upload[]|_IH_Upload_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Upload[]|_IH_Upload_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Upload sole(array|string $columns = ['*'])
     * @method Upload updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Upload_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB permission(array|Collection|int|Permission1|string $permissions)
     * @method _IH_User_QB role(array|Collection|int|Role1|string $roles, string $guard = null)
     */
    class _IH_User_QB extends _BaseBuilder {}

    /**
     * @method Wallet|null getOrPut($key, $value)
     * @method Wallet|$this shift(int $count = 1)
     * @method Wallet|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Wallet|$this pop(int $count = 1)
     * @method Wallet|null pull($key, $default = null)
     * @method Wallet|null last(callable $callback = null, $default = null)
     * @method Wallet|$this random(int|null $number = null)
     * @method Wallet|null sole($key = null, $operator = null, $value = null)
     * @method Wallet|null get($key, $default = null)
     * @method Wallet|null first(callable $callback = null, $default = null)
     * @method Wallet|null firstWhere(string $key, $operator = null, $value = null)
     * @method Wallet|null find($key, $default = null)
     * @method Wallet[] all()
     */
    class _IH_Wallet_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Wallet[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Wallet baseSole(array|string $columns = ['*'])
     * @method Wallet create(array $attributes = [])
     * @method _IH_Wallet_C|Wallet[] cursor()
     * @method Wallet|null|_IH_Wallet_C|Wallet[] find($id, array $columns = ['*'])
     * @method _IH_Wallet_C|Wallet[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Wallet|_IH_Wallet_C|Wallet[] findOrFail($id, array $columns = ['*'])
     * @method Wallet|_IH_Wallet_C|Wallet[] findOrNew($id, array $columns = ['*'])
     * @method Wallet first(array|string $columns = ['*'])
     * @method Wallet firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Wallet firstOrCreate(array $attributes = [], array $values = [])
     * @method Wallet firstOrFail(array $columns = ['*'])
     * @method Wallet firstOrNew(array $attributes = [], array $values = [])
     * @method Wallet firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Wallet forceCreate(array $attributes)
     * @method _IH_Wallet_C|Wallet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Wallet_C|Wallet[] get(array|string $columns = ['*'])
     * @method Wallet getModel()
     * @method Wallet[] getModels(array|string $columns = ['*'])
     * @method _IH_Wallet_C|Wallet[] hydrate(array $items)
     * @method Wallet make(array $attributes = [])
     * @method Wallet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Wallet[]|_IH_Wallet_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Wallet[]|_IH_Wallet_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Wallet sole(array|string $columns = ['*'])
     * @method Wallet updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Wallet_QB extends _BaseBuilder {}

    /**
     * @method WholesalePrice|null getOrPut($key, $value)
     * @method WholesalePrice|$this shift(int $count = 1)
     * @method WholesalePrice|null firstOrFail($key = null, $operator = null, $value = null)
     * @method WholesalePrice|$this pop(int $count = 1)
     * @method WholesalePrice|null pull($key, $default = null)
     * @method WholesalePrice|null last(callable $callback = null, $default = null)
     * @method WholesalePrice|$this random(int|null $number = null)
     * @method WholesalePrice|null sole($key = null, $operator = null, $value = null)
     * @method WholesalePrice|null get($key, $default = null)
     * @method WholesalePrice|null first(callable $callback = null, $default = null)
     * @method WholesalePrice|null firstWhere(string $key, $operator = null, $value = null)
     * @method WholesalePrice|null find($key, $default = null)
     * @method WholesalePrice[] all()
     */
    class _IH_WholesalePrice_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WholesalePrice[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method WholesalePrice baseSole(array|string $columns = ['*'])
     * @method WholesalePrice create(array $attributes = [])
     * @method _IH_WholesalePrice_C|WholesalePrice[] cursor()
     * @method WholesalePrice|null|_IH_WholesalePrice_C|WholesalePrice[] find($id, array $columns = ['*'])
     * @method _IH_WholesalePrice_C|WholesalePrice[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method WholesalePrice|_IH_WholesalePrice_C|WholesalePrice[] findOrFail($id, array $columns = ['*'])
     * @method WholesalePrice|_IH_WholesalePrice_C|WholesalePrice[] findOrNew($id, array $columns = ['*'])
     * @method WholesalePrice first(array|string $columns = ['*'])
     * @method WholesalePrice firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method WholesalePrice firstOrCreate(array $attributes = [], array $values = [])
     * @method WholesalePrice firstOrFail(array $columns = ['*'])
     * @method WholesalePrice firstOrNew(array $attributes = [], array $values = [])
     * @method WholesalePrice firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WholesalePrice forceCreate(array $attributes)
     * @method _IH_WholesalePrice_C|WholesalePrice[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WholesalePrice_C|WholesalePrice[] get(array|string $columns = ['*'])
     * @method WholesalePrice getModel()
     * @method WholesalePrice[] getModels(array|string $columns = ['*'])
     * @method _IH_WholesalePrice_C|WholesalePrice[] hydrate(array $items)
     * @method WholesalePrice make(array $attributes = [])
     * @method WholesalePrice newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WholesalePrice[]|_IH_WholesalePrice_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|WholesalePrice[]|_IH_WholesalePrice_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WholesalePrice sole(array|string $columns = ['*'])
     * @method WholesalePrice updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WholesalePrice_QB extends _BaseBuilder {}

    /**
     * @method Wishlist|null getOrPut($key, $value)
     * @method Wishlist|$this shift(int $count = 1)
     * @method Wishlist|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Wishlist|$this pop(int $count = 1)
     * @method Wishlist|null pull($key, $default = null)
     * @method Wishlist|null last(callable $callback = null, $default = null)
     * @method Wishlist|$this random(int|null $number = null)
     * @method Wishlist|null sole($key = null, $operator = null, $value = null)
     * @method Wishlist|null get($key, $default = null)
     * @method Wishlist|null first(callable $callback = null, $default = null)
     * @method Wishlist|null firstWhere(string $key, $operator = null, $value = null)
     * @method Wishlist|null find($key, $default = null)
     * @method Wishlist[] all()
     */
    class _IH_Wishlist_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Wishlist[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Wishlist baseSole(array|string $columns = ['*'])
     * @method Wishlist create(array $attributes = [])
     * @method _IH_Wishlist_C|Wishlist[] cursor()
     * @method Wishlist|null|_IH_Wishlist_C|Wishlist[] find($id, array $columns = ['*'])
     * @method _IH_Wishlist_C|Wishlist[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Wishlist|_IH_Wishlist_C|Wishlist[] findOrFail($id, array $columns = ['*'])
     * @method Wishlist|_IH_Wishlist_C|Wishlist[] findOrNew($id, array $columns = ['*'])
     * @method Wishlist first(array|string $columns = ['*'])
     * @method Wishlist firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Wishlist firstOrCreate(array $attributes = [], array $values = [])
     * @method Wishlist firstOrFail(array $columns = ['*'])
     * @method Wishlist firstOrNew(array $attributes = [], array $values = [])
     * @method Wishlist firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Wishlist forceCreate(array $attributes)
     * @method _IH_Wishlist_C|Wishlist[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Wishlist_C|Wishlist[] get(array|string $columns = ['*'])
     * @method Wishlist getModel()
     * @method Wishlist[] getModels(array|string $columns = ['*'])
     * @method _IH_Wishlist_C|Wishlist[] hydrate(array $items)
     * @method Wishlist make(array $attributes = [])
     * @method Wishlist newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Wishlist[]|_IH_Wishlist_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Wishlist[]|_IH_Wishlist_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Wishlist sole(array|string $columns = ['*'])
     * @method Wishlist updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Wishlist_QB extends _BaseBuilder {}

    /**
     * @method Zone|null getOrPut($key, $value)
     * @method Zone|$this shift(int $count = 1)
     * @method Zone|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Zone|$this pop(int $count = 1)
     * @method Zone|null pull($key, $default = null)
     * @method Zone|null last(callable $callback = null, $default = null)
     * @method Zone|$this random(int|null $number = null)
     * @method Zone|null sole($key = null, $operator = null, $value = null)
     * @method Zone|null get($key, $default = null)
     * @method Zone|null first(callable $callback = null, $default = null)
     * @method Zone|null firstWhere(string $key, $operator = null, $value = null)
     * @method Zone|null find($key, $default = null)
     * @method Zone[] all()
     */
    class _IH_Zone_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Zone[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Zone baseSole(array|string $columns = ['*'])
     * @method Zone create(array $attributes = [])
     * @method _IH_Zone_C|Zone[] cursor()
     * @method Zone|null|_IH_Zone_C|Zone[] find($id, array $columns = ['*'])
     * @method _IH_Zone_C|Zone[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Zone|_IH_Zone_C|Zone[] findOrFail($id, array $columns = ['*'])
     * @method Zone|_IH_Zone_C|Zone[] findOrNew($id, array $columns = ['*'])
     * @method Zone first(array|string $columns = ['*'])
     * @method Zone firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Zone firstOrCreate(array $attributes = [], array $values = [])
     * @method Zone firstOrFail(array $columns = ['*'])
     * @method Zone firstOrNew(array $attributes = [], array $values = [])
     * @method Zone firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Zone forceCreate(array $attributes)
     * @method _IH_Zone_C|Zone[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Zone_C|Zone[] get(array|string $columns = ['*'])
     * @method Zone getModel()
     * @method Zone[] getModels(array|string $columns = ['*'])
     * @method _IH_Zone_C|Zone[] hydrate(array $items)
     * @method Zone make(array $attributes = [])
     * @method Zone newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Zone[]|_IH_Zone_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Zone[]|_IH_Zone_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Zone sole(array|string $columns = ['*'])
     * @method Zone updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Zone_QB extends _BaseBuilder {}
}
