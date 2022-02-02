---
{"languages_supported":{"0":"NA"},"title":"COLCHAIN","category":"NA","old_version":true,"problem_code":"COLCHAIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A chain is a series of connected links. David has been presented a chain for his birthday consisting of <b>N</b> links and would like to color each of the links into one of <b>M</b> colors. He would like the coloring to be pretty uniform, so that no color is used too often or too seldom. Finally, David came with the following restriction: he wants to color the links in such a way that every color is used at least once in every <b>M</b>+1 consecutive links.
<br /><br />
Two colorings are considered different if there exists at least one <b>i</b> between 1 and <b>N</b> such that link <b>i</b> is colored differently in these colorings. (The links are numbered, and the chain can not be rotated.) How many ways are there for David to color the chain?

<h3>Input</h3>
</p><p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains two integers <b>N</b> and <b>M</b> -- the length of the chain presented to David and the number of colors (1 ≤ <b>M</b> &lt; <b>N</b> ≤ 10<sup>5</sup>).

<h3>Output</h3>
</p><p>For each test case output the number of ways for David to color the chain modulo 1 000 000 007 (10<sup>9</sup> + 7).

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 1
4 2
6 3

<b>Output:</b>
1
10
132
</pre></p>    