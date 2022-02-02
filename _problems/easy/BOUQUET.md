---
{"category_name":"easy","problem_code":"BOUQUET","problem_name":"The Largest Bouquet","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"mgch","date_added":"14-10-2016","tags":{"0":"cakewalk","1":"ltime41","2":"xcwgf666"},"time":{"view_start_date":1477760400,"submit_start_date":1477760400,"visible_start_date":1477760400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/mandarin/BOUQUET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/russian/BOUQUET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/vietnamese/BOUQUET.pdf">Vietnamese</a> as well.</h3>

<p>It's autumn now, the time of the leaf fall.</p>
<p>Sergey likes to collect fallen leaves in autumn. In his city, he can find fallen leaves of maple, oak and poplar. These leaves can be of three different colors: green, yellow or red.</p>
<p>Sergey has collected some leaves of each type and color. Now he wants to create the biggest <i>nice</i> bouquet from them. He considers the bouquet <i>nice</i> iff all the leaves in it are either from the same type of tree or of the same color (or both). Moreover, he doesn't want to create a bouquet with even number of leaves in it, since this kind of bouquets are considered to attract bad luck. However, if it's impossible to make any nice bouquet, he won't do anything, thus, obtaining a bouquet with zero leaves.</p>
<p>Please help Sergey to find the maximal number of leaves he can have in a <i>nice</i> bouquet, which satisfies all the above mentioned requirements.</p>
<p>Please note that Sergey <i>doesn't have to</i> use all the leaves of the same color or of the same type. For example, if he has <b>20</b> maple leaves, he can still create a bouquet of <b>19</b> leaves.</p>

<h3>Input</h3>
<p>IThe first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows."</p>
<p>The first line of each test case contains three space-separated integers <b>M<sub>G</sub> M<sub>Y</sub> M<sub>R</sub></b> denoting the number of green, yellow and red maple leaves respectively.</p>
<p>The second line contains three space-separated integers <b>O<sub>G</sub> O<sub>Y</sub> O<sub>R</sub></b> denoting the number of green, yellow and red oak leaves respectively.</p>
<p>The third line of each test case contains three space-separated integers <b>P<sub>G</sub> P<sub>Y</sub> P<sub>R</sub></b> denoting the number of green, yellow and red poplar leaves respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the maximal amount of flowers in <i>nice</i> bouquet, satisfying all conditions or <b>0</b> if it's impossible to create any bouquet, satisfying the conditions.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li>Subtask 1 (50 points): <b>0 ≤ M<sub>G</sub>, M<sub>Y</sub>, M<sub>R</sub>, O<sub>G</sub>, O<sub>Y</sub>, O<sub>R</sub>, P<sub>G</sub>, P<sub>Y</sub>, P<sub>R</sub> ≤ 5</b></li>
<li>Subtask 2 (50 points): <b>0 ≤ M<sub>G</sub>, M<sub>Y</sub>, M<sub>R</sub>, O<sub>G</sub>, O<sub>Y</sub>, O<sub>R</sub>, P<sub>G</sub>, P<sub>Y</sub>, P<sub>R</sub> ≤ 10<sup>9</sup></b></li>

</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
1 2 3
3 2 1
1 3 4</tt>

<b>Output:</b>
<tt>7</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> We can create a bouquet with <b>7</b> leaves, for example, by collecting all yellow leaves. This is not the only way to create the nice bouquet with <b>7</b> leaves (for example, Sergey can use all but one red leaves), but it is impossible to create a nice bouquet with more than <b>7</b> leaves.</p>