<?php
class ModelBlogBlog extends Model {
	public function install() {
    //exit("Hello Stop");
		$this->db->query("CREATE TABLE `kesandus`.`oc_blog_category` (
    `blog_category_id` INT NOT NULL AUTO_INCREMENT,
    `category_name` VARCHAR(20) NULL,
    `oc_blog_category_description` TEXT NULL,
    `oc_blog_category_author_id` INT NULL,
    `oc_blog_category_date_created` VARCHAR(45) NULL,
    PRIMARY KEY (`blog_category_id`),
    UNIQUE INDEX `blog_category_id_UNIQUE` (`blog_category_id` ASC),
    UNIQUE INDEX `category_name_UNIQUE` (`category_name` ASC))
		");
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "ip`");
	}

    public function addIp($ip) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "fraud_ip` SET `ip` = '" . $this->db->escape($ip) . "', date_added = NOW()");
    }

    public function removeIp($ip) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "fraud_ip` WHERE `ip` = '" . $this->db->escape($ip) . "'");
    }

	public function getIps($start = 0, $limit = 10) {
        if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "fraud_ip` ORDER BY `ip` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalIps() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "fraud_ip`");

		return $query->row['total'];
	}

	public function getTotalIpsByIp($ip) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "fraud_ip` WHERE ip = '" . $this->db->escape($ip) . "'");

		return $query->row['total'];
	}
}
