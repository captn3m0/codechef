---
{"category_name":"school","problem_code":"CCBTS03","problem_name":"Chef and Laddus For Children","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"17-11-2017","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCBTS03","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p>Chef has <b>N</b> laddus, <b>i</b>-th of which has a size <b>s<sub>i</sub></b>. There are no two laddues with equal size, i.e. all the laddus have different sizes.</p>

<p>There are <b>K</b> children that came to meet Chef today. Chef wants to give a single laddu to each of these <b>K</b> children. Also, he wants to minimize the difference in the sizes which the children get, i.e. he wants to minimize the maximum difference in the sizes of the laddus distributed. This is because children feel jealous of each other if the other one has a bigger laddu that him/her.</p>

<p>In other words, find a subset of size <b>K</b> which minimizes the value of <i>max_element of the subset - min_element of the subset</i>, and output this minimum difference.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>N, K</b>.</p>
<p>The second line of each test case contains <b>N</b> space separated denoting the array <b>s</b></p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum difference in the sizes of the laddus distributed to the children.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ K ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ s<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
4 1
3 4 2 5
5 2
1 5 3 7 9
6 3
1 12 7 9 5 17

<b>Output</b>
0
2
4
</pre>

<h3>Explanation</h3>
<p><b>Example 1.</b> There is only one child, so Chef can give him any laddu. The difference between maximum and minimum size of the laddu will be zero.</p>

<p><b>Example 2.</b> There are two children now. Chef can give one child a laddu of size 5 and other of 7. The difference between the maximum and minimum size of the laddu will is 2. It's impossible for Chef to get lower difference between the sizes of laddus.</p>

<p><b>Example 3.</b> There are three children now. Chef can give one child a laddu of size 5 and other of 7, and the remaining one as 9. The difference between the maximum and minimum size of the laddu will is 4. This is the minimum possible difference between the sizes of laddu that Chef can get.</p>


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>