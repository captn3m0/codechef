---
{"category_name":"school","problem_code":"TEMPLELA","problem_name":"Temple Land","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"19-05-2017","tags":{"0":"admin3"},"editorial_url":"https://discuss.codechef.com/problems/TEMPLELA","time":{"view_start_date":1495625400,"submit_start_date":1495625400,"visible_start_date":1495625400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/mandarin/TEMPLELA.pdf">Mandarin Chinese</a>,<a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/russian/TEMPLELA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/vietnamese/TEMPLELA.pdf">Vietnamese</a> as well.</h3>

<p>The snakes want to build a temple for Lord Cobra. There are multiple strips of land that they are looking at, but not all of them are suitable. They need the strip of land to resemble a coiled Cobra. You need to find out which strips do so.</p>

<p>Formally, every strip of land, has a length. Suppose the length of the i-th strip is is <b>N<sub>i</sub></b>, then there will be <b>N<sub>i</sub></b> integers, <b>H<sub>i1</sub>, H<sub>i2</sub>, .. H<sub>iN<sub>i</sub></sub></b>, which represent the heights of the ground at various parts of the strip, in sequential order. That is, the strip has been divided into <b>N<sub>i</sub></b> parts and the height of each part is given. This strip is valid, if and only if all these conditions are satisfied:</p>

<ul>
<li>There should be an unique 'centre' part. This is where the actual temple will be built. By centre, we mean that there should be an equal number of parts to the left of this part, and to the right of this part.</li>
<li><b>H<sub>i1</sub></b> = 1</li>
<li>The heights keep increasing by exactly 1, as you move from the leftmost part, to the centre part.</li>
<li>The heights should keep decreasing by exactly 1, as you move from the centre part to the rightmost part. Note that this means that <b>H<sub>iN<sub>i</sub><sub></b> should also be 1.</li>
</ul>

<p>Your job is to look at every strip and find if it's valid or not.</p>


<h3>Input</h3>

<ul>
<li>The first line contains a single integer, <b>S</b>, which is the number of strips you need to look at. The description of each of the <b>S</b> strips follows</li>
<li>The first line of the i-th strip's description will contain a single integer: <b>N<sub>i</sub></b>, which is the length and number of parts into which it has been divided.</li>
<li>The next line contains <b>N<sub>i</sub></b> integers: <b>H<sub>i1</sub>, H<sub>i2</sub>, .., H<sub>iN<sub>i</sub></sub></b>. These represent the heights of the various parts in the i-th strip.</p>
</ul>


<h3>Output</h3>
<ul>
<li>For each strip, in a new line, output "yes" if is a valid strip, and "no", if it isn't.</li>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>S</b> ≤ 100 </li>
<li>3 ≤ <b>N<sub>i</sub></b> ≤ 100 </li>
<li>1 ≤ <b>H<sub>ij</sub></b> ≤ 100 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
7
5
1 2 3 2 1
7
2 3 4 5 4 3 2
5
1 2 3 4 3
5
1 3 5 3 1
7
1 2 3 4 3 2 1
4
1 2 3 2
4
1 2 2 1

<b>Output:</b>
yes
no
no
no
yes
no
no
</pre>

<h3>Explanation</h3>
<p>In the first strip, all the conditions are satisfied, hence it is valid.</p>
<p>In the second strip, it does not start with a 1, and hence is invalid.</p>
<p>In the third strip, it keeps increasing even past the centre, instead of decreasing. Hence invalid.</p>
<p>The fourth strip does not increase and decrease by exactly 1. Hence invalid.</p>
<p>The fifth satisfies all conditions and hence is valid.</p>
<p>The sixth and seventh strip do not have a 'centre' part. Because for every part, there are either more parts to its right than its left, or more parts on its left than its right. Hence both the strips are invalid. </p>