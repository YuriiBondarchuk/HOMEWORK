<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 13.09.2018
 * Time: 17:53
 */

namespace MyModules\PromotionText\Block;

use Magento\Catalog\Block\Product\View\Attributes;
use Magento\Framework\Pricing\PriceCurrencyInterface;



class Promotion extends Attributes
{
    private $text;
    private $interval;

   public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, PriceCurrencyInterface $priceCurrency, array $data = [])
   {
       parent::__construct($context, $registry, $priceCurrency, $data);
   }


    public function getText()
    {
        $this->text = $this->getProduct()->getData('promotion_text');
        return $this->text;
    }
    public function getInterval(){
        $this->interval = $this->getProduct()->getData('promotion_interval');
        return $this->interval;
    }

}
//use Magento\Catalog\Model\Product;
//
//use Magento\Framework\Registry;
//
//use Magento\Framework\View\Element\Template;
//
//
//class Promotion extends Template
//{
//    private $text, $interval;
//
//    /**
//     * @var Registry
//     */
//    protected $registry;
//
//    /**
//     * @var Product
//     */
//    private $product;
//
//    public function __construct(Template\Context $context,
//                                Registry $registry,
//                                array $data)
//    {
//        $this->registry = $registry;
//
//        parent::__construct($context, $data);
//    }
//
//
//    /**
//     * @return Product
//     */
//    public function getProduct()
//    {
//        if (is_null($this->product)) {
//            $this->product = $this->registry->registry('product');
//
//
//        }
//
//        return $this->product;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getText()
//    {
//        $this->text = $this->getProduct()->getData('promotion_text');
//        return $this->text;
//    }
//
//    public function getInterval()
//    {
//        $this->interval = $this->getProduct()->getData('promotion_interval');
//        return $this->interval;
//    }
//
//
//}
//
//
//$ura ='asasasa';