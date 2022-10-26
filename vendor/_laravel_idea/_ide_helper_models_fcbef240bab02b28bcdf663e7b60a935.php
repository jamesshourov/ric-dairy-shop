<?php //899905691d8e54808e23d1a44ed60ccb
/** @noinspection all */

namespace App\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Addon_C;
    use LaravelIdea\Helper\App\Models\_IH_Addon_QB;
    use LaravelIdea\Helper\App\Models\_IH_Address_C;
    use LaravelIdea\Helper\App\Models\_IH_Address_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateConfig_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateConfig_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateEarningDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateEarningDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateLog_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateLog_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateOption_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliatePayment_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliatePayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateStats_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateStats_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateUser_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateWithdrawRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateWithdrawRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_AppSettings_C;
    use LaravelIdea\Helper\App\Models\_IH_AppSettings_QB;
    use LaravelIdea\Helper\App\Models\_IH_AppTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_AppTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_AttributeCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_AttributeCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_AttributeTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_AttributeTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_AttributeValue_C;
    use LaravelIdea\Helper\App\Models\_IH_AttributeValue_QB;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_C;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_QB;
    use LaravelIdea\Helper\App\Models\_IH_AuctionProductBid_C;
    use LaravelIdea\Helper\App\Models\_IH_AuctionProductBid_QB;
    use LaravelIdea\Helper\App\Models\_IH_Banner_C;
    use LaravelIdea\Helper\App\Models\_IH_Banner_QB;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_BrandTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_BrandTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Brand_C;
    use LaravelIdea\Helper\App\Models\_IH_Brand_QB;
    use LaravelIdea\Helper\App\Models\_IH_BusinessSetting_C;
    use LaravelIdea\Helper\App\Models\_IH_BusinessSetting_QB;
    use LaravelIdea\Helper\App\Models\_IH_CarrierRangePrice_C;
    use LaravelIdea\Helper\App\Models\_IH_CarrierRangePrice_QB;
    use LaravelIdea\Helper\App\Models\_IH_CarrierRange_C;
    use LaravelIdea\Helper\App\Models\_IH_CarrierRange_QB;
    use LaravelIdea\Helper\App\Models\_IH_Carrier_C;
    use LaravelIdea\Helper\App\Models\_IH_Carrier_QB;
    use LaravelIdea\Helper\App\Models\_IH_CartProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_CartProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_CategoryTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_CategoryTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_CityTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_CityTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_City_C;
    use LaravelIdea\Helper\App\Models\_IH_City_QB;
    use LaravelIdea\Helper\App\Models\_IH_ClubPointDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_ClubPointDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_ClubPoint_C;
    use LaravelIdea\Helper\App\Models\_IH_ClubPoint_QB;
    use LaravelIdea\Helper\App\Models\_IH_Color_C;
    use LaravelIdea\Helper\App\Models\_IH_Color_QB;
    use LaravelIdea\Helper\App\Models\_IH_CombinedOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_CombinedOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_CommissionHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_CommissionHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Conversation_C;
    use LaravelIdea\Helper\App\Models\_IH_Conversation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Country_C;
    use LaravelIdea\Helper\App\Models\_IH_Country_QB;
    use LaravelIdea\Helper\App\Models\_IH_CouponUsage_C;
    use LaravelIdea\Helper\App\Models\_IH_CouponUsage_QB;
    use LaravelIdea\Helper\App\Models\_IH_Coupon_C;
    use LaravelIdea\Helper\App\Models\_IH_Coupon_QB;
    use LaravelIdea\Helper\App\Models\_IH_Currency_C;
    use LaravelIdea\Helper\App\Models\_IH_Currency_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackagePayment_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackagePayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackageTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackageTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackage_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomerPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomerProductTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomerProductTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomerProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomerProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_Customer_C;
    use LaravelIdea\Helper\App\Models\_IH_Customer_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoyCollection_C;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoyCollection_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoyPayment_C;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoyPayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoy_C;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryBoy_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_DeliveryHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_FirebaseNotification_C;
    use LaravelIdea\Helper\App\Models\_IH_FirebaseNotification_QB;
    use LaravelIdea\Helper\App\Models\_IH_FlashDealProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_FlashDealProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_FlashDealTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_FlashDealTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_FlashDeal_C;
    use LaravelIdea\Helper\App\Models\_IH_FlashDeal_QB;
    use LaravelIdea\Helper\App\Models\_IH_Language_C;
    use LaravelIdea\Helper\App\Models\_IH_Language_QB;
    use LaravelIdea\Helper\App\Models\_IH_ManualPaymentMethod_C;
    use LaravelIdea\Helper\App\Models\_IH_ManualPaymentMethod_QB;
    use LaravelIdea\Helper\App\Models\_IH_Message_C;
    use LaravelIdea\Helper\App\Models\_IH_Message_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_OrderDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_OtpConfiguration_C;
    use LaravelIdea\Helper\App\Models\_IH_OtpConfiguration_QB;
    use LaravelIdea\Helper\App\Models\_IH_PageTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_PageTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Page_C;
    use LaravelIdea\Helper\App\Models\_IH_Page_QB;
    use LaravelIdea\Helper\App\Models\_IH_PasswordReset_C;
    use LaravelIdea\Helper\App\Models\_IH_PasswordReset_QB;
    use LaravelIdea\Helper\App\Models\_IH_Payment_C;
    use LaravelIdea\Helper\App\Models\_IH_Payment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Permission_C;
    use LaravelIdea\Helper\App\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\App\Models\_IH_PickupPointTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_PickupPointTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_PickupPoint_C;
    use LaravelIdea\Helper\App\Models\_IH_PickupPoint_QB;
    use LaravelIdea\Helper\App\Models\_IH_Policy_C;
    use LaravelIdea\Helper\App\Models\_IH_Policy_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductQuery_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductQuery_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductStock_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductStock_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductTax_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductTax_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProxyPayment_C;
    use LaravelIdea\Helper\App\Models\_IH_ProxyPayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_RefundRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_RefundRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_Review_C;
    use LaravelIdea\Helper\App\Models\_IH_Review_QB;
    use LaravelIdea\Helper\App\Models\_IH_RoleTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_RoleTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_Search_C;
    use LaravelIdea\Helper\App\Models\_IH_Search_QB;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackagePayment_C;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackagePayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackageTranslation_C;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackageTranslation_QB;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackage_C;
    use LaravelIdea\Helper\App\Models\_IH_SellerPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_SellerWithdrawRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_SellerWithdrawRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_Seller_C;
    use LaravelIdea\Helper\App\Models\_IH_Seller_QB;
    use LaravelIdea\Helper\App\Models\_IH_Shop_C;
    use LaravelIdea\Helper\App\Models\_IH_Shop_QB;
    use LaravelIdea\Helper\App\Models\_IH_Slider_C;
    use LaravelIdea\Helper\App\Models\_IH_Slider_QB;
    use LaravelIdea\Helper\App\Models\_IH_SmsTemplate_C;
    use LaravelIdea\Helper\App\Models\_IH_SmsTemplate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Staff_C;
    use LaravelIdea\Helper\App\Models\_IH_Staff_QB;
    use LaravelIdea\Helper\App\Models\_IH_State_C;
    use LaravelIdea\Helper\App\Models\_IH_State_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_SubCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscriber_C;
    use LaravelIdea\Helper\App\Models\_IH_Subscriber_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubSubCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_SubSubCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tax_C;
    use LaravelIdea\Helper\App\Models\_IH_Tax_QB;
    use LaravelIdea\Helper\App\Models\_IH_TicketReply_C;
    use LaravelIdea\Helper\App\Models\_IH_TicketReply_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_C;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_QB;
    use LaravelIdea\Helper\App\Models\_IH_Translation_C;
    use LaravelIdea\Helper\App\Models\_IH_Translation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Upload_C;
    use LaravelIdea\Helper\App\Models\_IH_Upload_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\App\Models\_IH_Wallet_C;
    use LaravelIdea\Helper\App\Models\_IH_Wallet_QB;
    use LaravelIdea\Helper\App\Models\_IH_WholesalePrice_C;
    use LaravelIdea\Helper\App\Models\_IH_WholesalePrice_QB;
    use LaravelIdea\Helper\App\Models\_IH_Wishlist_C;
    use LaravelIdea\Helper\App\Models\_IH_Wishlist_QB;
    use LaravelIdea\Helper\App\Models\_IH_Zone_C;
    use LaravelIdea\Helper\App\Models\_IH_Zone_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C as _IH_Permission_C1;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB as _IH_Permission_QB1;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C as _IH_Role_C1;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB as _IH_Role_QB1;
    use Spatie\Permission\Models\Permission as Permission1;
    use Spatie\Permission\Models\Role as Role1;

    /**
     * @method static _IH_Addon_QB onWriteConnection()
     * @method _IH_Addon_QB newQuery()
     * @method static _IH_Addon_QB on(null|string $connection = null)
     * @method static _IH_Addon_QB query()
     * @method static _IH_Addon_QB with(array|string $relations)
     * @method _IH_Addon_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Addon_C|Addon[] all()
     * @mixin _IH_Addon_QB
     */
    class Addon extends Model {}

    /**
     * @property City $city
     * @method BelongsTo|_IH_City_QB city()
     * @property Country $country
     * @method BelongsTo|_IH_Country_QB country()
     * @property State $state
     * @method BelongsTo|_IH_State_QB state()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Address_QB onWriteConnection()
     * @method _IH_Address_QB newQuery()
     * @method static _IH_Address_QB on(null|string $connection = null)
     * @method static _IH_Address_QB query()
     * @method static _IH_Address_QB with(array|string $relations)
     * @method _IH_Address_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Address_C|Address[] all()
     * @mixin _IH_Address_QB
     */
    class Address extends Model {}

    /**
     * @method static _IH_AffiliateConfig_QB onWriteConnection()
     * @method _IH_AffiliateConfig_QB newQuery()
     * @method static _IH_AffiliateConfig_QB on(null|string $connection = null)
     * @method static _IH_AffiliateConfig_QB query()
     * @method static _IH_AffiliateConfig_QB with(array|string $relations)
     * @method _IH_AffiliateConfig_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateConfig_C|AffiliateConfig[] all()
     * @mixin _IH_AffiliateConfig_QB
     */
    class AffiliateConfig extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AffiliateEarningDetail_QB onWriteConnection()
     * @method _IH_AffiliateEarningDetail_QB newQuery()
     * @method static _IH_AffiliateEarningDetail_QB on(null|string $connection = null)
     * @method static _IH_AffiliateEarningDetail_QB query()
     * @method static _IH_AffiliateEarningDetail_QB with(array|string $relations)
     * @method _IH_AffiliateEarningDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateEarningDetail_C|AffiliateEarningDetail[] all()
     * @mixin _IH_AffiliateEarningDetail_QB
     */
    class AffiliateEarningDetail extends Model {}

    /**
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property OrderDetail $order_detail
     * @method BelongsTo|_IH_OrderDetail_QB order_detail()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AffiliateLog_QB onWriteConnection()
     * @method _IH_AffiliateLog_QB newQuery()
     * @method static _IH_AffiliateLog_QB on(null|string $connection = null)
     * @method static _IH_AffiliateLog_QB query()
     * @method static _IH_AffiliateLog_QB with(array|string $relations)
     * @method _IH_AffiliateLog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateLog_C|AffiliateLog[] all()
     * @mixin _IH_AffiliateLog_QB
     */
    class AffiliateLog extends Model {}

    /**
     * @method static _IH_AffiliateOption_QB onWriteConnection()
     * @method _IH_AffiliateOption_QB newQuery()
     * @method static _IH_AffiliateOption_QB on(null|string $connection = null)
     * @method static _IH_AffiliateOption_QB query()
     * @method static _IH_AffiliateOption_QB with(array|string $relations)
     * @method _IH_AffiliateOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateOption_C|AffiliateOption[] all()
     * @mixin _IH_AffiliateOption_QB
     */
    class AffiliateOption extends Model {}

    /**
     * @method static _IH_AffiliatePayment_QB onWriteConnection()
     * @method _IH_AffiliatePayment_QB newQuery()
     * @method static _IH_AffiliatePayment_QB on(null|string $connection = null)
     * @method static _IH_AffiliatePayment_QB query()
     * @method static _IH_AffiliatePayment_QB with(array|string $relations)
     * @method _IH_AffiliatePayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliatePayment_C|AffiliatePayment[] all()
     * @mixin _IH_AffiliatePayment_QB
     */
    class AffiliatePayment extends Model {}

    /**
     * @method static _IH_AffiliateStats_QB onWriteConnection()
     * @method _IH_AffiliateStats_QB newQuery()
     * @method static _IH_AffiliateStats_QB on(null|string $connection = null)
     * @method static _IH_AffiliateStats_QB query()
     * @method static _IH_AffiliateStats_QB with(array|string $relations)
     * @method _IH_AffiliateStats_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateStats_C|AffiliateStats[] all()
     * @mixin _IH_AffiliateStats_QB
     */
    class AffiliateStats extends Model {}

    /**
     * @property _IH_AffiliatePayment_C|AffiliatePayment[] $affiliate_payments
     * @property-read int $affiliate_payments_count
     * @method HasMany|_IH_AffiliatePayment_QB affiliate_payments()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AffiliateUser_QB onWriteConnection()
     * @method _IH_AffiliateUser_QB newQuery()
     * @method static _IH_AffiliateUser_QB on(null|string $connection = null)
     * @method static _IH_AffiliateUser_QB query()
     * @method static _IH_AffiliateUser_QB with(array|string $relations)
     * @method _IH_AffiliateUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateUser_C|AffiliateUser[] all()
     * @mixin _IH_AffiliateUser_QB
     */
    class AffiliateUser extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AffiliateWithdrawRequest_QB onWriteConnection()
     * @method _IH_AffiliateWithdrawRequest_QB newQuery()
     * @method static _IH_AffiliateWithdrawRequest_QB on(null|string $connection = null)
     * @method static _IH_AffiliateWithdrawRequest_QB query()
     * @method static _IH_AffiliateWithdrawRequest_QB with(array|string $relations)
     * @method _IH_AffiliateWithdrawRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] all()
     * @mixin _IH_AffiliateWithdrawRequest_QB
     */
    class AffiliateWithdrawRequest extends Model {}

    /**
     * @property Currency $currency
     * @method BelongsTo|_IH_Currency_QB currency()
     * @method static _IH_AppSettings_QB onWriteConnection()
     * @method _IH_AppSettings_QB newQuery()
     * @method static _IH_AppSettings_QB on(null|string $connection = null)
     * @method static _IH_AppSettings_QB query()
     * @method static _IH_AppSettings_QB with(array|string $relations)
     * @method _IH_AppSettings_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AppSettings_C|AppSettings[] all()
     * @mixin _IH_AppSettings_QB
     */
    class AppSettings extends Model {}

    /**
     * @method static _IH_AppTranslation_QB onWriteConnection()
     * @method _IH_AppTranslation_QB newQuery()
     * @method static _IH_AppTranslation_QB on(null|string $connection = null)
     * @method static _IH_AppTranslation_QB query()
     * @method static _IH_AppTranslation_QB with(array|string $relations)
     * @method _IH_AppTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AppTranslation_C|AppTranslation[] all()
     * @mixin _IH_AppTranslation_QB
     */
    class AppTranslation extends Model {}

    /**
     * @property _IH_AttributeTranslation_C|AttributeTranslation[] $attribute_translations
     * @property-read int $attribute_translations_count
     * @method HasMany|_IH_AttributeTranslation_QB attribute_translations()
     * @property _IH_AttributeValue_C|AttributeValue[] $attribute_values
     * @property-read int $attribute_values_count
     * @method HasMany|_IH_AttributeValue_QB attribute_values()
     * @method static _IH_Attribute_QB onWriteConnection()
     * @method _IH_Attribute_QB newQuery()
     * @method static _IH_Attribute_QB on(null|string $connection = null)
     * @method static _IH_Attribute_QB query()
     * @method static _IH_Attribute_QB with(array|string $relations)
     * @method _IH_Attribute_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Attribute_C|Attribute[] all()
     * @mixin _IH_Attribute_QB
     */
    class Attribute extends Model {}

    /**
     * @method static _IH_AttributeCategory_QB onWriteConnection()
     * @method _IH_AttributeCategory_QB newQuery()
     * @method static _IH_AttributeCategory_QB on(null|string $connection = null)
     * @method static _IH_AttributeCategory_QB query()
     * @method static _IH_AttributeCategory_QB with(array|string $relations)
     * @method _IH_AttributeCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AttributeCategory_C|AttributeCategory[] all()
     * @mixin _IH_AttributeCategory_QB
     */
    class AttributeCategory extends Model {}

    /**
     * @property Attribute $attribute
     * @method BelongsTo|_IH_Attribute_QB attribute()
     * @method static _IH_AttributeTranslation_QB onWriteConnection()
     * @method _IH_AttributeTranslation_QB newQuery()
     * @method static _IH_AttributeTranslation_QB on(null|string $connection = null)
     * @method static _IH_AttributeTranslation_QB query()
     * @method static _IH_AttributeTranslation_QB with(array|string $relations)
     * @method _IH_AttributeTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AttributeTranslation_C|AttributeTranslation[] all()
     * @mixin _IH_AttributeTranslation_QB
     */
    class AttributeTranslation extends Model {}

    /**
     * @property Attribute $attribute
     * @method BelongsTo|_IH_Attribute_QB attribute()
     * @method static _IH_AttributeValue_QB onWriteConnection()
     * @method _IH_AttributeValue_QB newQuery()
     * @method static _IH_AttributeValue_QB on(null|string $connection = null)
     * @method static _IH_AttributeValue_QB query()
     * @method static _IH_AttributeValue_QB with(array|string $relations)
     * @method _IH_AttributeValue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AttributeValue_C|AttributeValue[] all()
     * @mixin _IH_AttributeValue_QB
     */
    class AttributeValue extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AuctionProductBid_QB onWriteConnection()
     * @method _IH_AuctionProductBid_QB newQuery()
     * @method static _IH_AuctionProductBid_QB on(null|string $connection = null)
     * @method static _IH_AuctionProductBid_QB query()
     * @method static _IH_AuctionProductBid_QB with(array|string $relations)
     * @method _IH_AuctionProductBid_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AuctionProductBid_C|AuctionProductBid[] all()
     * @mixin _IH_AuctionProductBid_QB
     */
    class AuctionProductBid extends Model {}

    /**
     * @method static _IH_Banner_QB onWriteConnection()
     * @method _IH_Banner_QB newQuery()
     * @method static _IH_Banner_QB on(null|string $connection = null)
     * @method static _IH_Banner_QB query()
     * @method static _IH_Banner_QB with(array|string $relations)
     * @method _IH_Banner_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Banner_C|Banner[] all()
     * @mixin _IH_Banner_QB
     */
    class Banner extends Model {}

    /**
     * @property BlogCategory $category
     * @method BelongsTo|_IH_BlogCategory_QB category()
     * @method static _IH_Blog_QB onWriteConnection()
     * @method _IH_Blog_QB newQuery()
     * @method static _IH_Blog_QB on(null|string $connection = null)
     * @method static _IH_Blog_QB query()
     * @method static _IH_Blog_QB with(array|string $relations)
     * @method _IH_Blog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Blog_C|Blog[] all()
     * @mixin _IH_Blog_QB
     */
    class Blog extends Model {}

    /**
     * @property _IH_Blog_C|Blog[] $posts
     * @property-read int $posts_count
     * @method HasMany|_IH_Blog_QB posts()
     * @method static _IH_BlogCategory_QB onWriteConnection()
     * @method _IH_BlogCategory_QB newQuery()
     * @method static _IH_BlogCategory_QB on(null|string $connection = null)
     * @method static _IH_BlogCategory_QB query()
     * @method static _IH_BlogCategory_QB with(array|string $relations)
     * @method _IH_BlogCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategory_C|BlogCategory[] all()
     * @mixin _IH_BlogCategory_QB
     */
    class BlogCategory extends Model {}

    /**
     * @property _IH_BrandTranslation_C|BrandTranslation[] $brand_translations
     * @property-read int $brand_translations_count
     * @method HasMany|_IH_BrandTranslation_QB brand_translations()
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property Brand $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @method static _IH_BrandTranslation_QB onWriteConnection()
     * @method _IH_BrandTranslation_QB newQuery()
     * @method static _IH_BrandTranslation_QB on(null|string $connection = null)
     * @method static _IH_BrandTranslation_QB query()
     * @method static _IH_BrandTranslation_QB with(array|string $relations)
     * @method _IH_BrandTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BrandTranslation_C|BrandTranslation[] all()
     * @mixin _IH_BrandTranslation_QB
     */
    class BrandTranslation extends Model {}

    /**
     * @method static _IH_BusinessSetting_QB onWriteConnection()
     * @method _IH_BusinessSetting_QB newQuery()
     * @method static _IH_BusinessSetting_QB on(null|string $connection = null)
     * @method static _IH_BusinessSetting_QB query()
     * @method static _IH_BusinessSetting_QB with(array|string $relations)
     * @method _IH_BusinessSetting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BusinessSetting_C|BusinessSetting[] all()
     * @mixin _IH_BusinessSetting_QB
     */
    class BusinessSetting extends Model {}

    /**
     * @property _IH_CarrierRangePrice_C|CarrierRangePrice[] $carrier_range_prices
     * @property-read int $carrier_range_prices_count
     * @method HasMany|_IH_CarrierRangePrice_QB carrier_range_prices()
     * @property _IH_CarrierRange_C|CarrierRange[] $carrier_ranges
     * @property-read int $carrier_ranges_count
     * @method HasMany|_IH_CarrierRange_QB carrier_ranges()
     * @method static _IH_Carrier_QB onWriteConnection()
     * @method _IH_Carrier_QB newQuery()
     * @method static _IH_Carrier_QB on(null|string $connection = null)
     * @method static _IH_Carrier_QB query()
     * @method static _IH_Carrier_QB with(array|string $relations)
     * @method _IH_Carrier_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Carrier_C|Carrier[] all()
     * @mixin _IH_Carrier_QB
     */
    class Carrier extends Model {}

    /**
     * @property Carrier $carrier
     * @method BelongsTo|_IH_Carrier_QB carrier()
     * @property _IH_CarrierRangePrice_C|CarrierRangePrice[] $carrier_range_prices
     * @property-read int $carrier_range_prices_count
     * @method HasMany|_IH_CarrierRangePrice_QB carrier_range_prices()
     * @method static _IH_CarrierRange_QB onWriteConnection()
     * @method _IH_CarrierRange_QB newQuery()
     * @method static _IH_CarrierRange_QB on(null|string $connection = null)
     * @method static _IH_CarrierRange_QB query()
     * @method static _IH_CarrierRange_QB with(array|string $relations)
     * @method _IH_CarrierRange_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CarrierRange_C|CarrierRange[] all()
     * @mixin _IH_CarrierRange_QB
     */
    class CarrierRange extends Model {}

    /**
     * @property Carrier $carrier
     * @method BelongsTo|_IH_Carrier_QB carrier()
     * @property CarrierRange $carrier_ranges
     * @method BelongsTo|_IH_CarrierRange_QB carrier_ranges()
     * @property Zone $zone
     * @method BelongsTo|_IH_Zone_QB zone()
     * @method static _IH_CarrierRangePrice_QB onWriteConnection()
     * @method _IH_CarrierRangePrice_QB newQuery()
     * @method static _IH_CarrierRangePrice_QB on(null|string $connection = null)
     * @method static _IH_CarrierRangePrice_QB query()
     * @method static _IH_CarrierRangePrice_QB with(array|string $relations)
     * @method _IH_CarrierRangePrice_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CarrierRangePrice_C|CarrierRangePrice[] all()
     * @mixin _IH_CarrierRangePrice_QB
     */
    class CarrierRangePrice extends Model {}

    /**
     * @property Address $address
     * @method BelongsTo|_IH_Address_QB address()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Cart_QB onWriteConnection()
     * @method _IH_Cart_QB newQuery()
     * @method static _IH_Cart_QB on(null|string $connection = null)
     * @method static _IH_Cart_QB query()
     * @method static _IH_Cart_QB with(array|string $relations)
     * @method _IH_Cart_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Cart_C|Cart[] all()
     * @mixin _IH_Cart_QB
     */
    class Cart extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_CartProduct_QB onWriteConnection()
     * @method _IH_CartProduct_QB newQuery()
     * @method static _IH_CartProduct_QB on(null|string $connection = null)
     * @method static _IH_CartProduct_QB query()
     * @method static _IH_CartProduct_QB with(array|string $relations)
     * @method _IH_CartProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CartProduct_C|CartProduct[] all()
     * @mixin _IH_CartProduct_QB
     */
    class CartProduct extends Model {}

    /**
     * @property _IH_Attribute_C|Attribute[] $attributes
     * @property-read int $attributes_count
     * @method BelongsToMany|_IH_Attribute_QB attributes()
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method HasMany|_IH_Category_QB categories()
     * @property _IH_CategoryTranslation_C|CategoryTranslation[] $category_translations
     * @property-read int $category_translations_count
     * @method HasMany|_IH_CategoryTranslation_QB category_translations()
     * @property _IH_Category_C|Category[] $childrenCategories
     * @property-read int $children_categories_count
     * @method HasMany|_IH_Category_QB childrenCategories()
     * @property _IH_CustomerProduct_C|CustomerProduct[] $classified_products
     * @property-read int $classified_products_count
     * @method HasMany|_IH_CustomerProduct_QB classified_products()
     * @property Category $parentCategory
     * @method BelongsTo|_IH_Category_QB parentCategory()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @method static _IH_CategoryTranslation_QB onWriteConnection()
     * @method _IH_CategoryTranslation_QB newQuery()
     * @method static _IH_CategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_CategoryTranslation_QB query()
     * @method static _IH_CategoryTranslation_QB with(array|string $relations)
     * @method _IH_CategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CategoryTranslation_C|CategoryTranslation[] all()
     * @mixin _IH_CategoryTranslation_QB
     */
    class CategoryTranslation extends Model {}

    /**
     * @property _IH_CityTranslation_C|CityTranslation[] $city_translations
     * @property-read int $city_translations_count
     * @method HasMany|_IH_CityTranslation_QB city_translations()
     * @property Country $country
     * @method BelongsTo|_IH_Country_QB country()
     * @property _IH_CityTranslation_C|CityTranslation[] $getTranslation
     * @property-read int $get_translation_count
     * @method HasMany|_IH_CityTranslation_QB getTranslation()
     * @property State $state
     * @method BelongsTo|_IH_State_QB state()
     * @method static _IH_City_QB onWriteConnection()
     * @method _IH_City_QB newQuery()
     * @method static _IH_City_QB on(null|string $connection = null)
     * @method static _IH_City_QB query()
     * @method static _IH_City_QB with(array|string $relations)
     * @method _IH_City_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_City_C|City[] all()
     * @mixin _IH_City_QB
     */
    class City extends Model {}

    /**
     * @property City $city
     * @method BelongsTo|_IH_City_QB city()
     * @method static _IH_CityTranslation_QB onWriteConnection()
     * @method _IH_CityTranslation_QB newQuery()
     * @method static _IH_CityTranslation_QB on(null|string $connection = null)
     * @method static _IH_CityTranslation_QB query()
     * @method static _IH_CityTranslation_QB with(array|string $relations)
     * @method _IH_CityTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CityTranslation_C|CityTranslation[] all()
     * @mixin _IH_CityTranslation_QB
     */
    class CityTranslation extends Model {}

    /**
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ClubPoint_QB onWriteConnection()
     * @method _IH_ClubPoint_QB newQuery()
     * @method static _IH_ClubPoint_QB on(null|string $connection = null)
     * @method static _IH_ClubPoint_QB query()
     * @method static _IH_ClubPoint_QB with(array|string $relations)
     * @method _IH_ClubPoint_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ClubPoint_C|ClubPoint[] all()
     * @mixin _IH_ClubPoint_QB
     */
    class ClubPoint extends Model {}

    /**
     * @property ClubPoint $club_point
     * @method BelongsTo|_IH_ClubPoint_QB club_point()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ClubPointDetail_QB onWriteConnection()
     * @method _IH_ClubPointDetail_QB newQuery()
     * @method static _IH_ClubPointDetail_QB on(null|string $connection = null)
     * @method static _IH_ClubPointDetail_QB query()
     * @method static _IH_ClubPointDetail_QB with(array|string $relations)
     * @method _IH_ClubPointDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ClubPointDetail_C|ClubPointDetail[] all()
     * @mixin _IH_ClubPointDetail_QB
     */
    class ClubPointDetail extends Model {}

    /**
     * @method static _IH_Color_QB onWriteConnection()
     * @method _IH_Color_QB newQuery()
     * @method static _IH_Color_QB on(null|string $connection = null)
     * @method static _IH_Color_QB query()
     * @method static _IH_Color_QB with(array|string $relations)
     * @method _IH_Color_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Color_C|Color[] all()
     * @mixin _IH_Color_QB
     */
    class Color extends Model {}

    /**
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_CombinedOrder_QB onWriteConnection()
     * @method _IH_CombinedOrder_QB newQuery()
     * @method static _IH_CombinedOrder_QB on(null|string $connection = null)
     * @method static _IH_CombinedOrder_QB query()
     * @method static _IH_CombinedOrder_QB with(array|string $relations)
     * @method _IH_CombinedOrder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CombinedOrder_C|CombinedOrder[] all()
     * @mixin _IH_CombinedOrder_QB
     */
    class CombinedOrder extends Model {}

    /**
     * @property Order $order
     * @method HasOne|_IH_Order_QB order()
     * @method static _IH_CommissionHistory_QB onWriteConnection()
     * @method _IH_CommissionHistory_QB newQuery()
     * @method static _IH_CommissionHistory_QB on(null|string $connection = null)
     * @method static _IH_CommissionHistory_QB query()
     * @method static _IH_CommissionHistory_QB with(array|string $relations)
     * @method _IH_CommissionHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CommissionHistory_C|CommissionHistory[] all()
     * @mixin _IH_CommissionHistory_QB
     */
    class CommissionHistory extends Model {}

    /**
     * @property _IH_Message_C|Message[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_Message_QB messages()
     * @property User $receiver
     * @method BelongsTo|_IH_User_QB receiver()
     * @property User $sender
     * @method BelongsTo|_IH_User_QB sender()
     * @method static _IH_Conversation_QB onWriteConnection()
     * @method _IH_Conversation_QB newQuery()
     * @method static _IH_Conversation_QB on(null|string $connection = null)
     * @method static _IH_Conversation_QB query()
     * @method static _IH_Conversation_QB with(array|string $relations)
     * @method _IH_Conversation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Conversation_C|Conversation[] all()
     * @mixin _IH_Conversation_QB
     */
    class Conversation extends Model {}

    /**
     * @property Zone $zone
     * @method BelongsTo|_IH_Zone_QB zone()
     * @method static _IH_Country_QB onWriteConnection()
     * @method _IH_Country_QB newQuery()
     * @method static _IH_Country_QB on(null|string $connection = null)
     * @method static _IH_Country_QB query()
     * @method static _IH_Country_QB with(array|string $relations)
     * @method _IH_Country_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Country_C|Country[] all()
     * @mixin _IH_Country_QB
     */
    class Country extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Coupon_QB onWriteConnection()
     * @method _IH_Coupon_QB newQuery()
     * @method static _IH_Coupon_QB on(null|string $connection = null)
     * @method static _IH_Coupon_QB query()
     * @method static _IH_Coupon_QB with(array|string $relations)
     * @method _IH_Coupon_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Coupon_C|Coupon[] all()
     * @mixin _IH_Coupon_QB
     */
    class Coupon extends Model {}

    /**
     * @method static _IH_CouponUsage_QB onWriteConnection()
     * @method _IH_CouponUsage_QB newQuery()
     * @method static _IH_CouponUsage_QB on(null|string $connection = null)
     * @method static _IH_CouponUsage_QB query()
     * @method static _IH_CouponUsage_QB with(array|string $relations)
     * @method _IH_CouponUsage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CouponUsage_C|CouponUsage[] all()
     * @mixin _IH_CouponUsage_QB
     */
    class CouponUsage extends Model {}

    /**
     * @method static _IH_Currency_QB onWriteConnection()
     * @method _IH_Currency_QB newQuery()
     * @method static _IH_Currency_QB on(null|string $connection = null)
     * @method static _IH_Currency_QB query()
     * @method static _IH_Currency_QB with(array|string $relations)
     * @method _IH_Currency_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Currency_C|Currency[] all()
     * @mixin _IH_Currency_QB
     */
    class Currency extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Customer_QB onWriteConnection()
     * @method _IH_Customer_QB newQuery()
     * @method static _IH_Customer_QB on(null|string $connection = null)
     * @method static _IH_Customer_QB query()
     * @method static _IH_Customer_QB with(array|string $relations)
     * @method _IH_Customer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Customer_C|Customer[] all()
     * @mixin _IH_Customer_QB
     */
    class Customer extends Model {}

    /**
     * @property _IH_CustomerPackagePayment_C|CustomerPackagePayment[] $customer_package_payments
     * @property-read int $customer_package_payments_count
     * @method HasMany|_IH_CustomerPackagePayment_QB customer_package_payments()
     * @property _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] $customer_package_translations
     * @property-read int $customer_package_translations_count
     * @method HasMany|_IH_CustomerPackageTranslation_QB customer_package_translations()
     * @property _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] $getTranslation
     * @property-read int $get_translation_count
     * @method HasMany|_IH_CustomerPackageTranslation_QB getTranslation()
     * @method static _IH_CustomerPackage_QB onWriteConnection()
     * @method _IH_CustomerPackage_QB newQuery()
     * @method static _IH_CustomerPackage_QB on(null|string $connection = null)
     * @method static _IH_CustomerPackage_QB query()
     * @method static _IH_CustomerPackage_QB with(array|string $relations)
     * @method _IH_CustomerPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomerPackage_C|CustomerPackage[] all()
     * @mixin _IH_CustomerPackage_QB
     */
    class CustomerPackage extends Model {}

    /**
     * @property CustomerPackage $customer_package
     * @method BelongsTo|_IH_CustomerPackage_QB customer_package()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_CustomerPackagePayment_QB onWriteConnection()
     * @method _IH_CustomerPackagePayment_QB newQuery()
     * @method static _IH_CustomerPackagePayment_QB on(null|string $connection = null)
     * @method static _IH_CustomerPackagePayment_QB query()
     * @method static _IH_CustomerPackagePayment_QB with(array|string $relations)
     * @method _IH_CustomerPackagePayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomerPackagePayment_C|CustomerPackagePayment[] all()
     * @mixin _IH_CustomerPackagePayment_QB
     */
    class CustomerPackagePayment extends Model {}

    /**
     * @property CustomerPackage $customer_package
     * @method BelongsTo|_IH_CustomerPackage_QB customer_package()
     * @method static _IH_CustomerPackageTranslation_QB onWriteConnection()
     * @method _IH_CustomerPackageTranslation_QB newQuery()
     * @method static _IH_CustomerPackageTranslation_QB on(null|string $connection = null)
     * @method static _IH_CustomerPackageTranslation_QB query()
     * @method static _IH_CustomerPackageTranslation_QB with(array|string $relations)
     * @method _IH_CustomerPackageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomerPackageTranslation_C|CustomerPackageTranslation[] all()
     * @mixin _IH_CustomerPackageTranslation_QB
     */
    class CustomerPackageTranslation extends Model {}

    /**
     * @property Brand $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property City $city
     * @method BelongsTo|_IH_City_QB city()
     * @property _IH_CustomerProductTranslation_C|CustomerProductTranslation[] $customer_product_translations
     * @property-read int $customer_product_translations_count
     * @method HasMany|_IH_CustomerProductTranslation_QB customer_product_translations()
     * @property State $state
     * @method BelongsTo|_IH_State_QB state()
     * @property SubCategory $subcategory
     * @method BelongsTo|_IH_SubCategory_QB subcategory()
     * @property SubSubCategory $subsubcategory
     * @method BelongsTo|_IH_SubSubCategory_QB subsubcategory()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_CustomerProduct_QB onWriteConnection()
     * @method _IH_CustomerProduct_QB newQuery()
     * @method static _IH_CustomerProduct_QB on(null|string $connection = null)
     * @method static _IH_CustomerProduct_QB query()
     * @method static _IH_CustomerProduct_QB with(array|string $relations)
     * @method _IH_CustomerProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomerProduct_C|CustomerProduct[] all()
     * @mixin _IH_CustomerProduct_QB
     */
    class CustomerProduct extends Model {}

    /**
     * @property CustomerProduct $customer_product
     * @method BelongsTo|_IH_CustomerProduct_QB customer_product()
     * @method static _IH_CustomerProductTranslation_QB onWriteConnection()
     * @method _IH_CustomerProductTranslation_QB newQuery()
     * @method static _IH_CustomerProductTranslation_QB on(null|string $connection = null)
     * @method static _IH_CustomerProductTranslation_QB query()
     * @method static _IH_CustomerProductTranslation_QB with(array|string $relations)
     * @method _IH_CustomerProductTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomerProductTranslation_C|CustomerProductTranslation[] all()
     * @mixin _IH_CustomerProductTranslation_QB
     */
    class CustomerProductTranslation extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_DeliveryBoy_QB onWriteConnection()
     * @method _IH_DeliveryBoy_QB newQuery()
     * @method static _IH_DeliveryBoy_QB on(null|string $connection = null)
     * @method static _IH_DeliveryBoy_QB query()
     * @method static _IH_DeliveryBoy_QB with(array|string $relations)
     * @method _IH_DeliveryBoy_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeliveryBoy_C|DeliveryBoy[] all()
     * @mixin _IH_DeliveryBoy_QB
     */
    class DeliveryBoy extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_DeliveryBoyCollection_QB onWriteConnection()
     * @method _IH_DeliveryBoyCollection_QB newQuery()
     * @method static _IH_DeliveryBoyCollection_QB on(null|string $connection = null)
     * @method static _IH_DeliveryBoyCollection_QB query()
     * @method static _IH_DeliveryBoyCollection_QB with(array|string $relations)
     * @method _IH_DeliveryBoyCollection_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeliveryBoyCollection_C|DeliveryBoyCollection[] all()
     * @mixin _IH_DeliveryBoyCollection_QB
     */
    class DeliveryBoyCollection extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_DeliveryBoyPayment_QB onWriteConnection()
     * @method _IH_DeliveryBoyPayment_QB newQuery()
     * @method static _IH_DeliveryBoyPayment_QB on(null|string $connection = null)
     * @method static _IH_DeliveryBoyPayment_QB query()
     * @method static _IH_DeliveryBoyPayment_QB with(array|string $relations)
     * @method _IH_DeliveryBoyPayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeliveryBoyPayment_C|DeliveryBoyPayment[] all()
     * @mixin _IH_DeliveryBoyPayment_QB
     */
    class DeliveryBoyPayment extends Model {}

    /**
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @method static _IH_DeliveryHistory_QB onWriteConnection()
     * @method _IH_DeliveryHistory_QB newQuery()
     * @method static _IH_DeliveryHistory_QB on(null|string $connection = null)
     * @method static _IH_DeliveryHistory_QB query()
     * @method static _IH_DeliveryHistory_QB with(array|string $relations)
     * @method _IH_DeliveryHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeliveryHistory_C|DeliveryHistory[] all()
     * @mixin _IH_DeliveryHistory_QB
     */
    class DeliveryHistory extends Model {}

    /**
     * @method static _IH_FirebaseNotification_QB onWriteConnection()
     * @method _IH_FirebaseNotification_QB newQuery()
     * @method static _IH_FirebaseNotification_QB on(null|string $connection = null)
     * @method static _IH_FirebaseNotification_QB query()
     * @method static _IH_FirebaseNotification_QB with(array|string $relations)
     * @method _IH_FirebaseNotification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FirebaseNotification_C|FirebaseNotification[] all()
     * @mixin _IH_FirebaseNotification_QB
     */
    class FirebaseNotification extends Model {}

    /**
     * @property _IH_FlashDealProduct_C|FlashDealProduct[] $flash_deal_products
     * @property-read int $flash_deal_products_count
     * @method HasMany|_IH_FlashDealProduct_QB flash_deal_products()
     * @property _IH_FlashDealTranslation_C|FlashDealTranslation[] $flash_deal_translations
     * @property-read int $flash_deal_translations_count
     * @method HasMany|_IH_FlashDealTranslation_QB flash_deal_translations()
     * @method static _IH_FlashDeal_QB onWriteConnection()
     * @method _IH_FlashDeal_QB newQuery()
     * @method static _IH_FlashDeal_QB on(null|string $connection = null)
     * @method static _IH_FlashDeal_QB query()
     * @method static _IH_FlashDeal_QB with(array|string $relations)
     * @method _IH_FlashDeal_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FlashDeal_C|FlashDeal[] all()
     * @mixin _IH_FlashDeal_QB
     */
    class FlashDeal extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_FlashDealProduct_QB onWriteConnection()
     * @method _IH_FlashDealProduct_QB newQuery()
     * @method static _IH_FlashDealProduct_QB on(null|string $connection = null)
     * @method static _IH_FlashDealProduct_QB query()
     * @method static _IH_FlashDealProduct_QB with(array|string $relations)
     * @method _IH_FlashDealProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FlashDealProduct_C|FlashDealProduct[] all()
     * @mixin _IH_FlashDealProduct_QB
     */
    class FlashDealProduct extends Model {}

    /**
     * @property FlashDeal $flash_deal
     * @method BelongsTo|_IH_FlashDeal_QB flash_deal()
     * @method static _IH_FlashDealTranslation_QB onWriteConnection()
     * @method _IH_FlashDealTranslation_QB newQuery()
     * @method static _IH_FlashDealTranslation_QB on(null|string $connection = null)
     * @method static _IH_FlashDealTranslation_QB query()
     * @method static _IH_FlashDealTranslation_QB with(array|string $relations)
     * @method _IH_FlashDealTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FlashDealTranslation_C|FlashDealTranslation[] all()
     * @mixin _IH_FlashDealTranslation_QB
     */
    class FlashDealTranslation extends Model {}

    /**
     * @method static _IH_Language_QB onWriteConnection()
     * @method _IH_Language_QB newQuery()
     * @method static _IH_Language_QB on(null|string $connection = null)
     * @method static _IH_Language_QB query()
     * @method static _IH_Language_QB with(array|string $relations)
     * @method _IH_Language_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Language_C|Language[] all()
     * @mixin _IH_Language_QB
     */
    class Language extends Model {}

    /**
     * @method static _IH_ManualPaymentMethod_QB onWriteConnection()
     * @method _IH_ManualPaymentMethod_QB newQuery()
     * @method static _IH_ManualPaymentMethod_QB on(null|string $connection = null)
     * @method static _IH_ManualPaymentMethod_QB query()
     * @method static _IH_ManualPaymentMethod_QB with(array|string $relations)
     * @method _IH_ManualPaymentMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ManualPaymentMethod_C|ManualPaymentMethod[] all()
     * @mixin _IH_ManualPaymentMethod_QB
     */
    class ManualPaymentMethod extends Model {}

    /**
     * @property Conversation $conversation
     * @method BelongsTo|_IH_Conversation_QB conversation()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Message_QB onWriteConnection()
     * @method _IH_Message_QB newQuery()
     * @method static _IH_Message_QB on(null|string $connection = null)
     * @method static _IH_Message_QB query()
     * @method static _IH_Message_QB with(array|string $relations)
     * @method _IH_Message_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Message_C|Message[] all()
     * @mixin _IH_Message_QB
     */
    class Message extends Model {}

    /**
     * @property _IH_AffiliateLog_C|AffiliateLog[] $affiliate_log
     * @property-read int $affiliate_log_count
     * @method HasMany|_IH_AffiliateLog_QB affiliate_log()
     * @property Carrier $carrier
     * @method BelongsTo|_IH_Carrier_QB carrier()
     * @property _IH_ClubPoint_C|ClubPoint[] $club_point
     * @property-read int $club_point_count
     * @method HasMany|_IH_ClubPoint_QB club_point()
     * @property User $delivery_boy
     * @method BelongsTo|_IH_User_QB delivery_boy()
     * @property _IH_OrderDetail_C|OrderDetail[] $orderDetails
     * @property-read int $order_details_count
     * @method HasMany|_IH_OrderDetail_QB orderDetails()
     * @property PickupPoint $pickup_point
     * @method BelongsTo|_IH_PickupPoint_QB pickup_point()
     * @property _IH_ProxyPayment_C|ProxyPayment[] $proxy_cart_reference_id
     * @property-read int $proxy_cart_reference_id_count
     * @method HasMany|_IH_ProxyPayment_QB proxy_cart_reference_id()
     * @property _IH_RefundRequest_C|RefundRequest[] $refund_requests
     * @property-read int $refund_requests_count
     * @method HasMany|_IH_RefundRequest_QB refund_requests()
     * @property Shop $shop
     * @method HasOne|_IH_Shop_QB shop()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}

    /**
     * @property _IH_AffiliateLog_C|AffiliateLog[] $affiliate_log
     * @property-read int $affiliate_log_count
     * @method HasMany|_IH_AffiliateLog_QB affiliate_log()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property PickupPoint $pickup_point
     * @method BelongsTo|_IH_PickupPoint_QB pickup_point()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property RefundRequest $refund_request
     * @method HasOne|_IH_RefundRequest_QB refund_request()
     * @method static _IH_OrderDetail_QB onWriteConnection()
     * @method _IH_OrderDetail_QB newQuery()
     * @method static _IH_OrderDetail_QB on(null|string $connection = null)
     * @method static _IH_OrderDetail_QB query()
     * @method static _IH_OrderDetail_QB with(array|string $relations)
     * @method _IH_OrderDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderDetail_C|OrderDetail[] all()
     * @mixin _IH_OrderDetail_QB
     */
    class OrderDetail extends Model {}

    /**
     * @method static _IH_OtpConfiguration_QB onWriteConnection()
     * @method _IH_OtpConfiguration_QB newQuery()
     * @method static _IH_OtpConfiguration_QB on(null|string $connection = null)
     * @method static _IH_OtpConfiguration_QB query()
     * @method static _IH_OtpConfiguration_QB with(array|string $relations)
     * @method _IH_OtpConfiguration_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OtpConfiguration_C|OtpConfiguration[] all()
     * @mixin _IH_OtpConfiguration_QB
     */
    class OtpConfiguration extends Model {}

    /**
     * @property _IH_PageTranslation_C|PageTranslation[] $getTranslation
     * @property-read int $get_translation_count
     * @method HasMany|_IH_PageTranslation_QB getTranslation()
     * @property _IH_PageTranslation_C|PageTranslation[] $page_translations
     * @property-read int $page_translations_count
     * @method HasMany|_IH_PageTranslation_QB page_translations()
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}

    /**
     * @property Page $page
     * @method BelongsTo|_IH_Page_QB page()
     * @method static _IH_PageTranslation_QB onWriteConnection()
     * @method _IH_PageTranslation_QB newQuery()
     * @method static _IH_PageTranslation_QB on(null|string $connection = null)
     * @method static _IH_PageTranslation_QB query()
     * @method static _IH_PageTranslation_QB with(array|string $relations)
     * @method _IH_PageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PageTranslation_C|PageTranslation[] all()
     * @mixin _IH_PageTranslation_QB
     */
    class PageTranslation extends Model {}

    /**
     * @property string $email
     * @property string $token
     * @property Carbon|null $created_at
     * @method static _IH_PasswordReset_QB onWriteConnection()
     * @method _IH_PasswordReset_QB newQuery()
     * @method static _IH_PasswordReset_QB on(null|string $connection = null)
     * @method static _IH_PasswordReset_QB query()
     * @method static _IH_PasswordReset_QB with(array|string $relations)
     * @method _IH_PasswordReset_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PasswordReset_C|PasswordReset[] all()
     * @mixin _IH_PasswordReset_QB
     */
    class PasswordReset extends Model {}

    /**
     * @method static _IH_Payment_QB onWriteConnection()
     * @method _IH_Payment_QB newQuery()
     * @method static _IH_Payment_QB on(null|string $connection = null)
     * @method static _IH_Payment_QB query()
     * @method static _IH_Payment_QB with(array|string $relations)
     * @method _IH_Payment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Payment_C|Payment[] all()
     * @mixin _IH_Payment_QB
     */
    class Payment extends Model {}

    /**
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Permission_C|Permission[] all()
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}

    /**
     * @property _IH_PickupPointTranslation_C|PickupPointTranslation[] $pickup_point_translations
     * @property-read int $pickup_point_translations_count
     * @method HasMany|_IH_PickupPointTranslation_QB pickup_point_translations()
     * @property Staff $staff
     * @method BelongsTo|_IH_Staff_QB staff()
     * @method static _IH_PickupPoint_QB onWriteConnection()
     * @method _IH_PickupPoint_QB newQuery()
     * @method static _IH_PickupPoint_QB on(null|string $connection = null)
     * @method static _IH_PickupPoint_QB query()
     * @method static _IH_PickupPoint_QB with(array|string $relations)
     * @method _IH_PickupPoint_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PickupPoint_C|PickupPoint[] all()
     * @mixin _IH_PickupPoint_QB
     */
    class PickupPoint extends Model {}

    /**
     * @property PickupPoint $poickup_point
     * @method BelongsTo|_IH_PickupPoint_QB poickup_point()
     * @method static _IH_PickupPointTranslation_QB onWriteConnection()
     * @method _IH_PickupPointTranslation_QB newQuery()
     * @method static _IH_PickupPointTranslation_QB on(null|string $connection = null)
     * @method static _IH_PickupPointTranslation_QB query()
     * @method static _IH_PickupPointTranslation_QB with(array|string $relations)
     * @method _IH_PickupPointTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PickupPointTranslation_C|PickupPointTranslation[] all()
     * @mixin _IH_PickupPointTranslation_QB
     */
    class PickupPointTranslation extends Model {}

    /**
     * @method static _IH_Policy_QB onWriteConnection()
     * @method _IH_Policy_QB newQuery()
     * @method static _IH_Policy_QB on(null|string $connection = null)
     * @method static _IH_Policy_QB query()
     * @method static _IH_Policy_QB with(array|string $relations)
     * @method _IH_Policy_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Policy_C|Policy[] all()
     * @mixin _IH_Policy_QB
     */
    class Policy extends Model {}

    /**
     * @property _IH_AuctionProductBid_C|AuctionProductBid[] $bids
     * @property-read int $bids_count
     * @method HasMany|_IH_AuctionProductBid_QB bids()
     * @property Brand $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property FlashDealProduct $flash_deal_product
     * @method HasOne|_IH_FlashDealProduct_QB flash_deal_product()
     * @property _IH_OrderDetail_C|OrderDetail[] $orderDetails
     * @property-read int $order_details_count
     * @method HasMany|_IH_OrderDetail_QB orderDetails()
     * @property _IH_ProductTranslation_C|ProductTranslation[] $product_translations
     * @property-read int $product_translations_count
     * @method HasMany|_IH_ProductTranslation_QB product_translations()
     * @property _IH_Review_C|Review[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_Review_QB reviews()
     * @property _IH_ProductStock_C|ProductStock[] $stocks
     * @property-read int $stocks_count
     * @method HasMany|_IH_ProductStock_QB stocks()
     * @property _IH_ProductTax_C|ProductTax[] $taxes
     * @property-read int $taxes_count
     * @method HasMany|_IH_ProductTax_QB taxes()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @property _IH_Wishlist_C|Wishlist[] $wishlists
     * @property-read int $wishlists_count
     * @method HasMany|_IH_Wishlist_QB wishlists()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @mixin _IH_Product_QB
     */
    class Product extends Model {}

    /**
     * @property int $id
     * @property int $customer_id
     * @property int|null $seller_id
     * @property int $product_id
     * @property string $question
     * @property string|null $reply
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ProductQuery_QB onWriteConnection()
     * @method _IH_ProductQuery_QB newQuery()
     * @method static _IH_ProductQuery_QB on(null|string $connection = null)
     * @method static _IH_ProductQuery_QB query()
     * @method static _IH_ProductQuery_QB with(array|string $relations)
     * @method _IH_ProductQuery_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductQuery_C|ProductQuery[] all()
     * @mixin _IH_ProductQuery_QB
     */
    class ProductQuery extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property _IH_WholesalePrice_C|WholesalePrice[] $wholesalePrices
     * @property-read int $wholesale_prices_count
     * @method HasMany|_IH_WholesalePrice_QB wholesalePrices()
     * @method static _IH_ProductStock_QB onWriteConnection()
     * @method _IH_ProductStock_QB newQuery()
     * @method static _IH_ProductStock_QB on(null|string $connection = null)
     * @method static _IH_ProductStock_QB query()
     * @method static _IH_ProductStock_QB with(array|string $relations)
     * @method _IH_ProductStock_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductStock_C|ProductStock[] all()
     * @mixin _IH_ProductStock_QB
     */
    class ProductStock extends Model {}

    /**
     * @method static _IH_ProductTax_QB onWriteConnection()
     * @method _IH_ProductTax_QB newQuery()
     * @method static _IH_ProductTax_QB on(null|string $connection = null)
     * @method static _IH_ProductTax_QB query()
     * @method static _IH_ProductTax_QB with(array|string $relations)
     * @method _IH_ProductTax_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTax_C|ProductTax[] all()
     * @mixin _IH_ProductTax_QB
     */
    class ProductTax extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductTranslation_QB onWriteConnection()
     * @method _IH_ProductTranslation_QB newQuery()
     * @method static _IH_ProductTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductTranslation_QB query()
     * @method static _IH_ProductTranslation_QB with(array|string $relations)
     * @method _IH_ProductTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTranslation_C|ProductTranslation[] all()
     * @mixin _IH_ProductTranslation_QB
     */
    class ProductTranslation extends Model {}

    /**
     * @method static _IH_ProxyPayment_QB onWriteConnection()
     * @method _IH_ProxyPayment_QB newQuery()
     * @method static _IH_ProxyPayment_QB on(null|string $connection = null)
     * @method static _IH_ProxyPayment_QB query()
     * @method static _IH_ProxyPayment_QB with(array|string $relations)
     * @method _IH_ProxyPayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProxyPayment_C|ProxyPayment[] all()
     * @mixin _IH_ProxyPayment_QB
     */
    class ProxyPayment extends Model {}

    /**
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property OrderDetail $orderDetail
     * @method BelongsTo|_IH_OrderDetail_QB orderDetail()
     * @property User $seller
     * @method BelongsTo|_IH_User_QB seller()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_RefundRequest_QB onWriteConnection()
     * @method _IH_RefundRequest_QB newQuery()
     * @method static _IH_RefundRequest_QB on(null|string $connection = null)
     * @method static _IH_RefundRequest_QB query()
     * @method static _IH_RefundRequest_QB with(array|string $relations)
     * @method _IH_RefundRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RefundRequest_C|RefundRequest[] all()
     * @mixin _IH_RefundRequest_QB
     */
    class RefundRequest extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Review_QB onWriteConnection()
     * @method _IH_Review_QB newQuery()
     * @method static _IH_Review_QB on(null|string $connection = null)
     * @method static _IH_Review_QB query()
     * @method static _IH_Review_QB with(array|string $relations)
     * @method _IH_Review_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Review_C|Review[] all()
     * @mixin _IH_Review_QB
     */
    class Review extends Model {}

    /**
     * @property _IH_RoleTranslation_C|RoleTranslation[] $role_translations
     * @property-read int $role_translations_count
     * @method HasMany|_IH_RoleTranslation_QB role_translations()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @method static _IH_RoleTranslation_QB onWriteConnection()
     * @method _IH_RoleTranslation_QB newQuery()
     * @method static _IH_RoleTranslation_QB on(null|string $connection = null)
     * @method static _IH_RoleTranslation_QB query()
     * @method static _IH_RoleTranslation_QB with(array|string $relations)
     * @method _IH_RoleTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RoleTranslation_C|RoleTranslation[] all()
     * @mixin _IH_RoleTranslation_QB
     */
    class RoleTranslation extends Model {}

    /**
     * @method static _IH_Search_QB onWriteConnection()
     * @method _IH_Search_QB newQuery()
     * @method static _IH_Search_QB on(null|string $connection = null)
     * @method static _IH_Search_QB query()
     * @method static _IH_Search_QB with(array|string $relations)
     * @method _IH_Search_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Search_C|Search[] all()
     * @mixin _IH_Search_QB
     */
    class Search extends Model {}

    /**
     * @property _IH_Payment_C|Payment[] $payments
     * @property-read int $payments_count
     * @method HasMany|_IH_Payment_QB payments()
     * @property SellerPackage $seller_package
     * @method BelongsTo|_IH_SellerPackage_QB seller_package()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Seller_QB onWriteConnection()
     * @method _IH_Seller_QB newQuery()
     * @method static _IH_Seller_QB on(null|string $connection = null)
     * @method static _IH_Seller_QB query()
     * @method static _IH_Seller_QB with(array|string $relations)
     * @method _IH_Seller_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Seller_C|Seller[] all()
     * @mixin _IH_Seller_QB
     */
    class Seller extends Model {}

    /**
     * @property _IH_SellerPackageTranslation_C|SellerPackageTranslation[] $getTranslation
     * @property-read int $get_translation_count
     * @method HasMany|_IH_SellerPackageTranslation_QB getTranslation()
     * @property _IH_SellerPackageTranslation_C|SellerPackageTranslation[] $seller_package_translations
     * @property-read int $seller_package_translations_count
     * @method HasMany|_IH_SellerPackageTranslation_QB seller_package_translations()
     * @property Shop $shop
     * @method HasOne|_IH_Shop_QB shop()
     * @method static _IH_SellerPackage_QB onWriteConnection()
     * @method _IH_SellerPackage_QB newQuery()
     * @method static _IH_SellerPackage_QB on(null|string $connection = null)
     * @method static _IH_SellerPackage_QB query()
     * @method static _IH_SellerPackage_QB with(array|string $relations)
     * @method _IH_SellerPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SellerPackage_C|SellerPackage[] all()
     * @mixin _IH_SellerPackage_QB
     */
    class SellerPackage extends Model {}

    /**
     * @property SellerPackage $seller_package
     * @method BelongsTo|_IH_SellerPackage_QB seller_package()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_SellerPackagePayment_QB onWriteConnection()
     * @method _IH_SellerPackagePayment_QB newQuery()
     * @method static _IH_SellerPackagePayment_QB on(null|string $connection = null)
     * @method static _IH_SellerPackagePayment_QB query()
     * @method static _IH_SellerPackagePayment_QB with(array|string $relations)
     * @method _IH_SellerPackagePayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SellerPackagePayment_C|SellerPackagePayment[] all()
     * @mixin _IH_SellerPackagePayment_QB
     */
    class SellerPackagePayment extends Model {}

    /**
     * @property SellerPackage $seller_package
     * @method BelongsTo|_IH_SellerPackage_QB seller_package()
     * @method static _IH_SellerPackageTranslation_QB onWriteConnection()
     * @method _IH_SellerPackageTranslation_QB newQuery()
     * @method static _IH_SellerPackageTranslation_QB on(null|string $connection = null)
     * @method static _IH_SellerPackageTranslation_QB query()
     * @method static _IH_SellerPackageTranslation_QB with(array|string $relations)
     * @method _IH_SellerPackageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SellerPackageTranslation_C|SellerPackageTranslation[] all()
     * @mixin _IH_SellerPackageTranslation_QB
     */
    class SellerPackageTranslation extends Model {}

    /**
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_SellerWithdrawRequest_QB onWriteConnection()
     * @method _IH_SellerWithdrawRequest_QB newQuery()
     * @method static _IH_SellerWithdrawRequest_QB on(null|string $connection = null)
     * @method static _IH_SellerWithdrawRequest_QB query()
     * @method static _IH_SellerWithdrawRequest_QB with(array|string $relations)
     * @method _IH_SellerWithdrawRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SellerWithdrawRequest_C|SellerWithdrawRequest[] all()
     * @mixin _IH_SellerWithdrawRequest_QB
     */
    class SellerWithdrawRequest extends Model {}

    /**
     * @property SellerPackage $seller_package
     * @method BelongsTo|_IH_SellerPackage_QB seller_package()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Shop_QB onWriteConnection()
     * @method _IH_Shop_QB newQuery()
     * @method static _IH_Shop_QB on(null|string $connection = null)
     * @method static _IH_Shop_QB query()
     * @method static _IH_Shop_QB with(array|string $relations)
     * @method _IH_Shop_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Shop_C|Shop[] all()
     * @mixin _IH_Shop_QB
     */
    class Shop extends Model {}

    /**
     * @method static _IH_Slider_QB onWriteConnection()
     * @method _IH_Slider_QB newQuery()
     * @method static _IH_Slider_QB on(null|string $connection = null)
     * @method static _IH_Slider_QB query()
     * @method static _IH_Slider_QB with(array|string $relations)
     * @method _IH_Slider_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Slider_C|Slider[] all()
     * @mixin _IH_Slider_QB
     */
    class Slider extends Model {}

    /**
     * @method static _IH_SmsTemplate_QB onWriteConnection()
     * @method _IH_SmsTemplate_QB newQuery()
     * @method static _IH_SmsTemplate_QB on(null|string $connection = null)
     * @method static _IH_SmsTemplate_QB query()
     * @method static _IH_SmsTemplate_QB with(array|string $relations)
     * @method _IH_SmsTemplate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SmsTemplate_C|SmsTemplate[] all()
     * @mixin _IH_SmsTemplate_QB
     */
    class SmsTemplate extends Model {}

    /**
     * @property PickupPoint $pick_up_point
     * @method HasOne|_IH_PickupPoint_QB pick_up_point()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Staff_QB onWriteConnection()
     * @method _IH_Staff_QB newQuery()
     * @method static _IH_Staff_QB on(null|string $connection = null)
     * @method static _IH_Staff_QB query()
     * @method static _IH_Staff_QB with(array|string $relations)
     * @method _IH_Staff_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Staff_C|Staff[] all()
     * @mixin _IH_Staff_QB
     */
    class Staff extends Model {}

    /**
     * @property _IH_City_C|City[] $cities
     * @property-read int $cities_count
     * @method HasMany|_IH_City_QB cities()
     * @property Country $country
     * @method BelongsTo|_IH_Country_QB country()
     * @method static _IH_State_QB onWriteConnection()
     * @method _IH_State_QB newQuery()
     * @method static _IH_State_QB on(null|string $connection = null)
     * @method static _IH_State_QB query()
     * @method static _IH_State_QB with(array|string $relations)
     * @method _IH_State_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_State_C|State[] all()
     * @mixin _IH_State_QB
     */
    class State extends Model {}

    /**
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_SubSubCategory_C|SubSubCategory[] $subSubCategories
     * @property-read int $sub_sub_categories_count
     * @method HasMany|_IH_SubSubCategory_QB subSubCategories()
     * @method static _IH_SubCategory_QB onWriteConnection()
     * @method _IH_SubCategory_QB newQuery()
     * @method static _IH_SubCategory_QB on(null|string $connection = null)
     * @method static _IH_SubCategory_QB query()
     * @method static _IH_SubCategory_QB with(array|string $relations)
     * @method _IH_SubCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubCategory_C|SubCategory[] all()
     * @mixin _IH_SubCategory_QB
     */
    class SubCategory extends Model {}

    /**
     * @property SubCategory $subCategory
     * @method BelongsTo|_IH_SubCategory_QB subCategory()
     * @method static _IH_SubSubCategory_QB onWriteConnection()
     * @method _IH_SubSubCategory_QB newQuery()
     * @method static _IH_SubSubCategory_QB on(null|string $connection = null)
     * @method static _IH_SubSubCategory_QB query()
     * @method static _IH_SubSubCategory_QB with(array|string $relations)
     * @method _IH_SubSubCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubSubCategory_C|SubSubCategory[] all()
     * @mixin _IH_SubSubCategory_QB
     */
    class SubSubCategory extends Model {}

    /**
     * @method static _IH_Subscriber_QB onWriteConnection()
     * @method _IH_Subscriber_QB newQuery()
     * @method static _IH_Subscriber_QB on(null|string $connection = null)
     * @method static _IH_Subscriber_QB query()
     * @method static _IH_Subscriber_QB with(array|string $relations)
     * @method _IH_Subscriber_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscriber_C|Subscriber[] all()
     * @mixin _IH_Subscriber_QB
     */
    class Subscriber extends Model {}

    /**
     * @property _IH_ProductTax_C|ProductTax[] $product_taxes
     * @property-read int $product_taxes_count
     * @method HasMany|_IH_ProductTax_QB product_taxes()
     * @method static _IH_Tax_QB onWriteConnection()
     * @method _IH_Tax_QB newQuery()
     * @method static _IH_Tax_QB on(null|string $connection = null)
     * @method static _IH_Tax_QB query()
     * @method static _IH_Tax_QB with(array|string $relations)
     * @method _IH_Tax_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tax_C|Tax[] all()
     * @mixin _IH_Tax_QB
     */
    class Tax extends Model {}

    /**
     * @property _IH_TicketReply_C|TicketReply[] $ticketreplies
     * @property-read int $ticketreplies_count
     * @method HasMany|_IH_TicketReply_QB ticketreplies()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Ticket_QB onWriteConnection()
     * @method _IH_Ticket_QB newQuery()
     * @method static _IH_Ticket_QB on(null|string $connection = null)
     * @method static _IH_Ticket_QB query()
     * @method static _IH_Ticket_QB with(array|string $relations)
     * @method _IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @mixin _IH_Ticket_QB
     */
    class Ticket extends Model {}

    /**
     * @property Ticket $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_TicketReply_QB onWriteConnection()
     * @method _IH_TicketReply_QB newQuery()
     * @method static _IH_TicketReply_QB on(null|string $connection = null)
     * @method static _IH_TicketReply_QB query()
     * @method static _IH_TicketReply_QB with(array|string $relations)
     * @method _IH_TicketReply_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TicketReply_C|TicketReply[] all()
     * @mixin _IH_TicketReply_QB
     */
    class TicketReply extends Model {}

    /**
     * @method static _IH_Transaction_QB onWriteConnection()
     * @method _IH_Transaction_QB newQuery()
     * @method static _IH_Transaction_QB on(null|string $connection = null)
     * @method static _IH_Transaction_QB query()
     * @method static _IH_Transaction_QB with(array|string $relations)
     * @method _IH_Transaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Transaction_C|Transaction[] all()
     * @mixin _IH_Transaction_QB
     */
    class Transaction extends Model {}

    /**
     * @method static _IH_Translation_QB onWriteConnection()
     * @method _IH_Translation_QB newQuery()
     * @method static _IH_Translation_QB on(null|string $connection = null)
     * @method static _IH_Translation_QB query()
     * @method static _IH_Translation_QB with(array|string $relations)
     * @method _IH_Translation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Translation_C|Translation[] all()
     * @mixin _IH_Translation_QB
     */
    class Translation extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Upload_QB onWriteConnection()
     * @method _IH_Upload_QB newQuery()
     * @method static _IH_Upload_QB on(null|string $connection = null)
     * @method static _IH_Upload_QB query()
     * @method static _IH_Upload_QB with(array|string $relations)
     * @method _IH_Upload_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Upload_C|Upload[] all()
     * @mixin _IH_Upload_QB
     */
    class Upload extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Address_C|Address[] $addresses
     * @property-read int $addresses_count
     * @method HasMany|_IH_Address_QB addresses()
     * @property _IH_AffiliateLog_C|AffiliateLog[] $affiliate_log
     * @property-read int $affiliate_log_count
     * @method HasMany|_IH_AffiliateLog_QB affiliate_log()
     * @property AffiliateUser $affiliate_user
     * @method HasOne|_IH_AffiliateUser_QB affiliate_user()
     * @property _IH_AffiliateWithdrawRequest_C|AffiliateWithdrawRequest[] $affiliate_withdraw_request
     * @property-read int $affiliate_withdraw_request_count
     * @method HasMany|_IH_AffiliateWithdrawRequest_QB affiliate_withdraw_request()
     * @property _IH_Cart_C|Cart[] $carts
     * @property-read int $carts_count
     * @method HasMany|_IH_Cart_QB carts()
     * @property ClubPoint $club_point
     * @method HasOne|_IH_ClubPoint_QB club_point()
     * @property Customer $customer
     * @method HasOne|_IH_Customer_QB customer()
     * @property CustomerPackage $customer_package
     * @method BelongsTo|_IH_CustomerPackage_QB customer_package()
     * @property _IH_CustomerPackagePayment_C|CustomerPackagePayment[] $customer_package_payments
     * @property-read int $customer_package_payments_count
     * @method HasMany|_IH_CustomerPackagePayment_QB customer_package_payments()
     * @property _IH_CustomerProduct_C|CustomerProduct[] $customer_products
     * @property-read int $customer_products_count
     * @method HasMany|_IH_CustomerProduct_QB customer_products()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property _IH_Permission_C1|Permission1[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB1 permissions()
     * @property _IH_AuctionProductBid_C|AuctionProductBid[] $product_bids
     * @property-read int $product_bids_count
     * @method HasMany|_IH_AuctionProductBid_QB product_bids()
     * @property _IH_ProductQuery_C|ProductQuery[] $product_queries
     * @property-read int $product_queries_count
     * @method HasMany|_IH_ProductQuery_QB product_queries()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Review_C|Review[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_Review_QB reviews()
     * @property _IH_Role_C1|Role1[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB1 roles()
     * @property Seller $seller
     * @method HasOne|_IH_Seller_QB seller()
     * @property _IH_Order_C|Order[] $seller_orders
     * @property-read int $seller_orders_count
     * @method HasMany|_IH_Order_QB seller_orders()
     * @property _IH_SellerPackagePayment_C|SellerPackagePayment[] $seller_package_payments
     * @property-read int $seller_package_payments_count
     * @method HasMany|_IH_SellerPackagePayment_QB seller_package_payments()
     * @property _IH_OrderDetail_C|OrderDetail[] $seller_sales
     * @property-read int $seller_sales_count
     * @method HasMany|_IH_OrderDetail_QB seller_sales()
     * @property Shop $shop
     * @method HasOne|_IH_Shop_QB shop()
     * @property Staff $staff
     * @method HasOne|_IH_Staff_QB staff()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_Wallet_C|Wallet[] $wallets
     * @property-read int $wallets_count
     * @method HasMany|_IH_Wallet_QB wallets()
     * @property _IH_Wishlist_C|Wishlist[] $wishlists
     * @property-read int $wishlists_count
     * @method HasMany|_IH_Wishlist_QB wishlists()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     */
    class User extends Model {}

    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Wallet_QB onWriteConnection()
     * @method _IH_Wallet_QB newQuery()
     * @method static _IH_Wallet_QB on(null|string $connection = null)
     * @method static _IH_Wallet_QB query()
     * @method static _IH_Wallet_QB with(array|string $relations)
     * @method _IH_Wallet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Wallet_C|Wallet[] all()
     * @mixin _IH_Wallet_QB
     */
    class Wallet extends Model {}

    /**
     * @method static _IH_WholesalePrice_QB onWriteConnection()
     * @method _IH_WholesalePrice_QB newQuery()
     * @method static _IH_WholesalePrice_QB on(null|string $connection = null)
     * @method static _IH_WholesalePrice_QB query()
     * @method static _IH_WholesalePrice_QB with(array|string $relations)
     * @method _IH_WholesalePrice_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WholesalePrice_C|WholesalePrice[] all()
     * @mixin _IH_WholesalePrice_QB
     */
    class WholesalePrice extends Model {}

    /**
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_Wishlist_QB onWriteConnection()
     * @method _IH_Wishlist_QB newQuery()
     * @method static _IH_Wishlist_QB on(null|string $connection = null)
     * @method static _IH_Wishlist_QB query()
     * @method static _IH_Wishlist_QB with(array|string $relations)
     * @method _IH_Wishlist_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Wishlist_C|Wishlist[] all()
     * @mixin _IH_Wishlist_QB
     */
    class Wishlist extends Model {}

    /**
     * @property _IH_CarrierRangePrice_C|CarrierRangePrice[] $carrier_range_prices
     * @property-read int $carrier_range_prices_count
     * @method HasMany|_IH_CarrierRangePrice_QB carrier_range_prices()
     * @method static _IH_Zone_QB onWriteConnection()
     * @method _IH_Zone_QB newQuery()
     * @method static _IH_Zone_QB on(null|string $connection = null)
     * @method static _IH_Zone_QB query()
     * @method static _IH_Zone_QB with(array|string $relations)
     * @method _IH_Zone_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Zone_C|Zone[] all()
     * @mixin _IH_Zone_QB
     */
    class Zone extends Model {}
}
