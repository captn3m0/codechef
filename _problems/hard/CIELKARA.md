---
{"category_name":"hard","problem_code":"CIELKARA","problem_name":"Ciel and Karaoke","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.013,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"2-01-2013","tags":{"0":"cook30","1":"laycurse","2":"math","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CIELKARA","time":{"view_start_date":1358709987,"submit_start_date":1358709987,"visible_start_date":1358709858,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You need to find the distance from the given piecewise-constant function to the set of all functions, satisfying Lipschitz condition with the constant <b>K</b>, in the space <b>L<sup>1</sup>(−∞, +∞)</b>. If you understand nothing here then read the problem statement below :P</p>
<p>Chef Ciel and her friends go to <i>karaoke</i> after the New Year's party. In karaoke, they sing songs, and moreover, recent karaoke machines can score their performance. To get a high score, one of the most important things is to sing with correct pitches.</p>
<p>The correct pitch at time <b>t</b> for some song is represented as <b>f(t)</b>, where <b>f(t)</b> is a piecewise-constant function. In this problem, let us consider the infinitely long time <b>−∞</b> &lt; <b>t</b> &lt; <b>+∞</b> for simplicity. Let <b>N−1</b> integers <b>A<sub>1</sub></b> &lt; <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>N−1</sub></b> denote the time moments when the correct pitch is changed. That is,</p>
<ul>
<li><b>f(t)</b> = <b>B<sub>0</sub></b>, for <b>−∞</b> &lt; <b>t</b> &lt; <b>A<sub>1</sub></b>,</li>
<li><b>f(t)</b> = <b>B<sub>k</sub></b>, for <b>A<sub>k</sub></b> ≤ <b>t</b> &lt; <b>A<sub>k+1</sub></b> (<b>1</b> ≤ <b>k</b> ≤ <b>N−2</b>),</li>
<li><b>f(t)</b> = <b>B<sub>N−1</sub></b>, for <b>A<sub>N−1</sub></b> ≤ <b>t</b> &lt; <b>+∞</b>.</li></ul>
<p>On the other hand, Ciel cannot change her pitch instantly. So Ciel's pitch <b>g(t)</b> must satisfy the condition <b>|g(x) − g(y)| ≤ K |x − y|</b> for all real <b>x</b> and <b>y</b>. In particular <b>g(t)</b> is a continuous function and <b>|g'(t)|</b> ≤ <b>K</b> for all <b>t</b> where <b>g'(t)</b> exists (<b>g'(t)</b> denotes the derivative of <b>g(t)</b>).</p>
<p>The score assigned to Ciel by the karaoke machine is the value of the integral of <b>|f(t) − g(t)|</b> over the interval <b>(−∞, +∞</b>). Your task is to calculate the minimum value of this integral over all possible functions <b>g(t)</b> that satisfy the above condition.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of exactly 3 lines. The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>. The second line contains <b>N−1</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N−1</sub></b>. Finally, the third line contains <b>N</b> space separated integers <b>B<sub>0</sub>, B<sub>1</sub>, ..., B<sub>N−1</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum value of the integral mentioned in the problem statement. The output must have an absolute or relative error at most <b>0.000001 (10<sup>−6</sup>)</b>. Please, note that your output should not have more than <b>1000</b> digits after the decimal point, otherwise you may (or may not) get <i>wrong answer</i> or <i>runtime error (SIGXFSZ)</i>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>250</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>8</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>4</b></li>
<li><b>0</b> ≤ <b>A<sub>1</sub></b> &lt; <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>N−1</sub></b> ≤ <b>20130120</b></li>
<li><b>0</b> ≤ <b>B<sub>0</sub></b>, <b>B<sub>1</sub></b>, ..., <b>B<sub>N−1</sub></b> ≤ <b>20130120</b></li>
<li>It can occur that <b>B<sub>i−1</sub></b> = <b>B<sub>i</sub></b> for some <b>i = 1, 2, ..., N−1</b></li>
<li>The sum of <b>N<sup>3</sup></b> in one test file does not exceed <b>2013</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
1000
900 1000
2 2
1000
900 1000
3 1
500 1200
20 60 30

<b>Output:</b>
2500.0000000000
1250.0000000000
625.0000000000
</pre><h3>Explanation</h3>
<p>The following figure corresponds to the example case 1. Here the bold red line denotes the correct pitch <b>f(t)</b> and the blue line denotes the optimal Ciel's pitch <b>g(t)</b>. The answer is the area of the green region.</p>
<p><img src="http://www.codechef.com/download/CIELKARA.png" width="289" height="258" /></p>
