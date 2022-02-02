---
{"category_name":"medium","problem_code":"CHGIFT1","problem_name":"Chef and Gift","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":" balajiganapath","date_added":"6-09-2013","tags":{"0":"dynamic","1":"easy","2":"furko","3":"ltime04"},"editorial_url":"http://discuss.codechef.com/problems/CHGIFT1","time":{"view_start_date":1380445200,"submit_start_date":1380445200,"visible_start_date":1380445200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>  Chef likes cooking. But more than that, he likes to give gifts. And now he wants to give his girlfriend an unforgettable gift. But unfortunately he forgot the password to the safe where the money he saved for the gift is kept.
</p>
<p>But he knows how to hack the safe. To do this, you need to correctly answer questions asked by the embedded computer. The computer is very strange, and asks special questions, sometimes it can ask about <b>10000</b> question (really weird). Because of this, Chef wants you to write a program that will help him to crack the safe.
</p>
<p>The questions are different, but there is only one type of question. Several numbers are given and between them one of three characters: <b>*, +, -</b> can be inserted. Note that in this case there is no priority for the operators, that is, if + is the before multiplication, you must first execute the operation of addition, and then multiplication (1 - 2 * 3 must be interpreted as (1 - 2) * 3 = -3 and not -5). The computer asks the minimum possible value of any valid expression.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The first line of each test case contains a positive integer <b>N</b>. The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the expression without the operators.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimal value of given expression. </p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ N ≤ 10</b></li>
<li><b>-9 ≤ A<sub>i</sub> ≤ 9</b> </li>
<p>.
</p></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
1
9

<b>Output:</b>
-4
9
</pre><p> </p>
<h3>Explanation</h3>
<p>Example case 1:  <b>1-2-3 = -4</b></p>
<h3> Scoring </h3>
<p>Subtask 1 (15 points): <b> 1 ≤ T ≤ 10 </b> <br /><br />
Subtask 2 (10 points): <b> 1 ≤ N ≤ 3 </b>   <br /><br />
Subtask 3 (20 points): <b> 1 ≤ A<sub>i</sub> ≤ 5</b>. <br /><br />
Subtask 4 (35 points): <b>1 ≤ T  ≤ 10<sup>4</sup> </b> <br /><br />
Subtask 5 (20 points):  Look at constraints.         </p>
