<?php defined('BLUDIT') or die('Bludit CMS.');

class Categories extends dbList {

	function __construct()
	{
		parent::__construct(DB_CATEGORIES);
	}

	function numberOfPages($key)
	{
		return $this->countItems($key);
	}

	public function reindex()
	{
		global $pages;

		// Foreach category
		foreach ($this->db as $key=>$value) {
			$this->db[$key]['list'] = array();
		}

		// Get a database with published pages
		$db = $pages->getPublishedDB(false);
		foreach ($db as $pageKey=>$pageFields) {
			if (!empty($pageFields['category'])) {
				$categoryKey = $pageFields['category'];
				if (isset($this->db[$categoryKey]['list'])) {
					array_push($this->db[$categoryKey]['list'], $pageKey);
				}
			}
		}

		return $this->save();
	}

    // Returns an array with a list of key of pages, FALSE if out of range
    // The database is sorted by date or by position
    // (int) $pageNumber, the page number
    // (int) $numberOfItems, amount of items to return, if -1 returns all the items
    public function getList($pageNumber, $numberOfItems)
    {
        $db = array_keys($this->db);

        if ($numberOfItems==-1) {
            return $db;
        }

        // The first page number is 1, so the real is 0
        $realPageNumber = $pageNumber - 1;

        $total = count($db);
        $init = (int) $numberOfItems * $realPageNumber;
        $end  = (int) min( ($init + $numberOfItems - 1), $total );
        $outrange = $init<0 ? true : $init>$end;

        if (!$outrange) {
            return array_slice($db, $init, $numberOfItems, true);
        }

        return false;
    }
}