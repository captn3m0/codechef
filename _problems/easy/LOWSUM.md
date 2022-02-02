---
{"category_name":"easy","problem_code":"LOWSUM","problem_name":"Lowest Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/XaAIOti9l5U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vineet_adm","problem_tester":"rubanenko","date_added":"28-10-2013","tags":{"0":"binary","1":"cook40","2":"easy","3":"priority","4":"sorting","5":"vineet_adm"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/LOWSUM","time":{"view_start_date":1384713000,"submit_start_date":1384713000,"visible_start_date":1384713000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LOWSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in Russian <a target="_blank" href="https://www.codechef.com/download/translated/COOK40/russian/LOWSUM.pdf">here</a></h3>
<p>The Head Chef is studying the motivation and satisfaction level of his chefs . The motivation and satisfaction of a Chef can be represented as an integer . The Head Chef wants to know the <b> N </b> th smallest sum of one satisfaction value and one motivation value for various values of <b> N </b> . The satisfaction and motivation values may correspond to the same chef or different chefs . Given two arrays, the first array denoting the motivation value and the second array denoting the satisfaction value of the chefs . We can get a set of sums(add one element from the first array and one from the second). For each query ( denoted by an integer q<sub>i</sub> ( i = 1 to Q ) , Q denotes number of queries ) , find the q<sub>i</sub> th element in the set of sums ( in non-decreasing order ) .</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a two space seperated integers <b>K</b> and <b>  Q </b> denoting the number of chefs and the number of queries . </li>
 <li>The second line of each test case contains <b>K</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>K</sub></b> denoting the motivation of Chefs. </li>
<li>The third line of each test case contains <b>K</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>K</sub></b> denoting the satisfaction of Chefs. </li>
<li> The next Q lines contain a single integer q<sub>i</sub> ( for i = 1 to Q ) , find the q<sub>i</sub> th element in the set of sums .
</ul>

<h3>Output</h3>
<ul>
<li>For each query of each test case, output a single line containing the answer to the query of the testcase </li>
</ul>

<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>q<sub>i</sub> ( for i = 1 to Q ) </b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^18  ( for i = 1 to K ) </b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub>  </b> ≤ <b>10^18 ( for i = 1 to K ) </b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 1
1 2 3
4 5 6
4

<b>Output:</b>
7
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 9 elements in the set of sums : <br>
1 + 4 = 5 <br>
2 + 4 = 6 <br>
1 + 5 = 6 <br>
1 + 6 = 7 <br>
2 + 5 = 7 <br>
3 + 4 = 7 <br> 
2 + 6 = 8 <br>
3 + 5 = 8 <br>
3 + 6 = 9 <br>
The fourth smallest element is 7.
</p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>