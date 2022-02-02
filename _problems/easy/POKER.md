---
{"languages_supported":{"0":"NA"},"title":"POKER","category":"NA","old_version":true,"problem_code":"POKER","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>In poker, you have 5 cards. There are 10 kinds of poker hands (from highest to lowest):</p>
<ul>
<li> royal flush - ace, king, queen, jack and ten, all in the same suit
</li><li> straight flush - five cards of the same suit in sequence, such<br />
as 10,9,8,7,6 of clubs; ace can be counted both as the highest card or as the<br />
lowest card - A,2,3,4,5 of hearts is a straight flush. But 4,3,2,A,K of hearts is not a straight flush - it's just a flush.
</li><li> four of a kind - four cards of the same rank, such as four kings.
</li><li> full house - three cards of one rank plus two cards of another rank
</li><li> flush - five cards of the same suit (but not a straight flush)
</li><li> straight - five cards in order - just like the straight flush, but mixed suits
</li><li> three of a kind - three cards of one rank and two other cards
</li><li> two pairs - two cards of one rank, two cards of another rank, and one more card
</li><li> pair - two cards of the same rank
</li><li> high card - none of the above
</li></ul>
<p>Write a program that will help you play poker by telling you what kind of hand you have.</p>
<h3>Input</h3>
<p>
The first line of input contains the number of test cases (no more than 20). Each test case consists of one line - five space separated cards. Each card is represented by a two-letter (or digit) word. The first character is the rank (A,K,Q,J,T,9,8,7,6,5,4,3 or 2), the second character is the suit (S,H,D,C standing for spades, hearts, diamonds and clubs). The cards can be in any order (but they will not repeat).</p>
<h3>Output</h3>
<p>
For each test case output one line describing the type of a hand, exactly like in the list above.</p>
<h3>Example</h3>
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