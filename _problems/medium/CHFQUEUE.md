---
{"category_name":"medium","problem_code":"CHFQUEUE","problem_name":"Chefs in Queue","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vineetpaliwal","problem_tester":null,"date_added":"16-10-2013","tags":{"0":"arithmetic","1":"cakewalk","2":"ltime05","3":"modulo","4":"multiplication","5":"queue","6":"stack","7":"vineetpaliwal"},"editorial_url":"http://discuss.codechef.com/problems/CHFQUEUE","time":{"view_start_date":1382862600,"submit_start_date":1382862600,"visible_start_date":1382862600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CHFQUEUE.pdf">here</a></h3>
<p>All the chefs (except the Head Chef) are standing in queue to submit their bills. The chefs have different seniority. In all there are <b>N</b> chefs of <b>K</b> different seniority levels. Head Chef gets an interesting thought past his head. He begins to think what if every chef starting from the end of the queue begins to delegate his job of submitting bills to a chef least ahead of him in the queue but junior to him. The Head Chef's fearfulness of this scenario is <b>f = i2 - i1 + 1</b>, where <b>i1</b> is the index of chef in queue and <b>i2</b> is the index of the junior chef. Head Chef's total fearfulness of chaos is the product of all the fearfulness in Head Chef's mind. Note if a chef has no junior ahead of him/her in the queue then Head Chef's fearfulness for this Chef is <b>1</b>. You are required to find the Head Chef's total fearfulness given an arrangement of Chef's in a queue. Since this number can be quite large output it modulo <b>1000000007</b>. </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line contains two integers <b>N</b> and <b> K </b> denoting the number of chefs and the number of seniority levels. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the seniority of chefs in the queue. <b>A<sub>N</sub></b> denotes front of the queue and <b>A<sub>1</sub></b> denotes end of the queue. </li>
</ul>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>Output a single integer denoting the total fearfulness of the Head Chef. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000000</b></li>
<li><b>1</b> ≤ <b>a_i</b> ≤ <b>1000000</b></li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 1 2

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Only the second chef has a junior in front of him and the fearfulness he causes to the head chef is 3 - 2 + 1 = 2. Every other chef causes a fearfulness of 1 for the Head Chef.</p>
<h3>Scoring</h3>
<p><b>Subtask 1 : N &lt;= 5000 ( 10 points)</b> <br /><br />
<b> Subtask 2 : K = 2 ( 10 points) </b> <br /><br />
<b> Subtask 3 : K &lt;= 10 ( 20 points ) </b> <br /><br />
<b> Subtask 4 : See Constraints ( 60 points ) </b>
</p>
