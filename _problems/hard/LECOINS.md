---
{"category_name":"hard","problem_code":"LECOINS","problem_name":"Little Elephant and Colored Coins","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"21-03-2012","tags":{"0":"dynamic","1":"hard","2":"march13","3":"shortest","4":"simple","5":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LECOINS","time":{"view_start_date":1363000587,"submit_start_date":1363000587,"visible_start_date":1363000281,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Little Elephant from the Zoo of Lviv very likes coins. But most of all he likes colored coins.</p>

<p>He has <b>N</b> types of coins, numbered from <b>1</b> to <b>N</b>, inclusive. The coin of the <b>i</b>-th type has the value <b>V<sub>i</sub></b> dollars and the color <b>C<sub>i</sub></b>. Note that he has infinite supply of each type of coins.</p>

<p>The Little Elephant wants to make exactly <b>S</b> dollars using the coins. What is the maximal number of different colors he can use to make exactly <b>S</b> dollars using some of the coins he has? If it's impossible, output <b>-1</b>. Also note that the Little Elephant wants to know this for many values of <b>S</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>, denoting the number of types of coins. Each of the following <b>N</b> lines contains two space-separated integers <b>V<sub>i</sub></b> and <b>C<sub>i</sub></b>, denoting the value and the color of the coin of the <b>i</b>-th type. The next line contains a single integer <b>Q</b>, denoting the number of values of <b>S</b> to process. Each of the following <b>Q</b> lines contains a single integer <b>S</b>, denoting the coinage you should represent via given coins using maximum number of colors.</p>

<h3>Output</h3>
<p>For each value of <b>S</b> in the input, output the maximum number of different colors in the representation of <b>S</b> or <b>-1</b> if it is impossible to represent <b>S</b> via given coins.</p>

<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10<sup>18</sup></b></li>
</ul></p>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
3 4
4 4
4
1
3
5
7

<b>Output:</b>
-1
1
2
2
</pre>

<h3>Explanation</h3>
<p><ul><li>It is not possible to represent <b>S = 1</b> since every coin has value more than 1.</li>
<li><b>S = 3</b> can only be represented using one coin of the second type, hence only one color is used in the representation.</li>
<li><b>S = 5</b> can only be represented as <b>2 + 3</b>, which leads to two colors used.</li>
<li>For <b>S = 7</b> we have two representations as <b>2 + 2 + 3</b> (with two colors used) and <b>3 + 4</b> (with one color used). Hence, the answer is 2.</li></ul></p>