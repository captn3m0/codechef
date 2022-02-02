---
{"languages_supported":{"0":"NA"},"title":"MARCHA6","category":"NA","old_version":true,"problem_code":"MARCHA6","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p><strong>The following problem appeared in the <a href="http://www.codechef.com/MARCH09/">CodeChef March '09 Challenge.</a></strong></p>
<p>In the computer science class at the school in Byteland, the teacher handed out the following assignment as homework:</p>
<p>
<font color="blue">"For an integer <i>n</i>, let <i>b<sub>n</sub></i> denote the bit parity of the binary representation of <i>n</i>, i.e. <i>b<sub>n</sub></i>=0 if <i>n</i> has an even number of ones when written down in the binary system, and <i>b<sub>n</sub></i>=1 otherwise. The numbers <i>b<sub>n</sub></i>, for <i>n</i> >=0,  form an infinite sequence of bits (zeros and ones). Given a sequence <i>c</i>=(<i>c</i><sub>0</sub>, ..., <i>c</i><sub>p-1</sub>) of <i>p</i> bits, find the first occurrence of sequence <i>c</i> as a subsequence of <i>b</i> (i.e., the smallest value of index <i>k</i> such that for all <i>i</i> between 0 and <i>p</i>-1, we have <i>c</i><sub><i>i</i></sub> = <i>b</i><sub><i>i+k</i></sub>)."</font></p>
<p>
And the teacher gave his students several short sequences <i>c</i>, asking them to provide the answers next day. Most, as expected, wrote programs to solve the task. Only Johnny computed the results by hand, claiming (quite correctly) that it was quicker that way. The teacher, slightly exasperated, decided to teach Johnny a lesson, and prepared a harder assignment, just for him.</p>
<p><font color="blue">"Given a sequence <i>c</i>=(<i>c</i><sub>0</sub>, ..., <i>c</i><sub>p-1</sub>) of <i>p</i> bits, for each <i>s</i> between 0 and <i>p</i>-1, compute the first occurrence of the prefix (<i>c</i><sub>0</sub>, ..., <i>c</i><sub>s</sub>) of sequence <i>c</i> as a subsequence of <i>b</i>."<br />
</font></p>
<p>And to be doubly sure that Johnny does his homework using a computer, the teacher gave him some really long sequences to deal with. Now, Johnny is in a bit of a spot, because he has never bothered to learn to program. Please help him out!</p>
<h3>Input</h3>
<p>The first line of input contains a positive integer <i>t</i> &lt; 10, describing the number of tests. Exactly <i>t</i> test cases follow.</p>
<p>Each test case is given in two lines. The first line contains integer <i>p</i> (1&lt;=<i>p</i>&lt;=10<sup>6</sup>, the length of sequence <i>k</i>). The next line contains exactly <i>p</i> space-separated numbers (0 or 1), denoting successive elements of sequence <i>c</i>.</p>
<h3>Output</h3>
<p>For each test case, print a line containing exactly <i>p</i> space-separated numbers, corresponding to the indexes of the first occurrence of successive prefixes of <i>c</i> as subsequences of <i>b</i>. All indexes are numbered starting from zero. If there is no such occurrence, output -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
9
1 0 0 1 0 1 1 1 0

<b>Output:</b>
1 2 4 4 8 8 8 -1 -1
</pre><p>
<b>Explanation:</b><br /><br />
The first 16 elements of b are:<br />
<i>0 1 1 0 1 0 0 1 1 0 0 1 0 1 1 0</i><br /></p>
<p>The prefix '1' first appears in <i>b</i> at index 1,<br /><br />
The prefix '1 0' first appears in <i>b</i> at index 2,<br /><br />
The prefixes '1 0 0' and '1 0 0 1' first appear in <i>b</i> at index 4,<br /><br />
... and so on.<br /><br />
There are no occurences of '1 0 0 1 0 1 1 1' in sequence <i>b</i>.</p>
    