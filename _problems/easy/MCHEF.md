---
{"category_name":"easy","problem_code":"MCHEF","problem_name":"MasterChef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"mugurelionut","date_added":"2-04-2015","tags":{"0":"data","1":"dynamic","2":"easy","3":"july15","4":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/MCHEF","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/mandarin/MCHEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/russian/MCHEF.pdf">Russian</a>.</h3>
<p>Chef loves to prepare delicious dishes. He has prepared <b>N</b> dishes numbered from <b>1</b> to <b>N</b> for this year's MasterChef contest. He has presented all the <b>N</b> dishes to a panel of judges. Judging panel consists of <b>M</b> judges numbered from <b>1</b> to <b>M</b>. Rating for each dish was decided by voting from all the judges. Rating for the dishes has been given by a <b>1</b>-indexed array <b>A</b> where <b>A<sub>i</sub></b> denotes rating of the <b>i<sup>th</sup></b> dish.</p>
<p>Some dishes prepared by chef are extraordinary delicious, but unfortunately, some are not. Chef has been given a chance to improve the total rating of his dishes. By total rating of dishes, we mean the sum of the ratings of his dishes. Each of the <b>M</b> judges has administrative power to remove some (zero or more) dishes from a specified range. The <b>i<sup>th</sup></b> judge takes <b>C<sub>i</sub></b> rupees for removing each dish of Chef's choice from the dishes numbered from <b>L<sub>i</sub></b> to <b>R<sub>i</sub></b> (both inclusive). Once a dish is removed by any of the <b>M</b> judges it will not be considered for calculating total rating of the dishes. Chef has spent a large portion of his money preparing mouth watering dishes and has only <b>K</b> rupees left for now. Now chef is worried about maximizing total rating of his dishes by dropping some of the <b>N</b> dishes.</p>
<p>Please Help chef by finding the maximum total rating he can achieve such that the total expenditure does not exceed his budget of <b>K</b> rupees.</p>
<h3> Input </h3>
<ul>
<li>First line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>First line of each test case contains three space separated integers <b>N</b>, <b>K</b> and <b>M</b> denoting the number of dishes prepared by chef, chef's budget, and number of judges in judging panel respectively.</li>
<li>Next line of each test case contains <b>N</b> space separated integers where <b>i<sup>th</sup></b> integer denotes the rating received by the <b>i<sup>th</sup></b> dish.</li>
<li>Next <b>M</b> lines of each test case contain three space separated integers each: <b>L</b>, <b>R</b> and <b>C</b>, where the integers in the <b>i<sup>th</sup></b> line denotes the value of <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> and <b>C<sub>i</sub></b> respectively.</li>
</ul>
<h3>Output </h3>
<p>For each test case, print a single integer in a line corresponding to the answer.</p>
<h3> Constraints </h3>
<ul>
<li> <b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li> <b>1 ≤ N,M ≤ 10<sup>5</sup></b> </li>
<li> <b>1 ≤ K ≤ 500 </b></li>
<li> <b>1 ≤ L<sub>i</sub> ≤ R<sub>i</sub> ≤ N</b></li>
<li> <b>1 ≤ C<sub>i</sub> ≤ 200</b></li>
<li> <b>-10<sup>9</sup> ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></li>
<li> Sum of <b>N</b> and <b>M</b> over all test cases does not exceed <b>5*10<sup>5</sup></b></li>
</ul>
<h3> Subtasks : </h3>
<ul>
<li><b>Subtask 1 :</b> Sum of all <b>N</b>'s across the test cases in a file does not exceed <b>5000</b>. Sum of all <b>M</b>'s is also at most <b>5000</b>. <b>(33 points)</b>.</li>
<li><b>Subtask 2 :</b> Sum of all <b>N</b>'s across the test cases in a file does not exceed <b>5*10<sup>5</sup></b>. Sum of all <b>M</b>'s is also at most <b>5*10<sup>5</sup></b>. <b>( 67 points )</b>.</li>
</ul>
<h3> Example </h3>
<p><b>input</b></p>
<pre>
1
5 10 5
10 -2 -5 7 -10
1 1 5
2 4 10
4 4 12
3 4 10
1 5 15

<b>output</b>
5
</pre><h3>Explanation </h3>
<ul>
<li>Chef can drop dish numbered 3<sup>rd</sup> with rating -5 by paying 10 rupees to the 4<sup>th</sup> judge, and get the maximum possible total rating of 5.</li>
</ul>
