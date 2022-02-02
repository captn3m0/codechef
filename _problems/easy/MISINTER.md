---
{"languages_supported":{"0":"NA"},"title":"MISINTER","category":"NA","old_version":true,"problem_code":"MISINTER","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef's brother likes to put words in Chef's mouth. Chef hates it about him of course. He has decided to become extremely careful about what he speaks. Fortunately, he knows how his brother transforms the words, that Chef uses. He has decided to use only those words which remain the same even after his brother's transformation!</p>
<p>If Chef speaks an N letter word, his brother moves all the letters which are at even positions (assuming, numbering of positions starts from 1), to the beginning of the word; and the rest of the letters follow as they appeared in the word. Eg. abdef becomes beadf; cdcd becomes ddcc.</p>
<p>Chef wants to know how many words can he use, provided that each word is composed of exactly N lowercase letters of the English alphabet. They use an ancient language in Byteland, which allows all possible words within the above definition!</p>
<p><strong>Input format</strong></p>
<p>The first line contains the number T, the number of test cases. In the following lines, T test cases follow. Every test case is a single line, that contains a single positive integer, N, which is the length of the words that Chef wants to use.</p>
<p><strong>Output format</strong></p>
<p>For each test case, print the number of words of length N that Chef can use; that is, number of words, which remain the same after brother's transformation.  Since the result can be quite large, output the result modulo 1000000007.</p>
<p><strong>Constraints</strong></p>
<p>1 ≤ T ≤ 100<br /> 1 ≤ N ≤ 100000</p>
<p><strong>Sample input</strong></p>
<pre>3
1
14
45

</pre>
<p><strong>Sample output</strong></p>
<pre>26
456976
827063120

</pre>
<p></p>    