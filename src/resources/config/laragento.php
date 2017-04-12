<?php

return [
    'connection' => [
        'path' => env('MAGENTO_PATH', 'http://domainname.tld/shop-folder/'),
        'user' => env('MAGENTO_USER', 'username'),
        'key' => env('MAGENTO_KEY', 'xxxxxxxxxxxxxxxxxxx')
    ],
    'methods' => [
        // Cart Directory
        'cart' => \Smalot\V2\Magento\Cart\Cart::class,
        'cartCoupon' => \Smalot\V2\Magento\Cart\CartCoupon::class,
        'cartCustomer' => \Smalot\V2\Magento\Cart\CartCustomer::class,
        'cartPayment' => \Smalot\V2\Magento\Cart\CartPayment::class,
        'cartProduct' => \Smalot\V2\Magento\Cart\CartProduct::class,
        'cartShipping' => \Smalot\V2\Magento\Cart\CartShipping::class,
        // Catalog Directory
        'category' => \Smalot\V2\Magento\Catalog\Category::class,
        'categoryAttributes' => \Smalot\V2\Magento\Catalog\CategoryAttributes::class,
        'product' => \Smalot\V2\Magento\Catalog\Product::class,
        'productAttribute' => \Smalot\V2\Magento\Catalog\ProductAttribute::class,
        'productAttributeSet' => \Smalot\V2\Magento\Catalog\ProductAttributeSet::class,
        'productCustomOption' => \Smalot\V2\Magento\Catalog\ProductCustomOption::class,
        'productCustomOptionValue' => \Smalot\V2\Magento\Catalog\ProductCustomOptionValue::class,
        'productDownloadableLink' => \Smalot\V2\Magento\Catalog\ProductDownloadableLink::class,
        'productLink' => \Smalot\V2\Magento\Catalog\ProductLink::class,
        'productMedia' => \Smalot\V2\Magento\Catalog\ProductMedia::class,
        'productTag' => \Smalot\V2\Magento\Catalog\ProductTag::class,
        'productTierPrice' => \Smalot\V2\Magento\Catalog\ProductTierPrice::class,
        'productType' => \Smalot\V2\Magento\Catalog\ProductType::class,
        // CatalogInventory Directory
        'stockItem' => \Smalot\V2\Magento\CatalogInventory\StockItem::class,
        // Core Directory
        'magento' => \Smalot\V2\Magento\Core\Magento::class,
        // Customer Directory
        'customer' => \Smalot\V2\Magento\Customer\Customer::class,
        'customerAddress' => \Smalot\V2\Magento\Customer\CustomerAddress::class,
        'customerGroup' => \Smalot\V2\Magento\Customer\CustomerGroup::class,
        // CustomerBalance Directory
        'storeCredit' => \Smalot\V2\Magento\CustomerBalance\StoreCredit::class,
        'storeCreditQuote' => \Smalot\V2\Magento\CustomerBalance\StoreCreditQuote::class,
        // Directory Directory
        'directory' => \Smalot\V2\Magento\Directory\Directory::class,
        // GifMessage Directory
        'giftMessage' => \Smalot\V2\Magento\GiftMessage\GiftMessage::class,
        // Order Directory
        'order' => \Smalot\V2\Magento\Order\Order::class,
        'orderCreditMemo' => \Smalot\V2\Magento\Order\OrderCreditMemo::class,
        'orderInvoice' => \Smalot\V2\Magento\Order\OrderInvoice::class,
        'orderShipment' => \Smalot\V2\Magento\Order\OrderShipment::class,
        // Store Directory
        'store' => \Smalot\V2\Magento\Store\Store::class
    ]
];