---
{"category_name":"medium","problem_code":"WSC","problem_name":"A wolf, a sheep and cabbage","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"white_king","date_added":"10-08-2014","tags":{"0":"cakewalk","1":"construction","2":"language","3":"ltime18","4":"programming","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/WSC","time":{"view_start_date":1417336200,"submit_start_date":1417336200,"visible_start_date":1417336200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/WSC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/WSC.pdf">Russian</a>.</h3>
<p>The following is an easy game that the setter of this problem played when he was 8:</p>
<p><i>A boatman, a wolf, a sheep, and a cabbage are on the bank of a river. They have a small boat that is capable of carrying the boatman and at most one other animal/item with him. However, if left alone by the boatman, the wolf can eat the sheep, and the sheep can eat the cabbage. How can all four be moved safely to the opposite bank of the river?</i></p>
<p><a href="http://coolmath-games.com/Logic-wolfsheepcabbage/index.html">Here</a> is a nice visualization of the whole process in the original game. Disclaimer: writers, testers and CodeChef are not related to this link.</p>
<p>This leads to a more general problem. If there are other groups of animals/items with the boatman, is it possible to move them all to the opposite bank of the river in such a way that nobody/nothing gets eaten?</p>
<p>We will give you the number of animals/items (not including the boatman). Moreover, we will give you all a list of pairs of the form "<b>X Y</b>" where the <b>X</b>-th animal/item will be eaten by the <b>Y</b>-th one if they are both on the opposite bank to the boatman.</p>
<p>You are to determine <b>whether it is possible</b> to achieve the task or not.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>The first line of each test contains two space separated integers <b>N</b> and <b>M</b> - the number of animals/items not including the boatman, and the number of relations of the form "<b>X</b> will be eaten by <b>Y</b>", respectively.</p>
<p>The following <b>M</b> lines contain pairs of the form <b>X Y</b> with the meaning that the <b>X</b>-th animal/item will be eaten by the <b>Y</b>-th one if they are both on the opposite bank to the boatman.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing either "YES" or "NO" - the answer to the question "Is it possible to move them all to the opposite bank of the river in such a way that nobody/nothing gets eaten?".</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b></li>
<li>Subtask 1: <b>1</b> ≤ <b>N</b> ≤ <b>5</b>,  <b>0</b> ≤ <b>M</b> ≤ <b>10</b> - 73 points.</li>
<li>Subtask 2: <b>1</b> ≤ <b>N</b> ≤ <b>10</b>,  <b>0</b> ≤ <b>M</b> ≤ <b>20</b> - 27 points.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 2
1 2
2 3
3 3
1 2
2 3
1 3

<b>Output:</b>
YES
NO
</pre>
<h3>Explanation</h3>
<p>The first example is the original version of the problem.</p>
<p>The second example would have a solution if a boat could seat an additional animal/item.</p>
