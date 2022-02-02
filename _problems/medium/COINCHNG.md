---
{"category_name":"medium","problem_code":"COINCHNG","problem_name":"Paying optimally","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"0.3 - 3","source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":"Rubanenko‎","date_added":"12-07-2013","tags":{"0":"binary","1":"greedy","2":"ltime02","3":"medium","4":"utkarsh_lath"},"editorial_url":"http://discuss.codechef.com/problems/COINCHNG","time":{"view_start_date":1375002000,"submit_start_date":1375002000,"visible_start_date":1375002000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The currency of Dholakpur is pretty awesome. There notes have values <b> 1, C, C<sup>2</sup>, C<sup>3</sup> ... </b>. The sequence goes on till infinity, so notes have unbounded values.</p>
<p>
Little Bheem is a resident of Dholakpur and runs a Laddu shop. He always keeps infinite number of notes of each value with him, but pays using minimum number of notes. For example, if <b>C</b> = 5 and he has to pay 32 rupees, he will pay using one note of value 25, one note of value 5, and two notes of value 1. He cannot pay 32 rupees with fewer than four notes.</p>
<p>
Bheem is wondering what is <b>K<sup>th</sup></b> smallest amount which, if paid using fewest possible notes, would require exactly <b>S</b> notes.</p>
<p><h3>Input</h3>
</p><p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test is descried by exactly one lines, containing three space separated integers <b>C</b>, <b>S</b> and <b>K</b>.</p>
<p><h3>Output</h3>
</p><p>For each test case, output a separate line containing the required answer.</p>
<p><h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100 </li>
<li>2 ≤ <b>C</b> ≤ 50 </li>
<li>0 ≤ <b>S</b> ≤ 500 </li>
<li>1 ≤ <b>K</b> ≤ 10<sup>18</sup> </li>
<li>The answer will be at most 10<sup>18</sup></li>
</ul>
<h3>Subtask 1 (20 points)</h3>
</p><p><b>K = 1</b><br/><br />
the answer will be at most 40000000<br/><br />
Time limit is 3 seconds.</br/></br/></p>
<h3>Subtask 2 (20 points)</h3>
<p><b>C = 2</b><br/><br />
the answer will be at most 40000000<br/><br />
Time limit is 3 seconds.</br/></br/></p>
<h3>Subtask 3 (20 points)</h3>
<p><b>K</b> is small. Formally, <b>(K-1)*(C-1) ≤ S</b><br/><br />
the answer will be at most 40000000<br/><br />
Time limit is 3 seconds.</br/></br/></p>
<h3>Subtask 4 (20 points): </h3>
<p>the answer will be at most 40000000<br/><br />
Time limit is 3 seconds.</br/></p>
<h3>Subtask 5 (20 points): </h3>
<p><i> No special constraints </i><br/><br />
Time limit is 0.3 seconds.</br/></p>
<p><h3>Sample Input</h3>
</p><p>3<br/><br />
5 1 3<br/><br />
4 3 5<br/><br />
5 4 4<br/></br/></br/></br/></br/></p>
<p><h3>Sample Output</h3>
</p><p>25<br/><br />
18<br/><br />
16<br/></br/></br/></br/></p>
<h3>Explanation</h3>
<p>For test case# 1, all the amounts which require exactly 1 note are: 1, 5, 25, 125 ...<br/><br />
For test case# 2, all the amounts which require exactly 3 notes are: 3, 6, 9, 12, 18 ... <br/><br />
For test case# 3, all the amounts which require exactly 4 notes are: 4, 8, 12, 16 ... <br/></br/></br/></br/></p>
