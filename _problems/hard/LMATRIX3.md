---
{"category_name":"hard","problem_code":"LMATRIX3","problem_name":"Make It Zero 3","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"ACRush","problem_tester":"white_king","date_added":"3-03-2014","tags":{"0":"ACRush","1":"april14"},"editorial_url":"http://discuss.codechef.com/problems/LMATRIX3","time":{"view_start_date":1397468225,"submit_start_date":1397468225,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/LMATRIX3.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/LMATRIX3.pdf">Russian</a>.</h3>
<h3>Problem description.</h3>
<p>
Aleksandra is the most popular girl in the city.<br />
Each boy can only dream about dating her.<br />
Other girls want to be like her.
</p>
<p>
Aleksandra is going to find herself a boyfriend.<br />
Of course such a beauty needs someone special.<br />
That's why she is going to announce a quiz.<br />
Even you can try your chances at this.<br />
Apart from boys, the girl also loves math.<br />
That's why this quiz is going to be mathematical.
</p>
<p>
Has you heard this story before?<br />
In fact, Aleksandra gave the problem<br />
<a target="_blank" href="http://www.codechef.com/FEB14/problems/LMATRIX2">Make It Zero 2</a><br />
in CodeChef Febrary Challenge.<br />
Unfortunately, no boy can solve that problem optimally in all cases.<br />
Therefore, Aleksandra refactors the problem and asks for the optimal solutions to all boys in the </p>
<p>city.
</p>
<p>
She has one number <b>P</b> and one array with <b>N</b> elements each.<br />
Let <b>A<sub>i</sub></b> be the <b>i</b><sup>th</sup> element of the array.<br />
She likes <b>0</b>, that's why she is going to get rid of all non zero numbers in the array.<br />
In each turn she may choose 3 integers:</p>
<ul>
<li><b>1 ≤ s ≤ t ≤ N</b></li>
<li><b>0 ≤ k ≤ 10000</b></li>
</ul>
<p>and after this, for all numbers <b>i</b> in the array such that: <b>s ≤ i ≤ t</b>,<br />
she does the following:</p>
<ul>
<li><b>A<sub>i</sub> = (k + A<sub>i</sub>) modulo P</b></li>
</ul>
<p>It takes her a lot of turns to do this. That's why she gives this problem to all boys in the </p>
<p>city<br />
and promises to go for a date with the one who will solve all tasks with the fewest number of </p>
<p>moves.<br />
It is your chance to walk with such a wonderful girl. Just do it!
</p>
<h3>Input</h3>
<p>
The first line contains one interger <b>T</b> indicates the number of testcases.
</p>
<p>
The first line of each testcase contains two space-separated integers <b>N</b> and <b>P</b>,<br />
denoting the size of the array and the parameter <b>P</b>.
</p>
<p>
The size of the array may be very large.<br />
We represent it by concatenating (in order) many subarrays.<br />
The next line contains one interger <b>M</b>, denoting number of subarrays.<br />
The next <b>M</b> lines each contains 4 integers <b>F<sub>i</sub></b>,<br />
<b>C<sub>i</sub></b>, <b>D<sub>i</sub></b> and <b>L<sub>i</sub></b>.<br />
All subarrays are generated as follows:</p>
<ul>
<li>Denote <b>B<sub>i,j</sub></b> as the <b>j<sup>th</sup></b> element of the <b>i<sup>th</sup></b> subarray.</li>
<li><b>B<sub>i,1</sub> = F<sub>i</sub></b></li>
<li>For each <b>1 &lt; j ≤ L<sub>i</sub></b>, <b>B<sub>i,j</sub> = (B<sub>i,j-1</sub> * C<sub>i</sub> + D<sub>i</sub>) module P</b></li>
</ul>

<p>
You can assume that <b>N = L<sub>1</sub> + L<sub>2</sub> + ... + L<sub>M</sub></b>.
</p>
<h3>Output</h3>
<p>For each testcase, print one line containing one integer <b>C</b>,<br />
denoting the minimal number of the moves for erasing all non zero numbers from the array. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>10</b></li>
<li><b>0</b> ≤ <b>F<sub>i</sub></b>, <b>C<sub>i</sub></b>, <b>D<sub>i</sub></b> &lt; <b>P</b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>10<sup>15</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 1
1
0 0 0 3
4 10
4
3 0 0 1
5 0 0 1
5 0 0 1
3 0 0 1
6 6
1
0 1 1 6

<b>Output:</b>
0
2
5

</pre><h3>Explanation</h3>
<p>
<b> Example case 1: </b> All numbers are zero.
</p>
<p>
<b> Example case 2: </b> Initially, A = {3, 5, 5, 3}. In the first turn, we choose s=2, t=3, and k=8, after which A = {3, 3, 3, 3}. Then all numbers will become zero after the second turn.
</p>
<p>
<b> Example case 3: </b> Initially, A = {0, 1, 2, 3, 4, 5}. One optimal solution is to change non-zero numbers to zero one by one.
</p>
