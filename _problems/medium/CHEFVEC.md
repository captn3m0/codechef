---
{"category_name":"medium","problem_code":"CHEFVEC","problem_name":"Chef and Vectors","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"9-12-2015","tags":{"0":"cook65","1":"digit","2":"dynamic","3":"hard","4":"memoization","5":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFVEC","time":{"view_start_date":1450636200,"submit_start_date":1450636200,"visible_start_date":1450636200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/mandarin/CHEFVEC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/russian/CHEFVEC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFVEC.pdf">Vietnamese</a> as well.</h3>


<p>
Chef has an integer array <b>X</b>, and a binary array <b>S</b>, both of size <b>N</b>. He wants to know how many vectors (denote by <b>V</b>) of <b>N</b> elements exist, for which the following conditions hold for all valid indices <b>i</b> (that is, for all 1 ≤ <b>i</b> ≤ <b>N</b>).
<li>0 ≤ <b>V<sub>i</sub></b> &lt; 10<sup>18</sup></li>
<li>If <b>S<sub>i</sub></b> = 1, <b>V<sub>i</sub></b> is ≥ <b>X<sub>i</sub></b>, and if <b>S<sub>i</sub></b> = 0, <b>V<sub>i</sub></b> ≤ <b>X<sub>i</sub></b></li>
<li>Sum of the elements of <b>V</b>, when viewed as a string, contains "47" as a substring.</li>
</p>
<p>
Please help Chef find this count. Since it may be a very large number, you should output the count modulo <b>10<sup>9</sup>+7</b>.
</p>

<h3>Input</h3>
The first line of input contains one integer <b>N</b>. The next <b>N</b> lines contain two integers each, with the <b>i<sup>th</sup></b> containing <b>S<sub>i</sub></b> and <b>X<sub>i</sub></b>. If <b>S<sub>i</sub></b> = 0, then <b>V<sub>i</sub></b> ≤ <b>X<sub>i</sub></b>, otherwise <b>V<sub>i</sub></b> ≥ <b>X<sub>i</sub></b>.

<h3>Output</h3>
Output a single line containing a single integer — the answer to Chef's problem modulo <b>10<sup>9</sup></b>+<b>7</b>.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 8</li>
<li>0 ≤ <b>X<sub>i</sub></b> &lt; 10<sup>18</sup></li>
<li><b>S<sub>i</sub></b> is either 0 or 1. </li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>2
0 22
0 30
</tt>
<b>Output:</b>
<tt>6
</tt>
</pre>

<h3>Explanation:</h3>
<p>
There are 6 such vectors: (17, 30), (18, 29), (19, 28), (20, 27), (21, 26), (22, 25).
</p>