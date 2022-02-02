---
{"languages_supported":{"0":"NA"},"title":"CIEL8STR","category":"NA","old_version":true,"problem_code":"CIEL8STR","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef Ciel likes 8. Ciel's restaurant has many menus whose prices are multiples of 8.
Now, Ciel has some digits written on a wooden board, and she'd like to cut the board to display prices in a new menu.
In how many ways can Ciel choose consecutive digits from the board which denote integer multiples of 8?
</p>

<p>
In this problem, an integer must not have leading zeros.
For example, 0, 8, 48, 1000 are integer multiples of 8, but 00, 5, 58, 01000 are not.
</p>

<h3>Input</h3>
<p>
An input contains a string <strong>S</strong>, which denotes digits written on the wooden board.
</p>

<h3>Output</h3>
<p>
Print the number of ways in which Ciel can choose consecutive digits which denote integer multiples of 8.
</p>

<h3>Constraints</h3>
<p>
1 ≤ |<strong>S</strong>| ≤ 1000000 (10<sup>6</sup>), where |<strong>S</strong>| means the length of <strong>S</strong>.<br />
<strong>S</strong> doesn't contain non-digit charactors.<br />
</p>

<h3>Sample Input</h3>
<pre>5858</pre>

<h3>Sample Output</h3>
<pre>2</pre>

<h3>Output details</h3>
<p>
Ciel can choose 5, 8, 5, 8, 58, 85, 58, 585, 858 and 5858.
Here, only 8 and 8 are multiples of 8.
</p>    