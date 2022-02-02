---
{"languages_supported":{"0":"NA"},"title":"GAPFILL","category":"NA","old_version":true,"problem_code":"GAPFILL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p><i>Now we are all bored playing, probably that is why they call it board game.</i></p>

<p>Chef is facing severe problems at his restaurant. Because his kitchen is small so only small number of cooks can fit in which results in slow service. Customers don't like waiting for their food. While he has already started looking for new place to move in, this might take some time. So in meanwhile he has come up with an innovative idea. He'd put up a board game puzzle on all tables so that customers can play the game while waiting for their orders to arrive. To make this gap filler idea more viral, he'd further give a discount to people who successfully solve the puzzle.

<br /><br />

Game that he has chosen consists of N * M grid with each cell having a light and a switch. Once a switch of a cell is pressed, all lights in the same column or row including the cell toggle once.  Note that light in the cell whose switch is pressed is toggled once and not twice. Game starts with some lights on and rest off and the objective of the game is to turn on all the lights.

<br /><br />

He however fears that a lot of people may win discounts. He is a great cook but he is not good with puzzle solving. He seeks your help in determining how easy or tough this game is. Given board dimensions, your task is to find out how many initial configurations of the game can be solved. Two configurations are different if there is at least one cell which is off in one and on in other. As this number might get huge, only print the answer modulo 10^9 + 7.

<br />
<h3>Input</h3>
</p><p>
First line of the input contains a single integer T, the number of test cases. Each of the next T lines represents a single test case containing two integers N &amp; M separated by a space. N &amp; M are the dimensions of the board. You can assume that T &lt;= 50000 and 1 &lt;= N,M &lt;= 10^18

<h3>Output</h3>
</p><p>
For each test case, print the number of initial configurations of N * M board that can be solved modulo 10^9 + 7.


<h3>Example</h3>

<pre>
<b>Input:</b>
3
1 1
1 3
3 3

<b>Output:</b>
2
2
32
</pre>
<br />

<b>Description :</b> <br />

In first case 1 * 1 board can have 2 configurations - off or on. Both can be solved. <br />
In second case we've a row of 3 lights. There are total of 8 configurations. Out of these only 2 configurations can be solved (one with all lights on and one with all lights off)<br /></p>    