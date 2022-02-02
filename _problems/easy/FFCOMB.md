---
{"category_name":"easy","problem_code":"FFCOMB","problem_name":"FastFood Combos","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"mgch","date_added":"5-10-2016","tags":{"0":"bits","1":"dynamic","2":"ltime41","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/FFCOMB","time":{"view_start_date":1477760400,"submit_start_date":1477760400,"visible_start_date":1477760400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/mandarin/FFCOMB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/russian/FFCOMB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/vietnamese/FFCOMB.pdf">Vietnamese</a> as well.</h3>

<p>Sometimes Sergey visits fast food restaurants. Today he is going to visit the one called PizzaKing.</p>
<p>Sergey wants to buy <b>N</b> meals, which he had enumerated by integers from <b>1</b> to <b>N</b>. He knows that the meal <b>i</b> costs <b>C<sub>i</sub></b> rubles. He also knows that there are <b>M</b> meal sets in the restaurant.</p>
<p>The meal set is basically a set of meals, where you pay <b>P<sub>j</sub></b> burles and get <b>Q<sub>j</sub></b> meals - <b>A<sub>j, 1</sub></b>, <b>A<sub>j, 2</sub></b>, ..., <b>A<sub>j, Q<sub>j</sub></sub></b>.</p>
<p>Sergey has noticed that sometimes he can save money by buying the meals in the meal sets instead of buying each one separately. And now he is curious about what is the smallest amount of rubles he needs to spend to have at least one portion of each of the meals.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a pair of integer numbers <b>N</b> and <b>M</b> denoting the number of meals and the number of the meal sets.</p> 
<p>The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b> denoting the costs of the meals, bought separately.</p>

<p>Each of the following <b>M</b> lines starts with a pair of integer numbers <b>P<sub>i</sub></b> and <b>Q<sub>i</sub></b>, denoting the cost of the meal set and the number of meals in it, followed with the integer numbers <b>A<sub>i, 1</sub> A<sub>i, 2</sub>, ..., A<sub>i, Q<sub>i</sub></sub></b> denoting the meal numbers.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimal total amount of money Sergey needs to spend in order to have at least one portion of each meal.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ P<sub>i</sub>, C<sub>i</sub> ≤ 10<sup>6</sup></b></li>
<li><b>1 ≤ M ≤ min{2<sup>N</sup>, 2 × 100000}</b></li>
<li>No meal appears in the set twice or more times.</li>
<li>Subtask 1 (16 points): <b>1 ≤ T ≤ 10<sup>3</sup></b>, <b>1 ≤ N ≤ 8</b></li>
<li>Subtask 2 (23 points): For each test file, either <b>1 ≤ T ≤ 10</b>, <b>1 ≤ N ≤ 12</b> or the constraints for Subtask <b>1</b> are held.</li>
<li>Subtask 3 (61 points): For each test file, either <b>T = 1</b>, <b>1 ≤ N ≤ 18</b> or the constraints for Subtask <b>1</b> or <b>2</b> are held.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
3 3
3 5 6
11 3 1 2 3
5 2 1 2
5 2 1 3</tt>

<b>Output:</b>
<tt>10</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> If Sergey buys all the meals separately, it would cost him <b>3 + 5 + 6 = 14</b> rubles. He can buy all of them at once by buying the first meal set, which costs for <b>11</b> rubles, but the optimal strategy would be either to buy the second and the third meal set, thus, paying <b>5 + 5 = 10</b> rubles, or to buy the third meal set and the second meal separately by paying the same amount of <b>10</b> rubles.</p>