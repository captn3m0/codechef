---
{"languages_supported":{"0":"NA"},"title":"WORDS1","category":"NA","old_version":true,"problem_code":"WORDS1","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p align="justify">Some of the secret doors contain a very interesting word puzzle. The team of archaeologists has to solve it to open  that doors. Because there is no other way to open the doors, the puzzle is very important for us.</p>
<p align="justify">There is a large number of magnetic plates on every door. Every plate has one word written on it. The plates must be arranged into a sequence in such a way that every word begins with the same letter as the previous word ends. For example, the word   ac<span style="text-decoration: underline;">m</span>'' can be followed by the word   <span style="text-decoration: underline;">m</span>otorola''. Your task is to write a computer program that will read the list of words and determine whether it is possible to arrange all of the plates in a sequence (according to the given rule) and consequently to open the door.</p>
<h3>Input</h3>
<p align="justify">The input consists of <var>T</var> test cases. The number of them (<var>T</var>, equal to about 500) is given on the first line of the input file. Each test case begins with a line containing a single integer number <var>N</var> that indicates the number of plates (<var>1 &lt;= N &lt;= 100000</var>). Then exactly <var>N</var>lines follow, each containing a single word. Each word contains at least two and at most 1000 lowercase characters, that means only letters '<code>a</code>' through '<code>z</code>' will appear in the word. The same word may appear several times in the list.</p>
<h3>Output</h3>
<p align="justify">Your program has to determine whether it is possible to arrange all the plates in a sequence such that the first letter of each word is equal to the last letter of the previous word. All the plates from the list must be used, each exactly once. The words mentioned several times must be used that number of times.</p>
<p align="justify">If there exists such an ordering of plates, your program should print  the sentence "<code>Ordering is possible.</code>". Otherwise, output the sentence "<code>The door cannot be opened.</code>".</p>
<h3>Example</h3>
<pre>Sample input:

3
2
directi
codechef
3
skenzo
logicboxes
orderbox
2
ok
ok


Sample output:

The door cannot be opened.
Ordering is possible.
The door cannot be opened.
</pre><p><b>Warning: large Input/Output data, be careful with certain languages</b></p>
    