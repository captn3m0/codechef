---
{"languages_supported":{"0":"NA"},"title":"CIELWALK","category":"NA","old_version":true,"problem_code":"CIELWALK","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Today, Ciel's restaurant is closed.
Ciel is bored, so she decides to take a walk randomly.
</p>

<p>
This town has <strong>N</strong> intersections and <strong>M</strong> one way roads.
The <strong>i</strong>-th road connects from the <strong>A<sub>i</sub></strong>-th intersection to the <strong>B<sub>i</sub></strong>-th intersection.
Ciel is in the 1st intersection now, and Ciel's house is in the <strong>N</strong>-th intersection.
</p>

<p>
If Ciel is in the <strong>i</strong>-th intersection, she will take a walk as follows:
</p>

<ul>
<li>If <strong>i</strong> = <strong>N</strong>, her walk is ended.</li>
<li>Otherwise, she chooses an integer <strong>k</strong> such that <strong>A<sub>k</sub></strong> = <strong>i</strong> uniformly randomly, she walks along the <strong>k</strong>-th road.</li>
</ul>

<p>
On the way, <strong>S</strong> intersections have beautiful flowers.
Let the <strong>F</strong><sub>1</sub>-th intersection, the <strong>F</strong><sub>2</sub>-th intersection, ..., and the <strong>F<sub>S</sub></strong>-th intersection have beautiful flowers.
Can you tell the probability that Ciel last sees the flowers in the <strong>F<sub>i</sub></strong>-th intersection?
That is to say, can you tell the probability that she visits the <strong>F<sub>i</sub></strong>-th intersection, then she goes to <strong>N</strong>-th intersection without visiting other intersections having beautiful flowers?
</p>

<h3>Input</h3>
<p>
The first line contains 3 integers <strong>N</strong>, <strong>M</strong> and <strong>S</strong>.
Then, next line has <strong>S</strong> integers <strong>F</strong><sub>1</sub>, <strong>F</strong><sub>2</sub>, ..., <strong>F<sub>S</sub></strong>.
Next <strong>M</strong> lines have 2 integers each, <strong>A<sub>i</sub></strong> and <strong>B<sub>i</sub></strong>.
</p>

<h3>Output</h3>
<p>
An output should contain <strong>S</strong> lines.
In the <strong>i</strong>-th line, print the probability that Ciel last sees beautiful flowers at the <strong>F<sub>i</sub></strong>-th intersection.
These values must have an absolute error no more than 10<sup>-6</sup>.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>S</strong> &lt; <strong>N</strong> ≤ 30<br />
1 ≤ <strong>F<sub>1</sub></strong> &lt; <strong>F<sub>2</sub></strong> &lt; ... &lt; <strong>F<sub>S</sub></strong> &lt; N<br />
<strong>A<sub>i</sub></strong> ≠ <strong>B<sub>i</sub></strong><br />
If <strong>i</strong> ≠ <strong>j</strong> and <strong>A<sub>i</sub></strong> = <strong>A<sub>j</sub></strong>, then <strong>B<sub>i</sub></strong> ≠ <strong>B<sub>j</sub></strong><br />
For each 1 ≤ <strong>i</strong> &lt; <strong>N</strong>, Ciel can go from the <strong>i</strong>-th intersection to the <strong>N</strong>-th intersection, directly or indirectly.
</p>

<h3>Sample Input 1</h3>
<pre>4 6 3
1 2 3
1 2
2 1
1 3
3 1
2 4
3 4</pre>

<h3>Sample Output 1</h3>
<pre>0
0.5
0.5</pre>

<h3>Sample Input 2</h3>
<pre>4 6 1
2
1 2
2 1
1 3
3 1
2 4
3 4</pre>

<h3>Sample Output 2</h3>
<pre>0.6666666666667</pre>

<h3>Sample Input 3</h3>
<pre>2 1 1
1
1 2</pre>

<h3>Sample Output 3</h3>
<pre>1</pre>

<h3>Notes</h3>
<p>
The sum of output values can be less than 1, because Ciel may go back to her house without seeing beautiful flowers.
</p>    