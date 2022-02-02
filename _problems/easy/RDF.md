---
{"category_name":"easy","problem_code":"RDF","problem_name":"Random decreasing function","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"anton_lunyov","date_added":"7-08-2012","tags":{"0":"Rubanenko","1":"dynamic","2":"easy","3":"expectation","4":"march13"},"editorial_url":"http://discuss.codechef.com/problems/RDF","time":{"view_start_date":1363000209,"submit_start_date":1363000209,"visible_start_date":1363000099,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Andriy and Serhiy are little students from the Lyceum of Kremenchuk. Yesterday there was a great party in the city - Chef's birthday. There were a lot of famous programmers at the party and, of course, everybody gave a gift to Chef. Andriy and Serhiy also didn't come empty-handed. Andriy gave Chef two integer numbers <b>N</b> and <b>K</b>. Serhiy was more inventive and gave Chef a strange function called "Random-Decreasing-Function", or "<b>RDF</b>" abbreviated. The function has the following form:</p>
<p><pre><code>RDF(N, K)
    <b>for</b> i = 1 <b>to</b> K
        <b>do</b> N = random(N)
    <b>return</b> N</code></pre></p><p></p>
<p>In above language function <b>random(N)</b> returns any integer in the range <b>[0, N)</b> with equal probability. Let's consider that <b>random(0) = 0</b>. Chef likes both gifts very much and he plays with them every day, let alone that he forgot about his restaurant. Chef runs this function plenty times a day. The only trouble is that results are too unexpected for Chef. Now he asks you to find the expected result of <b>RDF(N, K)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the expected result of <b>RDF(N, K)</b>. Your answer will be considered as correct if it has an absolute or relative error less than <b>10<sup>&minus;6</sup></b>. More formally if the expected output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if<br/><b>|A &minus; B| &le; 10<sup>&minus;6</sup> * max{|A|, |B|, 1}</b>.</br/></p>
<h3>Constrains</h3>
<p>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>500000</b> (<b>5 * 10<sup>5</sup></b>)</li>
<li><b>1</b> &le; <b>N</b> &lt; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>0</b> &le; <b>K</b> &lt; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
6 1
4 2
4 3

<b>Output:</b>
2.5
0.3750
0.0416667
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>RDF(6, 1)</b> returns each of the numbers <b>0, 1, 2, 3, 4, 5</b> with probability <b>1/6</b>. Hence the expected value is<br/> <b>(0 + 1 + 2 + 3 + 4 + 5) / 6 = 2.5</b>.</br/></p>
<p><b>Example case 2.</b> Value of <b>N</b> when <b>RDF(4, 2)</b> is called may change by one of the following scenarios:</p>
<ul>
<li><b>4 &rarr; 0 &rarr; 0</b> with probability <b>1/4</b>.</li>
<li><b>4 &rarr; 1 &rarr; 0</b> with probability <b>1/4</b>.</li>
<li><b>4 &rarr; 2 &rarr; 0</b> with probability <b>1/8</b>.</li>
<li><b>4 &rarr; 2 &rarr; 1</b> with probability <b>1/8</b>.</li>
<li><b>4 &rarr; 3 &rarr; 0</b> with probability <b>1/12</b>.</li>
<li><b>4 &rarr; 3 &rarr; 1</b> with probability <b>1/12</b>.</li>
<li><b>4 &rarr; 3 &rarr; 2</b> with probability <b>1/12</b>.</li>
</ul>
<p>Hence the expected value is<br/> <b>0 * 1/4 + 0 * 1/4 + 0 * 1/8 + 1 * 1/8 + 0 * 1/12 + 1 * 1/12 + 2 * 1/12 = 1/8 + 1/12 + 1/6 = 3/8 = 0.375</b>.</br/></p>
<p><b>Example case 3.</b> You should figure it out by yourself.</p>
