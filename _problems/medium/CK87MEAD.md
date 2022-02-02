---
{"category_name":"medium","problem_code":"CK87MEAD","problem_name":"Chef and Math Test","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"mhammad1","problem_tester":"kingofnumbers","date_added":"20-10-2017","tags":{"0":"centroid","1":"cook87","2":"fenwick","3":"line","4":"medium","5":"mhammad1","6":"mhammad1"},"time":{"view_start_date":1508697000,"submit_start_date":1508697000,"visible_start_date":1508697000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/mandarin/CK87MEAD.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/russian/CK87MEAD.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/vietnamese/CK87MEAD.pdf">Vietnamese</a> as well.</h3>

<p>Joud Zouzou is one of the new employed co-chefs in the restaurant.</p>

<p>Joud is preparing for his 3<sup>rd</sup> year in Damascus University, and he is also an ACM (AC-Milan) fan. Said On the other hand is a fan of Juventus, and they always fight, especially when Joud says: We're coming, We're back!</p>

<p>Said can't stand this situation, but Shahhoud decided to give Joud his last chance. Since his dream is to be the Chef that cooks the most delicious dishes, Shahhoud gave him a task, and Joud has to solve it in order to maintain his current job. The task is as follows</p>

<p>Given a tree of <b>N</b> nodes, each node <b>i</b> has a value <b>A<sub>i</sub></b> attached to it. Joud has to find the number of unordered-pairs <b>(i,j)</b> such that:</p>

<p>If we created an array of all the numbers <b>A<sub>k</sub></b>, such as <b>k</b> is a node in the simple path from node <b>i</b> to node <b>j</b>, the median of this array will not exceed <b>X</b> and the mean will be at least <b>Y</b>.</p>

<p>Joud found this task a bit hard, and he wants to spend all of his time studying for the next year, so he asked you to help him solving that problem.</p>

<p><b>Note:</b></p>

<ul>
<li>The median of an array is the element positioned at the middle of the array after sorting it in non-decreasing order.</li>
<li>The mean of an array is the sum of all the elements, divided by array's length.</li>
<li>You can consider for even-length arrays that the median is the <b>left</b> one of the two centered elements of the array after sorting it.</li>
</ul>
<p> </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>Each test starts with three space separated integers <b>N</b>, <b>X</b> and <b>Y</b>, denoting the number of nodes, the maximum value for the median and the minimum value for the mean respectively.</p>

<p>The next line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>,  <b>...</b>, <b>A<sub>N</sub></b>, denoting the values of the nodes.</p>

<p><b>N-1</b> lines follows. Each line contains two values: <b>u</b> and <b>v</b>, denoting a connection between nodes <b>u</b> and <b>v</b>.</p>

<h3>Output</h3>
<p>For each test case, print a single number, the number of pairs (<b>u</b>, <b>v</b>) that satisfies the above mentioned conditions.
It's possible that <b>u = v</b>.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100.</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup>.</b></li>
<li><b>-10<sup>9</sup> ≤ X,Y ≤ 10<sup>9</sup></b>.</li>
<li><b>-10<sup>9</sup> ≤ A<sub>i</sub> ≤ 10<sup>9</sup>.</b></li>
<li>It's guaranteed that the sum of all <b>N</b> over all test cases doesn't exceed <b>2*10<sup>5</sup></b>.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 4 0
1 5 4 -6 -100
4 2
2 1
5 3
1 3

<b>Output:</b>
7

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b> All possible pairs are: { <b> (1,1) (1,2) (1,3) (1,4) (1,5) (2,2) (2,3) (2,4) (2,5) (3,3) (3,4) (3,5) (4,4) (4,5) (5,5) </b> }.
The valid pairs are: { <b> (1,1) (1,2) (1,3) (1,4) (2,3) (3,3) (3,4) </b> }.</p>

<p>The pair <b>(1,5)</b> is invalid because if we get all the nodes values in the path from node <b>1</b> to node <b>5</b>, the array will be: <b>{1, 4, -100}</b>, and the mean is: <b>-31,666</b> which is less than <b>0</b>.</p>

<p>The pair <b>(2,2)</b> is invalid because the median of the array <b>{5}</b> is <b>5</b> which is greater than <b>4</b> </p>
