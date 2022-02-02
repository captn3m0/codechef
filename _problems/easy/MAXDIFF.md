---
{"category_name":"easy","problem_code":"MAXDIFF","problem_name":"Maximum Weight Difference","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"20-02-2013","tags":{"0":"april13","1":"cakewalk","2":"greedy","3":"sorting","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/MAXDIFF","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has gone shopping with his 5-year old son. They have bought <b>N</b> items so far. The items are numbered from <b>1</b> to <b>N</b>, and the item <b>i</b> weighs <b>W<sub>i</sub></b> grams.
<p>Chef's son insists on helping his father in carrying the items. He wants his dad to give him a few items. Chef does not want to burden his son. But he won't stop bothering him unless he is given a few items to carry. So Chef decides to give him some items. Obviously, Chef wants to give the kid less weight to carry.
<p>However, his son is a smart kid. To avoid being given the bare minimum weight to carry, he suggests that the items are split into two groups, and one group contains exactly <b>K</b> items. Then Chef will carry the heavier group, and his son will carry the other group.
<p>Help the Chef in deciding which items should the son take. Your task will be simple. Tell the Chef the maximum possible difference between the weight carried by him and the weight carried by the kid.

<h3>Input:</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. The first line of each test contains two space-separated integers <b>N</b> and <b>K</b>. The next line contains <b>N</b> space-separated integers <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b>.

<h3>Output:</h3>
<p>For each test case, output the maximum possible difference between the weights carried by both in grams.

<h3>Constraints:</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ K &lt; N ≤ 100</b></li>
<li><b>1 ≤ W<sub>i</sub> ≤ 100000 (10<sup>5</sup>)</b></li>
</ul>

<h3>Example:</h3>

<pre>
<b>Input:</b>
2
5 2
8 4 5 2 10
8 3
1 1 1 1 1 1 1 1

<b>Output:</b>
17
2
</pre>

<h3>Explanation:</h3>
<p><b>Case #1:</b> The optimal way is that Chef gives his son <b>K=2</b> items with weights <b>2</b> and <b>4</b>. Chef carries the rest of the items himself. Thus the difference is: <b>(8+5+10) − (4+2) = 23 − 6 = 17</b>.
<p><b>Case #2:</b> Chef gives his son <b>3</b> items and he carries <b>5</b> items himself.
