<?php
namespace Opencart\Admin\Model\Extension\Opencart\Module;

class Mreview extends \Opencart\System\Engine\Model {

    public function getProductReview(int $product_id): array {
        $query = $this->db->query("SELECT * FROM `oc_review` WHERE 
                              `product_id` = '" . (int)$product_id . "'");

        return $query->rows;
    }

    public function getTotalProductReview(int $product_id): int {
        $query = $this->db->query("SELECT count(*) as `total` FROM `oc_review` WHERE 
                              `product_id` = '" . (int)$product_id . "'");

        return (int)$query->row['total'];
    }


}
