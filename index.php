<?php
	class Node {
		public $data;
		public $next;

		public function __construct($value) {
			$this->data = $value;
			$this->next = null;
		}
	}

	class LinkedList {
		private $head;
		private $tail;

		public function __construct() {
			$head = null;
			$tail = null;
		}

		public function printList() {
			$node = $this->head;
			echo "{ ";
			while ($node != null) {
				echo $node->data;
				$node = $node->next;
				if ($node != null) {
					echo ",";
				}
				echo " ";
			}
			echo "} <br/>";
		}

		public function insertFront($data) {
			$node = new Node($data);
			// if empty list
			if ($this->head == null && $this->tail == null) {
				$this->head = $node;
				$this->tail = $node;
			}
			else {
				// $oldHead = $this->head;
				// $this->head = $node;
				// $this->head->next = $oldHead;
				$node->next = $this->head;
				$this->head = $node;
			}
		}

		public function insertBack($data) {
			$node = new Node($data);
			// empty list: same as insertFront()
			if ($this->head == null && $this->tail == null) {
				insertFront($data);
			}
			else {
				$this->tail->next = $node;
				$this->tail = $node;
			}
		}

		public function removeFront() {
			$node = $this->head;
			if ($node != null) {
				$this->head = $this->head->next;
			}
			return $node->data;
		}
	}

	function main() {
		$list = new LinkedList();
		$list->insertFront(5);
		$list->insertFront(2);
		$list->insertFront(1);
		$list->insertFront(3);
		$list->insertBack(7);
		$list->printList();
		echo "Removed " . $list->removeFront() . " from list. <br/>";
		$list->printList();
	}

	main();
?>