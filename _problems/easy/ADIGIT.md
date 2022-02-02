---
{"category_name":"easy","problem_code":"ADIGIT","problem_name":"Chef and Digits","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shiplu","date_added":"20-02-2014","tags":{"0":"ad","1":"april14","2":"berezin","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/ADIGIT","time":{"view_start_date":1397467741,"submit_start_date":1397467741,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/ADIGIT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/ADIGIT.pdf">Russian</a>.</h3>
<p> </p>
<p> Yesterday Chef had a great party and doesn't remember the way he celebreated it. But he found a strange paper in his kitchen containing <b>n</b> digits (lets give them indices from <b>1</b> to <b>n</b> and name them <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b> ... <b>a<sub>N</sub></b>). </p>
<p> Chef remembers that he played such game:</p>
<ul>
<li> On each step he choose an index <b>x</b> from <b>1</b> to <b>n</b>.</li>
<li> For all indices <b>y (y &lt; x)</b> he calculated the difference <b>b<sub>y</sub></b> = <b>a<sub>x</sub></b> - <b>a<sub>y</sub></b>. </li>
<li> Then he calculated <b>B1</b> - sum of all <b>b<sub>y</sub></b> which are greater than <b>0</b> and <b>B2</b> - sum of all <b>b<sub>y</sub></b> which are less than <b>0</b>. </li>
<li> The answer for this step is <b>B1 - B2</b>. </li>
</ul>
<p>Chef remembers the game, but forgot the answer. Please, help him!</p>
<h3>Input</h3>
<ul>
<li>The first line contains two integers <b>n, m</b> denoting the number of digits and number of steps. The second line contains <b>n</b> digits (without spaces) <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b>. </li>
<li> Each of next <b>m</b> lines contains single integer <b>x</b> denoting the index for current step. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each of <b>m</b> steps print single number in a line - answer of the step.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub></b> ≤ <b>9</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10 3
0324152397
1
4
7

<b>Output:</b>
0
7
9

</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>For index <b>1</b> there are no indexes which are less, so <b>B1 = B2 = 0</b> and the answer is <b>0</b>.</p>
<p>For index <b>4</b> we have 

<b>b<sub>1</sub> = 4-0=4</b>, 
<b>b<sub>2</sub> = 4-3=1</b>, 
<b>b<sub>3</sub> = 4-2=2</b>, 

so <b>B1 = 4+1+2 = 7</b>, <b>B2 = 0 </b>
and the answer is <b>7</b>.</p>
<p>For index <b>7</b> we have

<b>b<sub>1</sub> = 2-0=2</b>, 
<b>b<sub>2</sub> = 2-3=-1</b>, 
<b>b<sub>3</sub> = 2-2=0</b>, 
<b>b<sub>4</sub> = 2-4=-2</b>, 
<b>b<sub>5</sub> = 2-1=1</b>, 
<b>b<sub>6</sub> = 2-5=-3</b>, 

so <b>B1 = 2 + 1 = 3</b>,
     <b>B2 = -1 -2 -3 = -6</b> 
and the answer is <b>9</b>.</p>
</pre>