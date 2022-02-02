---
languages_supported:
    - NA
title: POKER
category: NA
old_version: true
problem_code: POKER
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

In poker, you have 5 cards. There are 10 kinds of poker hands (from highest to lowest):

- royal flush - ace, king, queen, jack and ten, all in the same suit
- straight flush - five cards of the same suit in sequence, such
    as 10,9,8,7,6 of clubs; ace can be counted both as the highest card or as the
    lowest card - A,2,3,4,5 of hearts is a straight flush. But 4,3,2,A,K of hearts is not a straight flush - it's just a flush.
- four of a kind - four cards of the same rank, such as four kings.
- full house - three cards of one rank plus two cards of another rank
- flush - five cards of the same suit (but not a straight flush)
- straight - five cards in order - just like the straight flush, but mixed suits
- three of a kind - three cards of one rank and two other cards
- two pairs - two cards of one rank, two cards of another rank, and one more card
- pair - two cards of the same rank
- high card - none of the above

Write a program that will help you play poker by telling you what kind of hand you have.

### Input

The first line of input contains the number of test cases (no more than 20). Each test case consists of one line - five space separated cards. Each card is represented by a two-letter (or digit) word. The first character is the rank (A,K,Q,J,T,9,8,7,6,5,4,3 or 2), the second character is the suit (S,H,D,C standing for spades, hearts, diamonds and clubs). The cards can be in any order (but they will not repeat).

### Output

For each test case output one line describing the type of a hand, exactly like in the list above.

### Example

<pre>
<b>Input:</b>
3
AH KH QH TH JH
KH 5S 3C 5C 7D
QH QD 2S QC 2C

<b>Output:</b>
royal flush
pair
full house
</pre>