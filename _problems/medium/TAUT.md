---
{"languages_supported":{"0":"NA"},"title":"TAUT","category":"NA","old_version":true,"problem_code":"TAUT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>
Write a program that checks if the given logical expression is a tautology. The logical expression is a tautology if it is always true, regardless of logical value of its variables.
</p>
<h3>Input</h3>
<p>
On the first line there is the number of expressions to check (at most 35). The expression is in a <a href="http://en.wikipedia.org/wiki/Polish_notation">prefix notation</a>, that means that operator precedes its arguments. The following logical operators will be used:
</p>
<pre>
C - and 
D - or
I - implies
E - if, and only if
N - not
</pre><p>
The variables will be lowercase letters (a-z). There will be no more than 16 different letters in the expression. The length of the expression will not exceed 111 characters.
</p>
<h3>Output</h3>
<p>
For each expression write one word: YES if it is a tautology, NO in other case.
</p>
<h3>Example</h3>
<pre><b><tt>Sample input:</tt></b>
7
IIpqDpNp
NCNpp
Iaz
NNNNNNNp
IIqrIIpqIpr
Ipp
Ezz


<b><tt>Sample output:</tt></b>
YES
YES
NO
NO
YES
YES
YES
</pre>    