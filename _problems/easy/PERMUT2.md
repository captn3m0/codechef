---
{"languages_supported":{"0":"NA"},"title":"PERMUT2","category":"NA","old_version":true,"problem_code":"PERMUT2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Some programming contest problems are really tricky: not only do they
require a different output format from what you might have expected, but
also the sample output does not show the difference. For an example,
let us look at permutations.<br />
A <b>permutation</b> of the integers <i>1</i> to <i>n</i> is an
ordering of
these integers. So the natural way to represent a permutation is
to list the integers in this order. With <i>n = 5</i>, a
permutation might look like 2, 3, 4, 5, 1. <br />
However, there is another possibility of representing a permutation:
You create a list of numbers where the <i>i</i>-th number is the
position of the integer <i>i</i> in the permutation. 
Let us call this second
possibility an <b>inverse permutation</b>. The inverse permutation
for the sequence above is 5, 1, 2, 3, 4.
<br />
An <b>ambiguous permutation</b> is a permutation which cannot be
distinguished from its inverse permutation. The permutation 1, 4, 3, 2
for example is ambiguous, because its inverse permutation is the same.
To get rid of such annoying sample test cases, you have to write a
program which detects if a given permutation is ambiguous or not.
</p>
<h3>Input Specification</h3>
<p>The input contains several test cases.<br />
The first line of each test case contains an integer <i>n</i>
(<i>1 &#8804; n &#8804; 100000</i>).
Then a permutation of the integers <i>1</i> to <i>n</i> follows
in the next line. There is exactly one space character
between consecutive integers.
You can assume that every integer between <i>1</i> and <i>n</i>
appears exactly once in the permutation.
<br />
The last test case is followed by a zero.
</p>
<h3>Output Specification</h3>
<p>For each test case output whether the permutation is ambiguous or not.
Adhere to the format shown in the sample output.
</p>
<h3>Sample Input</h3>
<pre>4
1 4 3 2
5
2 3 4 5 1
1
1
0
</pre>
<h3>Sample Output</h3>
<pre>ambiguous
not ambiguous
ambiguous
</pre>    