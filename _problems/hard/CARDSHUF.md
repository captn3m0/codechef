---
languages_supported:
    - NA
title: CARDSHUF
category: NA
old_version: true
problem_code: CARDSHUF
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef is organizing an online card game tournament and for this purpose he has to provide a card shuffling software. This software has to simulate the following shuffling process. A stack of N cards is placed face down on the table. Cards in the stack are ordered by value. Topmost card has value 1 and the one on the bottom has value N. To shuffle the cards we repeat the following steps M times:

1. take A cards from the top of the deck.
2. take another B cards from the top of the deck.
3. put the A cards, which you removed in the first step, back on top of the remaining deck.
4. take C cards from the deck
5. put the B cards, which you're still holding from the second move, **card by card** on top of the deck.
6. finally, return the block of C cards on top

Note: taking a block of cards from the top of the deck does not change their order. The entire block is removed in a single move and not card by card. The only exception is the fifth move, where you return cards one by one from the top. ### Input

The first line contains integers N and M. The following M lines describe the moves by integers Ai, Bi, Ci as described in the previous section.

In the spirit of random card shuffling, all test cases were generated with uniform random distributions to select where to cut the deck of cards.

### Output

In a single line output the cards in the deck after performing all the moves. Cards should be listed from top of the deck to bottom and separated by spaces.

### Constraints

- 1 <= N, M <= 100 000

### Example

<pre>
<b>Input:</b>
10 2
6 2 2
5 3 6

<b>Output:</b>
1 2 8 7 3 9 6 5 4 10
</pre>