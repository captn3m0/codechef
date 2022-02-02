---
{"languages_supported":{"0":"NA"},"title":"MARCHA2","category":"NA","old_version":true,"problem_code":"MARCHA2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p><b>A tutorial for this problem is available <a title="here" href="/wiki/tutorial-johnny-and-bean-stalk">here</a>.</b></p>
<p>One evening Johnny found some funny looking beens in his grandfather's garden shed, and decided to plant one of them. Next morning, to his surprise he found an enormous beanstalk growing in his back yard. Undaunted by its size, he decided to count its leaves.</p>
<p>You must know that beanstalks in Byteland grow in a very special way. At the lowest (1st) level, there is exactly one stem. At any level(including the 1st), a stem can end (forming exactly one leaf), or branch into exactly two stems which grow into the next level, following the same rules.</p>
<p>Johnny believes he has managed to count the number of leaves at each of the levels of the beanstalk. However, you must know that before he began to count, Johnny ate one or two of the other beans he found in his grandfather's shed, and that's why he is not quite sure of his results. Please verify whether Johnny's results may possibly be correct, at least in theory.</p>
<h3>Input</h3>
<p>The input starts with a line containing integer <i>t</i>, the number of test cases (1&lt;= <i>t</i> &lt;= 20). The descriptions of exactly <i>t</i> test cases follow.</p>
<p>Each test case starts with an integer <i>k</i>, representing the number of levels of the beanstalk (1&lt;= <i>k</i>&lt;=10<sup>6</sup>). The next <i>k</i> non-negative space-separated integers (not greater than 10<sup>6</sup>) represent the number of leaves of the beanstalk at successive levels, starting from level 1.</p>
<h3>Output</h3>
<p>For each test case, output a line containing exactly one of the words 'Yes' or 'No', depending on whether a beanstalk having the stated leaf counts can grow in accordance with the Bytelandian rules.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
0 1 2
3
0 0 3

<b>Output:</b>
Yes
No
</pre><p>
</p>    