---
{"languages_supported":{"0":"NA"},"title":"MISINT2","category":"NA","old_version":true,"problem_code":"MISINT2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef's brother likes to put words in Chef's mouth.
Chef hates it about him of course.
He has decided to become extremely careful about what he speaks.
Fortunately, he knows how his brother transforms the words, that Chef uses.
He has decided to use only those words which remain the same even after his brother's transformation!
<br /><br />
If Chef speaks an <b>N</b> letter word, his brother moves all the letters which are at even positions (assuming, numbering of positions starts from 1), to the beginning of the word; and the rest of the letters follow as they appeared in the word, e.g. abdef becomes beadf; cdcd becomes ddcc.
<br /><br />
Chef wants to know how many words he can use, provided that the length of each word is between <b>L</b> and <b>R</b> inclusive and each word is composed of lowercase letters of the English alphabet. They use an ancient language in Byteland, which allows all possible words within the above definition!
</p>

<h3>Input</h3>

<p>
The first line contains a positive integer <b>T</b>, the number of test cases. In the following lines, <b>T</b> test cases follow. Every test case is a single line that contains two space separated positive integers, <b>L</b> and <b>R</b>. <b>L</b> is lower bound and <b>R</b> is upper bound for the length of the word that Chef wants to use.
</p>

<h3>Output</h3>
<p>
For each test case, print the number of words with length between <b>L</b> and <b>R</b> inclusive that Chef can use; that is, number of words, which remain the same after brother's transformation. 
Since the result can be quite large, output the result modulo <b>1000000007</b>.
</p>

<h3>Constraints</h3>
<p><b>
1 &lt;= T &lt;= 5
<br />
1 &lt;= L &lt;= R &lt;= 10<sup>10</sup>
<br />
R - L &lt;= 50000
</b></p>

<h3>Sample input</h3>

<pre>3
1 5
6 7
45 50

</pre>

<h3>Sample output</h3>

<pre>1430
18252
871229844

</pre>    