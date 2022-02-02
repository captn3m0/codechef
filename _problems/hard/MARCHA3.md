---
{"languages_supported":{"0":"NA"},"title":"MARCHA3","category":"NA","old_version":true,"problem_code":"MARCHA3","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p><strong>The following problem appeared in the <a href="http://www.codechef.com/MARCH09/">CodeChef March '09 Challenge.</a></strong></p>
<p>Alice and Johnny are playing a simple guessing game. Johnny picks an arbitrary positive integer <i>n</i> (1&lt;=<i>n</i>&lt;=10<sup>9</sup>) and gives Alice exactly <i>k</i> hints about the value of <i>n</i>. It is Alice's task to guess <i>n</i>, based on the received hints. </p>
<p>
Alice often has a serious problem guessing the value of <i>n</i>, and she's beginning to suspect that Johnny occasionally cheats, that is, gives her incorrect hints.<br />
After the last game, they had the following little conversation:</p>
<div align="justify">
<ul>
<li>[Alice] Johnny, you keep cheating!
</li><li>[Johnny] Indeed? You cannot prove it.
</li><li>[Alice] Oh yes I can. In fact, I can tell you with the utmost certainty that in the last game you lied to me at least *** times.
</li></ul>
</div>
<p>
So, how many times at least did Johnny lie to Alice? Try to determine this, knowing only the hints Johnny gave to Alice.</p>
<h3>Input</h3>
<p>The first line of input contains <i>t</i>, the number of test cases (about 20). Exactly <i>t</i> test cases follow. </p>
<p>Each test case starts with a line containing a single integer <i>k</i>, denoting the number of hints given by Johnny (1&lt;=<i>k</i>&lt;=100000). Each of the next <i>k</i> lines contains exactly one hint. The <i>i</i>-th hint is of the form:</p>
<p>
 <tt>operator</tt> <i>l<sub>i</sub></i> <tt>logical_value</tt>
</p>
<p>where <tt>operator</tt> denotes one of the symbols <tt>&lt; </tt>, <tt>> </tt>, or <tt>=</tt>; <i>l<sub>i</sub></i> is an integer (1&lt;=<i>l<sub>i</sub></i>&lt;=10<sup>9</sup>), while <tt>logical_value</tt> is one of the words: <tt>Yes</tt> or <tt>No</tt>. The hint is considered correct if <tt>logical_value</tt> is the correct reply to the question: "Does the relation: <i>n</i> <tt>operator</tt> <i>l<sub>i</sub></i> hold?", and is considered to be false (a lie) otherwise.</p>
<h3>Output</h3>
<p>For each test case output a line containing a single integer, equal to the minimal possible number of Johnny's lies during the game.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
&lt; 100 No
> 100 No
3
&lt; 2 Yes
> 4 Yes
= 3 No
6
&lt; 2 Yes
> 1 Yes
= 1 Yes
= 1 Yes
> 1 Yes
= 1 Yes

<b>Output:</b>
0
1
2
</pre><p><b>Explanation:</b> for the respective test cases, the number picked by Johnny could have been e.g. <i>n</i>=100, <i>n</i>=5, and <i>n</i>=1.</p>
    