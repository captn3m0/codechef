---
{"languages_supported":{"0":"NA"},"title":"BESTSUM","category":"NA","old_version":true,"problem_code":"BESTSUM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> Given a sequence of positive integers <em>a<sub>1</sub></em>,
<em>a<sub>2</sub></em>,    , <em>a<sub>N</sub></em>, and 1    

<em>i</em>     <em>j</em>     <em>N</em>, the partial sum from
<em>i</em> to <em>j</em> is <em>a<sub>i</sub></em> +

<em>a<sub>i+1</sub></em> +     + <em>a<sub>j</sub></em>.</p>


<p> In this problem, you will be given such a sequence and two
integers <em>P</em> and <em>K</em>. Your task is to find the smallest
partial sum modulo <em>P</em> that is at least <em>K</em>.</p>

<p>
For example, consider the following sequence of integers:</p>

<pre>
    12     13     15     11     16     26     11

</pre>


<p> Here <em>N</em> = 7. Suppose <em>K</em> = 2 and <em>P</em> = 17.
Then, the answer is 2 because 11+16+26 = 53 and 53 mod 17 is 2.  On
the other hand, if <em>K</em> = 0 the answer is 0 since 15 + 11 + 16 +
26 = 68 and 68 mod 17 is 0.</p>


<p>Input format</p> 

<p>The first line contains three integers <em>N</em>, <em>K</em> and
<em>P</em>.  This is followed by <em>N</em> lines each containing a
single integer.</p>
<p>You may assume 1      <em>N</em>      100000.</p>
<p>Output format</p>

<p>A single integer indicating the minimum possible segment sum modulo
<em>P</em> that is at least <em>K</em>.</p>

<p>Example:</p>

<p>Sample Input</p>

<pre>
7 2 17
12
13
15
11
16
26
11
</pre>

<p>Sample Output</p>

<pre>
2
</pre>    