---
{"category_name":"hard","problem_code":"WALKBT","problem_name":"Walks on the binary tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":null,"date_added":"21-07-2017","tags":{"0":"altruist_","1":"aug17","2":"data","3":"hard","4":"lazypropagation","5":"persistence","6":"segment"},"editorial_url":"https://discuss.codechef.com/problems/WALKBT","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/WALKBT.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/WALKBT.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/WALKBT.pdf">vietnamese</a> as well.</h3>

<p> You have a <a href = https://xlinux.nist.gov/dads/HTML/perfectBinaryTree.html>perfect binary tree</a> of height <b>N</b>. That is, it contains 2<sup><b>N</b>+1</sup> - 1 nodes.</p>

<p>A path from the root to a leaf can be represented by an integer <b>X</b> which lies between 0 and 2<sup><b>N</b></sup> - 1 (both inclusive) as follows:</p>
<p>Consider the <b>N</b> length binary representation of <b>X</b>. Start reading from the left, and at each bit, 0 denotes going to the left child, and 1 denotes going to the right child. For eg. if <b>N</b> = 2, and <b>X</b> = 0 = (00)<sub>2</sub>, it would correspond to the path which goes to the leftmost leaf. <b>X</b> = 3 = (11)<sub>2</sub> would correspond to the path from root to the rightmost leaf.</p>
 
<p>At the beginning, <b>X</b> = 0, and you have visited only the root till now. Then, you get <b>Q</b> queries. A query can be of two types:</p>

<ul>
<li>Type 1: "! <b>C</b>": This means that <b>X</b> has to be changed to <b>X</b> = ( <b>X</b> + 2<sup><b>C</b></sup> ) mod 2<sup><b>N</b></sup>, and then you start from the root, and walk down the route represented by the new <b>X</b>.</li>
<li>Type 2: "?": This means that you should print the number of nodes that you have visited at least once.</li>
</ul>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>T</b>, which denotes the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two integers: <b>N</b> and <b>Q</b>, which denote the height of the tree and the number of the queries respectively.</li>
<li><b>Q</b> lines follow, which are the descriptions of the queries. Each line will either be a "! <b>C</b>" or a "?" (without quotes).</li>
</ul>

<h3>Output</h3>
<p>For each query of Type 2, you have to print one integer in a new line</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b> T </b> ≤ 10</li>
<li>1 ≤ <b> N, Q </b> ≤  10<sup>5</sup></li>
<li> 0 ≤ <b> C </b> < <b> N </b> </li>
<li>The sum of <b>N</b> over all testcases does not exceed 10<sup>5</sup>, and sum of <b>Q</b> over all testcases does not exceed 10<sup>5</sup></li> 

</ul>


<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (30 points) : The sum of <b>N</b> over all testcases does not exceed 2000, and sum of <b>Q</b> over all testcases does not exceed 2000</li> 
<li><b>Subtask 2</b> (70 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>:
1
2 9
! 0
?
! 1
?
! 0
?
! 0
! 0
? 

<b>Output</b>:
3
5
6
7
</pre>

<h3>Explanation</h3>
<p>Let us label the tree nodes as follows:</p>

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/AUG17/puush-linux%2B%282017-08-04%2Bat%2B02.32.03%29.png" height="150"/>
<p></p>

<p>The node 0 corresponds to the root.</p>
<p>At the beginning, <b>X</b> = 0, and then after the first query, <b>X</b> becomes 0 + 2<sup>0</sup> mod 4 = 1 = (01)<sub>2</sub>. The path 0 - 1 - 4 is traveled along.</p>
<p>The next query asks for the number of visited nodes, which is 3.</p>
<p>In the third query, <b>X</b> becomes 1 + 2<sup>1</sup> mod 4 = 3 = (11)<sub>2</sub>. The path 0 - 2 - 6 is traveled along.</p>
<p>The fourth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6}. Hence the answer is 5.</p>
<p>In the fifth query, <b>X</b> becomes 3 + 2<sup>0</sup> mod 4 = 0 = (00)<sub>2</sub>. The path 0 - 1 - 3 is traveled along.</p>
<p>The sixth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6, 3}. Hence the answer is 6.</p>
<p>In the seventh query, <b>X</b> becomes 0 + 2<sup>0</sup> mod 4 = 1 = (01)<sub>2</sub>. The path 0 - 1 - 4 is traveled along.</p>
<p>In the eight query, <b>X</b> becomes 1 + 2<sup>0</sup> mod 4 = 2 = (10)<sub>2</sub>. The path 0 - 2 - 5 is traveled along.</p>
<p>The ninth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6, 3, 5}. Hence the answer is 7.</p>
