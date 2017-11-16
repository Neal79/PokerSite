<?php
session_start();


// classes

class card	{
	var $rank;
	var $suit;
	
	function __construct($rank,$suit)
	{
		$this->rank = $rank;
		$this->suit = $suit;	
	}
	
	function get_rank()
	{
		return $this->rank;	
	}
	
	function get_suit()
	{
		return $this->suit;
	}
}

class deck	{
	var $deck;
	
	function __construct()
	{
		$this->deck = array();
		//spades
		$this->deck[0] = new card("A","S");
		$this->deck[1] = new card("K","S");
		$this->deck[2] = new card("Q","S");
		$this->deck[3] = new card("J","S");
		$this->deck[4] = new card("10","S");
		$this->deck[5] = new card("9","S");
		$this->deck[6] = new card("8","S");
		$this->deck[7] = new card("7","S");
		$this->deck[8] = new card("6","S");
		$this->deck[9] = new card("5","S");
		$this->deck[10] = new card("4","S");
		$this->deck[11] = new card("3","S");
		$this->deck[12] = new card("2","S");
		//clubs
		$this->deck[13] = new card("A","C");
		$this->deck[14] = new card("K","C");
		$this->deck[15] = new card("Q","C");
		$this->deck[16] = new card("J","C");
		$this->deck[17] = new card("10","C");
		$this->deck[18] = new card("9","C");
		$this->deck[19] = new card("8","C");
		$this->deck[20] = new card("7","C");
		$this->deck[21] = new card("6","C");
		$this->deck[22] = new card("5","C");
		$this->deck[23] = new card("4","C");
		$this->deck[24] = new card("3","C");
		$this->deck[25] = new card("2","C");
		//diamonds
		$this->deck[26] = new card("A","D");
		$this->deck[27] = new card("K","D");
		$this->deck[28] = new card("Q","D");
		$this->deck[29] = new card("J","D");
		$this->deck[30] = new card("10","D");
		$this->deck[31] = new card("9","D");
		$this->deck[32] = new card("8","D");
		$this->deck[33] = new card("7","D");
		$this->deck[34] = new card("6","D");
		$this->deck[35] = new card("5","D");
		$this->deck[36] = new card("4","D");
		$this->deck[37] = new card("3","D");
		$this->deck[38] = new card("2","D");
		//hearts
		$this->deck[39] = new card("A","H");
		$this->deck[40] = new card("K","H");
		$this->deck[41] = new card("Q","H");
		$this->deck[42] = new card("J","H");
		$this->deck[43] = new card("10","H");
		$this->deck[44] = new card("9","H");
		$this->deck[45] = new card("8","H");
		$this->deck[46] = new card("7","H");
		$this->deck[47] = new card("6","H");
		$this->deck[48] = new card("5","H");
		$this->deck[49] = new card("4","H");
		$this->deck[50] = new card("3","H");
		$this->deck[51] = new card("2","H");	
	}	
}

class dealtCard	{
	
	var $rank;
	var $suit;
	
	function __construct($rank,$suit)
	{
		$this->rank = $rank;
		$this->suit =$suit;
	}
		function get_rank()
	{
		return $this->rank;	
	}
	
	function get_suit()
	{
		return $this->suit;
	}
	function displayCard()
	{
		echo "<img class='card' src='imgs/cards/".$this->get_rank().$this->get_suit().".gif'>";
	}
}



//Functions

function is_flush($hand)
{
	
	if ($hand[0]->get_suit() != $hand[1]->get_suit())
	{
		$flush = false;
		echo "no Flush 1";
		return $flush;
	}
	else 
	{
		if ($hand[1]->get_suit() != $hand[2]->get_suit())
		{
			$flush = false;
			echo "Not a Flush 2";
			return $flush;
		}	
	}

}
//Program


//Create new deck and shuffle
$myDeck = new deck();
shuffle($myDeck->deck);

//Deal Cards
$dc1 = new dealtCard($myDeck->deck[0]->get_rank(),$myDeck->deck[0]->get_suit());
$dc2 = new dealtCard($myDeck->deck[1]->get_rank(),$myDeck->deck[1]->get_suit());
$dc3 = new dealtCard($myDeck->deck[2]->get_rank(),$myDeck->deck[2]->get_suit());
$dc4 = new dealtCard($myDeck->deck[3]->get_rank(),$myDeck->deck[3]->get_suit());
$dc5 = new dealtCard($myDeck->deck[4]->get_rank(),$myDeck->deck[4]->get_suit());

$myHand[0] = $dc1;
$myHand[1] = $dc2;
$myHand[2] = $dc3;
$myHand[3] = $dc4;
$myHand[4] = $dc5;



?>