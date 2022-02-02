---
{"category_name":"medium","problem_code":"AMR15C","problem_name":"Kalakeya","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"suh_ash2008","problem_tester":null,"date_added":"11-10-2015","tags":{"0":"acmamr15","1":"constructive","2":"greedy","3":"implementation","4":"medium","5":"suh_ash2008"},"editorial_url":"http://discuss.codechef.com/problems/AMR15C","time":{"view_start_date":1453401000,"submit_start_date":1453401000,"visible_start_date":1453401000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The <b>Kalakeyas</b> were a powerful, ferocious and cruel clan of Danavas. They were known to be really strong and they did not have any war strategy. They would just attack the enemy randomly and overpower them with sheer number of soldiers. However, we all know that Baahubali and Bhallaladeva defeated the Kalakeyas by following the <b>Thrishul</b> strategy, and successfully defended their kingdom Maahishmati. We also know that Baahubali was very smart, and the truth is that he predicted how the Kalakeyas would attack and  devised a counter strategy for the same, the night before the war. This is what he found:</p>
<p>The Kalakeyas had <b>N</b> forts, numbered <b>1</b> to <b>N</b> and Baahubali had <b>N</b> soldiers, numbered <b>1</b> to <b>N</b>. Baahubali discovered that he can permute his soldiers in any way to get a permutation of <b>1</b> to <b>N</b> => <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>N</sub></b>. He would then send his soldiers to attack the forts in the following way: soldier <b>P<sub>1</sub></b> attacks <b>fort 1</b>, soldier <b>P<sub>2</sub></b> attacks <b>fort 2</b>, ..., soldier <b>P<sub>N</sub></b> attacks <b>fort N</b>. It is easy to note that each soldier attacks exactly one fort and no two soldiers attack the same fort. Baahubali also got to know about a secret key of the Kalakeyas, which is an integer <b>K</b>. A soldier <b>X</b> can destroy a fort <b>Y</b>, iff <b>abs(X - Y) >= K</b>. For more details on the <b>abs()</b> function, check <a href="https://en.wikipedia.org/wiki/Absolute_value">here</a>.</p>
<p>
Your task is to determine whether Baahubali's soldiers can be permuted in some way, such that all forts can be destroyed. In other words, for a permutation <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>N</sub></b>, Baahubali's soldiers can destroy all the forts iff <b>abs(P<sub>i</sub> - i) >= K,</b> for all <b>1 &lt;= i &lt;= N</b>. If this is possible, you are also required to output the <b>lexicographically</b> smallest such permutation. If it is not possible, output <b>-1</b>.
</p>
<p><b>Note</b>: A permutation <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> is said to be lexicographically smaller than a permutation <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b>, if and only if at the first <b>i</b> where <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> differ, <b>A<sub>i</sub></b> comes before <b>B<sub>i</sub></b>. You can refer <a href="https://en.wikipedia.org/wiki/Lexicographical_order">here</a> for a more detailed definition of lexicographic ordering.
</p>
<h3>Input</h3>
<p>The first line of input consists of a single integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain two space separated integers <b>N</b> and <b>K</b> denoting the values mentioned in the statement above.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> space separated integers (which should be a permutation of <b>[1..N]</b>, if Baahubali's soldiers can break all the forts. If it is not possible to break all the forts, output "-1" (quotes for clarity).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>The sum of <b>N</b> over all test cases in a single test file will not exceed <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
3 0
3 1

<b>Output:</b>
-1
1 2 3
2 3 1
</pre><h3>Explanation</h3>
<p><b>For the first test case</b>, <b>N = 2</b> and <b>K = 2</b>. It is impossible to permute <b>[1, 2]</b> in any way such that <b>abs(P[1]-1) >= 2</b> and <b>abs(P[2]-2) >= 2</b>. Hence, output is <b>-1</b>.</p>
<p><b>For the second test case</b>, <b>N = 3</b> and <b>K = 0</b>. We can just set <b>P[i] = i</b>, and hence the answer is <b>1 2 3</b></p>
<p><b>For the third case</b>, the valid permutations are <b>[2, 3, 1]</b> and <b>[3, 1, 2]</b>. The answer is <b>[2, 3, 1]</b> since it is lexicographically smaller than <b>[3, 1, 2]</b>.</p>
