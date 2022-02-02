---
{"category_name":"easy","problem_code":"COOK82B","problem_name":"Balanced Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":"kingofnumbers","date_added":"20-05-2017","tags":{"0":"cook82","1":"deadwing97","2":"easy","3":"prime","4":"simple"},"time":{"view_start_date":1495391400,"submit_start_date":1495391400,"visible_start_date":1495391400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/mandarin/COOK82B.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/russian/COOK82B.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82B.pdf">vietnamese</a> as well.</h3>

<p>Hussain really likes playing with arrays. Today he challenged his friend Farah to beat a game he has invented recently. 
</p>

<p>
Hussain will give Farah an array of <b>N</b> positive integers. Farah is allowed to do this move multiple times:
</p>

<p>
Farah can choose three integers (<b>i , j , k</b>) such that <b>k</b> is a positive integer, 1 ≤ <b>i,j</b> ≤ <b>N</b>, and <b>A[i]</b> is divisible by <b>k</b>. Then she should do the following :</p>

<p>
<b>A[i]</b> = <b>A[i]</b> / <b>k</b>
</p>

<p>
<b>A[j]</b> = <b>A[j]</b> * <b>k</b>
</p>

<p>That is, she should multiply <b>A[j]</b> by <b>k</b>, and divide <b>A[i]</b> by <b>k</b>.</p>

<p>
Farah must make all the elements of this array equal, by only performing above move, as many times as she wants.</p> 

<p>Most of the times, it would be impossible to achieve an array of equal elements. So Farah is allowed to insert at most one element. You can prove that she can always insert an element, so that after the insertion, it becomes possible to make the array elements equal (including the new element), through a series of moves. You have to help Farah find the minimum positive integer that she has to insert into the array so that it's possible for her to make all elements equal after inserting this number.or just tell her that there is no need to insert an additional number.
</p>


<h3>Input</h3>
<p>The first line contains a single integer, <b>N</b>, the number of elements in the array. </p>
<p>
The second line contains <b>N</b> positive space separated integers.</p>


<h3>Output</h3>
<p>In case there is no need to insert an additional number output "justdoit" (without quotations). Otherwise, output the smallest positive integer that Farah must insert into the array. Since this number can be large, you're asked to print the remainder of its division by <b>10<sup>9</sup>+7</b></p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 5000</li> 
<li>1 ≤ <b>A[i]</b> < 10<sup>9</sup></li> 
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
3
4 6 14

<b>Output:</b>
9261
</pre>


<h3>Example 2</h3>
<pre><b>Input:</b>
4
25 15 5 27

<b>Output:</b>
justdoit
</pre>

<h3>Explanation</h3>
<p>In the first Example, after inserting 9261, the array becomes {4, 6, 14, 9261}. We will show a series of moves through which Farah can make the array elements equal. We follow 1-based indexing.</p>
<ul>
<li>(1, 4, 2). The array becomes  {4/2, 6, 14, 9261*2} =  {2, 6, 14, 18522}</li>
<li>(4, 1, 21). The array becomes  {2*21, 6, 14, 18522/21} =  {42, 6, 14, 882}</li>
<li>(4, 3, 3). The array becomes  {42, 6, 14*3, 882/3} =  {42, 6, 42, 294}</li>
<li>(4, 2, 7). The array becomes  {42, 6*7, 42, 294/7} =  {42, 42, 42, 42}</li>
</ul>
<p></p>
<p>There is no smaller positive integer which be inserted to get an equal array. Hence the answer is 9261.</p>