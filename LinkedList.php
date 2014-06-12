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
			if ($node == null) {
				throw new Exception("ERROR: Can't remove elements from an empty list.");
			}
			// only 1 element
			if ($this->head == $this->tail && $this->head != null) {
				$this->head = null;
				$this->tail = null;
			}
			else if ($node != null) {
				$this->head = $this->head->next;
			}
			return $node->data;
		}
		public function removeBack() {
			$node = $this->tail;
			if ($node == null) {
				throw new Exception("ERROR: Can't remove elements from an empty list.");
			}
			// only 1 element
			if ($this->head == $this->tail && $this->head != null) {
				$this->head = null;
				$this->tail = null;
			}
			else if ($node != null) {
				// traversing the whole list to find
				// the second-to-last node...
				// the pain of making a singly-linked list
				$newTail = $this->head;
				while ($newTail->next != $this->tail) {
					$newTail = $newTail->next;
				}
				$newTail->next = null;
				$this->tail = $newTail;
			}
			return $node->data;
		}
	}
?>