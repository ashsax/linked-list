<?php
	include("LinkedList.php");

	try {
		$list = new LinkedList();
		$list->insertFront(5);
		$list->insertFront(2);
		$list->insertFront(1);
		$list->insertFront(3);
		$list->insertBack(7);
		$list->printList();
		echo "Removed " . $list->removeFront() . " from front of list. <br/>";
		$list->printList();
		echo "Removed " . $list->removeBack() . " from back of list. <br/>";
		$list->printList();
		echo "Removed " . $list->removeFront() . " from front of list. <br/>";
		$list->printList();
		echo "Removed " . $list->removeBack() . " from back of list. <br/>";
		$list->printList();
		echo "Removed " . $list->removeFront() . " from front of list. <br/>";
		$list->printList();
		echo "Removed " . $list->removeBack() . " from back of list. <br/>";
		$list->printList();
	}
	catch (Exception $e) {
		echo $e->getMessage();
	}
?>