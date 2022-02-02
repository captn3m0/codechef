---
{"category_name":"hard","problem_code":"CIELQUAK","problem_name":"Ciel and Earthquake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"2-02-2012","tags":{"0":"hard","1":"laycurse","2":"march12"},"editorial_url":"http://discuss.codechef.com/problems/CIELQUAK","time":{"view_start_date":1331461012,"submit_start_date":1331461012,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The country in which Chef Ciel lives has many earthquakes.
Since Ciel's restaurant is far away from an evacuation center, Ciel is afraid of earthquakes.
So, Ciel would like to know the probability that Ciel can reach from Ciel's restaurant to the evacuation center when an earthquake occurs.
Your task is calculating the probability under the following assumptions.
</p>

<p>
Ciel's city has <strong>R</strong>*<strong>C</strong> junctions (<strong>i</strong>, <strong>j</strong>) for 1 ≤ <strong>i</strong> ≤ <strong>R</strong>, 1 ≤ <strong>j</strong> ≤ <strong>C</strong>.
There is a two-way road between the junctions (<strong>r</strong><sub>1</sub>, <strong>c</strong><sub>1</sub>) and (<strong>r</strong><sub>2</sub>, <strong>c</strong><sub>2</sub>) if and only if |<strong>r</strong><sub>1</sub> - <strong>r</strong><sub>2</sub>| + |<strong>c</strong><sub>1</sub> - <strong>c</strong><sub>2</sub>| = 1.
When an earthquake occurs, each road is destroyed with probability <strong>p</strong>, and these events are statistically independent of each other.
Ciel's restaurant is in the junction (1, 1), and the evacuation center is in the junction (<strong>R</strong>, <strong>C</strong>).
Ciel only considers a big earthquake, so you can assume that <strong>p</strong> is not less than 0.1.
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
Each test case has 3 numbers <strong>R</strong>, <strong>C</strong> and <strong>p</strong>, where <strong>R</strong> and <strong>C</strong> are integers.
</p>

<h3>Output</h3>
<p>
For each test case output the required probability.
Your answer must have an absolute error no more than 0.000001 (10<sup>-6</sup>).
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 50<br />
1 ≤ <strong>R</strong> ≤ 8<br />
1 ≤ <strong>C</strong> ≤ 1000000000000000000 (10<sup>18</sup>)<br />
0.1 ≤ <strong>p</strong> ≤ 1<br />
<strong>p</strong> has at most four digits after the decimal point.<br />
</p>

<h3>Sample Input</h3>
<pre>5
2 2 0.5
3 2 0.7
2 3 0.7
1 1 0.2
7 7 0.8</pre>

<h3>Sample Output</h3>
<pre>0.4375
0.0768204
0.0768204
1
0.000003962379607</pre>