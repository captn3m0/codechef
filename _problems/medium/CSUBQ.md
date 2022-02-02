---
{"category_name":"medium","problem_code":"CSUBQ","problem_name":"Chef and Subarray Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_hard123","problem_tester":null,"date_added":"18-10-2017","tags":{"0":"code_hard123","1":"medium","2":"nov17","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/CSUBQ","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/CSUBQ.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/CSUBQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/CSUBQ.pdf">Vietnamese</a> as well.</h3>

<p> Chef has an array <b>A</b> consisting of <b>N</b> non-negative integers. Initially, all the elements are zero. Assume 1-based indexing. Chef is given two positive integers <b>L</b> and <b>R</b>. <b>(L <= R)</b> Chef has to execute <b>Q</b> number of queries on the array <b>A</b>. These queries can be of the following two types:
<br></br> 

<b>1 x y (1 ≤ x ≤ n)</b> - Replace the value of <b>xth</b> array element by <b>y</b>.
<br> </br>
<b>2 l r (1 ≤ l ≤ r ≤ n)</b> - Return the number of subarrays <b>[a , b]</b> that lies in subarray <b>[l , r]</b> such that the value of the maximum array element in that subarray is atleast <b>L</b> and atmost <b>R</b>.
<br> </br>
         (A subarray <b>[a , b]</b> lies in a subarray <b>[l , r]</b> if and only if <b>a >= l</b> and <b>b <= r</b>)
<br> </br>
Since, Chef couldn't solve this task, can you please help him solve this task?
</p>



<h3>Input</h3>
<p>The first line contains four space separated positive integers <b>N, Q, L</b> and <b>R</b> denoting the total number of elements in an array, total number of queries, value of <b>L</b>, and value of <b>R</b> respectively.  
<br>Each of the next <b>Q</b> lines contains one of the two queries described above.</p>


<h3>Output</h3>
<p>For each query of type 2, print the required answer in a new line.</p>


<h3>Constraints</h3>
<b><p>1 ≤ N, Q ≤ 5 * 10^5</p></b>
<b><p>1 ≤ L ≤ R ≤ 10^9 </p></b>
<b><p>1 ≤ l ≤ r ≤ N </p></b>
<b><p>1 ≤ x ≤ N </p></b>
<b><p>1 ≤ y ≤ 10^9</p></b>

<h3>Subtasks</h3>

<b>Subtask #1</b> (10 points) : 1 ≤ N , Q ≤ 100 <br></br>
<b>Subtask #2</b> (15 points) : 1 ≤ N , Q ≤ 5000 <br></br>
<b>Subtask #3</b> (27 points) : 1 ≤ Q ≤ 10^4 <br></br> 
<b>Subtask #4</b> (48 points) : Original Constraints <br></br>

<h3>Example</h3>
<pre><b>Input:</b>

5 6 1 10
1 1 2
2 1 5 
1 3 11
1 4 3
2 3 5
2 1 5

<b>Output:</b>

5
2
4
</pre>
<br>
<h3>Explanation</h3>
<p><b>Query 1.</b><br></br>
 A = {0, 0, 0, 0, 0} 
<br></br>
After replacing value of 1st element by 2,<br></br>
A = {2, 0, 0, 0, 0} </p>

<p><b>Query 2.</b><br></br>
A = {2, 0, 0, 0, 0}
<br></br>
All the subarrays that lies in a subarray [1 , 5] whose maximum value is atleast 1 and atmost 10 are -<br></br>
 [1 , 1], [1 , 2], [1 , 3], [1 , 4] and [1 , 5]. Thus the answer is 5.
</p>


<p><b>Query 3.</b><br></br>
A = {2, 0, 0, 0, 0}<br></br>
After replacing value of 3rd element by 11, <br></br>
A = {2, 0, 11, 0, 0}
 </p>

<p><b>Query 4.</b><br></br>
A = {2, 0, 11, 0, 0} <br> </br>
After replacing value of 4th element by 3, <br></br>
A = {2, 0, 11, 3, 0}
</p>

<p><b>Query 5.</b><br></br>
A = {2, 0, 11, 3, 0}<br></br>
All the subarrays that lies in a subarray [3 , 5] whose maximum value is atleast 1 and atmost 10 are -<br></br>
 [4 , 4] and [4 , 5]. Thus the answer is 2.

</p>


<p><b>Query 6.</b><br></br>
A = {2, 0, 11, 3, 0}<br></br>
All the subarrays that lies in a subarray [1 , 5] whose maximum value is atleast 1 and atmost 10 are -<br></br>
 [1 , 1], [1 , 2], [4 , 4] and [4 , 5]. Thus the answer is 4.

</p>