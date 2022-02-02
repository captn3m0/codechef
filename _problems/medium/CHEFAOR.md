---
{"category_name":"medium","problem_code":"CHEFAOR","problem_name":"Chef and Bitwise OR Operation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 10","source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"13-06-2015","tags":{"0":"dynamic","1":"easy","2":"furko","3":"ltime25"},"editorial_url":"http://discuss.codechef.com/problems/CHEFAOR","time":{"view_start_date":1435480200,"submit_start_date":1435480200,"visible_start_date":1435480200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFAOR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/russian/CHEFAOR.pdf">Russian</a>.</h3>
<p>Chef studies very well in his University. There is only one professor who doesn't want to give him the highest grade, <b>A</b>. Chef has had a long argument with him, and eventually they agreed, that if Chef solves an algorithmic problem, he gets the highest grade. After looking at the problem, he realized he can't solve it. Once again, he approached Codechef admins for help, and once again we decided to put it off and pass on the task to you. Please, help him (and us)!</p>
<h3>Problem description</h3>
<p>You are given an array <b>A</b> of integers and an integer <b>K</b>. Your goal is  to divide the array into <b>K</b> consecutive disjoint non-empty groups, so that any array element belongs to <b>exactly one</b> group.</p>
<p>Each group can be specified by two integers <b>L</b> and <b>R</b> (<b>L ≤ R</b>) with the meaning that the group contains all the elements from the <b>L</b><sup>th</sup> to the <b>R</b><sup>th</sup> one (both inclusive) in the given array. The <i>cost</i> of such a group equals to the value of <b>bitwise OR</b> of all elements in the group. </p>
<p>The cost of array for some particular group division equals to the sum of costs for all the groups. You have to find the maximal achievable cost of the given array. </p>
<p>You can read more about <b>bitwise OR</b> operation <a href="https://en.wikipedia.org/wiki/Bitwise_operation#OR">here</a></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>K</b> denoting the number of elements in the array and number of groups, respectively.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. </p>
<h3>Output</h3>
<p>For each test case, output a single line, containing the maximal achievable cost of the array.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>2<sup>30</sup></b></li>
<li>Subtask 1(15 points): <b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li>Subtask 2(35 points): <b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li>Subtask 3(50 points): <b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li>The time limit for the first and the second subtask is <b>1 second</b>. The time limit for the third subtask is <b>10 seconds</b>.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>4
3 2
1 2 2
4 3
1 2 3 4
2 2 
1 2
11 4
66 152 7 89 42 28 222 69 10 54 99</tt>

<b>Output:</b>
<tt>5
10
3
704</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>. The optimal group division is the following one: put the first two numbers to the first group, and the next one into the second. This way, you will obtain the cost of the array equal to <tt>(1 OR 2) + 2 = 3 + 2 = 5</tt>.</p>
<p><b>Example case 2</b>. The first two integers should be in the first group, the third one should be in the second group, the fourth one should be in the third group. This way, we will obtain a cost of an array equal to <tt>(1 OR 2) + 3 + 4 = 3 + 3 + 4 = 10</tt>.</p>
<p><b>Example case 3</b>. Each number will be in its' own group. So, we obtain a cost of <tt>1 + 2 = 3</tt>.</p>
<p><b>Example case 4</b>. Try to figure out yourself.</p>
