---
{"category_name":"medium","problem_code":"TYTACTIC","problem_name":"Tywins Tactics","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pragrame","problem_tester":"tuananh93","date_added":"7-06-2013","tags":{"0":"cook35","1":"dfs","2":"pragrame","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/TYTACTIC","time":{"view_start_date":1372012200,"submit_start_date":1372012200,"visible_start_date":1414769400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Tywin Lannister is a tactical genius. At the heart of his tactical skills, is the way he has organized his armies, and the way he is able to estimate his soldiers' skill-levels, thus helping him make crucial decisions as to whom to dispatch to which areas of the war.
</p>
<p>
His army is organized in the form of a hierarchy - indeed it is a tree, with him as the root. We say "<b>A has immediate superior B</b>" if <b>A</b> reports directly to <b>B</b>. We further say "<b>A has superior B</b>" if there is a chain of soldiers starting with <b>A</b>, ending with <b>B</b>, and where each soldier reports directly to the next soldier of the chain. Further, each soldier is assigned an initial <b>skill-level</b> based on prior experience and battle proficiency.
</p>
<p>
In order for Tywin to decide whom to send to which battle, he has the following scheme: He chooses a particular soldier <b>S</b> as the leader of his temporary 'regiment', and sends in to battle, <b>S</b> as well as all the soldiers that have <b>S</b> as one of their superiors. He estimates the skill level of the regiment as the total skill level of all the soldiers under <b>S</b> (denoted by query "<b>Q S</b>").
</p>
<p>
After a battle, he may want to update the skill levels of some soldiers. If he wants to update the skill level of soldier <b>S</b> to value <b>x</b>, it is denoted by the query "<b>U S x</b>".
</p>
<p>
You are given the structure of the army, whose size is <b>N</b>, the initial skill levels of all the individual soldiers, as well the number of queries <b>M</b>. For each query of the type "<b>Q S</b>", report the sum of skill-levels of all the soldiers who have <b>S</b> as their superior.
</p>
<p>
<b>Note:</b> The soldiers are numbered 1 to <b>N</b>, and Tywin is given the number <b>1</b>.
</p>
<h3>Input</h3>
<p>
The first line consists of the integers <b>N</b> and <b>M</b>, denoting the number of soldiers and the number of queries.<br /><br />
This is followed by a single line consisting of <b>N</b> nonnegative values - the <b>skill levels of the N soldiers</b>.<br /><br />
This is then followed by <b>N-1</b> lines consisting of pairs of integers <b>(u, v)</b>, denoting that either <b>u is an immediate superior of v, or vice-versa</b>.<br /><br />
Finally you are given the <b>M</b> queries, of either the form "<b>U S x</b>" or "<b>Q S</b>".</p>
<h3>Output</h3>
<p>
For each "<b>Q S</b>" query, output the sum of skill values of all the soldiers under <b>S</b>.
</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b> </li>
<li> All skill values given with be in the range [<b>0</b>, <b>20,000</b>] </li>
<li> <b>1</b> ≤ <b>S</b> ≤ <b>N</b> for all queries </li>
<li> All soldiers will have soldier <b>1</b> (Tywin) as their superior </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 8
7 2 0 5 8
1 2
2 3
2 4
1 5
Q 1
Q 2
U 2 4
Q 1
Q 2
U 5 3
Q 1
Q 2

<b>Output:</b>
22
7
24
9
19
9
</pre>