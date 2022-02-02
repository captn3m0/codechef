---
{"category_name":"medium","problem_code":"CHSPARR","problem_name":"Chef and Super Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"kevinsogo,xcwgf666","date_added":"21-07-2015","tags":{"0":"algebra","1":"antoniuk1","2":"medium","3":"series","4":"snckpa16"},"editorial_url":"http://discuss.codechef.com/problems/CHSPARR","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/SNCKPA16/mandarin/CHSPARR.pdf">Mandarin Chinese</a>, <a target="_blank" href="/download/translated/SNCKPA16/russian/CHSPARR.pdf">Russian</a> and <a target="_blank" href="/download/translated/SNCKPA16/vietnamese/CHSPARR.pdf">Vietnamese</a> as well.</h3>
<p>Chef has a an array <b>A</b> consisting of <b>N</b> elements. He wants to add some elements into the array as per the below mentioned process.</p>
<p>After each minute, Chef iterates over the array in order from left to right, and takes every two neighbouring pair of elements, say <b>x</b> and <b>y</b>, he adds a new element <b>x + y</b> in the middle of elements <b>x</b> and <b>y</b>.</p>
<p>For example, if initial array <b>A</b> = {1, 6, 9}.</p>
<ul>
<li>After first minute, the array <b>A</b> will be equal to {1, <b>7</b>, 6, <b>15</b>, 9}. Please note that the elements shown in the bold font are the newly added elements during first minute. As you can observe that <b>7</b> = 1 + 6, and <b>15</b> = 6 + 9.</li>
<li>After second minute, the array will be {1, <b>8</b>, 7, <b>13</b>, 6, <b>21</b>, 15, <b>24</b>, 9}. Once again, elements added during the second minute, are shown in bold. </li>
</ul>
<p>Chef wants to know the sum of elements between <b>x<sup>th</sup></b> and <b>y<sup>th</sup></b> positions in the array <b>A</b> (i.e. <b>A<sub>x</sub> + A<sub>x + 1</sub> + ... + A<sub>y</sub></b>) after <b>m</b> minutes. As the answer could be large, output it modulo 10<sup>9</sup>+7 (1000000007). Please note that we use 1 based indexing in the problem.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains four space-separated integers <b>N</b>, <b>m</b>, <b>x</b>, <b>y</b> denoting the number of elements in the array <b>A</b> in the beginning, amount of minutes and range for finding sum.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the array <b>A</b> in the beginning. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer corresponding to the sum of elements between <b>x<sup>th</sup></b> and <b>y<sup>th</sup></b> positions in the array <b>A</b> after <b>m</b> minutes modulo 10<sup>9</sup>+7.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>y</b> ≤ size of the array <b>A</b> (<b>|A|</b>) after <b>m</b> minutes</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 1 1 5
1 6 9
3 2 6 7
1 6 9

<b>Output:</b>
38
36
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /> After the first minute <b>A</b> = {1, 7, 6, 15, 9} and sum of all elements will be 38.</p>
<p><b>Example case 2.</b><br /> After the second minute the array <b>A</b> will be {1, 8, 7, 13, 6, 21, 15, 24, 9} and sum of elements between 6<sup>th</sup> and 7<sup>th</sup> equals to 21 + 15 = 36.</p>